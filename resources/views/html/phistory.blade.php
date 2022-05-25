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

  <div class="container mt-4 user-history">
    <div class="col-lg-12">
      <ul class="list-unstyled">
        <!--appointments history section-->
        <li class="mb-2">
          <button class="btn btn-toggle align-items-center rounded " data-bs-toggle="collapse" data-bs-target="#appt-history" aria-expanded="true">
            Appointments' History
          </button>
          <div class="collapse show mt-2" id="appt-history">
            <div class="feature-item "><!--history table-->
              <h4 class="mb-3 blue-title">Your Appointments' History</h4>
              <div class="table-responsive user-table">
                <table class="table p-2 text-center" id="history_table">
                  <thead> 
                    <tr class="justify-content-between blue-title text-center">
                      
                      <th class="text-center">Date</th>
                      <th class="text-center">Time</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach
					<tr>
                      <td>{{$appointment->date}}</td>
                      <td>{{$appointment->time}}</td>
                    </tr>
					@endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </li>
        <li class="mb-2">
          <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#duration-collapse" aria-expanded="false">
            Tests' History
          </button>
          <div class="collapse mt-2 " id="duration-collapse">
            <h3>Hello</h3>
          </div>
        </li>

      </ul>
    </div>
  </div> 

   <!--footer begin-->
  <div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top my-footer">
      <div class="col-md-4 d-flex align-items-center">
        <span class="text-muted">&copy; 2022 Ain Shams Uni. , Faculty of Science,<br> Maths. Department. </span>
      </div>
      <div class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <a href="index.html" class="a-no-decor"><img src="../img/icon.png" width="45"></a>
      </div>
  
      <ul class="nav col-md-4  justify-content-end d-flex">
        <li class="ms-3"><a class="text-muted a-no-decor " href="https://github.com/AlyaaRushdy/Psyclini"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-github" viewBox="0 0 18 18">
          <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
          </svg></a></li>
        <li class="ms-3"><a class="text-muted a-no-decor " href="https://www.facebook.com/FacultyofScienceASU/"><i class="icofont-facebook"></i></a></li>
      </ul>
    </footer>
  </div>
  <!--footer end-->





  <script src="../js/jquery.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/bootstrap.bundle.js"></script>
  <script src="../js/simple-datatables.js"></script>
  <script>
    // Simple Datatable
    let history_table = document.querySelector('#history_table');
    let dataTable = new simpleDatatables.DataTable(history_table, {
      columns: [
        { select: 3, sortable: false }
      ]
    });
  </script>
</body>
</html>


