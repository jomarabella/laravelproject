<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Booking;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'client_id',
        'Package',
    ];

    public function services(){
        return $this->hasMany(Booking::class, 'client_id', 'client_id');
    }
}
