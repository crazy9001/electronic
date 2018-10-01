<?php
/**
 * Created by PhpStorm.
 * User: PC01
 * Date: 10/1/2018
 * Time: 10:54 PM
 */

namespace Electronic\Auth\Http\Controllers;

use App\Http\Controllers\Controller;
use Assets;
use Electronic\Auth\Http\Requests\LoginRequest;
use Sentinel;
use Electronic\Users\Repositories\Interfaces\UsersInterface;

class AuthController extends Controller
{
    protected $userRepository;

    public function __construct(UsersInterface $userRepository )
    {
        $this->userRepository = $userRepository;
    }

    public function getLogin()
    {
        Assets::removeJavascript(['demo-dashboard']);
        Assets::addStylesheets(['login']);
        return view('auth::auth.login');
    }

    public function postLogin(LoginRequest $request)
    {
        try {
            $credentials = [
                'username' => $request->input('username'),
                'password' => $request->input('password'),
            ];
            $remember = $request->input('remember') == 1 ? true : false;
            try {
                if (Sentinel::authenticate($credentials, $remember)) {
                    if (Sentinel::check()) {
                        if (!session()->has('url.intended')) {
                            session()->flash('url.intended', url()->current());
                        }
                        $this->userRepository->setUserDetailInSession();
                        return redirect()->intended()->with('success_msg', trans('auth::auth.login.success'));
                    }
                }
            } catch (ThrottlingException $e) {
                return redirect()->route('access.login')->with('error_msg', $e->getMessage())->withInput();
            }
            return redirect()->route('access.login')->with('error_msg', trans('auth::auth.login.fail'))->withInput();
        } catch (NotActivatedException $e) {
            return redirect()->route('access.login')->with('error_msg', trans('auth::auth.login.not_active'))->withInput();
        }
    }
}