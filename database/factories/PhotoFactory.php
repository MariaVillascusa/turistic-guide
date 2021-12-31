<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PhotoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'route' => $this->faker->file(public_path('files/photos/'), '/tmp', true),
            'order' => $this->faker->randomDigitNotNull(),
        ];
    }
}
