<?php

namespace Database\Seeders;

use App\Models\InterestPoint;
use App\Models\ThematicArea;
use App\Models\User;
use App\Models\Video;
use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
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

        foreach (range(1,40) as $i) {
            $this->createVideos();
        }
    }

    private function fetchRelations()
    {
        $this->users = User::all();
        $this->points = InterestPoint::all();
        $this->areas = ThematicArea::all();
    }

    private function createVideos()
    {
        Video::factory()->create([
            'interest_point_id' =>$this->points->random()->id,
            'creator' => $this->users->random()->id,
            'updater' => $this->users->random()->id,
            'thematic_area_id' => $this->areas->random()->id
        ]);
    }
}
