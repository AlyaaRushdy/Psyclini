{{-- @extends('layouts.doctorApp')
@section('content') --}}
<!DOCTYPE html>
<html lang="en">
  
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Psyclini DOCTOR/ Create Post</title>
      
      <link rel="stylesheet" href="../css/admin_bootstrap.css">
      <link rel="stylesheet" href="../css/home_style.css">
      <link rel="stylesheet" href="../css/icofont.css">
      <link rel="stylesheet" href="../css/admin main style.css">
      <link rel="icon" href="../img/icon.png">
  </head>
  
  <body>  <div id="app">
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
                  <li class="submenu-item {{ Request::is('doctor-index') ? 'active' : '' }}">
                    <a href="{{ route('dHistory') }}">History</a>
                  </li>
                  <li class="submenu-item{{ Request::is('doctor-index') ? 'active' : '' }}">
                    <a href="{{ route('dAvilable') }}">Available</a>
                  </li>
                </ul>
              </li>
              
              <li class="sidebar-item active">
                <a href="{{ route('doctor.post') }}" class='sidebar-link active'>
                  <span>Publish posts</span>
                </a>
             
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
        
        <div class="container pt-4">
          <div class="col-lg-12 mb-5"><!--Create a Post-->
            <form action="{{ route('doctor.create.post') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="single-blog-item feature-item create-post">
                <h3 class="mb-4 dark-blue-title create-post-title">Create a Post for {{ Auth::guard('doctor')->user()->name }}</h3> 
                <textarea class="form-control mb-4" name="comment" id="comment" cols="30" rows="5" placeholder="What are you thinking??"></textarea>
                <label class="dep-lable">Department
                  <select class="form-select post-dep-dropdown" name="cate" >
                    <option class="op" value="Child and Adolescence Disorders">Child and Adolescence Disorders</option>
                    <option class="op" value="General Psychiatry">General Psychiatry</option>
                    <option class="op" value="Geriatric Psychiatry">Geriatric Psychiatry</option>
                    <option class="op" value="Psychiatry of Intellectual Disability (PID)">Psychiatry of Intellectual Disability (PID)</option>
                    <option class="op" value="Marital and Family Relations">Marital and Family Relations</option>
                    <option class="op" value="Forensic Psychiatry">Forensic Psychiatry</option>
                    <option class="op" value="Addiction<">Addiction</option>
                    <option class="op" value="Life Coach">Life Coach</option>
                  </select>
                </label>
                <label class="text-muted add-img">
                  <i class="icofont-image"><input type="file" name="post-pic" id="post-pic" class="post-pic" accept="image/*"></i>
                  Add an Image 
                </label>
                <input type="submit" class="btn btn-primary rounded-pill w-100 post-btn mt-4" value="Post">
              </div>
            </form>
            </div>
          </div>
  
          
        </div>
  
      </div>
    </div>
  
  
    
    <script src="../js/bootstrap.bundle.js"></script> 
    <script src="../js/admin main script.js"></script>
    <script src="../js/sweetalert.min.js"></script>

    @if (Session('status'))
    <script>
        swal("{{ Session('status') }}", 'You Can See It in Our Blog!', 'success');
    </script>  
  @endif 
  </body>
  
  </html>
{{-- }
@endif --}}
{{-- @endsection --}}