<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categories::create([
            'name'      => 'forte x',
            'slug'      => 'forte-x'
        ]);
        Categories::create([
            'name'      => 'forte 16',
            'slug'      => 'forte-16'
        ]);
        Categories::create([
            'name'      => 'forte 20',
            'slug'      => 'forte-20'
        ]);
    }
}
