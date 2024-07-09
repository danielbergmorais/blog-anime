<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory()->create([
            'name' => 'Daniel Berg',
            'email' => 'daniel@berg.com',
            'admin' => 1
        ]);
        /*$this->call([
            CategorySeeder::class,
            PostSeeder::class,
        ]);*/
    }
}
