<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class TestUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    User::factory()->create([
    'name' => 'Jose Carlos torres',
    'email' => 'jktorres@gmail.com',
    'password' => bcrypt('password'),
]);
    }
}
