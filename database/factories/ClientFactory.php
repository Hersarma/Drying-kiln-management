<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Client::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->name,
            'city' => $this->faker->city(),
            'address_1' => $this->faker->address(),
            'pib' => $this->faker->randomDigitNotNull() * 10000,
            'mb' => $this->faker->randomDigitNotNull() * 10000,
            'contact' => $this->faker->phoneNumber(),
            'email' => $this->faker->email(),
            'website' => $this->faker->url(),
            'notes' => $this->faker->word(),

        ];
    }
}
