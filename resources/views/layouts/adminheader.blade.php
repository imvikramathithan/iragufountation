<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iragu Foundation</title>

    <!--=============== MDBootstrap CDN ===============-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css">

    <!--=============== REMIXICONS ===============-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" crossorigin="">


    <style>
        :root {
            --primary-color: #ff0000;
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
            padding-top: 20px;
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
            background-color: var(--primary-color);
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
            
            padding: 20px;
            transition: margin-left 0.3s ease-in-out;
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
    <div class="adminhead">
        <button class="menu-toggle" id="menuToggle">
            <i class="ri-menu-line"></i> <!-- Menu icon -->
        </button>
        <h1 class="mb-0">Iragu Foundation Admin</h1>
        <div class="logout">
            <div class="dropdown">
                <button type="button" class="prof btn btn-floating shadow-0" id="profileDropdown" data-mdb-toggle="dropdown" aria-expanded="false">
                    <img src="{{asset('assets/img/avatar-1.png')}}" alt="" class="proflie">
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                    <li><a class="dropdown-item" href="#">My Profile</a></li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class="dropdown-item btn-danger" href="{{ route('logout') }}" 
                               onclick="event.preventDefault(); this.closest('form').submit();">{{ __('Log Out') }}</a>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="menu-toggle-close">
            <button class="menu-toggle" id="menuClose">
                <i class="ri-close-line"></i> <!-- Close icon -->
            </button>
        </div>
        <div class="admin_logo text-center">
            <a href="#"><img src="{{asset('assets/img/logo.jpg')}}" alt="Iragu Foundation Logo" class="img-fluid logo-admin" ></a>
        </div>
        <div class="sidebar-link">
            <a class="nav-link admin-link active" aria-current="page" href="{{route('home')}}"><i class="fa-solid fa-house"></i> Home</a>
            <a class="nav-link admin-link" href="{{route('admin.dashboard')}}"><i class="fa-solid fa-table-columns"></i> Dashboard</a>
            <a class="nav-link admin-link" href="{{route('slides.index')}}"><i class="fa-solid fa-film"></i> Slides</a>
            <a class="nav-link admin-link" href="{{route('team_members.index')}}"><i class="fa-solid fa-users"></i> Team Members</a>
            <a class="nav-link admin-link" href="{{route('transformations.index')}}"><i class="fa-solid fa-magic"></i> Transformations</a>
            <a class="nav-link admin-link" href="{{route('galleries.index')}}"><i class="fa-regular fa-images"></i> Gallery</a>
            <a class="nav-link admin-link" href="{{route('testimonials.index')}}"><i class="fa-solid fa-comments"></i> Testimonials</a>
            <a class="nav-link admin-link" href="{{route('services.index')}}"><i class="fa-solid fa-people-line"></i> Services for Students</a>
            <a class="nav-link admin-link" href="{{route('update.management')}}"><i class="fa-solid fa-landmark"></i> Services for Management</a>
        </div>
    </div>

    <!-- Content -->
    <div class="container-admin" id="adminContent">
        @yield('content')
    </div>

    <!--=============== JS Dependencies ===============-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"></script>
    <script>
        const menuToggle = document.getElementById('menuToggle');
        const menuClose = document.getElementById('menuClose');
        const sidebar = document.getElementById('sidebar');
        const adminContent = document.getElementById('adminContent');

        // Open sidebar
        menuToggle.addEventListener('click', () => {
            sidebar.classList.add('show');
            adminContent.classList.add('expanded');
        });

        // Close sidebar
        menuClose.addEventListener('click', () => {
            sidebar.classList.remove('show');
            adminContent.classList.remove('expanded');
        });
    </script>
</body>
</html>
