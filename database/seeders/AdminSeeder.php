<?php

namespace Database\Seeders;

use App\Enum\Education;
use App\Enum\Gender;
use App\Enum\Interest;
use App\Enum\MaritalStatus;
use App\Enum\UserRoles;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'father_name'=> 'Super Admin',
            'father_phone'=> '',
            'cnic'=> fake()->numerify('1234567891234'),
            'phone'=> fake()->numerify('03001234567'),
            'gender'=> Gender::MALE,
            'interest'=> Interest::WEBDSIGN,
            'education'=> Education::GRAD,
            'institute'=> 'Islamia University',
            'marital_status'=> MaritalStatus::SINGLE,
            'city' => fake()->city,
            'role'=>UserRoles::ADMIN,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
    }
}
