{{-- @extends('layouts.doctorApp')
@section('content') --}}


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Psyclini DOCTOR/ Publish Article</title>
    
    <link rel="stylesheet" href="../css/admin_bootstrap.css">
    <link rel="stylesheet" href="../css/icofont.css">
    <link rel="stylesheet" href="../css/admin main style.css">
    <link rel="icon" href="../img/icon.png">
</head>

<body>  <div id="app"> <div id="sidebar" class="active">
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
      
      <div class="container">
        <div class="card">
          <div class="pl-3 pt-4">
            <h3 class="dark-blue-title pt-2">Create an Article</h3>
          </div>
          <div class="card-content article-form">
            <div class="card-body">
              <form class="form form-horizontal">
                <div class="form-body">
                  <div class="row pl-3 pr-3 ">
                    <div class="col-md-3">
                      <label>Article Main Title</label>
                    </div>
                    <div class="col-md-9 form-group">
                      <input type="text" id="main-title" class="form-control" name="main-title" placeholder="Article Title" required>
                    </div>
                    <div class="col-md-3">
                      <label>Subtitle 1</label>
                    </div>
                    <div class="col-md-9 form-group">
                      <input type="text" id="subt-1" class="form-control" name="subt-1" placeholder="First Subtitle">
                    </div>
                    <div class="col-md-3">
                      <label>Paragraph 1</label>
                    </div>
                    <div class="col-md-9 form-group">
                      <textarea class="form-control " name="parag-1" id="parag-1" cols="30" rows="2" placeholder="First Paragraph"></textarea>
                    </div>
                    <div class="col-md-3">
                      <label>Subtitle 2</label>
                    </div>
                    <div class="col-md-9 form-group">
                      <input type="text" id="subt-2" class="form-control" name="subt-2" placeholder="Second Subtitle">
                    </div>
                    <div class="col-md-3">
                      <label>Paragraph 2</label>
                    </div>
                    <div class="col-md-9 form-group">
                      <textarea class="form-control " name="parag-2" id="parag-2" cols="30" rows="2" placeholder="Second Paragraph"></textarea>
                    </div>
                    <div class="col-md-3">
                      <label>Subtitle 3</label>
                    </div>
                    <div class="col-md-9 form-group">
                      <input type="text" id="subt-3" class="form-control" name="subt-3" placeholder="Third Subtitle">
                    </div>
                    <div class="col-md-3">
                      <label>Paragraph 3</label>
                    </div>
                    <div class="col-md-9 form-group">
                      <textarea class="form-control " name="parag-3" id="parag-3" cols="30" rows="2" placeholder="Third Paragraph"></textarea>
                    </div>
                    <div class="col-md-3">
                      <label>Subtitle 4</label>
                    </div>
                    <div class="col-md-9 form-group">
                      <input type="text" id="subt-4" class="form-control" name="subt-4" placeholder="Fourth Subtitle">
                    </div>
                    <div class="col-md-3">
                      <label>Paragraph 4</label>
                    </div>
                    <div class="col-md-9 form-group">
                      <textarea class="form-control " name="parag-4" id="parag-4" cols="30" rows="2" placeholder="Fourth Paragraph"></textarea>
                    </div>
                    <div class="col-md-3">
                      <label>Embed a Video</label>
                    </div>
                    <div class="col-md-9 form-group">
                      <textarea class="form-control " name="parag-4" id="parag-4" cols="30" rows="2" placeholder="The Full <iframe> Tag "></textarea>
                    </div>
                    <div class="col-md-3">
                      <label>Add an Image</label>
                    </div>
                    <div class="col-md-9 form-group">
                      <input class="form-control" type="file" id="formFile" accept="image/*">
                    </div>                              
                    <div class="col-sm-12 d-flex mt-3 justify-content-end">
                      <button type="submit" class="btn btn-primary me-1 mb-1 mr-2">Publish</button>
                      <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                    </div>
                  </div>
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
</body>

</html>
