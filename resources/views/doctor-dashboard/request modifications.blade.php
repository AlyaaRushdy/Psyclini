<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Psyclini DOCTOR/ Modify Appointments</title>
    
    <link rel="stylesheet" href="../css/admin_bootstrap.css">
    <link rel="stylesheet" href="../css/icofont.css">
    <link rel="stylesheet" href="../css/admin main style.css">
    <link rel="stylesheet" href="../css/jquery.timepicker.css">
    <link rel="icon" href="../img/icon.png">
</head>

<body>
  <div id="app">
    <div id="sidebar" class="active">
      <div class="sidebar-wrapper">
        <div class="sidebar-header">
          <div class="d-flex justify-content-between">
            <div class="logo">
              <a href="{{ route('doctor.index') }}"><img src="../img/logo.png" alt="Logo" srcset=""></a>
            </div>
            <div class="toggler">
              <a href="#" class="sidebar-hide d-xl-none d-block"></a>
            </div>
          </div>
        </div>
        <div class="sidebar-menu">
          <ul class="menu">            
            <li class="sidebar-item {{ Request::is('doctor-index') ? 'active' : '' }} ">
              <a href="{{ route('doctor.index') }}" class='sidebar-link'>
                <span>Dashboard</span>
              </a>
            </li>
              
            <li class="sidebar-item has-sub">
              <a href="#" class='sidebar-link'>
                <span>Appointments</span>
              </a>
              <ul class="submenu ">
                <li class="submenu-item {{ Request::is('requests modifications') ? 'active' : '' }} ">
                  <a href="{{ route('doctor.modifications') }}">Request Modifications</a>
                </li>
                <li class="submenu-item {{ Request::is('requests status') ? 'active' : '' }} ">
                  <a href="{{ route('doctor.status') }}">Requests' Status</a>
                </li>
              </ul>
            </li>
            
            <li class="sidebar-item has-sub">
              <a href="#" class='sidebar-link'>
                <span>Publish</span>
              </a>
              <ul class="submenu ">
                <li class="submenu-item {{ Request::is('create post') ? 'active' : '' }} ">
                  <a href="{{ route('doctor.post') }}">Post</a>
                </li>
                <li class="submenu-item {{ Request::is('publish article') ? 'active' : '' }} ">
                  <a href="{{ route('doctor.article') }}">Article</a>
                </li>
              </ul>
            </li>

            <li class="sidebar-item {{ Request::is('/') ? 'active' : '' }} ">
              {{-- <a class="nav-link" href="{{ url('/') }}">Home</a> --}}
              <a href="{{ url('/') }}" class="sidebar-link"> 
                <span>Go to the Main Website <i class="icofont-simple-right"></i></span>
              </a>
            </li>
            <li class="sidebar-item log-out ">
              <a href="{{ route('doctor.logout') }}" class="text-muted">Log Out</a>
            </li>
            
          </ul>           
        </div>
      </div>
    </div>
    
    <div id="main">

      <header class="mb-4">
        <a href="#" class="burger-btn d-block d-xl-none"><i class="icofont-navigation-menu fs-3"></i></a>
      </header>

      <div class="container pt-4 req-mod ml-2">
        <div class="row ">
          <div class="col-lg-10 card shadow  mr-5">
            <h4 class="dark-blue-title pt-4 pl-3 pb-3">Add Appointment</h4>
            <div class="col-lg-12 card mb-4 add-appointment align-items-center">
              <form class="col-lg-10">
                <div class="row pl-4">
                  <div class="col-lg-4 pb-2 ">
                    <label class=""> Date : </label>
                  </div>
                  <div class="col-lg-8 pb-4 ">
                    <input type="date" class="w-100 min_today" required>
                  </div>
                  <div class="col-lg-4 pb-2 ">
                    <label > Time : </label>
                  </div>
                  <div class="col-lg-8 pb-4">
                    <input name="datetime" class="w-100 appt_time" required>
                  </div>
                </div>
                <div class="col-lg-12 d-flex justify-content-center">
                  <input type="submit" class="btn btn-primary w-50" value="Submit"> 
                </div>
              </form>
            </div>
          </div>

          <div class="col-lg-10 card shadow  mr-5">
            <h4 class="dark-blue-title pt-4 pl-3 pb-3">Cancel Appointment</h4>
            <div class="col-lg-12 card mb-4 add-appointment align-items-center">
              <form class="col-lg-10">
                <div class="row pl-4">
                  <div class="col-lg-4 pb-2 ">
                    <label class=""> Date : </label>
                  </div>
                  <div class="col-lg-8 pb-4" >
                    <input type="date" class="w-100 min_today" required>
                  </div>
                  <div class="col-lg-4 pb-2 ">
                    <label > Time : </label>
                  </div>
                  <div class="col-lg-8 pb-4" >
                    <input name="datetime" class="w-100 appt_time" required>
                  </div>
                </div>
                <div class="col-lg-12 d-flex justify-content-center">
                  <input type="submit" class="btn btn-primary w-50" value="Submit"> 
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>      
    </div>    
  </div>


  
  <script src="../js/bootstrap.bundle.js"></script> 
  <script src="../js/admin main script.js"></script>
  <script src="../js/jquery.js"></script>
  <script src="../js/jquery.timepicker.js"></script>
  <script src="../js/date.js"></script>
  <script src="../js/time.js"></script>

</body>

</html>