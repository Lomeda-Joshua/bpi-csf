<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Customer Satisfaction Form | BPI</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/logos/bpi_logo.png') }}" />
    <link rel="stylesheet" href="{{asset('assets/css/styles.min.css')}}" />
    <link href="https://cdn.datatables.net/v/bs5/dt-2.0.1/datatables.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<body>


<!--  Body Wrapper -->
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
  data-sidebar-position="fixed" data-header-position="fixed">
      <!-- Sidebar Start -->
      <aside class="left-sidebar">
        @include('users.layouts.navigation')
      </aside>
      <!--  Sidebar End -->
</div>

<!--  Main wrapper -->
<div class="body-wrapper">
    @include('users.layouts.header')
    <div class="container-fluid">

        @yield('contents')

    </div>
</div>
<!--  End Main wrapper -->

<script src="{{asset('assets/libs/jquery/dist/jquery.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="{{asset('assets/js/sidebarmenu.js')}}"></script>
<script src="{{asset('assets/js/app.min.js')}}"></script>
<script src="{{asset('assets/libs/apexcharts/dist/apexcharts.min.js')}}"></script>
<script src="{{asset('assets/libs/simplebar/dist/simplebar.js')}}"></script>
<script src="{{asset('assets/js/dashboard.js')}}"></script>
<script src="https://cdn.datatables.net/v/bs5/dt-2.0.1/datatables.min.js"></script>

</body>

</html>