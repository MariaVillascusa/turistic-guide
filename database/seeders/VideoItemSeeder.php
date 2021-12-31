<?php

namespace Database\Seeders;

use App\Models\Video;
use App\Models\VideoItem;
use Illuminate\Database\Seeder;

class VideoItemSeeder extends Seeder
{
    private $videos;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->fetchRelations();

        foreach (range(1,50) as $i) {
            $this->createVideoItems();
        }
    }

    private function fetchRelations()
    {
        $this->videos = Video::all();
    }

    private function createVideoItems()
    {
        VideoItem::factory()->create([
            'video_id' =>$this->videos->random()->id,
        ]);
    }
}
