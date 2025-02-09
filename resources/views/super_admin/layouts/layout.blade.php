<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Customer Satisfaction Form | BPI</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/logos/bpi_logo.png') }}" />

    <link href="https://cdn.datatables.net/v/bs5/dt-2.0.1/datatables.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/moment/min/moment.min.js"></script>

    @vite('resources/assets/css/styles.min.css')

</head>

<body>

@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

<!--  Body Wrapper -->
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
  data-sidebar-position="fixed" data-header-position="fixed">
      <!-- Sidebar Start -->
      <aside class="left-sidebar">
          @include('super_admin.layouts.navigation')
      </aside>
      <!--  Sidebar End -->
</div>

<!--  Main wrapper -->
<div class="body-wrapper">
    @include('super_admin.layouts.header')
    <div class="container-fluid">
        
        @yield('contents')

    </div>
</div>
<!--  End Main wrapper -->

@vite('resources/assets/libs/jquery/dist/jquery.min.js')
@vite('resources/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')
@vite('resources/assets/js/sidebarmenu.js')
@vite('resources/assets/js/app.min.js')
@vite('resources/assets/libs/apexcharts/dist/apexcharts.min.js')
@vite('resources/assets/libs/simplebar/dist/simplebar.js')
@vite('resources/assets/js/dashboard.js')
<script src="https://cdn.datatables.net/v/bs5/dt-2.0.1/datatables.min.js"></script>

</body>

</html>