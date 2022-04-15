@extends('layouts.agent')

@section('agentcontent')

<section class="section bg-white p-3">
    <loader-component></loader-component>
<section class="content profile-page">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <!-- <h2 class="color_black">Update Profile</h2> -->
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

        </div>
        <div class="row clearfix">
            <div class="col-lg-10 col-md-12 my-5 color_black">
                <h3>Update Profile</h3>
                <update-profile :id="{{auth()->user()->id}}"></update-profile>
            </div>
        </div>
    </div>
</section>
</section>
@endsection('agentcontent')
