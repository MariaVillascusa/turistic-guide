<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    use HasFactory;

    public function admin()
    {
        return $this->belongsToMany(User::class, 'admin_site');
    }
}

