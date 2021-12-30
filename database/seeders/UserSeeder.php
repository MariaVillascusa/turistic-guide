<?php

namespace Database\Seeders;

use App\Models\ThematicArea;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $areas = ThematicArea::all();

        User::create([

            'login' => 'pepe1',
            'password_hash' => bcrypt('123456'),
            'salt'=> 'dont know',
            'email' => 'pepe@mail.es',
            'profile' => 'admin',
        ]);

        User::factory(15)->create()->each(function ($user) use ($areas) {

            $user->areas()->attach($areas->random(rand(0,4)), ['date' => now(), 'active' => 1 ]);
        });
    }
}

