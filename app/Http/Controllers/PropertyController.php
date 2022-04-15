<?php

namespace App\Http\Controllers;

use App\Models\Properties;
use App\Models\PropertyPictures;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PropertyController extends Controller
{
    //
    public function index(){
        $properties = Properties::where("isPubslished", "1")->orderBy("id", 'desc')->get()->take(21);

        return view("properties.index", [
            "properties" => $properties,
            "real" => "",
            "listing" => "active",
            "property" => "",

        ]);
    }
    public function index2($offset){
        $properties = Properties::where("isPubslished", "1")->orderBy("id", 'desc')->skip($offset)->take(21)->get();
        return response()->json($properties, 200);
    }

    public function show($property){
        // $property = DB::table("Properties")->where("property_id", $property)->firstOrFail();
        $property = Properties::where('property_id', $property)->firstOrFail();

        return view("properties.show", [
            "propertyp"=>$property,
            "real" => "",
            "listing" => "",
            "property" => "",

        ]);
    }

    public function store(){
        $data = request()->validate([
            'property' => 'required',
        ]);

        if(auth()->check()){
            auth()->user()->favourites()->create([
                'property_id' => $data["property"],
            ]);
            return redirect ("/favourites");
        }else{
            return redirect('/login');
        }
    }
}
