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
            'client_id' => $this->faker->randomDigitNotNull(),
            'notes' => $this->faker->word()
        ];
    }
}
