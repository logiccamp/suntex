<?php

namespace App\Http\Controllers;

use App\Models\Properties;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RealestateController extends Controller
{
    public function index(){
        // $properties = Properties::all()->order('created_at', 'DESC')->take(3);
        $properties = Properties::where("isPubslished", "1")->orderBy("id", "desc")->get()->take(3);

        return view('realestate.index', [
            "properties" => $properties,
            "real" => "active",
            "listing" => "",
            "property" => "",

        ]);
    }
}
