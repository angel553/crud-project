
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    
<link rel="stylesheet" href="assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
</head>

<body>    
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active bg-gray-400">
    <div class="sidebar-header">
        <div class="d-flex justify-content-between">
            <div class="logo">
                {{-- <a href="index.html"><img src="assets/images/logo/logo.png" alt="Logo" srcset=""></a> --}}
            </div>
            {{-- <div class="toggler">
                <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
            </div> --}}            
        </div>
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
            <li class="sidebar-title">Menu</li>
            
            <li
                class="sidebar-item  ">
                <a href="/bienvenida" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Inicio</span>
                </a>
            </li>
            
            <li
                class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-stack"></i>
                    <span>CRUD</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item ">
                        <a href="/create">CREATE</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="/read">READ</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="/update">UPDATE</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="/delete">DELETE</a>
                    </li>
                </ul>
            </li>    
    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
        </div>
        <div id="main" class='layout-navbar'>
             <header class='mb-1'>
                <nav class="navbar navbar-expand navbar-light ">
                    <div class="container-fluid">
                        <a href="#" class="burger-btn d-block">
                            <i class="bi bi-justify fs-3"></i>
                        </a>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>                        
                    </div>
                </nav>
            </header>          
            {{-- <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header> --}}
            <div id="main-content">                                           
                {{ $slot }}
                <footer>
                    <div class="footer clearfix mb-0 text-muted">
                        <div class="float-start">
                            <p>2022 &copy; CRUD</p>
                        </div>
                        <div class="float-end">
                            <a href="http://ahmadsaugi.com">Luis Angel Valverde Briseño</a></p>
                        </div>
                    </div>
                </footer>
            </div>
        
    </div>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    
<script src="assets/vendors/apexcharts/apexcharts.js"></script>
<script src="assets/js/pages/dashboard.js"></script>
<script src="assets/js/mazer.js"></script>

</body>

</html>


{{-- 
    <div id="main">         
            <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
                @if (Route::has('login'))
                    <div class="hidden fixed">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
        
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif        
            </div>   
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>                
            </header>           
            {{ $slot }}
            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2022 &copy; CRUD</p>
                    </div>
                    <div class="float-end">
                        <a href="http://ahmadsaugi.com">Luis Angel Valverde Briseño</a></p>
                    </div>
                </div>
            </footer>
        </div>
    --}}