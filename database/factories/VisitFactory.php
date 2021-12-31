<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VisitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'time' => $this->faker->dateTimeBetween('-2 years', 'now'),
            'deviceid' => $this->faker->uuid(),
            'appversion' => $this->faker->numerify('#.#.#'),
            'useragent' => $this->faker->userAgent(),
            'ssoo' => $this->faker->words(2, true),
            'ssooversion' => $this->faker->numerify('#.#.#'),
            'latitude' => $this->faker->latitude(),
            'longitude' => $this->faker->longitude()
        ];
    }
}
