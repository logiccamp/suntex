<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!auth()->user()){
            return redirect("/management/admin/login");
        }
        $agents = User::where("usertype", "agent")->where("agent_status", "!=", "")->orderBy("id", 'DESC')->get();
        return view("admin.agents", ["agents"=>$agents]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (!auth()->user()){
            return redirect("/management/admin/login");
        }
        $agent = User::where("id", $id)->first();
        return view("admin.agentshow", ["agent"=>$agent]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $agent = User::where("id", $id)->first();
        $data = $this->validate($request, [
            "status" => ""
        ]);

        $agent->agent_status = $data["status"];
        $agent->save();
        return redirect("/management/agent/".$agent->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function Verified()
    {
        if (!auth()->user()){
            return redirect("/management/admin/login");
        }
        $agents = User::where("usertype", "agent")->where("agent_status", "verified")->orderBy("id", 'DESC')->get();
        return view("admin.agentsVerified", ["agents"=>$agents]);
    }

    public function Blocked()
    {
        if (!auth()->user()){
            return redirect("/management/admin/login");
        }
        $agents = User::where("usertype", "agent")->where("agent_status", "blocked")->orderBy("id", 'DESC')->get();
        return view("admin.agentsBlocked", ["agents"=>$agents]);
    }

    public function Pending()
    {
        if (!auth()->user()){
            return redirect("/management/admin/login");
        }
        $agents = User::where("usertype", "agent")->where("agent_status", "submitted")->orderBy("id", 'DESC')->get();
        return view("admin.agentsPending", ["agents"=>$agents]);
    }

    public function New()
    {
        if (!auth()->user()){
            return redirect("/management/admin/login");
        }
        $agents = User::where("usertype", "agent")->where("agent_status", "")->orderBy("id", 'DESC')->get();
        return view("admin.agentsNew", ["agents"=>$agents]);
    }
}
