<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'id' => 1,
                'name' => $name = 'Animes',
                'slug' => Str::slug($name),
                'active' => 1,
            ],
            [
                'id' => 2,
                'name' => $name = 'Jogos',
                'slug' => Str::slug($name),
                'active' => 1,
            ],
            [
                'id' => 3,
                'name' => $name = 'Filmes',
                'slug' => Str::slug($name),
                'active' => 1,
            ],
            [
                'id' => 4,
                'name' => $name = 'Series',
                'slug' => Str::slug($name),
                'active' => 0,
            ],
        ];

        foreach ($categories as $category) {
            DB::table('categories')->insert($category);
        }
    }
}
