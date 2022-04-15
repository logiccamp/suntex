@extends('layouts.real')

@section('realcontent')
    <div class="Main-Slider" >
    
      <div class="item item-2" style="height: 50vh !important;" >
        <div class="img-fill" style="height: 50vh !important; background: url(/storage/{{$propertyp->image}}) no-repeat center; background-size: cover">
            <div class="text-content">
              <h4 class="text-white m-0">{{$propertyp->caption}}</h4>
              <span class="text-white fw-600">{{$propertyp->type}}  /  {{$propertyp->tag}}  </span>
            </div>
        </div>
      </div>
    </div>
    <div class="services">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div id="mainPicture">
              <img src="/storage/{{$propertyp->image}}" alt="" class="img-fluid wc-image">
            </div>

            <br>
            <div class="row">
              @foreach ( $propertyp->images as $image )
              <a class="col-sm-4 col-6" onclick="switchImage('{{ $image->imagePath }}')">
                <div>
                  <img src="/storage/{{ $image->imagePath }}" alt="" class="img-fluid">
                </div>
                <br>
              </a>
              @endforeach
            </div>
            

            <br>
          </div>

          <div class="col-md-5">
            <form action="/properties" method="POST" class="form">
            @csrf
              <ul class="list-group list-group-flush">
               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Type</span>

                         <strong class="pull-right">{{$propertyp->type}}</strong>
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Bedroom</span>

                         <strong class="pull-right">4</strong>
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Bathroom</span>

                         <strong class="pull-right">4</strong>
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Floor area</span>

                         <strong class="pull-right">80 sq m</strong> 
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Country</span>

                         <strong class="pull-right">United Kingdom</strong>
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">State</span>

                         <strong class="pull-right">{{ $propertyp->state }}</strong>
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">City</span>

                         <strong class="pull-right">{{ $propertyp->state }}</strong>
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Zip code</span>

                         <strong class="pull-right">{{ $propertyp->postalCode }}</strong>
                    </div>
               </li>
              </ul>

              <div class="my-3 text-center">
                <input type="text" hidden name="property" value="{{$propertyp->id}}">
                <button type="submit" class="btn filled-button">ADD TO FAVOURITES</button>
              </div>
            </form>
            <br>
          </div>
        </div>

        <br>

        <div class="tabs-content" style="display: block;">
          <h4>Description</h4>
          <p>{{ $propertyp->description }}</p>

        </div>

        <br>

        <div class="row">
          <div class="col-lg-9">
            <div class="tabs-content" style="display: block;">
              <h4>Map</h4>

              <img src="assets/images/map.jpg" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-lg-3">
            <div class="tabs-content">
              <h4>Contact Details</h4>

              <p>
                <span>Name</span>
              
                <br>
              
                <strong>{{$propertyp->user->firstname}} {{$propertyp->user->lastname}}</strong>
              </p>
              
              <p>
                <span>Phone</span>
              
                <br>
                
                <strong>
                  <a href="tel:123-456-789">{{$propertyp->user->agentprofile->ext}}{{$propertyp->user->agentprofile->tel}}</a>
                </strong>
              </p>
              
              
              <p>
                <span>Email</span>
              
                <br>
                
                <strong>
                  <a href="mailto:john@carsales.com">{{$propertyp->user->email}}</a>
                </strong>
              </p>
            </div>
          </div>
        </div>

        <br>



        <br>
        <br>
        <br>
      </div>
    </div>
@endsection('realcontent')