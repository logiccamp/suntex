@extends('layouts.app')

@section('content')

<div class="Main-Slider">
      <!-- Item -->
      <div class="item item-1">
        <div class="img-fill">
            <div class="text-content text-center">
              <h4 class="m-0">EXPERIENCE THE DIFFERENCE</h4>
              <h6 align="center" style="font-weight: normal; font-size: 15px;" class="text-white text-center text-uppercase w-100">
                Clean Home. Professional Service. Fair Price.
              </h6>
              
              <div class="my-4 mt-5 d-flex justify-content-between mx-auto" style="width: 95%; max-width: 400px">
                <a href="about" class="btn filled-button">READ MORE</a>
                <a href="#requestFeedback" class="btn filled-button bg-white text-primary text-decoration-none">REQUEST QUOTE</a>
              </div>
            </div>
        </div>
      </div>
      <!-- // Item -->
      <!-- Item -->
      <div class="item item-2">
        <div class="img-fill">
            <div class="text-content">
              <h4 class="text-center">WE HAVE THE RIGHT <br>  Property for you</h4>
              <h6 class="text-center text-white">Find your next home!</h6>
              <div class="text-center">
                <a class="text-center filled-button" href="/properties/" >View Offers</a>
              </div>
            </div>
        </div>
      </div>
      <!-- // Item -->
      <!-- Item -->
      <div class="item item-3">
        <div class="img-fill">
            <div class="text-content">
              <h4 class="text-center">Get it delivered to your <br /> doorstep.</h4>
              <h6 class="text-center text-white">BEST | FASTER | CHEAPTER</h6>
              <div class="text-center">
                <a class="text-center filled-button" href="#requestFeedback" >Request Quote</a>
              </div>
            </div>
        </div>
      </div>
      <!-- // Item -->
</div>




<div class="services_tab_panel">
      <div class="container">
        <div class="row gx-0 offset-0 button-group bg-white">
          <div class="col-md-4 bg-white py-2">
            <button class="services_panel_btn shadow-sm btn active cleaning_btn" onclick="isotope_filter('cleaning')"  id="cleaning" type="button">Cleaning</button>
          </div>
          <div class="col-md-4 bg-white py-2">
            <button class="w-100 services_panel_btn btn shadow-sm logistics_btn" onclick="isotope_filter('logistics')" id="logistics" type="button">Logistics</button>
          </div>
          <div class="col-md-4 bg-white py-2 ">
            <button data-filter=".real-estate" class="btn shadow-sm w-100 services_panel_btn realestate_btn" onclick="isotope_filter('realestate')" class="services_panel_btn w-100" type="button" id="realestate">Real Estate</button>
          </div>
        </div>

        <div class="row grid popup-gallery">
            <div class="col-md-12 eachgrid cleaning_grid active">
              <hr>
                <div class="row gx-2 bg-white my-3">
                    <div class="col-md-6">
                        <img src="assets/images/cleaning-banner.jpg" alt="">
                    </div>

                    <div class="col-md-6">
                      <div class="p-3 m-sm-3">
                        <h3 class="fw-bold">CLEANING SERVICES</h3>
                        <p>
                          We are team of professionals, we are one of the top notch in General cleaning of houses, offices, company and its surroundings for both interior as well as the exterior. 
                        </p>
                      </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 eachgrid logistics_grid inactive">
              <hr>
              <div class="row gx-2 bg-white my-3">
                  <div class="col-md-6">
                      <img src="assets/images/logistics.png" alt="">
                  </div>

                  <div class="col-md-6">
                    <div class="p-3 m-sm-3">
                      <h3 class="fw-bold">LOGISTICS SERVICES</h3>
                      <p>We offer Logistics services that deliver value through a quality service network by planning, implenting, and controlling the movement and storage of goods. We seek ways to improve customer service and satisfaction, reduce distribution and transportation costs, and eliminate factors that cause inefficiency.</p>
                    </div>
                  </div>
              </div>
            </div>

            <div class="col-md-12 eachgrid realestate_grid inactive">
              <hr>
              <div class="row gx-2 bg-white my-3">
                  <div class="col-md-6">
                      <img src="assets/images/real-estate.jpg" alt="">
                  </div>

                  <div class="col-md-6">
                    <div class="p-3 m-sm-3">
                      <h3 >REAL ESTATE</h3>
                      <p>We construct, manage and develop housing and Real Estate project all across the country. The property mraket in Nigeria is developing rapidly and we are fully aware of the business potentials created. We undertake property development and redevelopment with high quality, confortable commercial and residential units. We provide property consultancy services to both private and public sectors.</p>

                      <div class="my-3">
                        <a href="/real-estate" class="btn btn-primary px-4 py-2">EXPLORE</a>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
        </div>
      </div>
    </div>


    <section class="about_us bg-light py-5 h-100" id="section">
      <div class="container">
        <div class="text-center mb-4 pb-4">
          <h3 class="my_h3">About Us</h3>
          
          <br />
        </div>
              <div class="row gx-2 my-3 flex-row-reverse">
                  <div class="col-md-6 d-flex justify-content-center">
                      <img class="img-fluid" src="assets/images/about-us.jpeg" alt="">
                  </div>

                  <div class="col-md-6 mx-auto">
                    <div class="p-3 m-sm-3">
                      <h3 >SENTEX VENTURES</h3>
                      <p>
                        Welcome to <strong>Sentex</strong>, We're dedicated to providing you the very best of service, with an emphasis on , General Cleaning, Logisctics Services, Real Estate Services and General Contractors. <br />
                        Sentext offer a professional yet very personable approach at a competitve rate.
                      </p>
                      
                    </div>
                  </div>
              </div>
      </div>
    </section>


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
                          <a href="#requestFeedback" class="btn btn-primary text-white">Request Quote</a>
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
                        <a href="#requestFeedback" class="btn btn-primary text-white">Request Quote</a>
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

                  <div class="col-md-6 mx-auto my-5 text-center">
                    <a href="services.html" class="btn btn-white bg-light text-dark shadow-sm rounded px-4 py-3" style="font-weight: bold;">Explore All</a>
                  </div>
              </div>
      </div>
    </section>
      
    <div class="contact-information">
      <div class="container">
        <div class="text-center mb-4 pb-4">
          <h3 class="my_h3">Contact Us</h3>
          <br />
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="contact-item">
              <i class="fa fa-phone"></i>
              <h4>Phone</h4>
              <a href="#">+234 802 401 2409</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="contact-item">
              <i class="fa fa-envelope"></i>
              <h4>Email</h4>
              <a href="#">info@sentex.com</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="contact-item">
              <i class="fa fa-map-marker"></i>
              <h4>Location</h4>
              <a>1, Tijani Saka Street, Igbo Olomu, Agric Ikorodu, Lagos Nigeria.</a>
            </div>
          </div>
        </div>
      </div>
    </div>



    <div class="callback-form contact-us" id="requestFeedback" style="background: #232323;">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2 class="text-white">Request a <em>feedback</em></h2>
            </div>
          </div>
          <div class="col-md-12">
            <div class="contact-form">
              <form id="contact" action="" method="get">
                <div class="row">
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="filled-button">Send Message</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection('content')