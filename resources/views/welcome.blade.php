<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tchad-Tour</title>
        <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- Styles -->
    
    
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
    <!-- font awsome links-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('scss/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('assets/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/owlcarousel/assets/owl.theme.default.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />
    
    </head>
    <body class="">
        <header>
            <x-header></x-header>
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </header>
        <main>

            <div class="container-fluid container-xxl p-0">
                <div class="owl-carousel  section-1-carousel">
                    <div class="item" style="--background: url('{{asset('images/msg920424135-4281 (1).jpg')}}')">
                        <div class="carousel-item-caption">
                            <h1>Lorem, ipsum dolor sit.</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis ex voluptatum adipisci quis iusto dolorem officiis sit reprehenderit ipsum ab!</p>
                            <a href="#" class="text-decoration-none read-btn p-2 me-2">Book Bow</a><a href="#" class="text-decoration-none book-btn p-2">Learn More</a>
                        </div>
                    </div>
                    <div class="item" style="--background: url('{{asset('images/msg920424135-4288.jpg')}}')">
                        <div class="carousel-item-caption">
                            <h1>Lorem, ipsum dolor sit.</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis ex voluptatum adipisci quis iusto dolorem officiis sit reprehenderit ipsum ab!</p>
                            <a href="#" class="text-decoration-none read-btn p-2 me-2">Learn More</a> <a href="#" class="text-decoration-none book-btn p-2">Book Now</a>
                        </div>
                    </div>
                    <div class="item" style="--background: url('{{asset('images/photo1684229673 (10).jpeg')}}')">
                        <div class="carousel-item-caption">
                            <h1>Lorem, ipsum dolor sit.</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis ex voluptatum adipisci quis iusto dolorem officiis sit reprehenderit ipsum ab!</p>
                            <a href="#" class="text-decoration-none read-btn p-2 me-2">Book Bow</a><a href="#" class="text-decoration-none book-btn p-2">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            
    
            <!-- Service Start -->
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="section-title bg-white text-center px-3">Services</h6>
                        <h1 class="mb-5">Our Services</h1>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item rounded pt-3">
                                <div class="p-4">
                                    <i class="fa fa-3x fa-globe mb-4 "></i>
                                    <h5>WorldWide Tours</h5>
                                    <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="service-item rounded pt-3">
                                <div class="p-4">
                                    <i class="fa fa-3x fa-hotel mb-4"></i>
                                    <h5>Hotel Reservation</h5>
                                    <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="service-item rounded pt-3">
                                <div class="p-4">
                                    <i class="fa fa-3x fa-user mb-4"></i>
                                    <h5>Travel Guides</h5>
                                    <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="service-item rounded pt-3">
                                <div class="p-4 ">
                                    <i class="fa fa-3x fa-cog  mb-4"></i>
                                    <h5>Event Management</h5>
                                    <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <!-- Destination Start -->
            <div class="container-xxl py-5 destination">
                <div class="container">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="section-title bg-white text-center  px-3">Destination</h6>
                        <h1 class="mb-5">Popular Destination</h1>
                    </div>
                    <div class="row g-3">
                        <div class="col-lg-7 col-md-6">
                            <div class="row g-3">
                                <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                                    <a class="position-relative d-block overflow-hidden" href="">
                                        <img class="img-fluid" src="{{asset('assets/img/destination-1.jpg')}}" alt="">
                                        <div class="bg-white  fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Thailand</div>
                                    </a>
                                </div>
                                <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                                    <a class="position-relative d-block overflow-hidden" href="">
                                        <img class="img-fluid" src="{{asset('assets/img/destination-2.jpg')}}" alt="">
                                        <div class="bg-white  fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Malaysia</div>
                                    </a>
                                </div>
                                <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                                    <a class="position-relative d-block overflow-hidden" href="">
                                        <img class="img-fluid" src="{{asset('assets/img/destination-3.jpg')}}" alt="">
                                        <div class="bg-white  fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Australia</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                            <a class="position-relative d-block h-100 overflow-hidden" href="">
                                <img class="img-fluid position-absolute w-100 h-100" src="{{asset('assets/img/destination-4.jpg')}}" alt="" style="object-fit: cover;">
                                <!-- <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">20% OFF</div> -->
                                <div class="bg-white  fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Indonesia</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    
            <!-- Package Start -->
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="section-title bg-white text-center  px-3">Packages</h6>
                        <h1 class="mb-5">Awesome Packages</h1>
                    </div>
                    <div class="row g-4 justify-content-center">
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="package-item position-relative">
                                <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2" style="z-index: 50">15% OFF</div>
                                <div class="overflow-hidden">
                                    <img class="img-fluid" src="{{asset('assets/img/package-1.jpg')}}" alt="">
                                </div>
                                <div class="d-flex border-bottom details">
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt  me-2"></i>Thailand</small>
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt me-2"></i>3 days</small>
                                    <small class="flex-fill text-center py-2"><i class="fa fa-user me-2"></i>2 Person</small>
                                </div>
                                <div class="text-center p-4">
                                    <h3 class="mb-0">$149.00</h3>
                                    <div class="mb-3 stars">
                                        <small class="fa fa-star"></small>
                                        <small class="fa fa-star"></small>
                                        <small class="fa fa-star"></small>
                                        <small class="fa fa-star"></small>
                                        <small class="fa fa-star"></small>
                                    </div>
                                    <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam eos</p>
                                    <div class="d-flex justify-content-center mb-2 pack-btns">
                                        <a href="#" class="btn btn-sm  px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                                        <a href="#" class="btn btn-sm  px-3" style="border-radius: 0 30px 30px 0;">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="package-item position-relative">
                                <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2" style="z-index: 100">25% OFF</div>
                                <div class="overflow-hidden">
                                    <img class="img-fluid" src="{{asset('assets/img/package-2.jpg')}}" alt="">
                                </div>
                                <div class="d-flex border-bottom details">
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt  me-2"></i>Indonesia</small>
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt me-2"></i>3 days</small>
                                    <small class="flex-fill text-center py-2"><i class="fa fa-user me-2"></i>2 Person</small>
                                </div>
                                <div class="text-center p-4">
                                    <h3 class="mb-0">$139.00</h3>
                                    <div class="mb-3 stars">
                                        <small class="fa fa-star"></small>
                                        <small class="fa fa-star"></small>
                                        <small class="fa fa-star"></small>
                                        <small class="fa fa-star"></small>
                                        <small class="fa fa-star"></small>
                                    </div>
                                    <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam eos</p>
                                    <div class="d-flex justify-content-center mb-2 pack-btns">
                                        <a href="#" class="btn btn-sm  px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                                        <a href="#" class="btn btn-sm  px-3" style="border-radius: 0 30px 30px 0;">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="package-item position-relative">
                                <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2" style="z-index: 100">50% OFF</div>
                                <div class="overflow-hidden">
                                    <img class="img-fluid" src="{{asset('assets/img/package-3.jpg')}}" alt="">
                                </div>
                                <div class="d-flex border-bottom details">
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt me-2"></i>Malaysia</small>
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt me-2"></i>3 days</small>
                                    <small class="flex-fill text-center py-2"><i class="fa fa-user me-2"></i>2 Person</small>
                                </div>
                                <div class="text-center p-4">
                                    <h3 class="mb-0">$189.00</h3>
                                    <div class="mb-3 stars">
                                        <small class="fa fa-star"></small>
                                        <small class="fa fa-star"></small>
                                        <small class="fa fa-star"></small>
                                        <small class="fa fa-star"></small>
                                        <small class="fa fa-star"></small>
                                    </div>
                                    <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam eos</p>
                                    <div class="d-flex justify-content-center mb-2 pack-btns">
                                        <a href="#" class="btn btn-sm  px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                                        <a href="#" class="btn btn-sm  px-3" style="border-radius: 0 30px 30px 0;">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Package End -->
    
            <!-- Team Start -->
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="section-title bg-white text-center  px-3">Travel Guide</h6>
                        <h1 class="mb-5">Meet Our Guide</h1>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="team-item py-2">
                                <div class="image-card overflow-hidden my-4 mx-auto rounded-circle" >
                                    <img class="img-fluid rounded-circle" src="{{asset('assets/img/team-1.jpg')}}" alt="">
                                </div>

                                <div class="text-center pb-2">
                                    <h4 class="mb-0">Full Name</h4>
                                    <small>Designation</small>
                                </div>

                                <div class="d-flex justify-content-center py-1  mb-3">
                                    <a class="btns text-decoration-none mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btns text-decoration-none mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btns text-decoration-none  mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="team-item  py-2">
                                <div class="image-card overflow-hidden my-4 mx-auto rounded-circle">
                                    <img class="img-fluid" src="{{asset('assets/img/team-2.jpg')}}" alt="">
                                </div>
                                <div class="text-center pb-2">
                                    <h4 class="mb-0">Full Name</h4>
                                    <small>Designation</small>
                                </div>

                                <div class="d-flex justify-content-center py-1  mb-3">
                                    <a class="btns text-decoration-none mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btns text-decoration-none mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btns text-decoration-none  mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="team-item py-2">
                                <div class="image-card overflow-hidden my-4 mx-auto rounded-circle">
                                    <img class="img-fluid" src="{{asset('assets/img/team-3.jpg')}}" alt="">
                                </div>
                                <div class="text-center pb-2">
                                    <h4 class="mb-0">Full Name</h4>
                                    <small>Designation</small>
                                </div>

                                <div class="d-flex justify-content-center py-1  mb-3">
                                    <a class="btns text-decoration-none mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btns text-decoration-none mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btns text-decoration-none  mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="team-item py-2">
                                <div class="image-card overflow-hidden my-4 mx-auto rounded-circle">
                                    <img class="img-fluid" src="{{asset('assets/img/team-4.jpg')}}" alt="">
                                </div>
                                <div class="text-center pb-2">
                                    <h4 class="mb-0">Full Name</h4>
                                    <small>Designation</small>
                                </div>

                                <div class="d-flex justify-content-center py-1  mb-3">
                                    <a class="btns text-decoration-none mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btns text-decoration-none mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btns text-decoration-none  mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Team End -->
    
    
            <!-- Testimonial Start -->
            <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="text-center">
                        <h6 class="section-title bg-white text-center px-3">Testimonial</h6>
                        <h1 class="mb-5">Our Clients Say!!!</h1>
                    </div>
                    <div class="owl-carousel testimonial-carousel position-relative">
                        <div class="testimonial-item bg-white text-center border p-4">
                            <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="{{asset('assets/img/testimonial-1.jpg')}}" style="width: 80px; height: 80px;">
                            <h5 class="mb-0">John Doe</h5>
                            <p>New York, USA</p>
                            <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                        </div>
                        <div class="testimonial-item bg-white text-center border p-4">
                            <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="{{asset('assets/img/testimonial-2.jpg')}}" style="width: 80px; height: 80px;">
                            <h5 class="mb-0">John Doe</h5>
                            <p>New York, USA</p>
                            <p class="mt-2 mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                        </div>
                        <div class="testimonial-item bg-white text-center border p-4">
                            <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="{{('assets/img/testimonial-3.jpg')}}" style="width: 80px; height: 80px;">
                            <h5 class="mb-0">John Doe</h5>
                            <p>New York, USA</p>
                            <p class="mt-2 mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                        </div>
                        <div class="testimonial-item bg-white text-center border p-4">
                            <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="{{asset('assets/img/testimonial-4.jpg')}}" style="width: 80px; height: 80px;">
                            <h5 class="mb-0">John Doe</h5>
                            <p>New York, USA</p>
                            <p class="mt-2 mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                        </div>
                    </div>
            </div>
            <!-- Testimonial End -->
    
            <!-- Articles start -->
    
            <div class="container-xxl py-5 wow fadeInUp letast_news" data-wow-delay="0.1s">
                <div class="container">
                    <div class="text-center">
                        <h6 class="section-title bg-white text-center px-3">Latest News</h6>
                        <h1 class="mb-5">What is new!!!</h1>
                    </div> 
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="single_news  wow  fadeInUp" data-wow-delay="0.3s">
                                <img src="{{asset('images/msg920424135-4281 (1).jpg')}}" alt="">
                                <div class="texts">
                                    <p class="date"><a href="#">30 May, 2017</a></p>
                                    <h3>Wood Work Adds Value To <br> Your Property Five</h3>
                                    <p class="test">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                    <h3><a href="#">READ MORE</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single_news  wow fadeInUp" data-wow-delay="0.5s">
                                <img src="{{asset('images/msg920424135-4288.jpg')}}" alt="">
                                <div class="texts">
                                    <p class="date"><a href="#">30 May, 2017</a></p>
                                    <h3>Wood Work Adds Value To <br> Your Property Five</h3>
                                    <p class="test">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                    <h3><a href="#">READ MORE</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single_news wow  fadeInUp" data-wow-delay="0.7s">
                                <img src="{{asset('images/photo1684229673 (10).jpeg')}}" alt="">
                                <div class="texts">
                                    <p class="date"><a href="#">30 May, 2017</a></p>
                                    <h3>Wood Work Adds Value To <br> Your Property Five</h3>
                                    <p class="test">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                    <h3><a href="#">READ MORE</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
    
    
                </div>
            </div>
    
            <!-- Article End-->
            
            
        </main>
        
        <footer>
            <x-footer></x-footer>
        </footer>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="{{asset('assets/lib/wow/wow.min.js')}}"></script>
        <script src="{{asset('assets/lib/easing/easing.min.js')}}"></script>
        <script src="{{asset('assets/lib/waypoints/waypoints.min.js')}}"></script>
        <script src="{{asset('assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset('assets/lib/tempusdominus/js/moment.min.js')}}"></script>
        <script src="{{asset('assets/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
        <script src="{{asset('assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

        <!-- Template Javascript -->
        <script src="{{asset('js/main.js')}}"></script>   
        <script src="https://kit.fontawesome.com/5fe79ecddc.js" crossorigin="anonymous"></script>
    </body>
</html>