<?php

namespace Database\Factories;

use App\Enum\Education;
use App\Enum\Gender;
use App\Enum\Interest;
use App\Enum\MaritalStatus;
use App\Enum\UserRoles;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'father_name'=> $this->faker->name() ,
            'father_phone'=> $this->faker->phoneNumber() ,
            'cnic'=> $this->faker->numerify('1234567891234'),
            'phone'=> $this->faker->phoneNumber() ,
            'gender'=> Gender::MALE,
            'interest'=> Interest::WEBDSIGN,
            'education'=> Education::GRAD,
            'institute'=> 'Islamia University',
            'marital_status'=> MaritalStatus::SINGLE,
            'city' => $this->faker->city,
            'role'=>UserRoles::VISITOR,
            'email_verified_at' => now(),

            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn(array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
