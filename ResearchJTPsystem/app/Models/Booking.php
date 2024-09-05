<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'Package',
        'client_id',
    ];

    public function clients1(){
        return $this->belongsto(Client::class);
    }
}
