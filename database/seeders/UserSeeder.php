<?php

namespace Database\Seeders;

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
        User::create([

            'login' => 'pepe1',
            'password_hash' => bcrypt('123456'),
            'salt'=> 'dont know',
            'email' => 'pepe@mail.es',
            'profile' => 'admin',
        ]);

        User::factory(15)->create();
    }
}

