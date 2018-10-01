@extends('bases::layouts.base')

@section ('page')

    <div class="single-container login-screen animated fadeInDown">
        <section class="sign-widget">
            <header>
                <h4>{{ trans('auth::auth.login.form.title') }}</h4>
            </header>
            <div class="body">
                @yield('content')
            </div>
            {{--<footer>
                <div class="twitter-login">
                    <a href="index.html">
                        <span>
                            <i class="fa fa-twitter"></i><span class="l-mar-5">Log in with Twitter</span>
                        </span>
                    </a>
                </div>
                <div class="facebook-login">
                    <a href="index.html">
                        <span>
                            <i class="fa fa-facebook-official"></i><span class="l-mar-5">Log in with Facebook</span>
                        </span>
                    </a>
                </div>
            </footer>--}}
        </section>
    </div>

@stop