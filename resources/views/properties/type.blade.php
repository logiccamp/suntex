@extends('layouts.real')

@section('realcontent')
@csrf
    <div class="Main-Slider" >
      <!-- Item -->
      <div class="item real_estate" style="text-align: center; width: 100%;">
        <div class="img-fill" style="text-align: center; width: 100%;">
            <div class="text-content text-center" style="text-align: center; width: 100%;">
              <h4 class="text-center">{{$type}}s</h4>
            </div>
        </div>
      </div>
      <!-- // Item -->
      <!-- // Item -->
    </div>

    <search-component></search-component>

    <div class="services">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2> Category : <em> {{$type}}</em></h2>
            </div>
          </div>
          <div class="row" id="properties">
            @foreach ($properties as $property)
            <div class="col-md-4">
              <div class="service-item">
                <img src="/storage/{{$property->image}}" alt="">
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
        <!-- <img src="/assets/images/ajax_loader.gif" alt="" class="img-fluid" style="height: 50px;"> -->
    </div>
    </div>
    
@endsection('realcontent')

    <!-- <script> 
      //  $(window).on('scroll', function() {
      //       if ($(window).scrollTop() >= $(
      //         '#properties').offset().top + $('#properties').outerHeight() - window.innerHeight + 30) {
              
      //           $("#scrollLoader").css({"display":"block"})  
      //           const url = "";
      //           fetch(url, {
      //             headers: {
      //               "Content-Type": "application/json",
      //               "Accetp" : "application/json, text-plain, */*",
      //               "X-CSRF-TOKEN" : token
      //             }
      //           })

      //       }else{
      //         // $("#scrollLoader").css({"display":"none"})
      //       }
      //   });
  </script> -->