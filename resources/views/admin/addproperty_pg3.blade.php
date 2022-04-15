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
                <form action="{{ route('addproperty3', $property->property_id) }}" id="frmFileUpload" class="dropzone m-b-15 m-t-15 dz-clickable" method="post" enctype="multipart/form-data">
                @csrf
                  <label for="input" class="dz-message">
                      <div class="drag-icon-cph"> <i class="material-icons">touch_app</i> </div>
                      <h3>Click to upload the property picture.</h3>
                  </label>
                  <input type="file" name="mainImage" hidden id="input">
                  <div class="col-sm-12">
                      <button type="submit" class="btn btn-raised g-bg-blue">Submit</button>
                      <button type="reset" class="btn btn-raised">Cancel</button>
                  </div>
                </form>
                </div>
            </div>
            <div class="row clearfix">
            </div>
            
  </div>
  </div>
              </div>
            </div>  
            </div>
          </div>
        </section>
@endsection('agentcontent')