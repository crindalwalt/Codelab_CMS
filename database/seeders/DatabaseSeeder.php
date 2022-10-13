<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Enum\UserRoles;
use App\Models\Course;
use App\Models\User;
use App\Models\Visitor;
use Database\Factories\CourseFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AdminSeeder::class,
            CategorySeeder::class,
        ]);
        User::factory(20)->create();

        Course::factory(20)->create();
    }
}
