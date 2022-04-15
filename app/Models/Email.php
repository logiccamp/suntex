<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function to(){
        return $this->hasOne(User::class, 'id', 'to');
    }
    public function sender(){
        return $this->hasOne(User::class, 'id', 'sender');
    }
}
