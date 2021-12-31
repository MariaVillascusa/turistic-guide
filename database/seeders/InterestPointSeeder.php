<?php

namespace Database\Seeders;

use App\Models\InterestPoint;
use App\Models\Site;
use App\Models\ThematicArea;
use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class InterestPointSeeder extends  Seeder
{
    private $users;
    private $sites;
    private $areas;

    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $this->fetchRelations();

        foreach (range(1,40) as $i) {
            $this->createPoints();
        }
    }

    private function fetchRelations(): void
    {
        $this->users = User::all();
        $this->sites = Site::all();
        $this->areas = ThematicArea::all();
    }

    private function createPoints(){

        $point = InterestPoint::factory()->create([
            'site_id' =>$this->sites->random()->id,
            'creator' => $this->users->random()->id,
            'updater' => $this->users->random()->id
        ]);

        $point->areas()->attach($this->areas->random(rand(0,4)), [
            'title' => Faker::create()->words(3, true),
            'code_id' => Faker::create()->numberBetween(),
        ]);
    }
}
