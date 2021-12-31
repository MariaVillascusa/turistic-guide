<?php

namespace Database\Seeders;

use App\Models\InterestPoint;
use App\Models\Visit;
use Illuminate\Database\Seeder;

class VisitSeeder extends Seeder
{
    private $points;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->fetchRelations();

        foreach (range(1,100) as $i) {
            $this->createVisits();
        }
    }

    private function fetchRelations()
    {
        $this->points = InterestPoint::all();
    }

    private function createVisits()
    {
        Visit::factory()->create([
            'interest_point_id' =>$this->points->random()->id,
        ]);
    }
}
