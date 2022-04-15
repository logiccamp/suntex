@extends('layouts.admin')

@section('agentcontent')
<section class="section">
          <div class="row">
          <div class="container-fluid">
              <div class="block-header">
                  <h2>{{ $property->caption }}</h2>
              </div>
              <div class="row clearfix">
              <div class="col-lg-12 col-md-12 col-sm-12">
<div class="card p-3 rounded">
    <div class="body">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <form action="{{ route('addproperty4', $property->property_id) }}" id="frmFileUpload" class="dropzone m-b-15 m-t-15 dz-clickable" method="post" enctype="multipart/form-data">
                @csrf
                  <label for="input" class="dz-message">
                      <div class="drag-icon-cph"> <i class="material-icons">touch_app</i> </div>
                      <h3>Click to add more Images </h3>
                  </label>
                  <input type="file" name="mainImages" accept="image" hidden id="input">
                  <div class="col-sm-12">
                      <button type="submit" class="btn btn-raised g-bg-blue">Submit</button>
                      <a href="/agent" class="btn btn-raised">Skip</a>
                  </div>
                </form>
                </div>
            </div>
            <div class="row clearfix">
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
            </div>
            <div class="my-3 text-center">
                <a class="btn btn-success" href="/agent">Continue</a>
            </div>
        </div>
  </div>
              </div>
            </div>  
            </div>
          </div>
        </section>
@endsection('agentcontent')