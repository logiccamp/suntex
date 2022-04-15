<?php

namespace App\Http\Controllers;

use App\Models\Properties;
use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function index($type){
        $properties = Properties::where('type', $type)->where("isPubslished", "1")->orderBy("id", 'desc')->get()->take(20);

        return view("properties.type", [
            "properties" => $properties,
            "real" => "",
            "property" => "active",
            "listing" => "",
            "type" => $type,
        ]);

    }

    public function getAll(){
        $types = Type::all();
        return response()->json(['types'=>$types], 200);
    }
}
