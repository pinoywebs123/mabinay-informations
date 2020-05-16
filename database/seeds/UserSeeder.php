<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\DB;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
        	'name'		=> 'admin123',
        	'email'			=> 'admin@yahoo.com',
        	'password'		=>	bcrypt('admin123'),
            'status_id'     => 1,
        ]);

        DB::table('role_user')->insert([
            'role_id'       => 1,
            'user_id'       => $admin->id
        ]);

        $user = User::create([
        	'name'		=> 'user123',
        	'email'			=> 'user@yahoo.com',
        	'password'		=>	bcrypt('user123'),
            'status_id'     => 1,
        ]);

         DB::table('role_user')->insert([
            'role_id'       => 2,
            'user_id'       => $user->id
        ]);
    }
}
