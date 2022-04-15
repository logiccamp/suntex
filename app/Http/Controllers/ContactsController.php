<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!auth()->user()){
            return redirect("/agent/login");
        }

        return view("agent.contacts");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!auth()->user()){
            return redirect("/agent/login");
        }

        return view("agent.addcontact");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validate($request,[
            "Name" => "required",
            "Mobile" => "required",
            "Address" => "",
            "Occupation" => "",
            "Email" => "",
        ]);
        $data["user_id"] = auth()->user()->id;
        $contact = Contact::create($data);
        if($contact){
            return redirect("/agent/contacts");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = Contact::where("id", $id)->first();
        return view("agent.editContact", ["contact"=>$contact]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $contact = Contact::where("id",$id)->first();
        $data = $this->validate($request,[
            "Name" => "required",
            "Mobile" => "required",
            "Address" => "",
            "Occupation" => "",
            "Email" => "",
        ]);
        $contact->Name = $data["Name"];
        $contact->Mobile = $data["Mobile"];
        $contact->Address = $data["Address"];
        $contact->Occupation = $data["Occupation"];
        $contact->Email = $data["Email"];
        $contact->save();
        return redirect("/agent/contacts");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = Contact::where("id",$id)->first();
        $contact->delete();
        return redirect("/agent/contacts");
    }
}
