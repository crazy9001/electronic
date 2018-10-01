@extends('auth::auth.master')

@section('content')

    {!! Form::open(['route' => 'access.login', 'class' => 'no-margin', 'id' => 'LoginForm']) !!}
        <fieldset>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-user-o"></i>
                    </span>
                <input name="username" class="form-control" placeholder="{{  trans('auth::auth.login.placeholder.username') }}" autocomplete="off">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-unlock"></i>
                    </span>
                    {!! Form::input('password', 'password', '', ['id' => 'password', 'class' => 'form-control', 'placeholder' => trans('auth::auth.login.placeholder.password'), 'autocomplete' =>'off']) !!}
                </div>
            </div>
            @include('errors.errorlist')
        </fieldset>
        <div class="form-actions">
            <button class="btn btn-block btn-primary" type="submit">
                <span class="fa-icon-circle">
                    <i class="fa fa-sign-in"></i>
                </span>
                <small class="l-mar-5">{{ trans('auth::auth.login.form.button_login') }}</small>
            </button>
            <a href="#" class="forgot">{{ trans('auth::auth.login.form.forgot_password') }}</a>

        </div>
    {!! Form::close() !!}

@stop