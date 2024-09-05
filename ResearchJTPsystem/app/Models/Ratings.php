<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ratings extends Model
{
    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }
    use HasFactory;
}
