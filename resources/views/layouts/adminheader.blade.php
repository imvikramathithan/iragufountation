<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iragu Foundation</title>

    <!--=============== REMIXICONS ===============-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" crossorigin="">

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="{{asset('assets/css/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.min.css">

</head>
<body>
  <div class="adminhead">
   <div class="logout">
       <!-- Example single danger button -->
        <div class="btn-group">
          <button type="button" class="prof dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="true">
            <img src="{{asset('assets/img/avatar-1.png')}}" alt="" class="proflie">
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">My profile</a></li>
              <li><form method="POST" action="{{ route( 'logout') }}">
              @csrf
              <a  class="dropdown-item btn-danger" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">{{ __('Log Out') }}</a>
            </form>
          </a>
        </li>
          </ul>
        </div>
   </div>
  </div>
<div class="sidebar">
  <div class="admin_logo">
    <a href="#"><img src="{{asset('assets/img/logo.jpg')}}" alt="" width="70%" height="70%"></a>
  </div>  
      <div class="sidebar-link">
          <a class="nav-link admin-link active" aria-current="page" href="{{route('home')}}"><i class="fa-solid fa-house"></i> Home</a>
          <a class="nav-link admin-link" href="{{route('update.student')}}"><i class="fa-solid fa-table-columns"></i> Dashboard</a>
          <a class="nav-link admin-link" href="{{route('slides.index')}}"><i class="fa-solid fa-table-columns"></i> Slides</a>
          <a class="nav-link admin-link" href="{{route('team_members.index')}}"><i class="fa-solid fa-table-columns"></i> Team Members</a>
          <a class="nav-link admin-link" href="{{route('transformations.index')}}"><i class="fa-solid fa-table-columns"></i> Transformations </a>
          <a class="nav-link admin-link" href="{{route('galleries.index')}}"><i class="fa-regular fa-images"></i> Gallery </a>
          <a class="nav-link admin-link" href="{{route('testimonials.index')}}" ><i class="fa-solid fa-users"></i> Testimonials</a>
          <a class="nav-link admin-link" href="{{route('services.index')}}"><i class="fa-solid fa-people-line"></i>  Service for student</a>
          <a class="nav-link admin-link" href="{{route('update.management')}}"><i class="fa-solid fa-landmark"></i> Service for Management</a>
          
      </div>
</div>
<div class="container-admin">
    @yield('content')
  </div>
<!-- endheader -->
            <!--=============== SWIPER JS ===============-->
            <script src="{{asset('assets/js/swiper-bundle.min.js')}}"></script>
            <script src="{{asset('assets/js/script.js')}}"></script>
         <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>   
     </body>
     </html>