@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/home_style.css">
    <link rel="stylesheet" href="../css/icofont.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/datatable_style.css">
    <link rel="icon" href="../img/icon.png">
    <title>History - Psyclini</title>
    
</head>
<body>
  
  <!--nav bar begin-->
  <header>
    <nav class="navbar navbar-expand-lg navigation" id="navbar">
      <div class="container">
        <a class="navbar-brand" href="index.html">
          <img src="../img/logo.png" alt="" class="img-fluid" >
        </a>

        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
          <span class="icofont-navigation-menu"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarmain">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="department.html" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Departments</a>
              <ul class="dropdown-menu" aria-labelledby="dropdown02">
                <li><a class="dropdown-item" href="department.html">All Departments</a></li>
                <li><a class="dropdown-item" href="department.html#child_adol">Child and Adolescence Disorders</a></li>
                <li><a class="dropdown-item" href="department.html#general">General Psychiatry</a></li>
                <li><a class="dropdown-item" href="department.html#geriatric">Geriatric Psychiatry</a></li>
                <li><a class="dropdown-item" href="department.html#pid">Psychiatry of Intellectual Disability (PID)</a></li>
                <li><a class="dropdown-item" href="department.html#marital">Marital and Family Relations</a></li>
                <li><a class="dropdown-item" href="department.html#forensic">Forensic Psychiatry</a></li>
                <li><a class="dropdown-item" href="department.html#addiction">Addiction</a></li>
                <li><a class="dropdown-item" href="department.html#life_coach">Life Coach</a></li>
              </ul>
            </li>
            <li class="nav-item"><a class="nav-link" href="doctors.html">Doctors</a></li>
            <li class="nav-item"><a class="nav-link" href="articles.html">Articles</a></li> 
            <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>       
            <li class="nav-item"><a class="nav-link" href="tests.html">Tests</a></li>
            <li class="nav-item"><a class="nav-link" href="games.html">Games</a></li>      
            <li class="nav-item"><a class="nav-link" href="index.html#contact-us">Contact Us</a></li>
            <li class="nav-item dropdown user-dropdown">
              <a class="nav-link dropdown-toggle"  id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span><img src="../img/mole.png" width="50" height="50" alt=""></span></a>
              <ul class="dropdown-menu " aria-labelledby="dropdown03">
                <li><a class="dropdown-item" href="history.html">History</a></li>
                <li><a class="dropdown-item" href="upcoming appointments.html">Upcoming Appointments</a></li>
                <li><a class="dropdown-item" href="account settings.html">Account Settings</a></li>
                <li><a class="dropdown-item text-muted" href="#">Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!--nav bar End-->

  <div class="container mt-4">
    <div class="col-lg-12">
      <div class="feature-item ">
        <h4 class="mb-3 blue-title">Your Upcoming Appointments</h4>
        <div class="table-responsive user-table">
          <table class="table table1 p-2 text-center" id="table1">
            <thead> 
              <tr class="justify-content-between blue-title text-center">
                <th class="text-center">Doctor's Name</th>
                <th class="text-center">Date</th>
                <th class="text-center">Time</th>
                <th class="text-center">Cancel</th>
              </tr>
            </thead>
            <tbody>
			@foreach($appointment as $appointment)
              <tr>
                <td>{{$appointment->doctor_name}}</td>
                <td>{{$appointment->date}}</td>
                <td>{{$appointment->time}}</td>
                
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div> 

  <!--footer Section begin-->
  <div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top my-footer">
      <div class="col-md-4 d-flex align-items-center">
        <span class="text-muted">&copy; 2022 Ain Shams Uni. , Faculty of Science,<br> Maths. Department. </span>
      </div>
      <div class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <a href="index.html" class="a-no-decor"><img src="../img/icon.png" width="45"></a>
      </div>
  
      <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
        <li class="ms-3"><a class="text-muted a-no-decor bi" href="https://github.com/AlyaaRushdy/Psyclini"><i class="icofont-github"></i></a></li>
        <li class="ms-3"><a class="text-muted a-no-decor bi" href="https://www.facebook.com/FacultyofScienceASU/"><i class="icofont-facebook"></i></a></li>
      </ul>
    </footer>
  </div>
  <!--footer section end-->





  <script src="../js/jquery.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/simple-datatables.js"></script>
  <script>
    // Simple Datatable
    let table1 = document.querySelector('#table1');
    let dataTable = new simpleDatatables.DataTable(table1, {
      columns: [
        { select: 3, sortable: false }
      ]
    });
  </script>
</body>
</html>

@endsection
