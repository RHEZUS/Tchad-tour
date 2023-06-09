
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset('images/logo.png')}}" type="image/x-icon">
    <title>Tchad-Tour</title>

    
</head>
<body>
    <div>
        <!-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius -->
        <nav class="navbar navbar-expand-sm navbar-light bg-light  px-1 px-md-5 w-100" style ="box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px; position:fixed; top:0; z-index:1000; height:70px;">
            <div class="container-fluid p-0">
                <a class="navbar-brand" href="{{route('home')}}"><img src="{{asset('images/logo.png')}}" alt="" style="width: 60px; height: 60px;">  <span class="mx-1">Tchad-Tour</span></a>
                <button class="navbar-toggler d-xl-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                    aria-expanded="false" aria-label="Toggle navigation" style="margin-left:auto">
                    <span class="navbar-toggler-icon"></span>
                </button>
    
                <div class="collapse navbar-collapse bg-light m-0 w-100" id="collapsibleNavId" >
                    <ul class="navbar-nav me-3"  style="margin-left:auto;">
                        <li class="nav-item py-2 py-sm-0">
                            <a class="nav-link" href="{{route('home')}}" >Home</a>
                        </li>
                        <li class="nav-item py-2 py-sm-0">
                            <a class="nav-link" href="{{route('websPacks')}}">Packages</a>
                        </li>
                        <li class="nav-item py-2 py-sm-0">
                            <a class="nav-link" href="{{route('blog')}}">Blog</a>
                        </li>
                        
                        <li class="nav-item py-2 py-sm-0">
                            <a class="nav-link" href="https://tr.wikipedia.org/wiki/%C3%87ad" target ="_blanc">About</a>
                        </li>
                        <li class="nav-item py-2 py-sm-0">
                            <a class="nav-link" href="{{route('contact')}}">Contact</a>
                        </li>
                        <li class="nav-item call-o-actiont py-2 py-sm-0">
                            <a href="{{route('booking')}}" class="call-o-actiont d-sm-none" >Giriş</a>
                        </li>
                    </ul>
                </div>
                <div class="call-o-actiont">
                    <a href="{{route('booking')}}" class="call-to-action d-none d-sm-flex text-decoration-none text-white">Booking</a>
                </div>
                
            </div>
        </nav>
    
    </div>

    
    
</body>
</html>

