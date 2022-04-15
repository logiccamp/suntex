@extends('layouts.admin')

@section('agentcontent')

<section class="section">
    <div class="row">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Add Property</h2>
        </div>
        <div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card p-3 rounded">
            <form action="{{ route('addproperty1') }}" method="POST">
                @csrf
                <div class="header">
                    <h5 class="color_primary">Basic Information </h5>
                </div>
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <ul class="text-danger">
                                @foreach ($errors->all() as $error)
                                <li >{{$error}}</li>
                                @endforeach
                            </ul>
                            
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input name="caption" type="text" class="form-control">
                                    <label class="form-label">Property Name </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input name="busstop" type="text" class="form-control">
                                    <label  class="form-label">Nearest Bus-Stop (Location)</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group"><span> <small class="text-danger"></small></span>
                                <div class="form-line">
                                    <textarea name="address" rows="4" class="form-control no-resize" placeholder="Property Address"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea name="description" style="height: 40vh !important;" class="form-control textarea" placeholder="Property Description"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                        <div class="form-group">
                            <button class="btn btn-icon">NEXT <span class="fa fa-arrow-right"></span></button>
                        </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        </div>
    </div>  
    </div>
    </div>
</section>
@endsection('agentcontent')