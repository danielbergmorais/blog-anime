<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'id' => 1,
            'name' => 'Daniel Berg',
            'email' => 'daniel@berg.com',
            'admin' => 1,
            'password' => Hash::make('daniel@dev#2024')
        ]);
        User::factory()->create([
            'id' => 2,
            'name' => 'User Author',
            'email' => 'teste@teste.com',
            'admin' => 0,
            'password' => Hash::make('quero@testar#2024')
        ]);
    }
}
