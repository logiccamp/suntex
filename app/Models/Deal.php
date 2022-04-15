<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function buyer(){
        return $this->hasOne(User::class, 'id', 'buyer_id');
    }

    public function agent(){
        return $this->hasOne(User::class, 'email', 'agent_id');
    }
    
    public function property(){
        return $this->hasOne(Properties::class, 'id', 'property_id');
    }
}
