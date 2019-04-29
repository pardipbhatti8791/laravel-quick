<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [[
            'id'             => 1,
            'name'           => 'Admin',
            'email'          => 'admin@admin.com',
            'password'       => '$2y$10$v8z46yMaXBq2kPAujRajwuD2XfRVcCUNXk8fcefFH6Nb0FcVJCfca',
            'remember_token' => null,
            'created_at'     => '2019-04-29 05:41:23',
            'updated_at'     => '2019-04-29 05:41:23',
            'deleted_at'     => null,
        ]];

        User::insert($users);
    }
}
