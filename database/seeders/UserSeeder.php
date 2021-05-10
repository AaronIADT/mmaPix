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
        $role_admin = Role::where('name', 'admin')->first();
        $role_user = Role::where('name', 'user')->first();

        $admin = new User();
        $admin->name = 'Aaron Lynch';
        $admin->email = 'admin@mmapix.ie';
        $admin->password = Hash::make('secret');
        $admin->save();
        $admin->roles()->attach($role_admin);

        $admin = new User();
        $admin->name = 'Oscar Hancock';
        $admin->email = 'oscar@mmapix.ie';
        $admin->password = Hash::make('secret');
        $admin->save();
        $admin->roles()->attach($role_admin);

        $user = new User();
        $user->name = 'Joe Bloggs';
        $user->email = 'user@mmapix.ie';
        $user->password = Hash::make('secret');
        $user->save();
        $user->roles()->attach($role_user);

        $user = new User();
        $user->name = 'Sophie Egan';
        $user->email = 'sophie@mmapix.ie';
        $user->password = Hash::make('secret');
        $user->save();
        $user->roles()->attach($role_user);

        $user = new User();
        $user->name = 'Cian O Reilly';
        $user->email = 'cian@mmapix.ie';
        $user->password = Hash::make('secret');
        $user->save();
        $user->roles()->attach($role_user);

    }
}
