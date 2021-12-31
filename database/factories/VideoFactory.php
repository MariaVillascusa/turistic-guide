<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'route' => $this->faker->file(public_path('files/'), '/tmp', true),
            'order' => $this->faker->randomDigitNotNull(),
            'code_id' => $this->faker->numberBetween(),
            'description' => $this->faker->sentence(10, true)
        ];
    }
}
