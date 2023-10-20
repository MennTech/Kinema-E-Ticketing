<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Kinema</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="img/favicon.png">
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  
</head>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="border p-2 rounded" style="background-color: #4323c3">
            <a href="#" class="d-flex align-items-center"> 
                <i class='bx bx-log-out nav_icon' style="color: white"></i> 
                <span class="nav_name" style="margin: 0px 5px; color: white">SignOut</span> 
            </a>
        </div>
        {{-- <form class="d-flex" role="search">
            <input class="form-control me-2" type="searchForm" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary" type="submit">Search</button>
        </form> --}}
    </header>

    <div class="l-navbar" id="nav-bar">
      <nav class="nav">
          <div> 
            <a href="/" class="nav_logo"> <img src="img/favicon.png" alt="" class="nav_logo-icon">
              <span class="nav_logo-name">Kinema</span> 
            </a>
            <div class="nav_list">
                <a href="/" class="nav_link"><img src="img/{{ $foto_profile }}" alt="" class="rounded-circle" id="profile"><span class="nav_name">{{ $name }}</span> </a>
                <a href="/" class="nav_link {{ ($title === 'dashboard') ? 'active' : '' }}"><i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Dashboard</span> </a> 
                <a href="/Data-Film" class="nav_link {{ ($title === 'data_film') ? 'active' : '' }}"><i class='bx bx-film nav_icon'></i> <span class="nav_name">Film</span> </a>
                <a href="/Data-Makanan" class="nav_link {{ ($title === 'data_makanan') ? 'active' : '' }}"><i class='fa-solid fa-pizza-slice nav_icon'></i> <span class="nav_name">Food</span> </a>
            </div>
          </div> 
          {{-- <a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a> --}}
        </nav>
    </div>
    
    @yield('content')
    {{-- <footer class="main-footer">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">
            210711402
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; {{ date('Y') }} <a href="#">Gofit</a>. </strong> All rights reserved.
    </footer> --}}
    {{-- dari footer diatas buatkan footer yang sama dengan menggunakan style yang telah disediakan--}}
    <footer class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>ABOUT US</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
                </div>
                <div class="col-md-4">
                    <h5>CONTACT US</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
                </div>
                <div class="col-md-4">
                    <h5>SOCIAL MEDIA</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" 
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('js/sidebar.js') }}"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
    <script src="{{ asset('js/datatable.js') }}"></script>
</body>

</html>
