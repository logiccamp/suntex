@extends('layouts.app')

@section('content')

    <!-- Page Content -->
    <div class="banner_slider" style="height: 400px;">
      <div class="page-heading services_bg header-text text-left">
        <div class="container">
              <h1 class="m-0">OUR SERVICES</h1>
              <span class="d-flex">
                <a href="./" class="text-white">Home /  </a> &nbsp;
                <span class="text-primary">Services</span>
            </span>

        </div>
      </div>
    </div>

    <section class="about_us py-5 h-100" id="section">
      <div class="container">
        <div class="text-center mb-4 pb-4">
          <h3 class="my_h3">Our Services</h3>
          <p class="text-muted">Your comfort is our motto.</p>
          <br />
        </div>
              <div class="row gx-2 my-3 flex-column">
                  <div class="col-md-6 mx-auto d-flex align-items-center flex-column">
                      <img class="img-fluid" src="assets/images/cleaning-banner.jpg" alt="">
                      <div class="my-4">
                        <h3 class="text-center my_h6">Cleaning Services</h3>
                        <div class="my-2 text-center">
                          <a href="#" class="btn btn-primary text-white">Request Quote</a>
                        </div>
                      </div>
                  </div>

                  <div class="col-md-6 mx-auto my-5">
                    <hr>
                  </div>

                  <div class="col-md-6 mx-auto d-flex align-items-center flex-column">
                    <img class="img-fluid" src="assets/images/delivery.jpeg" alt="">
                    <div class="my-4">
                      <h3 class="text-center my_h6">Logistics Services</h3>
                      <div class="my-2 text-center">
                        <a href="#" class="btn btn-primary text-white">Request Quote</a>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6 mx-auto my-5">
                    <hr>
                  </div>

                  <div class="col-md-6 mx-auto d-flex align-items-center flex-column">
                    <img class="img-fluid" src="assets/images/estate_real.jpeg" alt="">
                    <div class="my-4">
                      <h3 class="text-center my_h6">Real Estaste</h3>
                      <div class="my-2 text-center">
                        <a href="#" class="btn btn-primary text-white">View Offers</a>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6 mx-auto my-5">
                    <hr>
                  </div>

                  <div class="col-md-6 mx-auto d-flex align-items-center flex-column">
                    <img class="img-fluid" src="assets/images/house-developer.jpg" alt="">
                    <div class="my-4">
                      <h3 class="text-center my_h6">Housing Developer</h3>
                      
                    </div>
                  </div>


                  <div class="col-md-6 mx-auto my-5">
                    <hr>
                  </div>

                  <div class="col-md-6 mx-auto d-flex align-items-center flex-column">
                    <img class="img-fluid" src="assets/images/general-contractor.jpg" alt="">
                    <div class="my-4">
                      <h3 class="text-center my_h6">General Contractors </h3>
                      
                    </div>
                  </div>


              </div>
      </div>
    </section>
      

@endsection('content')