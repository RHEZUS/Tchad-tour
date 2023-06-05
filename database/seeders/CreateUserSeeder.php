<?php

namespace Database\Seeders;

use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name'=>'user',
                'email'=>'user@gmail.com',
                'password'=>bcrypt('Demo1234'),
                'role'=>0
            ],
            [
                'name'=>'editor',
                'email'=>'edtitor@gmail.com',
                'password'=>bcrypt('Demo1234'),
                'role'=>1
            ],
            [
                'name'=>'admin',
                'email'=>'admin@gmail.com',
                'password'=>bcrypt('Demo1234'),
                'role'=>2
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
