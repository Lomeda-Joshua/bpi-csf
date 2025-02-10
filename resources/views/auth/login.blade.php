<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Customer Satisfaction Form | BPI</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/logos/bpi_logo.png') }}" />
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    @vite('resources/assets/css/styles.min.css')
</head>

<style>
  .card-body{
    box-shadow: rgba(0, 0, 0, 0.15) 0px 15px 25px, rgba(0, 0, 0, 0.05) 0px 5px 10px !important;
  }
  
</style>

<body>

  
  @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
  
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <div class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="{{ asset('images/logos/bpi_logo.png')}}" width="180" alt="">
                </div>
                <h5 class="text-center"><b>Customer Satisfaction Application</b></h5>



                    @if (Route::has('login'))
                      
                              @auth
                                  @if( $auth_id )

                                    @switch($auth_id->role_id)

                                      @case(1)
                                        <br>
                                        <a href="{{ route('index.user') }}" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2" >To dashboard</a>
                                      @break

                                      @case(2)
                                        <br>
                                        <a href="{{ route('index.admin') }}" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2" >To dashboard</a>
                                      @break

                                      @case(3)
                                        <br>
                                        <a href="{{ route('index.super-admin') }}" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2" >To dashboard</a>
                                      @break

                                    @endswitch
                    
                                  @endif
                  
                                @else
                   
                                        
                                    <p class="text-center"><b>Login</b></p>
                                    <form method="POST" action="{{ route('login') }}">
                                      @csrf
                    
                                        <div class="mb-3">
                                          <label for="email" class="form-label">Email: </label>
                                          <input id="email" class="block mt-1 w-full form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username">                    
                                          <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>
                    
                                        <div class="mb-4">
                                          <label for="password" class="form-label">Password</label>
                                          <input id="password" class="block mt-1 w-full form-control" type="password" name="password" required autocomplete="current-password">
                                          <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>
                    
                                        <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">{{ __('Log in') }}</button>
                                    </form>
                            @endauth   
                    @endif
                    

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  
  @if(Session::has('Alert'))
    <script>
      swal("Message", "{{ Session::get('message') }}", 'success',{
        button:true,
        button: "ok",
      })
    </script>
  @endif


<script src="https://cdn.datatables.net/v/bs5/dt-2.0.1/datatables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@vite('resources/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')
@vite('resources/assets/libs/jquery/dist/jquery.min.js')
@vite('resources/assets/js/sidebarmenu.js')
@vite('resources/assets/js/app.min.js')


</body>

</html>



