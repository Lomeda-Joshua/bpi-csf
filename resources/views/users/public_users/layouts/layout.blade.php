<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Customer Satisfaction Form | BPI</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/logos/bpi_logo.png') }}" />

    <link href="https://cdn.datatables.net/v/bs5/dt-2.0.1/datatables.min.css" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>

    @vite('resources/assets/css/styles.min.css')
    @vite('resources/assets/libs/jquery/dist/jquery.min.js')
</head>

<body>



<!--  Body Wrapper -->
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
  data-sidebar-position="fixed" data-header-position="fixed">
      <!-- Sidebar Start -->
      <aside class="left-sidebar">
        @include('users.public_users.layouts.navigation')
      </aside>
      <!--  Sidebar End -->
</div>

<!--  Main wrapper -->
<div class="body-wrapper">
    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
    @include('users.public_users.layouts.header')
    <div class="container-fluid">

        @yield('contents')

    </div>
</div>
<!--  End Main wrapper -->

<!--  Javascripts -->



@vite('resources/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')
@vite('resources/assets/js/sidebarmenu.js')
@vite('resources/assets/js/app.min.js')
@vite('resources/assets/libs/simplebar/dist/simplebar.js')
@vite('resources/assets/js/dashboard.js')
<script src="https://cdn.datatables.net/v/bs5/dt-2.0.1/datatables.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script> 

</body>

</html>