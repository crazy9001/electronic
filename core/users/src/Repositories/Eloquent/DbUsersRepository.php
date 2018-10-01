<?php
/**
 * Created by PhpStorm.
 * User: PC01
 * Date: 10/2/2018
 * Time: 12:16 AM
 */

namespace Electronic\Users\Repositories\Eloquent;


use Electronic\Users\Repositories\Interfaces\UsersInterface;
use Electronic\Base\Repositories\Eloquent\RepositoriesAbstract;
use Sentinel;
use DB;
use Session;

class DbUsersRepository extends RepositoriesAbstract implements UsersInterface
{
    /**
     * This function will be used to user Details in  session.
     *
     * @param void
     * @return void
     */
    public function setUserDetailInSession()
    {
        //By default it will provide with the logged in user detail
        $userDetail = $this->getUserDetail();
        if (!empty($userDetail->roles)) {
            $userDetail->roles = explode(',', $userDetail->roles);
        }
        Session::put('userDetail', $userDetail);
    }

    /**
     * This function will be used to get user details.
     *
     * @param int $userId
     * @return array $userDetail
     */
    public function getUserDetail($userId = 0)
    {
        if (!$userId) {
            $userId = Sentinel::getUser()->id;
        }
        $userDetail = DB::table('users')
            ->leftJoin('role_users as usrRoles', 'usrRoles.user_id', '=', 'users.id')
            ->leftJoin('roles', 'roles.id', '=', 'usrRoles.role_id')
            ->select('users.email', 'users.last_login', DB::raw('group_concat(distinct roles.slug) as roles'), 'roles.id as role_id', 'users.full_name')
            ->where('users.id', $userId)
            ->groupBy('users.id')
            ->first();
        return $userDetail;
    }
}