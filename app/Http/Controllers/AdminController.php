<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Deal;
use App\Models\Email;
use App\Models\Properties;
use App\Models\Type;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //
    public function index(){
        if (!auth()->user()){
            return redirect("/management/admin/login");
        }

        $admin = DB::table('admins')->where("id", auth()->user()->id)->first();
        if($admin == null){
            return redirect("/management/admin/login");
        }
        $agents = User::where("usertype", "agent")->where("agent_status", "!=", "")->orderBy("id", 'DESC')->get()->take(10);
        $deals = Deal::all();
        $properties = DB::table("properties")->where("isPubslished", "1")->orderBy('id', 'DESC')->get();
        $messages = Email::where("to", "6")->where("status", "open")->get();
        return view("admin.index", ["properties"=>$properties, "agents"=>$agents, "deals"=>$deals, "messages"=>$messages]);
    }

    public function notifications (){
        if (!auth()->user()){
            return redirect("/management/admin/login");
        }

        return view ("admin.notifications");
    }
    public function notificationsSent (){
        if (!auth()->user()){
            return redirect("/management/admin/login");
        }
        return view ("admin.notificationsSent");
    }
    public function notificationsCreate (){
        if (!auth()->user()){
            return redirect("/management/admin/login");
        }
        $users = User::where("firstname", "!=", "admin")->get();
        return view ("admin.notificationsCreate", ["users"=>$users]);
    }
    public function read ($mailid){
        if (!auth()->user()){
            return redirect("/management/admin/login");
        }

        
        $mail = Email::with(['to', 'sender'])->where("mailid", $mailid)->first();
        $mail->status = "Read";
        $mail->save();
        $sender = User::where("id", $mail->sender)->first();
        return view ("admin.notification", ["mail"=> $mail, "sender"=>$sender]);
    }

    public function readapi ($mailid){
        $mail = Email::with(["to", "sender"])->where("mailid", $mailid)->first();
        return response()->json($mail);
    }

    

    public function login(){
        $message = "";
        return view("admin.adminlogin",["message"=>$message]);
    }


    public function loginAuth(){
        $message = "Invalid login combinations, email or password";
        if(!request()->email || !request()->password ){
            return redirect("/management/admin/login")->with(["message"=>$message]);
        }
        
        $email = request()->email;
        $password = request()->password;

        $user = DB::table('admins')->where("email", $email)->first();
        
        if($user){
            // validate password 
            if(Hash::check($password, $user->password)){
                // check user type
                $credentials = ["email"=>$email, "password"=>$password];
                if (Auth::attempt($credentials)) {
                    request()->session()->regenerate();
                    return redirect("/management/admin");
                }
            }else{
                return redirect("/management/admin/login")->with(["message"=>$message]);
            }
            
        }else{
            return redirect("/management/admin/login")->with(["message"=>$message]);
        }
    }


    public function types(){
        if (!auth()->user()){
            return redirect("/management/admin/login");
        }
        $types = DB::table('types')->orderBy('id', 'desc')->get();
        return view("types.index", [
            "types"=>$types
        ]);
    }


    public function destroy($type){
        DB::table("types")->where("id", $type)->delete();
        return redirect("/management/admin/manage-types");
    }


    
    public function addtype(){
        if (!auth()->user()){
            return redirect("/management/admin/login");
        }
        return view("types.add", );
    }

    public function addtypeCreate(){
        $data = [];
        if (!request()->title){
            return redirect("/management/admin/add-type");
        }else{
            $data["title"] = request()->title;
        }

        Type::create($data);
        return redirect("/management/admin/manage-types");
    }

    public function properties(){
        // $property = DB::table("properties")->where("property_id", $property)->get();
        $thisproperty = Properties::where("isPubslished", "1")->get()->reverse();
        return view("admin.listings",
        ["properties"=> $thisproperty]);
    }
    
    public function viewproperty($property){
        // $property = DB::table("properties")->where("property_id", $property)->get();
        $thisproperty = Properties::where("property_id", $property)->firstOrFail();
        return view("admin.viewproperty",
        ["property"=>$thisproperty]);
    }

    public function propertyAction(Request $request, $property){
        // $property = DB::table("properties")->where("property_id", $property)->get();
        $thisproperty = Properties::where("id", $property)->first();
        $thisproperty->approved_by_admin = $request->status;
        $thisproperty->save();
        return redirect("/management/admin/properties");
    }
}
