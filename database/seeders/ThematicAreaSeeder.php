<?php

namespace Database\Seeders;

use App\Models\ThematicArea;
use Illuminate\Database\Seeder;

class ThematicAreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ThematicArea::create(['name' => 'Historia']);
        ThematicArea::create(['name' => 'Geografía']);
        ThematicArea::create(['name' => 'Deporte']);
        ThematicArea::create(['name' => 'Ciencia']);
    }
}
