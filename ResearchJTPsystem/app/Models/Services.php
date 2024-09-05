<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Services extends Model
{
    use HasFactory;
     
    protected $table = "services";

    protected $fillable = [
       
        'services_id',
        
        'price',
        'description',
    ];
    public function users1(){
        return $this->belongsto(User::class);
    }
    
}
