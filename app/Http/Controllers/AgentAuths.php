<?php

namespace App\Http\Controllers;

use App\Models\Properties;
use App\Models\PropertyPictures;
use App\Models\User;
use Illuminate\Http\Request;

class AgentAuths extends Controller
{
    //
    public function addproperty1(Request $request){
        $data = [];
        $message = "An error occur!";
        
        $data = $request->validate([
            'caption' => ['required', 'string', 'max:255', "min:3"],
            'busstop' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
        ]);
        if(auth()->user()){
            $data["user_id"] = auth()->user()->id;
        }else{
            return redirect("/agent/login");
        }
        $data["property_id"] = substr(str_shuffle("12345678912AJDSFSLJAD34567A89"), 0, 12);
        auth()->user()->properties()->create($data);
        
        return redirect("/agent/add-propertypg2/".$data["property_id"]);
    }

    public function addproperty2(Request $request){
        $data = $request->validate([
            'country' => ['required', 'string', 'max:255'],
            'state' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'tag' => ['required', 'string', 'max:255'],
            'price' => ['required', 'string', 'max:255'],
            'type' => ['required', 'string', 'max:255'],
            'property_id' => ['required', 'string', 'max:255'],
        ]);

        if(auth()->user()){
            $data["user_id"] = auth()->user()->id;
        }else{
            return redirect("/agent/login");
        }

        $thisproperty = Properties::where("property_id", $data["property_id"]);
        $uppatethis = $thisproperty->update($data);
        if($uppatethis){
            return redirect("/agent/add-propertypg3/".$data["property_id"]);
        }else{
            return redirect("/agent/add-propertypg2/".$data["property_id"]);
        }
        
    }

    public function addproperty3(Request $request, $property){
        $data = request()->validate([
            'mainImage' => ['required', 'image'],
        ]);        

        $imagePath = request('mainImage')->store('uploads', 'public');
        Properties::where("property_id", $property)->update(["image" => $imagePath]);
        $propertyid = Properties::where("property_id", $property)->first()->id;
        $imagedata = [
            "imagePath" => $imagePath,
            "properties_id" => $propertyid,
        ];
        PropertyPictures::create($imagedata);
        return redirect("/agent/add-more-images/".$property);
    }
    
    public function addproperty4(Request $request, $property){
        $data = request()->validate([
            'mainImages' => ['required', 'image'],
        ]);        
        $thisproperty = Properties::where("property_id", $property)->first()->id;
        $imagePath = request('mainImages')->store('uploads', 'public');

        $imagedata = [
            "imagePath" => $imagePath,
            "properties_id" => $thisproperty,
        ];
        PropertyPictures::create($imagedata);
        return redirect("/agent/add-more-images/".$property);

    }
}
