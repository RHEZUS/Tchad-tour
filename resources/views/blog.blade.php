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

        
        
        <!-- Articles start -->
        @php
            $delay = 0.1;
            $count=0;
        @endphp
        <div class="container-xxl py-5 wow fadeInUp letast_news" data-wow-delay="{{$delay.'s'}}">
            <div class="container">
                <div class="text-center" style="margin-top: 50px;">
                    <h6 class="section-title bg-white text-center px-3">Latest News</h6>
                    <h1 class="mb-3">What is new!!!</h1>
                </div> 
                @php
                    $delay = ($delay*4)+0.1;
                    $count=0;
                @endphp
                <div class="row">
                    @foreach ($articles as $article)
                    <div class="col-lg-4 col-md-6">
                        <div class="single_news  wow  fadeInUp" data-wow-delay="{{$count <= 2 ? $delay.'s' : '0.1s'}}">
                            <img src="{{ asset('storage/thumbnails/'.$article->thumbnail)}}" alt="">
                            <div class="texts">
                                <p class="date"><a href="#">{{$article->updated_at->format('m/d/Y')}}</a></p>
                                <h3>{!! words($article->title, $limit = 25, $end = ' .....')!!}</h3>
                                <p class="test">{!! words($article->desc, $limit = 25, $end = ' .....')!!}</p>
                                <h3><a href="{{'/article/'.$article->id}}">READ MORE</a></h3>
                            </div>
                        </div>
                    </div>
                    @php
                        $delay = $delay+0.2;

                        if ($count >=2 ) {

                            $count =0;

                        }else {

                            $count++;
                        }
                        
                    @endphp  
                    @endforeach
                    
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>

</body>
</html>