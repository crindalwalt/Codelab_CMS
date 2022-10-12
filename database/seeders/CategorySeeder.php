<?php

namespace Database\Seeders;

use App\Enum\CourseCategory;
use App\Models\Category;
use Database\Factories\CategoryFactory;
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
        foreach (CourseCategory::cases() as $category) {

            Category::create([
                'name' => $category->value,
                'slug' => strtolower($category->value)
            ]);
        }
    }
}
