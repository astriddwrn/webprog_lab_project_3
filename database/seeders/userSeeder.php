<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'id'=>1,
                'name'=>'Admin',
                'email'=>'admin@gmail.com',
                'password'=>Hash::make('admin12345'),
                'gender'=>'Female',
                'date_of_birth'=>date('01-01-2002'),
                'country'=>'indonesia',
                'role_as'=>1
            ],
            [
                'id'=>1,
                'name'=>'Userr',
                'email'=>'user@gmail.com',
                'password'=>Hash::make('user12345'),
                'gender'=>'Female',
                'date_of_birth'=>date('01-01-2002'),
                'country'=>'indonesia',
                'role_as'=>0
            ],
        ];

        foreach($users as $user){
            User::create($user);
        }
    }
}