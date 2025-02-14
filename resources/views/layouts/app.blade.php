<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iragu Foundation</title>

    <!--=============== REMIXICONS ===============-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" crossorigin="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alegreya:ital,wght@0,400..900;1,400..900&family=Ballet:opsz@16..72&family=Carattere&family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Great+Vibes&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Merienda:wght@300..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Rasa:ital,wght@0,300..700;1,300..700&display=swap" rel="stylesheet">


    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="{{asset('assets/css/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <style>

.course-dropdown {
    position: relative;
}

.subjects-dropdown {
    display: none; /* Initially hidden */
    position: absolute;
    left: 100%; /* Aligns to the right of the parent */
    top: 0;
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    z-index: 1000;
}

.course-dropdown:hover .subjects-dropdown {
    display: block; /* Show on hover */
}

.course-link {
    display: block;
    padding: 5px 10px;
    color: #333;
    text-decoration: none;
    transition: background-color 0.3s ease;
}

.course-link:hover {
    background-color: #f0f0f0;
}

.subject-link {
    display: block;
    padding: 5px;
    color: #333;
    text-decoration: none;
}

.subject-link:hover {
    background-color: #f0f0f0;
}

   </style>
</head>
            <body>
                <div id="preloader">
                </div>
                    <!-- Header   -->
                    <header class="fixed-top">
                            <nav class="navbar navbar-expand-lg bg-s-color">
                                <a href="{{route('home')}}"><img src="{{asset('assets/img/logo.jpg')}}" id="offcanvasScrollingLabel" alt="logo" width="250px" class="logo"></a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
                                    <div class="offcanvas-header">
                                    <img src="{{asset('assets/img/logo.jpg')}}" id="offcanvasScrollingLabel"alt="logo" width="250px" class="logo">
                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                    </div>
                                    <div class="offcanvas-body">
                                        <div class="navbar-nav ms-auto nav-color">
                                        <a class="nav-link two" aria-current="page" href="{{route('home')}}">Home</a>
                                        <a class="nav-link two" href="{{route('home')}}/{{ url('#about-us') }}">About Us</a>
                                    <div class="sfsdropdown">
                                            <p class="nav-link two">For Students</p>
                                            <div class="sfslist animate__animated animate__slideInDown">
                                                @foreach($courses as $course)
                                                    <div class="course-dropdown">
                                                        <!-- Course name -->
                                                        <a href="{{ route('services.student.show', $course->slug) }}" class="course-link">
                                                            {{ $course->course_name }}
                                                        </a>

                                                        @if($course->services->isNotEmpty())
                                                            <!-- Subjects dropdown (shown on hover) -->
                                                            <div class="subjects-dropdown">
                                                                @foreach($course->services as $service)
                                                                    <a href="{{ route('services.student.show', $course->slug) }}#{{ $service->slug }}" class="subject-link">
                                                                        {{ $service->name }}
                                                                     </a>
                                                                @endforeach
                                                            </div>
                                                        @endif
                                                    </div>
                                                @endforeach
                                            </div>
                                    </div>

                                     <div class="sfmdropdown">
                                          <p class="nav-link two">For Management</p>
                                                <div class="sfmlist animate__animated animate__slideInDown">
                                                    @foreach($managementServices as $service)
                                                        <a href="{{ route('services.management') }}#{{ $service->slug }}">
                                                            {{ $service->title }}
                                                        </a>
                                                    @endforeach
                                                </div>
                                    </div>
                                        <a href="{{route('home')}}/{{ url('#gallery') }}" class="nav-link two">Gallery</a>
                                        <a href="{{route('home')}}/{{ url('#testimonials')}}" class="nav-link two">Testimonials</a>
                                        <a href="{{route('home')}}/{{ url('#contact-us')}}" class="nav-link two">Contact Us</a>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                    </header>
                    <!-- endheader -->
                        <div class="alloverlay">
                            <br><br><br><br><br><br><br>
                                <div class="btnm btn-danger" id="btnqurey">    
                                <div class="nav-link bar"><span>Qurey</span><i class="fa-solid fa-comments cmd"></i></div>
                                </div>
                                <div class="btnd btn-danger" id="btndonate">    
                                        <div class="nav-link bar"><span>Donate</span><i class="fa-solid fa-hand-holding-medical cmd"></i></div>
                                </div>
                                <div class="btny btn-danger">    
                                        <a class="nav-link " href="https://www.youtube.com/@Iragufoundation" target="_blank"><span>Youtube</span> <i class="fa-brands fa-youtube cmd"></i></a>
                                </div>
                                <div class="share">
                                    <div class="menu">
                                        <li style="--i:1;--clr:#00ff4c"><a href=""><i class="fa-brands fa-whatsapp"></i></a></li>
                                        <li style="--i:2;--clr:#ff00dd"><a href="https://www.instagram.com/iragu_foundation?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw%3D%3D" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                                        <li style="--i:3;--clr:#ff0000"><a href="mailto:fertyflora@gmail.com" target="_blank"><i class="fa-solid fa-envelope"></i></a></li>
                                        <div class="toggle">
                                            <i class="fa-solid fa-share-nodes"></i>
                                            <i class="fa-solid fa-xmark"></i>
                                        </div>
                                    </div>
                                </div>
                    </div>
                            <!--Danation-->
                
                        <div class="donate animate__animated animate__slideInLeft" id="donate"> 
                            <div class="donate-close-icon btn" id="donate-close-icon">
                            <i class="fa-solid fa-xmark"></i>
                            </div>
                            <div class="donate-form">
                                <form action="{{route('send.donation_mail')}}"  method="POST">
                                        @csrf
                                            @if(session('donation_success'))
                                                    <div class="alert alert-success">
                                                        {{ session('donation_success') }}
                                                    </div>
                                                @endif
                                    <h1>Donation Form</h1>
                                    <div class="donate-con">
                                        <label for="name"> Name :<span style="color:red;">*</span> </label><br>
                                        <input type="text" class="form-control" name="name"  placeholder="  name here..." required ="">
                                    </div>  
                                    <div class="donate-con">
                                    <label for="email">Email :<span style="color:red;">*</span> </label><br>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="email here..." required ="">
                                    </div>
                                    <div class="donate-con">
                                        <label for="phone">Phone Number :<span style="color:red;">*</span> </label><br>
                                        <input type="number" class="form-control" name="number" id="number" placeholder="number here..." required ="">
                                    </div>
                                    <div class="donate-con">
                                        <label for="amount">Amount :<span style="color:red;">*</span></label><br>
                                        <input type="number" name="amount" id="amount" class="form-control" placeholder="enter here.." required=""><br>
                                        <span class="span-amount">Please enter a rupees amount (e.g. 50.00)</span>
                                    </div> 
                                    <div class="donate-con">
                                        <button type="submit" class="donate-form-btn">Next</button>
                                    </div>
                                </form>
                            </div>
                        </div> 
                <!--endDanation-->

                <!--Qurey-->
                <div class="qurey animate__animated animate__slideInLeft" id="query">    
                    <div class="close-icon btn " id="close-icon">
                    <i class="fa-solid fa-xmark"></i>
                    </div>
                    <div class="stutentq">
                        <form action="{{route('contact.submit')}}"  method="post" class="form-qurey">
                             @csrf
                            @if(session('contact_success'))
                                <div class="alert alert-success">
                                    {{ session('contact_success') }}
                                </div>
                            @endif
                            <h3>Students Queries</h3>
                            <div class="form-group">
                                <input type="text" class="form-control mb-4 query-in" name="name"  placeholder="Enter your Name here..." required ="">
                            </div>
                            <div class="form-group">  
                                <input type="email" class="form-control mb-4 query-in" name="email" id="email" placeholder="Enter your email here..." required ="">
                            </div>
                            <div class="form-group">
                                <textarea name="query" class="form-control mb-4 query-in" id="" placeholder="Your Query Here..." required =""></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class=" btn-danger  form-control qurey-btn">Submit</button>
                            </div>
                        </form>
                    </div>
                    <div class="managenentq">
                        <form action="{{route('management.query.submit')}}"  method="POST" class="form-qurey">
                            @csrf
                           @if(session('management_success'))
                                <div class="alert alert-success">
                                    {{ session('management_success') }}
                                </div>
                            @endif
                        <h3>Management Queries</h3>
                        <div class="form-group">
                            <input type="text" class="form-control mb-4 query-in" name="name"  placeholder="Enter your Name here..." required ="">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control mb-4 query-in" name="email" id="email" placeholder="Enter your email here..."required ="">
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control mb-4 query-in" name="number" id="number" placeholder="Enter your number here..."required ="">
                        </div>
                        <div class="form-group">
                        <input type="text" class="form-control mb-4 query-in" name="institute" id="institute" placeholder="Enter your Institute Name here..."required ="">
                    </div>
                        <div class="form-group">
                            <textarea name="query" class="form-control mb-4 query-in"  id="" placeholder="Your Query Here..."required =""></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-danger  qurey-btn">Submit</button>
                        </div>
                    </form>
                    </div>
                    <div class="con-over">
                        <div class="qurey-overlay-con">
                        <div class="qurey-overlay">
                            <div class="qurey-overlay-left">
                                <h1>Hello, Students!</h1>
                                <p>Enter your personal details to use all of site features</p>
                                <button class="hidden" id="management">For Management Queries</button>
                            </div>
                            <div class="qurey-overlay-right">
                                <h1>Hello, Management!</h1>
                                <p>Register with your personal details to use all of site features</p>
                                <button class="hidden" id="student">For Students Queries</button>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>  
                    <!--endQurey-->
                
                    <main class="main"  id="home">
                        <div class="">
                            @yield('content')
                        </div>
                    </main>
            <!--footer-->
                <footer class="footer">
                    <div class="container" id="footer">
                        <br> <br> <br>
                        <div class="row">
                            <div class="col-md-3" id="contactus">
                                <h6 class="foot-iragu-title animate-slide-right"> <b>For Students</b></h6>
                                <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
                                <ul class="navbar-nav ms-auto">
                                @foreach($courses as $course)
                                    <li class="nav-item">
                                   <a href="{{ route('services.student.show', $course->slug) }}" class="nav-link">
                                                            {{ $course->course_name }}
                                                        </a>
                                    </li>
                                @endforeach  
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <h6 class="foot-iragu-title animate-slide-right"> <b>For Management</b></h6>
                                <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
                                <ul class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                         @foreach($managementServices as $service)
                                                        <a href="{{ route('services.management') }}#{{ $service->slug }}" class="nav-link">
                                                            {{ $service->title }}
                                                        </a>
                                                    @endforeach
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <h6 class="foot-iragu-title animate-slide-right"><b>Iragu Fountation</b></h6>
                                <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
                                <ul class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                        <a href="{{route('home')}}" class="nav-link">Home</a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a href="{{route('home')}}/{{ url('#about-us') }}" class="nav-link ">About Us</a>
                                    </li>
                                
                                    <li class="nav-item ">
                                        <a href="{{route('home')}}/{{ url('#gallery') }}" class="nav-link">Gallery</a>
                                    </li>
                                <li class="nav-item ">
                                    <a href="{{route('home')}}/{{ url('#testimonials')}}" class="nav-link">Testimonials</a>
                                </li>
                                <li class="nav-item ">
                                <a href="{{route('home')}}/{{ url('#contact-us')}}" class="nav-link">Contact Us</a>
                            </li>
                                </ul>
                            </div>
                            <div class="col-md-3 text-center">
                                <img src="{{asset('assets/img/logo.jpg')}}" class="logo img-fluid" alt=""  />
                                <div class="loog">
                                <img src="{{asset('assets/img/arflogo.webp')}}" class="arf img-fluid" alt="" />
                                <img src="{{asset('assets/img/tronalogo.webp')}}" class="trona img-fluid" alt="" />
                            </div>
                                <div class="social mt-5">
                                    <br>
                                    <a href="mailto:fertyflora@gmail.com" class="me-3"><i class="fa-solid fa-envelope fa-2xl" style="color: #ff2e2e;"></i></i></a>
                                    <a href="" class="me-3"><i class="fa-brands fa-x-twitter fa-2xl" style="color: #000000;"></i></a>
                                    <a href="https://www.instagram.com/iragu_foundation?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw%3D%3D" class="me-3"><i class="fa-brands fa-instagram fa-2xl" style="color: #ff00dd;"></i></a>
                                    <a href="https://wa.me/+9174182 81874" class="me-3"><i class="fa-brands fa-whatsapp fa-2xl" style="color: #00ff04;"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <br>
                        <small class="Copyright">Copyright &copy; 2024 Iragu Foundation | All rights | Powered by : <a href="https://www.linkedin.com/company/design-craft-technologies/" class="Copyright">Designcrafttechnologies</a></small>
                    </div>
                </footer>
            <!--endfooter-->
                        <!--=============== SWIPER JS ===============-->
                    <script src="{{asset('assets/js/swiper-bundle.min.js')}}"></script>
                    <script src="{{asset('assets/js/animate.js')}}"></script>
                    <script src="{{asset('assets/js/scrollreveal.js')}}"></script>
                    <script src="{{asset('assets/js/script.js')}}"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>   
                <!-- Google tag (gtag.js) -->
                <script async src="https://www.googletagmanager.com/gtag/js?id=G-61GMY34KF4"></script>
                <script>
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag('js', new Date());

                gtag('config', 'G-61GMY34KF4');
                </script>

                
            </body>
  </html>