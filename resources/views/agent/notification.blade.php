@extends('layouts.agent')


@section("agentcontent")

<section class="section">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body p-3">
                        <div class="row">
                            <div class="col-md-12">
                                <h4 class="mt-0 mb-20 color_black">{{$mail->subject}}</h4>
                                <hr>
                                <div class="media">
                                    <div class="float-left">
                                        <div class="m-r-20"> <img class="rounded" src="../assets/images/xs/avatar7.jpg" width="60" alt=""> </div>
                                    </div>
                                    <div class="media-body">
                                        <p class="m-b-0">
                                            <strong class="text-muted m-r-5">From:</strong>
                                            <a href="javascript:void(0);" class="text-default">
                                                @if ($mail->sender == 6)
                                                admin@suntex.com
                                                @elseif ($mail->sender == auth()->user()->id)
                                                Me
                                                @endif
                                            </a>
                                            <span class="text-muted text-sm float-right">16:54, 24.04.2017</span>
                                        </p>
                                        <p class="mb-0 color_black">
                                            <strong class="text-muted mr-10">To:</strong>
                                            @if ($mail->to == auth()->user()->id)
                                                Me
                                            @elseif ($mail->to == 6)
                                            admin@suntex.com
                                            @else
                                            {{$mail->to}}
                                            @endif
                                            <small class="text-muted float-right"><i class="zmdi zmdi-attachment m-r-5"></i>(2 files, 89.2 KB)</small>
                                        </p>
                                        <!-- <p class="mb-0 color_black">
                                            <strong class="text-muted m-r-10">CC:</strong><a href="javascript:void(0);">timhank@gmail.com</a>, <a href="javascript:void(0);">timhank@gmail.com</a>
                                        </p> -->
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="col-md-12 color_black">
                                <p>{{$mail->message}}</p>
                            </div>
                            <div class="col-md-12">
                                <span><img src="../assets/images/image2.jpg" class="img-thumbnail m-t-10" width="250" alt=""></span>
                                <span><img src="../assets/images/image3.jpg" class="img-thumbnail m-t-10" width="250" alt=""></span>
                            </div>                   
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
</section>
@endsection('agentcontent')