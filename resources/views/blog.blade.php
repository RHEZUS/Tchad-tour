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
        
        <!-- Articles start -->

        <div class="container-xxl py-5 wow fadeInUp letast_news" data-wow-delay="0.1s">
            <div class="container">
                <div class="text-center" style="margin-top: 50px;">
                    <h6 class="section-title bg-white text-center px-3">Latest News</h6>
                    <h1 class="mb-3">What is new!!!</h1>

                    <form action="#" method="post" class="search position-relative w-25 mx-auto">
                        <input type="text" name="search" id="search" class="w-100">
                        <i class="fa fa-search position-absolute" style="right: 15px; top: 7px"></i>
                    </form>

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