<?php

namespace Database\Seeders;

use App\Models\InterestPoint;
use App\Models\Photo;
use App\Models\ThematicArea;
use App\Models\User;
use Illuminate\Database\Seeder;

class PhotoSeeder extends Seeder
{
    private $points;
    private $users;
    private $areas;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->fetchRelations();

        foreach (range(1,60) as $i) {
            $this->createPhotos();
        }
    }

    private function fetchRelations()
    {
        $this->users = User::all();
        $this->points = InterestPoint::all();
        $this->areas = ThematicArea::all();
    }

    private function createPhotos()
    {
        Photo::factory()->create([
            'interest_point_id' =>$this->points->random()->id,
            'creator' => $this->users->random()->id,
            'updater' => $this->users->random()->id,
            'thematic_area_id' => $this->areas->random()->id
        ]);
    }
}
