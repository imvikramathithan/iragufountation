<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iragu Foundation</title>

    <!--=============== MDBootstrap CDN ===============-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">


    <!--=============== REMIXICONS ===============-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" crossorigin="">


    <style>
        :root {
            --danger-color: #ff0000;
            --secondary-color: rgb(110, 110, 110);
        }
* {
    margin: 0;
    padding: 0;
    font-family: "Libre Baskerville", serif;
    text-decoration: none;
}

body {
    margin: 0;
    padding: 0;
}

        .adminhead {
            background-color: var(--secondary-color);
            color: white;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom:2rem ;
        }

        .sidebar {
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            background-color: var(--secondary-color);
            color: white;
            overflow-y: auto;
            padding-top: 60px;
            transition: transform 0.3s ease-in-out;
            transform: translateX(-100%);
            z-index: 1000;
        }

        .sidebar.show {
            transform: translateX(0);
        }

        .sidebar a {
            display: block;
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            transition: background 0.3s;
        }

        .sidebar a:hover {
            background-color: var(--danger-color);
            color: white;
        }

        .menu-toggle {
            background: none;
            border: none;
            color: white;
            font-size: 20px;
            cursor: pointer;
        }


        .menu-toggle-close {
            display: flex;
            justify-content: flex-end;
            padding: 10px 20px;
        }

        .container-admin {
            
            padding: 60px;
            transition: margin-left 0.3s ease-in-out;
            
        }
        .proflie{
            border-radius: 200px;
        }
        .container-admin.expanded {
            margin-left: 260px;
        }

        .sidebar-link .nav-link {
            display: flex;
            align-items: center;
        }

        .nav-link i {
            margin-right: 10px;
        }
        .bg{
             background-color: #ff0000 !important;
             color: #fff;
        }
        .text-prm{
             color: #ff0000 !important;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .sidebar {
                width: 320px;
                height: 100%;
                transform: translateX(-100%);
            }

            .container-admin {
                margin-left: 0;
            }

            .menu-toggle {
                position: relative;
                z-index: 1100;
            }
           
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="adminhead fixed-top" style="">
      <button class="menu-toggle" id="menuToggle">
    <i class="ri-menu-line"></i> <!-- Menu icon -->
</button>

        <h1 class="mb-0">Iragu Foundation Admin</h1>
     <div class="logout">
    @if(auth()->check())
        <div class="dropdown">
            <button type="button" class="prof btn btn-floating shadow-0" id="profileDropdown" data-mdb-toggle="dropdown" aria-expanded="false">
                <img src="{{ asset('storage/' . auth()->user()->image) }}" width="50" height="50" alt="Profile Image" class="prof btn btn-floating shadow-0">
            </button>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                <li><a class="dropdown-item" href="{{ route('profile.show') }}">My Profile</a></li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a class="dropdown-item btn-danger" href="{{ route('logout') }}" 
                           onclick="event.preventDefault(); this.closest('form').submit();">{{ __('Log Out') }}</a>
                    </form>
                </li>
            </ul>
        </div>
    @else
        <a href="{{ route('login') }}" class="btn bg">Log In</a>
    @endif
</div>

    </div>

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
       
        <div class="admin_logo text-center">
            <a href="#"><img src="{{asset('assets/img/logo.jpg')}}" alt="Iragu Foundation Logo" class="img-fluid logo-admin" ></a>
        </div>
        <div class="sidebar-link">
            <a class="nav-link admin-link active" aria-current="page" href="{{route('home')}}">
                <i class="fa-solid fa-house"></i> Home
            </a>
            <a class="nav-link admin-link" href="{{route('admin.dashboard')}}">
                <i class="fa-solid fa-table-columns"></i> Dashboard
            </a>
            <a class="nav-link admin-link" href="{{ route('users') }}">
                <i class="fa-solid fa-users"></i> Users
            </a>
            <a class="nav-link admin-link" href="{{ route('management.queries') }}">
                <i class="fa-solid fa-question-circle"></i> Management Queries
            </a>
            <a class="nav-link admin-link" href="{{ route('student.queries') }}">
                <i class="fa-solid fa-user-graduate"></i> Student Queries
            </a>

            <a class="nav-link admin-link" href="{{route('slides.index')}}">
                <i class="fa-solid fa-sliders"></i> Slides
            </a>
            <a class="nav-link admin-link" href="{{route('team_members.index')}}">
                <i class="fa-solid fa-users"></i> Team Members
            </a>
            <a class="nav-link admin-link" href="{{route('transformations.index')}}">
                <i class="fa-solid fa-magic"></i> Transformations
            </a>
            <a class="nav-link admin-link" href="{{route('galleries.index')}}">
                <i class="fa-regular fa-images"></i> Gallery
            </a>
            <a class="nav-link admin-link" href="{{route('testimonials.index')}}">
                <i class="fa-solid fa-comments"></i> Testimonials
            </a>
            <a class="nav-link admin-link" href="{{route('camps.index')}}">
                <i class="fa-solid fa-campground"></i> Camps Slide
            </a>
            <a class="nav-link admin-link" href="{{route('serviceStudents.index')}}">
                <i class="fa-solid fa-user-graduate"></i> Services for Students
            </a>
            <a class="nav-link admin-link" href="{{route('serviceManagement.index')}}">
                <i class="fa-solid fa-landmark"></i> Services for Management
            </a>

        </div>
    </div>

    <!-- Content -->
    <div class="container-admin" id="adminContent">
        @yield('content')
    </div>

    <!--=============== JS Dependencies ===============-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"></script>
   <script>
    document.addEventListener("DOMContentLoaded", () => {
    const menuToggle = document.getElementById('menuToggle');
    const sidebar = document.getElementById('sidebar');
    const adminContent = document.getElementById('adminContent');

    menuToggle.addEventListener('click', () => {
        const isExpanded = sidebar.classList.toggle('show');
        adminContent.classList.toggle('expanded', isExpanded);

        // Toggle the icon
        menuToggle.innerHTML = isExpanded
            ? '<i class="ri-close-line"></i>' // Close icon
            : '<i class="ri-menu-line"></i>'; // Menu icon
    });
});

</script>

</body>
</html>
