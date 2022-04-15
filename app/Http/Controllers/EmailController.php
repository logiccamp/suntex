<?php

namespace App\Http\Controllers;

use App\Models\Email;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function sendSignUp(){
        $sender = 6;
        $to = '1';
        $mailid = substr(str_shuffle("12345678910abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 20);
        $subject = "WELCOME TO SUNTEX";
        $status = "Open";
        $message = "Welcome to suntex";


        Email::create([
            'sender' => $sender,
            'to' => $to,
            'mailid' => $mailid,
            'subject' => $subject,
            'status' => $status,
            'message' => $message,
        ]);

    }


    public function getEmails($id){
        $all = Email::with(['to', 'sender'])->where('to', $id);
        $alls = Email::with(['to', 'sender'])->where('to', $id)->get()->take(5);
        $unread = $all->where('status', 'Open')->get();
        $data = [
            'all' => $alls,
            'unread' => $unread,
        ];
        return response()->json($data, 200);
    }

    public function sendMail(Request $request){

        $data = $this->validate($request, [
            "to" => "required",
            "subject" => "required",
            "message" => "required",
            "sender" => "required",
        ]);

        $mailid = substr(str_shuffle("12345678910abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 20);
        $status = "Open";

        Email::create([
            'sender' => $data["sender"],
            'to' => $data["to"],
            'mailid' => $mailid,
            'subject' => $data["subject"],
            'status' => $status,
            'message' => $data["message"],
        ]);
        if($data["sender"] == "6"){
            
            return redirect("/management/admin/notifications/sent");

        }
        return redirect("/agent/notifications/sent");
    }

    public function getSent($id){
        $allMails = [];
        $all = Email::with(['to', 'sender'])->where('sender', $id)->get();
        if ($all){
            foreach ($all as $key) {
                $key["date"] = Carbon::create($key["created_at"])->diffForHumans(); 
                array_push($allMails, $key);
            }
        }
        $data = [
            'all' => $allMails,
        ];
        return response()->json($data, 200);
    }
}
