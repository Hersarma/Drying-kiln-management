<?php

namespace Database\Factories;

use App\Models\TimberIncoming;
use Illuminate\Database\Eloquent\Factories\Factory;

class TimberIncomingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TimberIncoming::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type_of_wood' => $this->faker->word(),
            'number_of_pallets' => $this->faker->randomDigitNotNull() * 10,
            'm3' => $this->faker->randomDigitNotNull() * 10.25,
            'client_id' => $this->faker->randomDigitNotNull(),
            'notes' => $this->faker->word()
        ];
    }
}
