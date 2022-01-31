<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Hash;
use App\Models\Role;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin =Role::where('name','admin')->first();
        $role_user =Role::where('name', 'user')->first();

        $admin = new User();
        $admin->name ='Dani Rojas';
        $admin->email = 'Danirojas@gmail.ie';
        $admin->password = Hash::make('password');
        $admin->save();
        $admin->roles()->attach($role_admin);

        $user = new User();
        $user->name = 'Carlos Montero';
        $user->email ='carlosmontero@gmail.com';
        $user->password = Hash::make('password');
        $user->save();
        $user->roles()->attach($role_user);


        
    }
}
