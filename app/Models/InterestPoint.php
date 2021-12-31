<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InterestPoint extends Model
{
    use HasFactory;

    public function areas()
    {
        return $this->belongsToMany(ThematicArea::class, 'area_point');
    }
}
