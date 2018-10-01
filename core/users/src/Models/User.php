<?php
/**
 * Created by PhpStorm.
 * User: PC01
 * Date: 10/2/2018
 * Time: 12:12 AM
 */

namespace Electronic\Users\Models;

use Cartalyst\Sentinel\Users\EloquentUser as EloquentUser;

class User extends EloquentUser
{
    protected $table = 'users';

    protected $fillable = [
        'email',
        'username',
        'password',
        'full_name',
        'permissions',
        'phone'
    ];
    protected $loginNames = ['username'];
}