<?php

namespace App\Http\Controllers;

use App\Models\PropertyPictures;
use Illuminate\Http\Request;

class PropertypicturesController extends Controller
{
    public function delete($id){
        $pic = PropertyPictures::where('id', $id)->first();
        $pic->delete();
        $propertyid = request("propertyid");
        return redirect("/agent/add-more-images/".$propertyid);
    }
}
