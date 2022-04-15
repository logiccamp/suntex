@extends('layouts.admin')

@section('agentcontent')
<div class="page_header">
    <h3 class="text-dark">Agent Profile</h3>
</div>

<section class="section">
    
    <div class="container">
        <div class="row clearfix my-4">
            <div class="col-xl-6 col-lg-7 col-md-12">
                <div class="card profile-header">
                    <div class="body">
                        <div class="row p-2 py-3">
                            @if ($agent->agentprofile != null)
                            <div class="col-lg-4 col-md-4 col-12">
                                @if($agent->agentprofile->profilepic == null || $agent->agentprofile->profilepic == "")
                                <div class="profile-image float-md-right"> <img src="/agents/assets/img/blog/img01.png" alt=""> </div>
                                @else
                                <div class="profile-image float-md-right"> <img src="/storage/{{$agent->agentprofile->profilepic}}" alt=""> </div>
                                @endif
                            </div>
                            @else
                            <div class="profile-image float-md-right"> <img src="/agents/assets/img/blog/img01.png" alt=""> </div>
                            @endif
                            <div class="col-lg-8 col-md-8 col-12">
                                <h4 class="mt-0 mb-0 text-uppercase color_black"><strong> {{$agent->firstname}} {{$agent->lastname}}</strong></h4>
                                <span class="job_post color_black">Agent</span>
                                @if ($agent->agentprofile != null)
                                <p class="m-0 color_black">{{$agent->agentprofile->address}}</p>
                                @endif
                                <p class="color_black">{{$agent->email}}</p>
                                <div class="d-flex">
                                    @if ($agent->agent_status == "verified")
                                    <form action="{{route('updateAgent', $agent->id)}}" method="POST">
                                        @csrf
                                        <input hidden value="blocked" name="status" />
                                        <button class="btn filled-button bg-danger">Block</button>
                                    </form>
                                    @elseif ($agent->agent_status == "blocked")
                                    <form action="{{route('updateAgent', $agent->id)}}" method="POST">
                                        @csrf
                                        <input hidden value="verified" name="status" />
                                        <button class="btn filled-button">Allow</button>
                                    </form>
                                    @else
                                    <form action="{{route('updateAgent', $agent->id)}}" method="POST">
                                        @csrf
                                        <input hidden value="verified" name="status" />
                                        <button class="btn filled-button bg-danger">Approve</button>
                                    </form>
                                    @endif

                                    @if ($agent->agent_status == "verified")
                                    <button class="btn btn-link text-success">Active</button>
                                    @elseif ($agent->agent_status == "blocked")
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


            <div class="col-xl-6 col-lg-5 col-md-12">
                <div class="card p-3">
                    <ul class="row profile_state list-unstyled">
                        <li class="col-lg-4 col-md-4 col-6">
                            <div class="body m-2 text-center">
                            <i data-feather="compass" class=" text-success"></i>
                                <h5 class="mb-0 mt-1 number count-to" data-from="0" data-to="2365" data-speed="3000" data-fresh-interval="700">{{$agent->properties->count()}}</h5>
                                <small>Properties</small>
                            </div>
                        </li>
                        <li class="col-lg-4 col-md-4 col-6">
                            <div class="body m-2 text-center">
                                <i class="zmdi zmdi-thumb-up col-blue" data-feather="download-cloud"></i>
                                <h5 class="mb-0 mt-1 number count-to" data-from="0" data-to="1203" data-speed="1000" data-fresh-interval="700">{{$agent->AgentDeals->count()}}</h5>
                                <small>Deals</small>
                            </div>
                        </li>
                        <li class="col-lg-4 col-md-4 col-6">
                            <div class="body m-2 text-center">
                                <i class="zmdi zmdi-comment-text col-red" data-feather="compass"></i>
                                <h5 class="mb-0 mt-1 number count-to" data-from="0" data-to="324" data-speed="1000" data-fresh-interval="700">{{$agent->agent_status}}</h5>
                                <small>Status</small>
                            </div>
                        </li>
                        <li class="col-lg-4 col-md-4 col-6">
                            <div class="body m-2 text-center">
                                <i data-feather="compass" class="col-yellow"></i>
                                <h5 class="mb-0 mt-1 number count-to" data-from="0" data-to="1980" data-speed="1000" data-fresh-interval="700">1980</h5>
                                <small>Profile Views</small>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
            

        </div>
        <div class="row clearfix">
            @if ($agent->agentprofile)
            <div class="col-lg-6 col-md-12">
                <div class="card p-3">
                    <ul class="nav nav-tabs">
                        <li class="nav-item"><a class="nav-link active color_black" data-toggle="tab" href="#about">About</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane body active" id="about">
                            <small class="text-muted">Email address: </small>
                            <p class="color_black">{{$agent->email}}</p>
                            <hr>
                            
                            <small class="text-muted">Mobile: </small>
                            <p class="color_black">+ {{$agent->agentprofile->ext . " " . $agent->agentprofile->tel}}</p>
                            <hr>
                            <small class="text-muted">Birth Date: </small>
                            <p class="mb-0 color_black"> {{$agent->agentprofile->dob . "th " . $agent->agentprofile->mob . " " . $agent->agentprofile->yob}}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @if ($agent->agentprofile)
            <div class="col-lg-6 col-md-12">
                <div class="card p-3">
                    <ul class="nav nav-tabs">
                        <li class="nav-item"><a class="nav-link active color_black" data-toggle="tab" href="#selfie">Selfie</a></li>
                        <li class="nav-item"><a class="nav-link color_black" data-toggle="tab" href="#id">Identity</a></li>
                        <li class="nav-item"><a class="nav-link color_black" data-toggle="tab" href="#verification">Verification</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane body active" id="selfie">
                        <img class="img-fluid w-100" src="/storage/{{$agent->agentprofile->profilepic}}" />
                        </div>


                        <div class="tab-pane body" id="id">
                        <img class="img-fluid w-100" src="/storage/{{$agent->agentprofile->idphoto}}" />
                        </div>



                        <div class="tab-pane body" id="verification">
                            <img class="img-fluid w-100" src="/storage/{{$agent->agentprofile->idowner}}" />
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</section>

@endsection('agentcontent')
