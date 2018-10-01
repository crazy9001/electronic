<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        DB::table('roles')->truncate();
        DB::table('role_users')->truncate();
        DB::table('activations')->truncate();
        DB::table('persistences')->truncate();
        DB::table('throttle')->truncate();
        $role = [
            'name' => 'Super Admin',
            'slug' => 'super-admin',
            'permissions' => [
                'dashboard.index' => true
            ]
        ];
        $adminRole = Sentinel::getRoleRepository()->createModel()->fill($role)->save();
        $admin = [
            'username'  =>  'admin',
            'email'    => 'admin@electronic.com',
            'password' => '123456',
            'full_name' =>  'Super Admin'
        ];
        $adminUser = Sentinel::registerAndActivate($admin);
        $adminUser->roles()->attach($adminRole);
    }
}
