<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Customer Satisfaction Form | BPI</title>
    <link rel="shortcut icon" type="image/png" href="{{asset('images/logos/bpi_logo.png')}}" />
    <link href="https://cdn.datatables.net/v/bs5/dt-2.0.1/datatables.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    @vite('resources/assets/css/styles.min.css')
  </head>

<body>
  
  @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])


  <style>
      .card-body{
        box-shadow: rgba(0, 0, 0, 0.15) 0px 15px 25px, rgba(0, 0, 0, 0.05) 0px 5px 10px !important;
      }
  </style>

      <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">

            <div class="card mb-0">
              <div class="card-body">

                <a href="{{ route('login') }}" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="{{ asset('images/logos/bpi_logo.png')}}" width="180" alt="">
                </a>

                <h5 class="text-center"><b>Customer Satisfaction Application</b></h5>
                <p class="text-center">Super-admin ONE time System Registration</p>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        @method('POST')

                          <div class="row">

                          <!-- first Name -->
                          <div class="col-md-6">
                                <div>
                                    <x-input-label for="first_name" :value="__('First name')" />
                                    <input id="first_name" class="block mt-1 w-full form-control" type="text" name="first_name" :value="old('first_name')" required autofocus autocomplete="firstname" />                    
                                    <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                                </div>
                            </div>

                          <!-- last Name -->
                          <div class="col-md-6">
                                  <div>
                                    <x-input-label for="last_name" :value="__('Last name')" />
                                    <input id="last_name" class="block mt-1 w-full form-control" type="text" name="last_name" :value="old('last_name')" required autofocus autocomplete="lastname" />                    
                                    <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                                  </div>
                            </div>
                          </div>

                          
                          <!-- Email Address -->
                          <div class="mt-4">
                              <x-input-label for="email" :value="__('Email')" />
                              <input id="email" class="block mt-1 w-full form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="email" />                    
                              <x-input-error :messages="$errors->get('email')" class="mt-2" />
                          </div>
                  
                          <!-- Password -->
                          <div class="mt-4">
                              <x-input-label for="password" :value="__('Password')" />
                              <input id="password" minlength="7" class="block mt-1 w-full form-control" type="password" name="password" :value="old('password')" required autofocus autocomplete="new-password" />                    
                              <x-input-error :messages="$errors->get('password')" class="mt-2" />
                          </div>
                  
                          <!-- Confirm Password -->
                          <div class="mt-4">
                              <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                              <input id="password_confirmation" class="block mt-1 w-full form-control" type="password" name="password_confirmation" :value="old('password_confirmation')" required autofocus autocomplete="new-password" />                    
                              <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                          </div>
                  
                          
                          <div class="flex items-center justify-end mt-4"> 
                              <button type="submit" class="btn btn-warning w-100 py-8 fs-4 mb-4 rounded-2">{{ __('Register') }}</button>
                          </div>

                    </form>
              </div>
            </div>


          </div>
        </div>
      </div>
    </div>
</div>

<script src="{{asset('assets/libs/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/sidebarmenu.js')}}"></script>
<script src="{{asset('assets/js/app.min.js')}}"></script>
{{-- <script src="{{asset('assets/libs/apexcharts/dist/apexcharts.min.js')}}"></script> --}}
<script src="{{asset('assets/libs/simplebar/dist/simplebar.js')}}"></script>
<script src="{{asset('assets/js/dashboard.js')}}"></script>
<script src="https://cdn.datatables.net/v/bs5/dt-2.0.1/datatables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>


    

