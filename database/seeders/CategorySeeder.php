<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name'=>'Website Coding',
        ]);
        Category::create([
            'name'=>'Design',
        ]);
        Category::create([
            'name'=>'Lifestyle',
        ]);
        Category::create([
            'name'=>'Cooking',
        ]);
    }
}
