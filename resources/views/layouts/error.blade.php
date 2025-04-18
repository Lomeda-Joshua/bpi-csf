<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Customer Satisfaction Form | BPI</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/logos/bpi_logo.png')}}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    @vite('resources/assets/css/styles.min.css')

    <style>
        .sub_label{
            text-align: center;
            font-size:20px;
            background-color:red;
            color:white;
            padding:10px;
        }
    </style>
</head>

<body>
    

    <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
        <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
            <div class="row justify-content-center w-100">
                <div class="col-md-12 col-lg-12 col-xxl-3">
                <div class="card mb-0">
                    <div class="card-body">

                        <div class="text-nowrap logo-img text-center d-block py-3 w-100">
                            <a href="{{ route('login') }}" class="text-nowrap logo-img text-center d-block py-3 w-100">
                            <img src="{{ asset('images/logos/bpi_logo.png')}}" width="180" alt="">
                            </a>
                        </div>

                        <h3 class="text-center">500 NOT ALLOWED AT THIS TIME.</h3>
                        <p class="sub_label">Contact administrator.</p>
                        

                    </div>



                </div>
                </div>
            </div>
            </div>
        </div>
    </div>

</body>

</html>





