@extends('layouts.real2')

@section('realcontent')
@csrf
<style>
  #endof {
    display: none !important;
  }
</style>
<div class="Main-Slider" >
      <!-- Item -->
      <div class="item real_estate">
        <div class="img-fill">
            <div class="text-content">
              <h4 class="text">The best way to find your perfect home</h4>
              <div class="">
                <a class="text-center filled-button" href="/properties/" >View Offers</a>
              </div>
            </div>
        </div>
      </div>
      <!-- // Item -->
      <!-- // Item -->
    </div>
    <input type="text" id="lastid" value="21" hidden>
    <search-component></search-component>

    <div class="services">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Latest <em>Properties</em></h2>
            </div>
          </div>
          <div class="row" id="properties">
            @foreach ($properties as $property)
            <div class="col-md-4">
              <div class="service-item">
                <img src="storage/{{$property->image}}" alt="">
                <div class="down-content">
                  <h4>{{$property->caption}}</h4>
                  <div class="d-flex justify-content-between">
                    <div style="margin-bottom:10px;">
                      <span><sup>N</sup> {{ number_format($property->price, 2)}}</span>
                    </div>
    
                    <div>
                      <p> {{$property->type}} /  {{$property->tag}} </p>
                    </div>
                  </div>

                  <a href="/properties/{{$property->property_id}}" class="filled-button">View</a>
                </div>
              </div>
              <br>
            </div>
            @endforeach
          </div>
        </div>
      </div>

      <div id="scrollLoader" class="w-100 text-center">
        <img src="/assets/images/ajax_loader.gif" alt="" class="img-fluid" style="height: 50px;">
      </div>
      <div class="text-center text-danger" id="endof" style="display: none">
        No product found
      </div>
    </div>
    
@endsection('realcontent')


