<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->truncate();
        DB::table('users')->insert(array (
  0 => 
  array (
    'id' => 1,
    'name' => 'Administrator',
    'email' => 'admin@kitacoding.my.id',
    'password' => '$2y$12$vJVTqjjtzcHmx.4fMfQANucOV7fdCXp1RsCkszFz7I.EiQnyCJkzq',
    'picture' => 'user.jpg',
    'is_admin' => 1,
    'created_at' => '2024-01-07 06:31:52',
    'updated_at' => '2024-01-07 06:31:52',
  ),
  1 => 
  array (
    'id' => 2,
    'name' => 'Andaru Triadi',
    'email' => 'andarutr@gmail.com',
    'password' => '$2y$12$vJVTqjjtzcHmx.4fMfQANucOV7fdCXp1RsCkszFz7I.EiQnyCJkzq',
    'picture' => 'andarutr.png',
    'is_admin' => 0,
    'created_at' => '2024-01-07 06:31:52',
    'updated_at' => '2024-01-07 09:23:00',
  ),
));
    }
}
