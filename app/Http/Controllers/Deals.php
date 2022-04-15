<?php

namespace App\Http\Controllers;

use App\Mail\BuyerORder;
use App\Mail\OrderEmail;
use App\Models\Deal;
use App\Models\Email;
use App\Models\Properties;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Deals extends Controller
{
    public function index(){
        if(!auth()->check()){
            return redirect("/login");
        }
        
        $deals = auth()->user()->Deals;
        if($deals->count() > 0){
            foreach ($deals as $deal) {
                $deal["property"] = Properties::where("id", $deal["property_id"])->first();
            }
        }
        return view("deals.index",[
            "real" => " ",
            "listing" => "",
            "property" => "",
            "deals" => $deals,
        ]);
    }
    public function savedeal($product){
        if(!auth()->check()){
            return redirect("/login");
        }
        $property = Properties::where("id", $product)->first();


        $agent = $property->user;
        
        $buyer = auth()->user();

        // save deal 
        $status = "Received";
        $message = "Deal received.";
        
        $deal = Deal::create([
            "deal_id" => substr(str_shuffle("12345678912AJDSFSLJAD34567A89"), 0, 12),
            "buyer_id" => $buyer->id,
            "agent_id" => $agent->email,
            "property_id" => $property->id,
            "status" => $status,
            "price" => $property->price,
            "message" => $message,
        ]);
        if($deal){
            // send notification to user on platform
            $buyerMessage = "Hello ".$buyer->firstname .", \r\n Your order has been confirmed, while you await the agent call, you can view the other using this link <a href='/deals/b/". $deal["deal_id"]."'>click here</a>.";

            $agentMessage = "Hello ".$agent->firstname .", \r\n New order received, click here to view/update the other <a href='/deals/b/". $deal["deal_id"]."'>click here</a>.";
            
            Email::create([
                'sender' => 6,
                'to' => $buyer->id,
                'mailid' => substr(str_shuffle("12345678910abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 20),
                'subject' => "Your order ".$deal["deal_id"]." as been received",
                'status' => "Open",
                'message' => $buyerMessage,
            ]);

            Email::create([
                'sender' => 6,
                'to' => $agent->id,
                'mailid' => substr(str_shuffle("12345678910abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 20),
                'subject' => "New order ".$deal["deal_id"]." as been received",
                'status' => "Open",
                'message' => $agentMessage,
            ]);
            // send notification to agent on platform

            // send email notification to agent
            $data = [
                "deal_id" => $deal["deal_id"],
                "agent" => $agent->firstname,
                "subject" => "New Deal Recieved",    
                 "to" => $agent->email,    
            ];

            $datab = [
                "deal_id" => $deal["deal_id"],
                "buyer" => $buyer->firstname,
                "subject" => "Your order ".$deal["deal_id"]." as been received",   
                "to" => $buyer->email,    
                "message"=>$buyerMessage,
            ];

            Mail::to($data["to"])->send(new OrderEmail($data));
            
            Mail::to($datab["to"])->send(new BuyerORder($datab));
            return response()->json($deal, 200);
        }
    }


    public function getDealsHome($id){
        $user = User::where("id", $id)->first();
        $deals = [];
        if($user->usertype='admin'){
            $deals = Deal::all();
        }else{
            $deals = $user->AgentDeals->take(5);
        }
        if($deals->count() > 0){
            foreach ($deals as $deal) {
                $deal["property"] = Properties::where("id", $deal["property_id"])->first();
                $deal["buyer"] = User::where("id", $deal["buyer_id"])->first();
                $deal["date"] = Carbon::create($deal["created_at"])->diffForHumans();
            }
        }
        
        $data = [
            "deals" => $deals,
        ];
        return response()->json($data, 200);
    }

    public function agent(){
        if (!auth()->user()){
            return redirect("/agent/login");
        }

        if(auth()->user()->usertype != 'agent'){
            return redirect("/agent/login");
        }

        $deals = User::where("id", auth()->user()->id)->first()->AgentDeals;
        if($deals->count() > 0){
            foreach ($deals as $deal) {
                $deal["property"] = Properties::where("id", $deal["property_id"])->first();
                $deal["buyer"] = User::where("id", $deal["buyer_id"])->first();
                $deal["date"] = Carbon::create($deal["created_at"])->diffForHumans();
            }
        }
        
        return view("agent/deals",[
            "deals" => $deals->reverse(),
        ]);
    }
}
