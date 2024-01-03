<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \DB::table('users')->insert([
            'name' => 'Administrator',
            'email' => 'admin@kitacoding.my.id',
            'password' => \Hash::make('JTS2024'),
            'is_admin' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        \DB::table('users')->insert([
            'name' => 'Andaru Triadi',
            'email' => 'andarutr@gmail.com',
            'password' => \Hash::make('JTS2024'),
            'is_admin' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
