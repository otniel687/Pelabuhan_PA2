<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'username' => 'admin',
               'name'=>'ini akun Admin',
               'email'=>'admin@example.com',
                'level'=>'admin',
               'password'=> bcrypt('123456'),
               'Remember_token' => Str::random(60)
            ],
            [
                'username' => 'user',
               'name'=>'ini akun petugas (non admin)',
               'email'=>'user@example.com',
                'level'=>'petugas',
               'password'=> bcrypt('123456'),
               'Remember_token' => Str::random(60)
            ],
            [
                'username' => 'petugas1',
               'name'=>'ini akun petugas (non admin)',
               'email'=>'petugas1@example.com',
                'level'=>'petugas',
               'password'=> bcrypt('123456'),
               'Remember_token' => Str::random(60)
            ],
            [
                'username' => 'petugas2',
               'name'=>'ini akun petugas (non admin)',
               'email'=>'petugas2@example.com',
                'level'=>'petugas',
               'password'=> bcrypt('123456'),
               'Remember_token' => Str::random(60)
            ],
            [
                'username' => 'petugas3',
               'name'=>'ini akun Customer (non admin)',
               'email'=>'petugas3@example.com',
                'level'=>'petugas',
               'password'=> bcrypt('123456'),
               'Remember_token' => Str::random(60)
            ],
            [
                'username' => 'petugas4',
               'name'=>'ini akun petugas (non admin)',
               'email'=>'petugas4@example.com',
                'level'=>'petugas',
               'password'=> bcrypt('123456'),
               'Remember_token' => Str::random(60)
            ],
            [
                'username' => 'petugas5',
               'name'=>'ini akun Customer (non admin)',
               'email'=>'petugas5@example.com',
                'level'=>'petugas',
               'password'=> bcrypt('123456'),
               'Remember_token' => Str::random(60)
            ],
            [
                'username' => 'otniel',
               'name'=>'ini akun Customer (non admin)',
               'email'=>'otniel@example.com',
                'level'=>'pelanggan',
               'password'=> bcrypt('123456'),
               'Remember_token' => Str::random(60),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
