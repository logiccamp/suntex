<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyPictures extends Model
{
    protected $guarded = [];
    
    public function property(){
        return $this->belongsTo(PropertyPictures::class);
    }
}
