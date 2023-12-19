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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="icon" type="image/x-icon" href="/img/favicon.png">
    <link rel="stylesheet" href="/css/sidebar.css">
    <link rel="stylesheet" href="/css/datatable.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-theme@0.1.0-beta.10/dist/select2-bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/select2-bootstrap-theme@0.1.0-beta.10/Gruntfile.min.js"></script>
</head>

<body id="body-pd">    
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="border p-2 rounded" style="background-color: #2447c7">
            <a href="{{ route('actionLogout') }}" class="d-flex align-items-center"> 
                <i class='bx bx-log-out nav_icon' style="color: white"></i> 
                <span class="nav_name" style="margin: 0px 5px; color: white">Logout</span> 
            </a>
        </div>
    </header>

    <div class="l-navbar" id="nav-bar">
      <nav class="nav">
          <div> 
            <a href="/" class="nav_logo"> <img src="/img/favicon.png" alt="" class="nav_logo-icon">
              <span class="nav_logo-name">Kinema</span> 
            </a>
            <div class="nav_list">
                <a href="{{ route('dashboard') }}" class="nav_link"><img src="/img/admin2.jpg" alt="" class="rounded-circle" id="profile"><span class="nav_name">Admin</span> </a>
                <a href="{{ route('dashboard') }}" class="nav_link"><i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Dashboard</span> </a> 
                <a href="{{ url('admin/movie') }}" class="nav_link"><i class='bx bx-film nav_icon'></i> <span class="nav_name">Film</span> </a>
                <a href="{{ url('admin/food') }}" class="nav_link"><i class='fa-solid fa-pizza-slice nav_icon'></i> <span class="nav_name">Food</span> </a>
                <a href="{{ url('admin/studio') }}" class="nav_link"><i class="fa-solid fa-video nav_icon"></i> <span class="nav_name">Studio</span></a>
                <a href="{{ url('admin/schedule') }}" class="nav_link"><i class="fa-solid fa-calendar-days nav_icon"></i> <span class="nav_name">Studio</span></a>
            </div>
          </div> 
        </nav>
    </div>
    
    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/sidebar.js') }}"></script>

    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap5.min.js"></script>

    <script src="{{ asset('js/datatable.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#genreInput').select2({
                width: 'resolve',
                placeholder: 'Genre Film',
                allowClear: true
            });
        });

        $(document).ready(function(){
            $('#judulFilmSelect').select2({
                dropdownParent: $('#tambahSchedule'),
                allowClear: true,
                width: 'resolve',
                placeholder: 'Pilih Film',
                theme: 'bootstrap'
            });
        });

        $(document).ready(function(){
            $('#namaStudio').select2({
                dropdownParent: $('#tambahSchedule'),
                allowClear: true,
                width: 'resolve',
                placeholder: 'Pilih Studio',
                theme: 'bootstrap'
            });
        });
    </script>

    <script>
        const toastTrigger = document.getElementById('deleteToastBtn')
        const toastLiveExample = document.getElementById('deleteToast')
        if (toastTrigger) {
        toastTrigger.addEventListener('click', () => {
            const toast = new bootstrap.Toast(toastLiveExample)

            toast.show()
        })
        }
    </script>
</body>

</html>
