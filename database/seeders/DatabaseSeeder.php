<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Enum\UserRoles;
use App\Models\User;
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

        User::factory(10)->create();
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'cnic' => '31202123341234',
            'father_name' => 'Super Admin',
            'father_phone' => '123456789',
            'phone' => '123456789',
            'gender' => 'Male',
            'interest' => 'Web Development',
            'education' => 'Graduation',
            'institute' => 'Institute',
            'marital_status' => 'Single',
            'address' => 'administan',
            'age' => "20",
            'role' => UserRoles::ADMIN,
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
    }
}
