<?php

namespace Database\Seeders;

use App\Models\InterestPoint;
use App\Models\Site;
use App\Models\User;
use Illuminate\Database\Seeder;

class SiteSeeder extends Seeder
{
    private $users;

    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $this->fetchRelations();

        foreach (range(1,15) as $i) {
            $this->createSites();
        }
    }

    private function fetchRelations(): void
    {
        $this->users = User::all();
    }

    private function createSites(){

        $site = Site::factory()->create([
            'creator' => $this->users->random()->id,
            'updater' => $this->users->random()->id
        ]);
        $site->admin()->attach($this->users->random(rand(0,15)));
    }
}
