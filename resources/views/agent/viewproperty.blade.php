@extends('layouts.agent')

@section('agentcontent')
<section class="section">

<div class="row">
    <div class="container-fluid">
        <div class="block-header">
            <h2>View Property</h2>
        </div>
        <div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card p-3 rounded">
            <form action="{{ route('addproperty1') }}" method="POST">
                @csrf
                <div class="header">
                    <h5 class="color_primary">Property Information </h5>
                </div>
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input name="caption" value="{{ $property->caption }}" disabled type="text" class="form-control">
                                    <label class="form-label">Property Name </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input disabled value="{{ $property->busstop }}" name="busstop" type="text" class="form-control">
                                    <label  class="form-label">Nearest Bus-Stop (Location)</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group"><span> <small class="text-danger"></small></span>
                                <div class="form-line">
                                <p class="form-control"> {{ $property->address }} </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="form-line">
                                    <p class="form-control" style="min-height: 30vh"> {{ $property->description }} </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                        <div class="form-group">
                            <a href="#?" class="btn btn-icon">Edit <span class="fa fa-arrow-right"></span></a>
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

<div class="row">
    <div class="container-fluid">
        
        <form action="{{ route('addproperty2') }}" method="POST">
            @csrf
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                
                <div class="card p-3 rounded">
                    <div class="body">
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <h5 class="card-inside-title">Additional Information</h5>
                            <div class="demo-radio-button my-4">
                                <input name="tag" type="radio" id="radio_1" {{$property->tag == 'For Rent' ? 'checked disabled' : 'disabled'}} class="radio-col-light-blue" value="For Rent">
                                <label for="radio_1">For Rent</label>
                                <input name="tag" type="radio" id="radio_2" {{$property->tag == 'For Sale' ? 'checked disabled' : 'disabled'}} class="radio-col-light-blue" value="For Sale">
                                <label for="radio_2">For Sale</label>
                            </div>
                        </div>

                        <div class="col-md-6 my-2 mt-3">
                            <div class="demo-radio-button">
                                <label for="radio_1">Select Type</label>
                                <p class="form-control">{{ $property->type }}</p>
                            </div>
                        </div>


                        <div class="col-md-6 my-2 mt-3">
                            <div class="demo-radio-button">
                                <div class="form-line">
                                    <label class="form-label">Price / Rent per Year</label>
                                    <p class="form-control">N {{ number_format($property->price, 2) }}</p>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                    
                    <div class="row">
                        <div class="col-md-4 my-2 mt-3">
                            <div class="demo-radio-button">
                                <div class="form-line">
                                    <label class="form-label">State</label>
                                    <p class="form-control">{{ $property->state }}</p>                                        
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 my-2 mt-3">
                            <div class="demo-radio-button">
                                <div class="form-line">
                                    <label class="form-label">City</label>
                                    <p class="form-control">{{ $property->city }}</p>                                        
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 my-2 mt-3">
                            <div class="demo-radio-button">
                                <div class="form-line">
                                    <label class="form-label">Country</label>
                                    <input disabled type="text" class="form-control form-select" value="Nigeria">
                                    <input type="text" class="form-control form-select" name="country" value="Nigeria" hidden="true">
                                </div>
                            </div>
                        </div>

                        <!-- <div class="col-md-3 col-sm-6">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control">
                                    <label class="form-label">Car Parking</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control">
                                    <label class="form-label">Year Built</label>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="col-sm-12">
                            <hr>
                            <h2 class="card-inside-title">Dimensions</h2>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control">
                                    <label class="form-label">Dining Room</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control">
                                    <label class="form-label">Kitchen</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control">
                                    <label class="form-label">Living Room</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control">
                                    <label class="form-label">Master Bedroom</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control">
                                    <label class="form-label">Bedroom 2</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control">
                                    <label class="form-label">Other Room</label>
                                </div>
                            </div>
                        </div>
                            -->
                    </div>

                    <div class="row clearfix my-4">
                        <div class="col-sm-12">
                            <a href="#?step2" class="btn btn-raised g-bg-blue">Edit</a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>  
        </form>
        </div>
</div>
<div class="row">
          <div class="container-fluid">
              
              <div class="row clearfix">
              <div class="col-lg-12 col-md-12 col-sm-12">
                
    <div class="card p-3 rounded">
    <div class="body">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <a class="text-muted" href="#?editimage">Edit</a>
                <img src="/storage/{{$property->image}}" class="img-fluid w-100" alt="">
            </div>
            <div class="row clearfix">
            </div>

            </div>
        </div>
        </div>
    </div>  
    </div>
</div>


<div class="row clearfix my-3">
    @foreach ($property->images as $image)
    <div class="col-xs-6 col-md-3">
        <img src="/storage/{{$image->imagePath}}" alt="" class="w-100 img-fluid img-thumbnail">
        <div>
            <form method="POST" action="{{ route('propertyimage.delete', $image->id) }}">
                @csrf
                <input type="text" value="{{ $property->property_id }}" name="propertyid" hidden>
                <button type="submit" class="btn btn-link g-bg-blue">Delete</button>
            </form>
        </div>
    </div>
    @endforeach
    <div class="col-12">
        <a href="#?add">Add Images</a>
    </div>
</div>
</section>
@endsection('agentcontent')