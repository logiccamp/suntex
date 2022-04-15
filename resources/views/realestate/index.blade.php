@extends('layouts.real')

@section('realcontent')
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
  </div>

  <search-component ></search-component>

    <div class="services">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Featured <em>Properties</em></h2>
              <!-- <span>Aliquam id urna imperdiet libero mollis hendrerit</span> -->
            </div>
          </div>
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

          <div class="col-12 text-center py-5">
            <a href="/properties" class="btn btn-primary filled-button bg-transparent text-success">View All</a>
          </div>
        </div>
      </div>
    </div>

    <div class="fun-facts">
      <div class="container">
        <div class="more-info-content">
          <div class="row">
            <div class="col-md-6">
              <div class="left-image">
                <img src="assets/images/estate_real.jpeg" class="img-fluid" alt="">
              </div>
            </div>
            <div class="col-md-6 align-self-center">
              <div class="right-content">
                <span>Who we are</span>
                <h2>Get to know about <em>SUNTEX</em></h2>
                <p>We construct, manage and develop housing and Real Estate project all across the country. The property mraket in Nigeria is developing rapidly and we are fully aware of the business potentials created. We undertake property development and redevelopment with high quality, confortable commercial and residential units.</p>
                <a href="/about" class="filled-button">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="team-section mt-130 pb-100" style="display: none;">
      <div class="container">
          <div class="row mt-30">
              <div class="col-md-8 offset-md-2 text-center">
                  <div class="section-title v1">
                      <p>Ready to serve you the best</p>
                      <h2>Meet our Agents</h2>
                  </div>
              </div>
              <div class="col-md-12">
                  <div class="team-wrapper swiper-container swiper-container-horizontal">
                      <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(-431px, 0px, 0px);"><div class="swiper-slide swiper-slide-duplicate swiper-slide-prev" style="width: 381px; margin-right: 50px;" data-swiper-slide-index="4">
                              <div class="single-team-member v2">
                                  <a href="single-agent.html"><img src="images/agents/agent_8.jpg" alt="Image"></a>
                                  <div class="single-team-info">
                                      <h4><a href="single-agent.html">Boris Baker</a></h4>
                                      <span>Real Estate Agent</span>
                                      <div class="contact-info">
                                          <div class="icon">
                                              <i class="fas fa-phone-alt"></i>
                                          </div>
                                          <div class="text"><a href="tel:44321445 678">+44 321 445 678</a></div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="swiper-slide swiper-slide-active" style="width: 381px; margin-right: 50px;" data-swiper-slide-index="0">
                              <div class="single-team-member v2">
                                  <a href="single-agent.html"><img src="images/agents/agent_1.jpg" alt="Image"></a>
                                  <div class="single-team-info">
                                      <h4><a href="single-agent.html">Tony Stark</a></h4>
                                      <span>Real Estate Agent</span>
                                      <div class="contact-info">
                                          <div class="icon">
                                              <i class="fas fa-phone-alt"></i>
                                          </div>
                                          <div class="text"><a href="tel:44078767595">+44 765 342 312</a></div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="swiper-slide swiper-slide-next" style="width: 381px; margin-right: 50px;" data-swiper-slide-index="1">
                              <div class="single-team-member v2">
                                  <a href="single-agent.html">
                                      <img src="images/agents/agent_2.jpg" alt="Image">
                                  </a>
                                  <div class="single-team-info">
                                      <h4><a href="single-agent.html">Bob Haris</a></h4>
                                      <span>Sales Executive</span>
                                      <div class="contact-info">
                                          <div class="icon">
                                              <i class="fas fa-phone-alt"></i>
                                          </div>
                                          <div class="text"><a href="tel:44078767595">+44 078 767 595</a></div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="swiper-slide" style="width: 381px; margin-right: 50px;" data-swiper-slide-index="2">
                              <div class="single-team-member v2">
                                  <a href="single-agent.html"><img src="images/agents/agent_3.jpg" alt="Image"></a>
                                  <div class="single-team-info">
                                      <h4><a href="single-agent.html">Jim Karry</a></h4>
                                      <span>Real Estate Broker</span>
                                      <div class="contact-info">
                                          <div class="icon">
                                              <i class="fas fa-phone-alt"></i>
                                          </div>
                                          <div class="text"><a href="tel:44055847538">+44 055 847 538</a></div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="swiper-slide" style="width: 381px; margin-right: 50px;" data-swiper-slide-index="3">
                              <div class="single-team-member v2">
                                  <a href="single-agent.html"><img src="images/agents/agent_4.jpg" alt="Image"></a>
                                  <div class="single-team-info">
                                      <h4><a href="single-agent.html">Alfred Jhon</a></h4>
                                      <span>Sales Executive</span>
                                      <div class="contact-info">
                                          <div class="icon">
                                              <i class="fas fa-phone-alt"></i>
                                          </div>
                                          <div class="text"><a href="tel:44055847538">+44 078 767 598</a></div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="swiper-slide swiper-slide-duplicate-prev" style="width: 381px; margin-right: 50px;" data-swiper-slide-index="4">
                              <div class="single-team-member v2">
                                  <a href="single-agent.html"><img src="images/agents/agent_8.jpg" alt="Image"></a>
                                  <div class="single-team-info">
                                      <h4><a href="single-agent.html">Boris Baker</a></h4>
                                      <span>Real Estate Agent</span>
                                      <div class="contact-info">
                                          <div class="icon">
                                              <i class="fas fa-phone-alt"></i>
                                          </div>
                                          <div class="text"><a href="tel:44321445 678">+44 321 445 678</a></div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" style="width: 381px; margin-right: 50px;" data-swiper-slide-index="0">
                              <div class="single-team-member v2">
                                  <a href="single-agent.html"><img src="images/agents/agent_1.jpg" alt="Image"></a>
                                  <div class="single-team-info">
                                      <h4><a href="single-agent.html">Tony Stark</a></h4>
                                      <span>Real Estate Agent</span>
                                      <div class="contact-info">
                                          <div class="icon">
                                              <i class="fas fa-phone-alt"></i>
                                          </div>
                                          <div class="text"><a href="tel:44078767595">+44 765 342 312</a></div>
                                      </div>
                                  </div>
                              </div>
                          </div></div>
                      <div class="slider-btn v2 team_next" tabindex="0" role="button" aria-label="Next slide"><i class="lnr lnr-arrow-right"></i></div>
                      <div class="slider-btn v2 team_prev" tabindex="0" role="button" aria-label="Previous slide"><i class="lnr lnr-arrow-left"></i></div>
                  <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
              </div>
          </div>
      </div>
  </div>
    <div class="testimonials" style="display: none;">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>What they say <em>about us</em></h2>
              <span>testimonials from our greatest clients</span>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-testimonials owl-carousel">
              
              <div class="testimonial-item">
                <div class="inner-content">
                  <h4>George Walker</h4>
                  <span>Chief Financial Analyst</span>
                  <p>"Nulla ullamcorper, ipsum vel condimentum congue, mi odio vehicula tellus, sit amet malesuada justo sem sit amet quam. Pellentesque in sagittis lacus."</p>
                </div>
                <img src="http://placehold.it/60x60" alt="">
              </div>
              
              <div class="testimonial-item">
                <div class="inner-content">
                  <h4>John Smith</h4>
                  <span>Market Specialist</span>
                  <p>"In eget leo ante. Sed nibh leo, laoreet accumsan euismod quis, scelerisque a nunc. Mauris accumsan, arcu id ornare malesuada, est nulla luctus nisi."</p>
                </div>
                <img src="http://placehold.it/60x60" alt="">
              </div>
              <div class="testimonial-item">
                <div class="inner-content">
                  <h4>David Wood</h4>
                  <span>Chief Accountant</span>
                  <p>"Ut ultricies maximus turpis, in sollicitudin ligula posuere vel. Donec finibus maximus neque, vitae egestas quam imperdiet nec. Proin nec mauris eu tortor consectetur tristique."</p>
                </div>
                <img src="http://placehold.it/60x60" alt="">
              </div>
              
              <div class="testimonial-item">
                <div class="inner-content">
                  <h4>Andrew Boom</h4>
                  <span>Marketing Head</span>
                  <p>"Curabitur sollicitudin, tortor at suscipit volutpat, nisi arcu aliquet dui, vitae semper sem turpis quis libero. Quisque vulputate lacinia nisl ac lobortis."</p>
                </div>
                <img src="http://placehold.it/60x60" alt="">
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection('realcontent')