<?php

namespace Database\Seeders;

use App\Models\InterestPoint;
use App\Models\Site;
use App\Models\User;
use Illuminate\Database\Seeder;


class InterestPointSeeder extends  Seeder
{
    private $users;
    private $sites;

    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $this->fetchRelations();

        foreach (range(1,15) as $i) {
            $this->createPoints();
        }
    }

    private function fetchRelations(): void
    {
        $this->users = User::all();
        $this->sites = Site::all();
    }

    private function createPoints(){

        $site = InterestPoint::factory()->create([
            'site_id' =>$this->sites->random()->id,
            'creator' => $this->users->random()->id,
            'updater' => $this->users->random()->id
        ]);
    }
}
