<?php

namespace Database\Seeders;

use App\Models\ThematicArea;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            ThematicAreaSeeder::class,
            UserSeeder::class,
            SiteSeeder::class,
            InterestPointSeeder::class,
            VideoSeeder::class,
            PhotoSeeder::class,
            VisitSeeder::class,
            VideoItemSeeder::class
        ]);

    }
}
