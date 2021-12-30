<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class SiteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
        $users = User::all();
        return [
            'name' => $this->faker->streetName(),
        ];
    }
}
