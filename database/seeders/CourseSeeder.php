<?php

namespace Database\Seeders;

use App\Enum\WebDesignCourse;
use App\Enum\WebDevCourse;
use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (WebDesignCourse::cases() as $webcourses) {
            Course::create([
                'name' => $webcourses->value,
                'slug' => strtolower($webcourses->value),
                'fee' => 7000,
                'category_id' => 1
            ]);
        }
        foreach (WebDevCourse::cases() as $devcourses) {
            Course::create([
                'name' => $devcourses->value,
                'slug' => strtolower($devcourses->value),
                'fee' => 7000,
                'category_id' => 2
            ]);
        }
    }
}
