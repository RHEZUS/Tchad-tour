<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="shortcut icon" href="{{asset('images/logo.png')}}" type="image/x-icon">
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
<body>
    <header>
        <x-header></x-header>
    </header>
    <main>
        <!-- Package Start -->
        <div class="container-xxl py-5 my-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title bg-white text-center  px-3">Packages</h6>
                    <h1 class="mb-5">Awesome Packages</h1>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="package-item position-relative">
                            <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2" style="z-index: 50">15% Indirimli</div>
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="{{asset('images/tcad-5.jpg')}}" alt="">
                            </div>
                            <div class="d-flex border-bottom details">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt  me-2"></i>Park de Douguiya</small>
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
                            <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2" style="z-index: 100">25% Indirimli</div>
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="{{asset('images/tcad-6.jpg')}}" alt="">
                            </div>
                            <div class="d-flex border-bottom details">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt  me-2"></i>Park de manda</small>
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
                            <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2" style="z-index: 100">50% Indirimli</div>
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="{{asset('images/tcad-7.jpg')}}" alt="">
                            </div>
                            <div class="d-flex border-bottom details">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt me-2"></i>Park Zakouma</small>
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>

</body>
</html>