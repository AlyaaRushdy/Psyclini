<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/admin main style.css">
    <link rel="stylesheet" href="../css/admin_bootstrap.css">
    <link rel="stylesheet" href="../css/icofont.css">
    <link rel="icon" href="../img/icon.png">

</head>
<body>
    <div id="app">
      <div id="sidebar" class="active ">
        <div class="sidebar-wrapper active">
          <div class="sidebar-header">
            <div class="d-flex justify-content-between">
              <div class="logo">
                <a href="{{ route('admin.index') }}"><img src="../img/logo.png" alt="Logo" srcset=""></a>
              </div>
              <div class="toggler">
                <a href="#" class="sidebar-hide d-xl-none d-block"></a>
              </div>
            </div>
          </div>
          <div class="sidebar-menu">
            <ul class="menu">            
              <li class="sidebar-item {{ Request::is('admin/index') ? 'active' : '' }}">
                <a href="{{ route('admin.index') }}" class='sidebar-link'>
                  <span>Dashboard</span>
                </a>
              </li>
                
              <li class="sidebar-item has-sub {{ Request::is('admin/modify') ? 'active' : '' }}">
                <a href="#" class='sidebar-link'>
                  <span>Appointments</span>
                </a>
                <ul class="submenu {{ Request::is('admin/modify') ? 'active' : '' }}">
                   <li class="submenu-item {{ Request::is('admin/modify') ? 'active' : '' }} ">
                    <a href="{{ route('admin.modify.appoinments') }}">Modify Appointments</a>
                  </li>
                </ul>
              </li>
              
              <li class="sidebar-item has-sub {{ Request::is('admin/posts') ? 'active' : ''}} {{Request::is('admin/requests') ? 'active' : '' }} ">
                <a href="#" class='sidebar-link'>
                  <span>Show</span>
                </a>
                <ul class="submenu {{ Request::is('admin/posts') ? 'active' : ''}} {{Request::is('admin/requests') ? 'active' : '' }} ">
                  <li class="submenu-item  {{ Request::is('admin/posts') ? 'active' : ''}} ">
                    <a href="{{ route('admin.show.posts') }}">Posts</a>
                  </li>
                  <li class="submenu-item {{Request::is('admin/requests') ? 'active' : '' }} ">
                    <a href="{{ route('admin.approve.requests') }}">Doctors' Requests</a>
                  </li>
                </ul>
              </li>
  
              <li class="sidebar-item {{ Request::is('admin/contact') ? 'active' : ''}} ">
                <a href="{{ route('admin.contact.response') }}" class="sidebar-link"> 
                  <span>Contact Us Responses</span>
                </a>
              </li>
              
              <li class="sidebar-item {{ Request::is('admin/create') ? 'active' : ''}} ">
                <a href="{{ route('admin.createDRAccount') }}" class="sidebar-link"> 
                  <span>Create Doctor's Account</span>
                </a>
              </li>
  
              <li class="sidebar-item ">
                <a href="{{ route('home') }}" class="sidebar-link"> 
                  <span>Go to the Main Website <i class="icofont-simple-right"></i></span>
                </a>
              </li>
              <li class="sidebar-item log-out ">
                <a href="{{ route('admin.logout') }}" class="text-muted">Log Out</a>
              </li>
  
  
              
  
            </ul>           
          </div>
        </div>
      </div>
      
        <main class="py-4"> 
            @yield('content')
        </main>
    </div>

<script src="../js/sweetalert.min.js"></script>
    
    <!-- Scripts -->
    @if (Session('status2'))
    <script>
        swal("{{ Session('status2') }}");
    </script>
    
@endif 

</body>
</html>
