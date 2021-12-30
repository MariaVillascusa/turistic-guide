<?php

namespace Database\Seeders;

use App\Models\site;
use App\Models\User;
use Illuminate\Database\Seeder;

class SiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {
        $users = User::all();

        site::factory(20)->create([
            'creator' => $users->random()->id,
            'updater' => $users->random()->id
        ])->each(function ($site) use ($users){
            $site->admin()->attach($users->random(rand(0,15)));
        });
    }
}
