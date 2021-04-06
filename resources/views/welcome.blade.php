@extends('layouts.app')

@section('select2')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content')
{{-- <div class="home">
    <div class="container-fluid p-0">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                      <img src="https://res.cloudinary.com/dsfzcj5qk/image/upload/v1601596457/DOZR%20Home%20Banner%20Image%20Update%20Oct%202020/DOZR_Header_Image_Desktop_m9s0a0.jpg" class="d-block w-100" alt="banner">
                  </div>
                </div>
            </div>
    </div>
    <section class="section">
    <div class="container bg-light">
        <div class="mx-auto text-center p-4">
            <h4>What is your real need?</h4>
            <h6>Short Description.</h6>
        </div>
        <div class="row mx-md-n5">
            <div class="col px-md-5"><div class="p-3 border bg-light">Custom column padding</div></div>
            <div class="col px-md-5"><div class="p-3 border bg-light">Custom column padding</div></div>
          </div>
    </div>
    </section>
    <section class="section">
    <div class="container">
        <div class="row p-4">
            <div class="col-6">            
                <h4>What is your real need?</h4>
                <h6>Short Description.</h6>
            </div>
            <div class="col-6"> 
                <div class="">
                    <img src="https://res.cloudinary.com/dsfzcj5qk/image/upload/v1601596457/DOZR%20Home%20Banner%20Image%20Update%20Oct%202020/DOZR_Header_Image_Desktop_m9s0a0.jpg" class="d-block w-100" alt="banner">
                </div>
            </div>
        </div>

    </div>
</section>
</div> --}}
<div class="home">
  <section id="home_1">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item d-flex justify-content-center">
          <img src="../images/default/123_01.jpg" class="d-block w-100" alt="..." />
          <div class="container carousel-caption over_all" data-panel-bounds="true">
            <div class="d-flex flex-row justify-content-center searchbar_overall">
            <form action="/search" method="GET">
              @csrf
              <div class="location">
                <div>
                  <div class="lc_format">
                    <label class="lc_lb" for="bigsearch-query-detached-query">
                      <div class="d-flex flex-column">
                        <div class="searchbar_title">Location</div>
                        <div class="d-flex flex-row">
                          <div class="d-flex" style="padding-right: 10px;align-items: center;">
                                <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="16"
                                height="16"
                                fill="lightgray"
                                class="bi bi-cursor-fill"
                                viewBox="0 0 16 16"
                              >
                                <path
                                  d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103z"
                                />
                              </svg> 

                              {{-- fetch all location --}}
                              <select class="category" name="location" id="">
                                @forelse ($locations as $location)
                                  <option value="{{$location->id}}">{{$location->location_name}}</option>

                                @empty
                                  <option value="">No location available</option>
                                @endforelse
                              </select>
                            </div>      
                          </div>
                        </div>
                      </div>
                    </label>
                  </div>
                </div>
              </div>
              <div class="sepreater"></div>
              <div class="check d-flex flex-row">
                <div class="check_in">
                  <div
                    role="button"
                    tabindex="0"
                    class="inside_check_in"
                    aria-expanded="false"
                    data-testid="structured-search-input-field-split-dates-0"
                  >
                    <div class="guest_area_text">
                      <div class="searchbar_title">From</div>
                      <div class="d-flex flex-row">
                        <div class="d-flex" style="padding-right: 10px;align-items: center;">
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="16"
                            height="16"
                            fill="lightgray"
                            class="bi bi-calendar-plus"
                            viewBox="0 0 16 16"
                          >
                            <path
                              d="M8 7a.5.5 0 0 1 .5.5V9H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V10H6a.5.5 0 0 1 0-1h1.5V7.5A.5.5 0 0 1 8 7z"
                            />
                            <path
                              d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"
                            />
                          </svg>
                        </div>
                        <input class="border-0" type="date" id="inputDate" name="from" required>

                      </div>
                    </div>
                  </div>
                </div>
                <div class="sepreater"></div>
                <div class="check_out">
                  <div
                    role="button"
                    tabindex="0"
                    class="checkout_text"
                    aria-expanded="false"
                    data-testid="structured-search-input-field-split-dates-1"
                  >
                    <div class="guest_area_text">
                      <div class="searchbar_title">To</div>
                      <div class="d-flex flex-row">
                        <div class="d-flex" style="padding-right: 10px;align-items: center;">
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="16"
                            height="16"
                            fill="lightgray"
                            class="bi bi-calendar-minus"
                            viewBox="0 0 16 16"
                          >
                            <path
                              d="M5.5 9.5A.5.5 0 0 1 6 9h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1-.5-.5z"
                            />
                            <path
                              d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"
                            />
                          </svg>
                        </div>
                        <input class="border-0" type="date" id="inputDate" name="to" required>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="sepreater"></div>
              <div class="d-flex flex-row guest">
                <div
                  role="button"
                  tabindex="0"
                  class="guest_area"
                  aria-expanded="false"
                  data-testid="structured-search-input-field-guests-button"
                >
                  <div class="guest_area_text">
                    <div class="searchbar_title">Equipment</div>
                    <div class="d-flex flex-row">
                      <div class="d-flex" style="padding-right: 10px;align-items: center;">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="16"
                          height="16"
                          fill="lightgray"
                          class="bi bi-truck-flatbed"
                          viewBox="0 0 16 16"
                        >
                          <path
                            d="M11.5 4a.5.5 0 0 1 .5.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-4 0 1 1 0 0 1-1-1v-1h11V4.5a.5.5 0 0 1 .5-.5zM3 11a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm1.732 0h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4a2 2 0 0 1 1.732 1z"
                          />
                        </svg>
                      </div>
                        <select class="category" name="category" id="">
                          @foreach ($categoriesForSearch as $category)
                            <option value="{{$category->id}}" >{{$category->category_name}}</option>
                          @endforeach
                        </select>
                    </div>
                  </div>
                </div>
                <div class="search_area">
                  <button
                    class="search_btn"
                    aria-expanded="false"
                    type="submit"
                    data-testid="structured-search-input-search-button"
                  >
                  <a href="#">
                    <div class="d-flex flex-row search_icon">
                      
                      <div class="search_icon_svg">
                        <svg
                          viewBox="0 0 32 32"
                          xmlns="http://www.w3.org/2000/svg"
                          style="
                            display: block;
                            fill: none;
                            height: 16px;
                            width: 16px;
                            stroke: currentcolor;
                            stroke-width: 4px;
                            overflow: visible;
                            color:white;
                          "
                          aria-hidden="true"
                          role="presentation"
                          focusable="false"
                        >
                          <g fill="none">
                            <path
                              d="m13 24c6.0751322 0 11-4.9248678 11-11 0-6.07513225-4.9248678-11-11-11-6.07513225 0-11 4.92486775-11 11 0 6.0751322 4.92486775 11 11 11zm8-3 9 9"
                            ></path>
                          </g>
                        </svg>
                      </div>
                    
                      <div class="search_text">Search</div>
                    </div>
                  </a>
                  </button>
                </div>
              </div>
            </form>
            </div>
          </div><h1 style="position: absolute; bottom: 40%; right:20%; color: #fbb03b; font-weight:700;">THE EQUIPMENT<br></h1><h1 style="position: absolute; bottom: 35%; right:20%; color: white; font-weight:700;">WHEN YOU NEED IT</h1>
        </div>
      </div>
    </div>
  </section>
  <section id="home_4">
    <div class="d-flex flex-column text-center">
      <div class="h4">EQUIPMENT FOR RENT</div>
    </div>
    

    <div class="container">
      <div class="row row-cols-1 row-cols-md-3 g-4">

        @foreach ($categories as $category)
          <div class="col mb-4">
            <div class="card h-100 m-3">
              <img src="/storage/{{$category->image }}" class="card-img-top bg-dark" height="300" alt="...">
              <div class="card-body">
                <h5 class="card-title text-center">{{$category->category_name}}</h5>
              </div>
            </div>
          </div>
        @endforeach
        
      </div>
    </div>




  </section>
  <!-- Seaction#2 -->
  <section id="home_2">
    <div>
      <div class="container d-flex flex-column justify-content-center text-center">
        <div class="h4">FIND MORE <span style="color:#fbb03b">PLACES</span></div>
      </div>
      <div class="container d-flex justify-content-center">
        <div class="col-sm-3 m-3">
          <div class="card">
            <div class="card-body" id="l1">
              <h5 class="card-title">Toronto</h5>
              <p class="card-text">
                24 Renters
              </p>
            </div>
          </div>
        </div>
        {{--  --}}
        <div class="col-sm-3 m-3">
          <div class="card">
            <div class="card-body" id="l2">
              <h5 class="card-title">Ottava</h5>
              <p class="card-text">
                19 Renters
              </p>
            </div>
          </div>
        </div>
        {{--  --}}
        <div class="col-sm-3 m-3">
          <div class="card">
            <div class="card-body" id="l3">
              <h5 class="card-title">Montrel</h5>
              <p class="card-text">
                32 Renters
              </p>
            </div>
          </div>
        </div>
        {{--  --}}
        <div class="col-sm-3 m-3">
          <div class="card">
            <div class="card-body" id="l4">
              <h5 class="card-title">Montrel</h5>
              <p class="card-text">
                15 Renters
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="home_2">
    <div>
      <div class="container d-flex flex-column justify-content-center text-center">
        <div class="h4">EQUIPMEE FOR <span style="color:#fbb03b">CONTRACTORS</span></div>
      </div>
      <div class="container d-flex justify-content-center">

        {{-- First column --}}
        <div class="col-sm-3 m-3">
          <div class="d-flex" style="margin-bottom:1.5em">
            <img src="../images/default/icons/123_38.png" alt="" width="40px" height="40px" class="mr-2">
            <div>
            <h3>PRICE</h3>
            <p>We’ve secured the best rental rates
              in the industry from top quality
              suppliers so that you don’t have to.</p>
            </div>
          </div>
          <div class="d-flex" style="margin-bottom:1.5em">
            <img src="../images/default/icons/123_45.png" alt="" width="40px" height="40px" class="mr-2">
            <div>
            <h3>CONVENIENCE</h3>
            <p>No more wasted time calling around
              to find the equipment you need.
              Instantly view all available
              equipment from the suppliers you
              trust with the click of a button.
              
              </p>
            </div>
          </div>
          <div class="d-flex" style="margin-bottom:1.5em">
            <img src="../images/default/icons/123_52.png" alt="" width="40px" height="40px" class="mr-2">
            <div>
            <h3>LOCAL</h3>
            <p>With over 15,000 rental yards in the
              DOZR network, you can always find a
              rental within close proximity to your
              project.
              
              </p>
            </div>
          </div>
        </div>

        {{-- Image, Second Column --}}
        <div class="col-sm-6 p-3 d-flex justify-content-center">
          <img src="../images/default/123_43.png" alt="" width="393" height="271" class="img-animation pt-5">

        </div>
        {{-- Third Column --}}
        <div class="col-sm-3 m-3">
          <div class="d-flex" style="margin-bottom:1.5em">
            <img src="../images/default/icons/123_35.png" alt="" width="40px" height="40px" class="mr-2">
            <div>
            <h3>SPEED</h3>
            <p>Save time by booking rentals online
              from your phone, tablet or computer
              in just a few clicks.</p>
            </div>
          </div>
          <div class="d-flex" style="margin-bottom:1.5em">
            <img src="../images/default/icons/123_47.png" alt="" width="40px" height="40px" class="mr-2">
            <div>
            <h3>SELECTION</h3>
            <p>Big or small we rent it all. We have a
              wide selection of equipment so you
              can get the job done right the first
              time.
              
              </p>
            </div>
          </div>
          <div class="d-flex" style="margin-bottom:1.5em">
            <img src="../images/default/icons/123_55.png" alt="" width="40px" height="40px" class="mr-2">
            <div>
            <h3>RELIABLE</h3>
            <p>With over 15,000 rental yards in the
              DOZR network, you can always find a
              rental within close proximity to your
              project.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="home_3">
    <div class="container d-flex flex-wrap">
      <div class="col-sm-12 col-md-4 d-flex flex-column w-50">
        <h2>HOW IT WORKS</h2>
        <p>Lorem ipsum dolor sit amet,<br>
          consectetur adipiscing elit, sed<br>
          do eiusmod tempor</p> 
      </div>
      
        <div class="col-sm-12 col-md-8 d-flex justify-content-end flex-wrap">
          <div class="m-3 w-40">
            <div class="icon-text-box box-hover">
              <div class="icon-position"><i class="fas fa-search"></i></div>
              <h6>SEARCH</h6>
              <p>
                Our Customer Service team is here
                to help. Contact Us any time!Our
                Customer Service
              </p>
              <a href="#" class="linkage">Read More</a>
            </div>
          </div>
          <div class=" m-3 w-40">
            <div class="icon-text-box box-hover">
              <div class="icon-position"><i class="fas fa-funnel-dollar"></i></div>
              <h6>COMPARE</h6>
              <p>
                Our Customer Service team is here
                to help. Contact Us any time!Our
                Customer Service
              </p>
              <a href="#" class="linkage">Read More</a>
            </div>
          </div>
          <div class=" m-3 w-40">
            <div class="icon-text-box box-hover">
              <div class="icon-position"><i class="fab fa-servicestack"></i></div>
              <h6>Special title treatment</h6>
              <p>
                Our Customer Service team is here
                to help. Contact Us any time!Our
                Customer Service
              </p>
              <a href="#" class="linkage">Read More</a>
            </div>
          </div>
          <div class=" m-3 w-40">
            <div class="icon-text-box box-hover">
              <div class="icon-position"><i class="fab fa-algolia"></i></div>
              <h6><strong>Special title treatment</strong></h6>
              <p>
                Our Customer Service team is here
                to help. Contact Us any time!Our
                Customer Service
              </p>
              <a href="#" class="linkage">Read More</a>
            </div>
          </div>
      
        
    </div>
    <div class="container d-flex mt-5 position-relative">
      <div class="image-abs-position">
        <img src="../images/default/cranes.png" alt="cranes">
      </div>
    </div>
  </section>
  <section id="home_2">
    <div class="mt-5">
      <div class="container d-flex justify-content-center">

        {{-- First column --}}
        <div class="col-sm-7 m-3">
          <div class="Testimonial" id="first-person">
            <div class="m-3 w-80">
              <div class="shadow p-3 mb-5 pt-6 bg-body rounded">
                <div class="Testimonial-icon-position"><img src="../images/default/1.png" alt="1"></div>
                <h6>Mr.john</h6>
                <p>Enginner</p>
                <p>In my mind the goals are limitless. I just want to grow
                  my business bigger and bigger, and partnering with is
                  the best thing for me to do that.”
                </p>
              </div>
            </div>
          </div>
          <div class="Testimonial2" id="sec-person">
            <div class="m-3 w-80">
              <div class="shadow p-3 mb-5 pt-6 bg-body rounded position-relative">
                <div class="Testimonial-icon-position"><img src="../images/default/2.png" alt="2"></div>
                <h6>Mr.john</h6>
                <p>Enginner</p>
                <p>The way that platform is set-up – it’s risk-free. They
                  take care of the whole process and have an estab-
                  lished team behind them.
                </p>
              </div>
            </div>
          </div>
        </div>

        {{-- Image, Second Column --}}
        <div class="col-sm-5 p-3 d-flex justify-content-center">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="quote-left" class="svg-inline--fa fa-quote-left fa-w-16 position-absolute under-text" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
              <path fill="#fcf7f0" d="M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z">
              </path>
            </svg>
            <div class="up-text">
              <div class="section_title"><h2>OUR SATISFIED CLIENTS</h2></div>
              <p>He folks at are a bunch of friendly, professional
                people that genuinely want to help you and your busi-
                ness succeed.”</p>
              <button type="button" class="btn btn-warning white" id="view-all-reviews">VIEW ALL REVIEWS</button>
            </div>

        </div>

    </div>
  </section>
  <section id="home_7">
    <h2 class="text-center white section_title">CONTACT US</h2>
    <div class="col-sm-12 col-md-12 white">
      <div class="container d-flex space-between">
        <div class="d-flex justify-content-center">
          <div class="white">
            <div class="icon-block center"><i class="fas fa-map-marker-alt d-flex justify-content-center"></i></div>
            <h4>Lorem Ipsum Dummy</h4>
          </div>
        </div>
        <div class="d-flex justify-content-center">
          <div class="white">
            <div class="icon-block center"><i class="fas fa-phone-alt d-flex justify-content-center"></i></div>
            <h4>1-709-697-9571</h4>
          </div>
        </div>
        <div class="d-flex justify-content-center">
          <div class="white">
            <div class="icon-block center"><i class="fas fa-envelope d-flex justify-content-center"></i></div>
            <h4>info@equipmee.com</h4>
          </div>
        </div>
    </div>
  </section>
  <section id="home_8">
    <div class="col-sm-12">
      <h2 class="text-center section_title">Our Blog</h2>
      <div class="container row d-flex space-between">
        <div class="card-group gap-2">
          <div class="card">
              <div class="overlay"></div>
              <div class="card-image card-img-top"></div>
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
          <div class="card">
            <div class="overlay"></div>
            <div class="card-image card-img-top"></div>
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
        <div class="card">
          <div class="overlay"></div>
          <div class="card-image card-img-top"></div>
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
        <div class="card-footer">
          <small class="text-muted">Last updated 3 mins ago</small>
        </div>
      </div>
        </div>
      </div>
    </div>
  </section>
  <section id="home_9">
    <div class="container">
      <div class="col-sm-12 col-md-5">
        <div class="" style="padding-top: 200px 0;">
          <div class="d-flex justify-content-start flex-column">
              <h2>BECOME A SUPPLIER</h2>
              <p>We provide heavy equipment rentals for a wide variety of con-
                tractors in the construction and agricultural industries, including
                general contractors, design-build contractors, sewer & wa-
                ter-main.</p>
              <button type="button" class="btn btn-warning white" id="view-all-reviews"><span>GET START</span></button>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-7">
      </div>
    </div>
  </section>
  <section id="home_10">
      <div class="container white text-center p-3">
        <h2>SUBSCRIBE TO OUR NEWSLETTER</h2>
        <form action="" class="p-3 d-flex">
          <input class="tnp-email" type="email" required="" name="ne" value="" placeholder="Enter Your Email">
          <input class="tnp-submit" type="submit" value="Subscribe Now">
        </form>
        <div id="custom_html-2" class="widget_text widget widget_custom_html">
          <div class="textwidget custom-html-widget">
            <div class="container d-flex justify-content-center p-3 gap-2" id="ftr123">
              <ol><a href="#"><i class="fab fa-facebook-f white inverted"></i></a></ol>
              <ol><a href="#"><i class="fab fa-twitter white inverted"></i></a></ol>
              <ol><a href="#"><i class="fab fa-instagram white inverted"></i></a></ol>
            </div>
          </div>
        </div>
      </div>
  </section>
  <div class="bg-dark white align-middle">
  <div class="row" id="copyright" data-layout="centered">
    <div class="container">
      <div class="col text-center">
          <p style="margin: auto; padding:0.5em;">
          Copyright © 2021 <span>equipmee</span>. All Rights Reserved.			 
          </p>	
      </div><!--/span_5-->
    </div><!--/container-->
  </div>
</div>
</div>
@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js" defer></script>

<script>
  $(document).ready(function() {
    $(".category").select2();
  });
</script>
@endsection