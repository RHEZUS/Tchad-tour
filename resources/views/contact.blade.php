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
        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <div class="container-fluid  py-5 mb-5 hero-header" style="--background-img : url('{{asset('images/tcad-1.jpg')}}')">
                <div class="container py-5">
                    <div class="row justify-content-center py-5">
                        <div class=" text-center">
                            <h1 class="display-3 text-white animated slideInDown">Contact Us</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                    <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Contact Start -->
        <div class="container-xxl  mt-5 py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title bg-white text-center px-3">Contact Us</h6>
                    <h1 class="mb-5">Contact For Any Query</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h5>Get In Touch</h5>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos</p>
                        <div class="d-flex align-items-center mb-4">
                            <div class="d-flex align-items-center justify-content-center flex-shrink-0 " style="width: 50px; height: 50px;background-color: #FE8800;">
                                <i class="fa fa-map-marker-alt text-white"></i>
                            </div>
                            <div class="ms-3">
                                <h5 class="" style="color: #FE8800;">Office</h5>
                                <p class="mb-0">123 Street, New York, USA</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <div class="d-flex align-items-center justify-content-center flex-shrink-0 " style="width: 50px; height: 50px;background-color: #FE8800;">
                                <i class="fa fa-phone-alt text-white"></i>
                            </div>
                            <div class="ms-3">
                                <h5 class="" style="color: #FE8800;">Mobile</h5>
                                <p class="mb-0">+012 345 67890</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="d-flex align-items-center justify-content-center flex-shrink-0 " style="width: 50px; height: 50px; background-color: #FE8800;">
                                <i class="fa fa-envelope-open text-white"></i>
                            </div>
                            <div class="ms-3">
                                <h5 class="" style="color: #FE8800;">Email</h5>
                                <p class="mb-0">info@example.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                        <form action="{{route('storeContact')}}" method="POST">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                    @error('name')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                    @error('email')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                                        <label for="subject">Subject</label>
                                    </div>
                                    @error('subject')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" name="message" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                    @error('message')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{session('success')}}
                                    </div>

                                @endif
                                <div class="col-12">
                                    <button class="border-0  text-white w-100 py-3 rounded" style="background-color: #FE8800;" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>      
                </div>
            </div>
        </div>
        <!-- Contact End -->

        <!-- Location Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title bg-white text-center  px-3">Our Location</h6>
                    <h1 class="mb-5">Visit Our Office</h1>
                </div>
                <div class="row">
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.3s">
                    <iframe class="position-relative rounded w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                        frameborder="0" style="min-height: 300px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                    </div>
                </div>

            </div>
        </div>
        <!-- Location End -->
        
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
                                <img class="img-fluid rounded-circle" src="{{asset('images/burma.jpg')}}" alt="">
                            </div>

                            <div class="text-center pb-2">
                                <h4 class="mb-0">Bourma Tahir</h4>
                                <small>Guide Touristique</small>
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
                                <img class="img-fluid" src="{{asset('images/Omar.jpg')}}" alt="">
                            </div>
                            <div class="text-center pb-2">
                                <h4 class="mb-0">Oumar Djimet</h4>
                                <small>Guide Touristique</small>
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
                                <img class="img-fluid" src="{{asset('images/mahmout.jpg')}}" alt="">
                            </div>
                            <div class="text-center pb-2">
                                <h4 class="mb-0">Mahmoud Abakar</h4>
                                <small>Guide Touristique</small>
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
                                <img class="img-fluid" src="{{asset('images/mahamat.jpg')}}" alt="">
                            </div>
                            <div class="text-center pb-2">
                                <h4 class="mb-0">Mahamat Zene</h4>
                                <small>Guide Touristique</small>
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