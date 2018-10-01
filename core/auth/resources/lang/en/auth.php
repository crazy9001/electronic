<?php
/**
 * Created by PhpStorm.
 * User: PC01
 * Date: 10/1/2018
 * Time: 11:16 PM
 */
return [
    'login' =>  [
        'placeholder'   =>  [
            'username'  =>  'Enter your username',
            'password'  =>  'Enter your password'
        ],
        'form'  =>  [
            'title' =>  'Login',
            'button_login'  =>  'Login',
            'forgot_password'   =>  'Forgot Password?'
        ],
        'success' => 'Login successfully!',
        'fail' => 'Wrong username or password.',
        'not_active' => 'Your account has not been activated yet!',
        'banned' => 'This account is banned.',
    ],
    'validate'  => [
        'username'  =>  [
            'required'  =>  'Please enter your account'
        ],
        'password'  =>  [
            'required'  =>  'Please enter your password'
        ]
    ]
];