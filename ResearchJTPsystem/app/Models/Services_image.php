<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services_image extends Model
{
    use HasFactory;
    protected $table = 'services_images';

    protected $fillable = [
        'id',
        'image'
    ];
}
