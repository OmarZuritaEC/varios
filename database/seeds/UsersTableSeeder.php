<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'                 => 1,
                'name'               => 'Admin',
                'email'              => 'admin@admin.com',
                'password'           => '$2y$10$yIcJZAlmbz6KVaYPrxTkt.hpCTxD3UsB0R3UTQo6JGA.32QHJqBJ2',
                'remember_token'     => null,
                'approved'           => 1,
                'verified'           => 1,
                'verified_at'        => '2019-10-24 22:08:10',
                'verification_token' => '',
            ],
        ];

        User::insert($users);
    }
}
