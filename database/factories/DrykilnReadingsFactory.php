<?php

namespace Database\Factories;

use App\Models\DrykilnReadings;
use Illuminate\Database\Eloquent\Factories\Factory;

class DrykilnReadingsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DrykilnReadings::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'temp_needed' => $this->faker->randomDigitNotNull() * 10.25,
            'temp_current' => $this->faker->randomDigitNotNull() * 10.25,
            'moisture_needed' => $this->faker->randomDigitNotNull() * 10.25,
            'moisture_current' => $this->faker->randomDigitNotNull() * 10.25,
            'moisture_probe_1' => $this->faker->randomDigitNotNull() * 10.25,
            'moisture_probe_2' => $this->faker->randomDigitNotNull() * 10.25,
            'moisture_probe_3' => $this->faker->randomDigitNotNull() * 10.25,
            'moisture_probe_4' => $this->faker->randomDigitNotNull() * 10.25,
            'moisture_probe_5' => $this->faker->randomDigitNotNull() * 10.25,
            'moisture_probe_6' => $this->faker->randomDigitNotNull() * 10.25,
            'moisture_probes_average' => $this->faker->randomDigitNotNull() * 10.25,
        ];
    }
}
