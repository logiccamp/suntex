@extends('layouts.agent')

@section('agentcontent')
<section class="section bg-white p-3">
<section class="content profile-page">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2 class="color_black">My Profile</h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12 color_black">                
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item color_black"><a href="/agent/"><i class="zmdi zmdi-home"></i> Home</a></li>
                    <li class="breadcrumb-item active">Profile</li>
                </ul>                
            </div>
        </div>
    </div>    
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xl-6 col-lg-7 col-md-12">
                <div class="card profile-header">
                    <div class="body">
                        <div class="row p-2">
                            @if (auth()->user()->agentprofile != null)
                            <div class="col-lg-4 col-md-4 col-12">
                                @if(auth()->user()->agentprofile->profilepic == null || auth()->user()->agentprofile->profilepic == "")
                                <div class="profile-image float-md-right"> <img src="/agents/assets/img/blog/img01.png" alt=""> </div>
                                @else
                                <div class="profile-image float-md-right"> <img src="/storage/{{auth()->user()->agentprofile->profilepic}}" alt=""> </div>
                                @endif
                            </div>
                            @else
                            <div class="profile-image float-md-right"> <img src="/agents/assets/img/blog/img01.png" alt=""> </div>
                            @endif
                            <div class="col-lg-8 col-md-8 col-12">
                                <h4 class="mt-0 mb-0 text-uppercase color_black"><strong> {{auth()->user()->firstname}} {{auth()->user()->lastname}}</strong></h4>
                                <span class="job_post color_black">Agent</span>
                                <p class="color_black">{{auth()->user()->email}}</p>
                                <div>
                                    <a class="btn filled-button" href="/agent/profile/update">Update</a>
                                    <button class="btn filled-button bg-danger">Deactivate</button>
                                    @if (auth()->user()->agent_status == "verified")
                                    <button class="btn btn-link text-success">Active</button>
                                    @elseif (auth()->user()->agent_status == "blocked")
                                    <button class="btn btn-link text-danger">Blocked</button>
                                    @else
                                    <button class="btn btn-link text-warning">Pending Approval</button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
            
            @if (auth()->user()->agent_status == "verified")
            <div class="col-md-12 col-lg-5">
                <div class="badge badge-success">Your account has been verified successfully</div>
            </div>
            @elseif (auth()->user()->agent_status == "blocked")
            <div class="col">
                <div class="badge badge-danger">Your account has been blocked, please contact the management.</div>
            </div>
            @else
            <div class="col h-100">
                <div class="badge badge-secondary">Account verification takes 15 to 30mins after uploading necessary documents.</div>
            </div>
            @endif                
        </div>
        <div class="row clearfix">
            @if (auth()->user()->agentprofile)
            <div class="col-lg-4 col-md-12">
                <div class="card p-3">
                    <ul class="nav nav-tabs">
                        <li class="nav-item"><a class="nav-link active color_black" data-toggle="tab" href="#about">About</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane body active" id="about">
                            <small class="text-muted">Email address: </small>
                            <p class="color_black">{{auth()->user()->email}}</p>
                            <hr>
                            
                            <small class="text-muted">Mobile: </small>
                            <p class="color_black">+ {{auth()->user()->agentprofile->ext . " " . auth()->user()->agentprofile->tel}}</p>
                            <hr>
                            <small class="text-muted">Birth Date: </small>
                            <p class="mb-0 color_black"> {{auth()->user()->agentprofile->dob . "th " . auth()->user()->agentprofile->mob . " " . auth()->user()->agentprofile->yob}}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            <div class="col-lg-8 col-md-12">

            </div>
        </div>
    </div>
</section>
</section>
@endsection('agentcontent')
