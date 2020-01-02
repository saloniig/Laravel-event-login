<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$IPZgxDR8t7DgtfwlcDSzkO3/2bGLnBRYc3u6hmihWrihFrnd7PNGG',
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
