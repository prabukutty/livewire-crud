<?php

namespace Database\Factories;

use App\Models\student;
use Illuminate\Database\Eloquent\Factories\Factory;

class studentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'firstname'=> $this->faker->firstName,
            'lastname'=> $this->faker->lastName,
            'email'=> $this->faker->email,
            'phone'=> $this->faker->phoneNumber
        ];
    }
}
