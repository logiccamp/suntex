<?php

namespace App\Http\Controllers;

use App\Models\Favourites;
use App\Models\Properties;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavouritesController extends Controller
{
    
    public function index(){
        if(auth()->check()){
            $favourites = auth()->user()->favourites;
            $myfavourites = [];
            foreach ($favourites as $fav) {

                $property_id = $fav->property_id;
                $property = Properties::find($property_id);

                $fav = [
                    "fav_id" =>$fav->id,
                    "property" =>$property,
                ];
                array_push($myfavourites, $fav);
            }
            return view("favourites.index", [
                'myfavourites' => json_encode($myfavourites),
                "real" => " ",
                "listing" => "",
                "property" => "",
            ]);
            
        }else{
            return redirect('/login');
        }
    }

    public function destroy($fav)
    {
        $fav = Favourites::where('id', $fav)->first();
        $fav->delete();
        return redirect ("/favourites");
    }

    public function destroyall($fav)
    {
        auth()->user()->favourites()->delete($fav);
        return redirect ("/favourites");
    }

    public function ownthis($fav)
    {
        $favourite = Favourites::where('id', '=', $fav)
                ->where('user_id', '=', auth()->user()->id)->get();
        if (!$favourite->isEmpty()){
            $property =$favourite->first()->property_id;
            $property = Properties::findorfail($property);
            return view("favourites.ownthis", ["propertyp"=>$property,
            "real" => " ",
            "listing" => "",
            "property" => ""]);
        }else{
            return redirect("/favourites", [
                "real" => " ",
                "listing" => "",
                "property" => "",
                "fav" => $fav
            ]);
        }
    }

    
}
