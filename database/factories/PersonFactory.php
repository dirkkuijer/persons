<?php

namespace Database\Factories;

use App\Models\Person;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Person::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstname,
            'last_name' => $this->faker->lastname,
            'email' => $this->faker->email,
            'country' => $this->faker->country,
        ];
    }
}
