  <?php use Illuminate\Http\Request; ?>

  <style>
    .sidebar-nav ul .sidebar-item.selected>.sidebar-link, .sidebar-nav ul .sidebar-item.selected>.sidebar-link.active, .sidebar-nav ul .sidebar-item>.sidebar-link.active
    {
        background-color: #29734a !important;
    }

    .login-div{
      height:0px !important;
      padding: 30px 27px 20px 27px;
      margin-bottom: 30px;
    }

    .login-label{
      font-size: 13px;
      font-weight: bold;
      text-transform: uppercase;
    }

    .login-name{
      font-size: 13px;
      font-weight: bold;
      text-transform: uppercase;
      background-color:#4395f3;
      color:white;
      padding:10px;
    }
  </style>    

  

    <!-- Sidebar Start -->
    <aside class="left-sidebar">

      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center" style="margin-top:30px;">

          <a href="{{ route('index.super-admin') }}" class="text-nowrap logo-img" style="width:180px;">
            <img src="{{asset('images/logos/bpi_logo.png')}}" width="90" alt="" />
          </a>

          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>

        </div>

        <div class="login-div">
          <h1 class="login-label">Logged in as</h1>
          <p class="login-name" ><span style="font-size:11px;">{{ Auth::user()->first_name . " " . Auth::user()->last_name;  }} | 
            <?php 
                  $role_name = Auth::user()->role_id;
                  switch( $role_name ){
                    case 1:
                        echo "User";
                    break;

                    case 2:
                        echo "Admin";
                    break;

                    case 3:
                        echo "Super-Admin";
                    break;

                  }
                  
            ?>
            </span>
          </p>
        </div>


        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-home nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('index.super-admin') }}" aria-expanded="false">
                <span>
                  <i class="ti ti-home"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>

            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">MENU</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('super.list')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-list"></i>
                </span>
                <span class="hide-menu">CSF Summary</span>
              </a>
            </li>
            <li class="sidebar-item" disabled>
              <a class="sidebar-link" href="{{ route('super.messages') }}" aria-expanded="false" >
                <span>
                  <i class="ti ti-mail fs-6"></i>
                </span>
                <span class="hide-menu">Messages</span>
              </a>
            </li>
            <li class="sidebar-item" disabled>
              <a class="sidebar-link" href="{{ route('super.tasks') }}" aria-expanded="false" >
                <span>
                  <i class="ti ti-cards"></i>
                </span>
                <span class="hide-menu">Tasks</span>
              </a>
            </li>


            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">SETTINGS</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('super.profile')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-user-check"></i>
                </span>
                <span class="hide-menu">Profile</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link {{ request()->routeIs('super.control.number') || request()->routeIs('super.set-control.number') || request()->routeIs('super.store-control.number') || request()->routeIs('super.office.create')  ? 'active' : ' '  }}"  href="{{route('super.office')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-files"></i>
                </span>
                <span class="hide-menu">Office Details</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link {{ request()->routeIs('super.admin-add.new.user') ? 'active' : ' '  }}" href="{{route('super.personnel')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-user"></i>
                </span>
                <span class="hide-menu">Personnel List</span>
              </a>
            </li> 
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
    </aside>
    <!-- End Sidebar scroll-->