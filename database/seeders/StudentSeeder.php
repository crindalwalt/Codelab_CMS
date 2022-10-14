<?php

namespace Database\Seeders;

use App\Enum\Education;
use App\Enum\Gender;
use App\Enum\Interest;
use App\Enum\MaritalStatus;
use App\Enum\UserRoles;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Wajiha Idress',
            'email' => 'wajiha@mail.com',
            'father_name'=> 'Super Wajiha',
            'father_phone'=> '',
            'cnic'=> fake()->numerify('1234567891234'),
            'phone'=> fake()->numerify('03001234567'),
            'gender'=> Gender::MALE,
            'interest'=> Interest::WEBDSIGN,
            'education'=> Education::GRAD,
            'institute'=> 'Islamia University',
            'city' => fake()->city,
            'role'=>UserRoles::STUDENT,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'name' => 'Dilawar Khan',
            'email' => 'dilawar@mail.com',
            'father_name'=> 'Super Wajiha',
            'father_phone'=> '',
            'cnic'=> fake()->numerify('1234567891234'),
            'phone'=> fake()->numerify('03001234567'),
            'gender'=> Gender::MALE,
            'interest'=> Interest::WEBDSIGN,
            'education'=> Education::GRAD,
            'institute'=> 'Islamia University',
            'city' => fake()->city,
            'role'=>UserRoles::STUDENT,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'name' => 'Rufus Ch',
            'email' => 'rufus@mail.com',
            'father_name'=> 'Super Wajiha',
            'father_phone'=> '',
            'cnic'=> fake()->numerify('1234567891234'),
            'phone'=> fake()->numerify('03001234567'),
            'gender'=> Gender::MALE,
            'interest'=> Interest::WEBDSIGN,
            'education'=> Education::GRAD,
            'institute'=> 'Islamia University',
            'city' => fake()->city,
            'role'=>UserRoles::STUDENT,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
    }
}
