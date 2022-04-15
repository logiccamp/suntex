<?php

namespace App\Http\Controllers;

use App\Models\AgentProfile;
use App\Models\Email;
use App\Models\Properties;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AgentController extends Controller
{
    public function index(){

        if (!auth()->user()){
            return redirect("/agent/login");
        }

        if(auth()->user()->usertype != 'agent'){
            return redirect("/agent/login");
        }
        if(!auth()->user()->agentprofile){
            return redirect("/agent/profile/update");
        }
        $agentProperties = auth()->user()->properties->take(5);
        return view("agent.index", ["myProperties"=>$agentProperties]);
    }
    public function agentproperties($id){
        $user = User::where('id', $id)->first();
        $agentProperties = $user->properties->take(30);
        return response()->json($agentProperties, 200);

    }


    public function login(){
        $message = "";
        return view("agent.agentlogin",["message"=>$message]);
    }

    public function loginAuth(){
        $message = "Invalid login combinations, email or password";
        if(!request()->email || !request()->password ){
            return redirect("/agent/login")->with(["message"=>$message]);
        }
        
        $email = request()->email;
        $password = request()->password;

        $user = User::where('email', $email)->first();
        if($user){
            // validate password 
            if(Hash::check($password, $user->password)){
                // check user type
                if($user->usertype != "agent"){
                    $message = "Buyer cannot login as agent, please register as agent";
                    return redirect("/agent/login")->with(["message"=>$message]);
                }else{
                    $credentials = ["email"=>$email, "password"=>$password];
                    if (Auth::attempt($credentials)) {
                        request()->session()->regenerate();
            
                        return redirect("/agent");
                    }
                }
            }else{
                return redirect("/agent/login")->with(["message"=>$message]);
            }

            
        }else{
            return redirect("/agent/login")->with(["message"=>$message]);
        }
    }

    public function signup(){
        $message = "";
        return view("agent.agentsignup",["message"=>$message]);
    }

    public function signupAuth(){
        $message = "Invalid login combinations, email or password";
        $data = [];

        if(!request()->email){
            $message = "Email address cannot be empty!";
            return redirect("/agent/signup")->with(["message"=>$message]);
        }else{
            $data["email"] = request()->email;
        }


        if(!request()->firstname){
            $message = "Firstname and Lastname cannot be empty!";
            return redirect("/agent/signup")->with(["message"=>$message]);
        }else{
            $data["firstname"] = request()->firstname;
        }

        if(!request()->lastname){
            $message = "Firstname and Lastname cannot be empty!";
            return redirect("/agent/signup")->with(["message"=>$message]);
        }else{
            $data["lastname"] = request()->lastname;
        }
        

        if(!request()->password && request()->password == "" && strlen(request()->password < 8)){
            $message = "Please use a more secure password!";
            return redirect("/agent/signup")->with(["message"=>$message]);
        }else{
            $data["password"] = request()->password;
            $data["confpassword"] = request()->password_confirmation;
        }

        if($data["password"] != $data["confpassword"]){
            $message = "Password not matched!";
            return redirect("/agent/signup")->with(["message"=>$message]);
        }


        if(request()->usertype == "buyer"){
            $message = "Buyers are not allowed to registration using this link!";
            return redirect("/agent/signup")->with(["message"=>$message]);
        }else{
            $data["usertype"] = request()->usertype;
        }
        //usertype


        $user = User::where('email', $data["email"])->first();
        if($user){
            $message = "There is an account associated with this Email address!";
            return redirect("/agent/signup")->with(["message"=>$message]);

        }else{
            User::create([
                'firstname' => $data['firstname'],
                'lastname' => $data['lastname'],
                'email' => $data['email'],
                'usertype' => $data['usertype'],
                'password' => Hash::make($data['password']),
            ]);
            $sMessage = "Registration Success... Please login.";
            return redirect("/agent/signup")->with(["sMessage"=>$sMessage]);
        }
    }

    public function myproperties(){
        if (!auth()->user()){
            return redirect("/agent/login");
        }

        if(auth()->user()->usertype != 'agent'){
            return redirect("/agent/login");
        }
        $agentProperties = auth()->user()->properties;
        return view("agent.myproperties", ["myProperties"=>$agentProperties]);
    }

    public function notifications (){
        if (!auth()->user()){
            return redirect("/agent/login");
        }

        if(auth()->user()->usertype != 'agent'){
            return redirect("/agent/login");
        }
        return view ("agent.notifications");
    }
    public function notificationsSent (){
        if (!auth()->user()){
            return redirect("/agent/login");
        }

        if(auth()->user()->usertype != 'agent'){
            return redirect("/agent/login");
        }
        return view ("agent.notificationsSent");
    }
    public function notificationsCreate (){
        if (!auth()->user()){
            return redirect("/agent/login");
        }

        if(auth()->user()->usertype != 'agent'){
            return redirect("/agent/login");
        }
        return view ("agent.notificationsCreate");
    }
    
    public function read ($mailid){
        if (!auth()->user()){
            return redirect("/agent/login");
        }

        if(auth()->user()->usertype != 'agent'){
            return redirect("/agent/login");
        }
        $mail = Email::where("mailid", $mailid)->first();
        $mail->status = "Read";
        $mail->save();
        return view ("agent.notification", ["mail"=> $mail]);
    }
    public function readapi ($mailid){
        $mail = Email::where("mailid", $mailid)->first();
        return response()->json($mail);
    }

    public function addproperty(){
        if (!auth()->user()){
            return redirect("/agent/login");
        }

        if(auth()->user()->usertype != 'agent'){
            return redirect("/agent/login");
        }

        return view ("agent.addproperty");
    }
    public function addproperty2($newprop){
        if (!auth()->user()){
            return redirect("/agent/login");
        }

        if(auth()->user()->usertype != 'agent'){
            return redirect("/agent/login");
        }

        $property = Properties::where('property_id', $newprop)->first();
        return view ("agent.addproperty_pg2", ["property"=>$property]);
    }
    public function addproperty3($newprop){
        if (!auth()->user()){
            return redirect("/agent/login");
        }

        if(auth()->user()->usertype != 'agent'){
            return redirect("/agent/login");
        }

        $property = Properties::where('property_id', $newprop)->first();
        return view ("agent.addproperty_pg3", ["property"=>$property]);
    }

    public function addproperty4($newprop){
        if (!auth()->user()){
            return redirect("/agent/login");
        }

        if(auth()->user()->usertype != 'agent'){
            return redirect("/agent/login");
        }

        $property = Properties::where('property_id', $newprop)->first();
        return view ("agent.moreimages", ["property"=>$property]);
    }

    public function fake(){
        return view ("agent.fake");
    }

    public function fake2(){
        
        return request()->get('id');
    }

    public function publish($property){
        $property = Properties::where('property_id', $property)->first();
        $property->isPubslished = "1";
        $property->save();
        return redirect("/agent");
    }

    public function unpublish($property){
        $property = Properties::where('property_id', $property)->first();
        $property->isPubslished = "0";
        $property->save();
        return redirect("/agent");
    }
    
    public function profile(){
        if (!auth()->user()){
            return redirect("/agent/login");
        }

        if(auth()->user()->usertype != 'agent'){
            return redirect("/agent/login");
        }

        return view ("agent.profile");
    }

    public function updateprofile(Request $request){
        if (!auth()->user()){
            return redirect("/agent/login");
        }

        if(auth()->user()->usertype != 'agent'){
            return redirect("/agent/login");
        }

        return view ("agent.updateprofile");
    }

    public function ViewProperty($property){
        if (!auth()->user()){
            return redirect("/agent/login");
        }

        if(auth()->user()->usertype != 'agent'){
            return redirect("/agent/login");
        }
        $property = Properties::where("Property_id", $property)->firstOrFail();
        return view ("agent.ViewProperty", ["property"=>$property]);
    }

    public function updateprofilep(Request $request, $id){
            $this->validate($request, [
                "ext" => ['required'],
                "tel" => ['required'],
                "mob" => ['required', 'integer'],
                "dob" => ['required', 'integer'],
                "yob" => ['required', 'integer'],
                "identification" => ['required'],
                "idNumber" => ['required'],
                "address" => ['required'],
                "state" => ['required'],
                "city" => ['required'],
            ]);
            $user = User::where("id", $id)->first();
            if($user->agentprofile == null){
                $profile = AgentProfile::create([
                    "user_id" => $id,
                    "ext" => $request->ext,
                    "tel" => $request->tel,
                    "mob" => $request->mob,
                    "dob" => $request->dob,
                    "yob" => $request->yob,
                    "identification" => $request->identification,
                    "idNumber" => $request->idNumber,
                    "address" => $request->address,
                    "state" => $request->state,
                    "city" => $request->city,
                ]);

                if($profile){
                    return response()->json(true, 200);
                }else{
                    return response()->json(false, 200);
                }
            }

            $profile = AgentProfile::where("user_id", $id)->first();
            $profile->tel = $request->tel;
            $profile->mob = $request->mob;
            $profile->dob = $request->dob;
            $profile->yob = $request->yob;
            $profile->identification = $request->identification;
            $profile->idNumber = $request->idNumber;
            $profile->address = $request->address;
            $profile->state = $request->state;
            $profile->city = $request->city;
            $profile->save();
            return response()->json(true, 200);
        }

        public function getProfile($id){
            $user = User::where("id", $id)->first();
            if($user->agentprofile == null){
                return response()->json(false, 200);
            }else{
                return response()->json($user->agentprofile, 200);
            }
        }

        public function uploadSelfie(){
            if (!auth()->user()){
                return redirect("/agent/login");
            }
    
            if(auth()->user()->usertype != 'agent'){
                return redirect("/agent/login");
            }
    
            return view("agent.uploadselfie");
        }
        public function uploadid(){
            if (!auth()->user()){
                return redirect("/agent/login");
            }
    
            if(auth()->user()->usertype != 'agent'){
                return redirect("/agent/login");
            }
    
            return view("agent.uploadid");
        }
        public function uploadselfieid(){
            if (!auth()->user()){
                return redirect("/agent/login");
            }
    
            if(auth()->user()->usertype != 'agent'){
                return redirect("/agent/login");
            }
    
            return view("agent.uploadselfieid");
        }

        public function uploadSelfiep(Request $request, $id){
            $this->validate($request, [
                'image' => 'required',
            ]);
            $path = $request->file("image")->store('uploads', 'public');
            // $path = $request->file("image")->store('selfies', 'public');
            $profile = AgentProfile::where("user_id", $id)->first();
            $profile->profilepic = $path;
            $profile->save();
            return response()->json(true, 200);
        }
        public function uploadidp(Request $request, $id){
            $this->validate($request, [
                'image' => 'required',
            ]);
            $path = $request->file("image")->store('uploads', 'public');
            // $path = $request->file("image")->store('selfies', 'public');
            $profile = AgentProfile::where("user_id", $id)->first();
            $profile->idphoto = $path;
            $profile->save();
            return response()->json(true, 200);
        }
        public function uploadselfieidp(Request $request, $id){
            $this->validate($request, [
                'image' => 'required',
            ]);
            $path = $request->file("image")->store('uploads', 'public');
            // $path = $request->file("image")->store('selfies', 'public');
            $profile = AgentProfile::where("user_id", $id)->first();
            $profile->idowner = $path;
            $user = User::where("id", $id)->first();
            $user->agent_status = "submitted";
            $user->save();
            $profile->save();
            return response()->json(true, 200);
        }
}

