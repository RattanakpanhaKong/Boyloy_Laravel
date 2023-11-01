<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'panha',
            'email' => 'panha@email.com',
            'password' => '123',
            'role' => 'admin',
        ]);
        User::factory()->create(
            [
                'name' => 'Rattanak',
                'email' => 'rattanak@email.com',
                'password' => '123',
                'role' => 'user',
        ]);
    }
}
