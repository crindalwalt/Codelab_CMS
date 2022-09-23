<?php

namespace Database\Factories;

use App\Enum\UserRoles;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Visitor>
 */
class VisitorFactory extends Factory
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
            'cnic'=> 'xxxxx-xxxxxxxx-x',
            'phone'=> $this->faker->phoneNumber() ,
            'gender'=> 'male' ,
            'interest'=>"Web Development",
            'education'=> 'matric pass',
            'institude'=> 'Islamia University',
            'marital_status'=> "hoping...",
            'age'=> '18',
            'city'=>$this->faker->city,

            'address' => $this->faker->name,

            'remember_token' => Str::random(10),
        ];
    }
}
