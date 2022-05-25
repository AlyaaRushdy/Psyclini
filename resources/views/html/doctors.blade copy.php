<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/home_style.css">
    <link rel="stylesheet" href="../css/icofont.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/slick-theme.css">
    <link rel="stylesheet" href="../css/slick.css">
    <link rel="icon" href="../img/icon.png">
    <title>Psyclini</title>
    
</head>
<body id="bootstrap-overrides top">
  
  <!--nav bar begin-->
  <header>
    <nav class="navbar navbar-expand-lg navigation" id="navbar">
      <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
          <img src="../img/logo.png" alt="" class="img-fluid" >
        </a>

        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
          <span class="icofont-navigation-menu"></span>
        </button>
    
            <div class="collapse navbar-collapse" id="navbarmain">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
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
            <li class="nav-item"><a class="nav-link" href="{{ url('doctors/') }}">Doctors</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('articles/') }}">Articles</a></li>    
            <li class="nav-item"><a class="nav-link" href="{{ url('test/') }}">Tests</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('blog/') }}">Blog</a></li>    
            <li class="nav-item"><a class="nav-link" href="{{ url('') }}">Games</a></li>      
            <li class="nav-item"><a class="nav-link" href="#contact-us">Contact Us</a></li>
            <a class="btn btn-outline-primary rounded-pill order-1 order-lg-0 ms-lg-4" href="{{ url('sign in/') }}">Sign In</a>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!--nav bar End-->

  <section class="section doctors">
    <div class="container">
      <div class="row">
        <!--Side bar begin-->
        <div class="col-lg-3">
          <div class=" doctors-sidebar bg-white position-sticky fixed-top" >
            <ul class="list-unstyled ps-0 ">

              <li class="mb-1"><!--speciality button and list-->
                <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#specialities-collapse" aria-expanded="true">
                  Specialities
                </button>
                <div class="collapse " id="specialities-collapse">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li>
                      <label class="sidebar-subitem">
                        <input type="checkbox" name="dep-checkbox" class="checkbox" id="child-adol-check" >Child and Adolescence Disorders 
                      </label>
                    </li>
                    <li>
                      <label class="sidebar-subitem">
                        <input type="checkbox" name="dep-checkbox" class="checkbox" id="geriatric-check">Geriatric Psychiatry 
                      </label>
                    </li>
                    <li>
                      <label class="sidebar-subitem">
                        <input type="checkbox" name="dep-checkbox" class="checkbox" id="general-check">General Psychiatry 
                      </label>
                    </li>
                    <li>
                      <label class="sidebar-subitem">
                        <input type="checkbox" name="dep-checkbox" class="checkbox" id="pid-check">Psychiatry of Intellectual Disability (PID)
                      </label>
                    </li>
                    <li>
                      <label class="sidebar-subitem">
                        <input type="checkbox" name="dep-checkbox" class="checkbox" id="marital-check">Marital and Family Relations 
                      </label>
                    </li>
                    <li>
                      <label class="sidebar-subitem">
                        <input type="checkbox" name="dep-checkbox" class="checkbox" id="forensic-check">Forensic Psychiatry
                      </label>
                    </li>
                    <li>
                      <label class="sidebar-subitem">
                        <input type="checkbox" name="dep-checkbox" class="checkbox" id="addiction-check">Addiction
                      </label>
                    </li>
                    <li>
                      <label class="sidebar-subitem">
                        <input type="checkbox" name="dep-checkbox" class="checkbox" id="life-coach-check">Life Coach
                      </label>
                    </li>
                  </ul>
                </div>
              </li>

              <li class="mb-1"><!--gender button and radios-->
                <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#gender-collapse" aria-expanded="false">
                  Gender
                </button>
                <div class="collapse" id="gender-collapse">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li class="disp-inline">
                      <label class="sidebar-subitem">
                        <input type="radio" name="gender" class="radio" id="male">Male
                      </label>
                    </li>
                    <li class="disp-inline">
                      <label class="sidebar-subitem">
                        <input type="radio" name="gender" class="radio" id="female">Female
                      </label>
                    </li>
                    <li class="disp-inline">
                      <label class="sidebar-subitem">
                        <input type="radio" name="gender" class="radio" id="either">Either
                      </label>
                    </li>
                  </ul>
                </div>
              </li>

              <li class="mb-1"><!--availability button and days -->
                <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#availability-collapse" aria-expanded="false">
                  Availability
                </button>
                <div class="collapse" id="availability-collapse">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small justify-content-between">
                    <li class="disp-inline ">
                      <label class="sidebar-subitem">
                        <input type="radio" name="day" class="radio text-muted" id="today">Today
                      </label>
                    </li>
                    <li class="disp-inline ">
                      <label class="sidebar-subitem">
                        <input type="radio" name="day" class="radio" id="tomorrow">Tomorrow
                      </label>
                    </li>
                    <li class="disp-inline ">
                      <label class="sidebar-subitem">
                        <input type="radio" name="day" class="radio" id="this-week">This Week
                      </label>
                    </li>
                    <li class="disp-inline ">
                      <label class="sidebar-subitem">
                        <input type="radio" name="day" class="radio" id="anyday">Any Day
                      </label>
                    </li> 
                    <li class="border-top"></li>
                    <li>
                      <label class="sidebar-subitem">
                        <input type="radio" name="appointment-type" class="radio" id="this-week">Morning Appointment
                      </label>
                    </li>
                    <li>
                      <label class="sidebar-subitem">
                        <input type="radio" name="appointment-type" class="radio" id="anyday">Evening Appointment
                      </label>
                    </li>
                  </ul>
                </div>
              </li>

              <li class="mb-1"><!--Duration button -->
                <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#duration-collapse" aria-expanded="false">
                  Duration
                </button>
                <div class="collapse" id="duration-collapse">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small justify-content-between">
                    <li class="disp-inline ">
                      <label class="sidebar-subitem">
                        <input type="radio" name="duratios" class="radio" id="30-min">30 Minutes
                      </label>
                    </li>
                    <li class="disp-inline ">
                      <label class="sidebar-subitem">
                        <input type="radio" name="duratios" class="radio" id="60-min">60 Minutes
                      </label>
                    </li>                
                  </ul>
                </div>
              </li>

              <li class="mb-1"><!--rating button-->
                <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#rating-collapse" aria-expanded="false">
                  Rating
                </button>
                <div class="collapse" id="rating-collapse">
                  <div class="starrating risingstar d-flex justify-content-center flex-row-reverse list-unstyled">
                    <label> & Above</label>
                    <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="5 Stars"></label>
                    <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="4 Stars"></label>
                    <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="3 Stars"></label>
                    <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="2 Stars"></label>
                    <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="1 Star"></label>
                  </div>
                </div>
              </li>

              <li class="mb-1"><!--Session fees button -->
                <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#fee-collapse" aria-expanded="false">
                  Session Fees
                </button>
                <div class="collapse" id="fee-collapse">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small justify-content-between">
                    <li>
                      <label class="sidebar-subitem">
                        <input type="radio" name="fees" class="radio text-muted" id="less-than-150">Less Than 150 EGP
                      </label>
                    </li>
                    <li>
                      <label class="sidebar-subitem">
                        <input type="radio" name="fees" class="radio" id="from-150-to-200">From 150 to 200 EGP
                      </label>
                    </li>
                    <li>
                      <label class="sidebar-subitem">
                        <input type="radio" name="fees" class="radio" id="from-200-to-300">From 200 to 300 EGP
                      </label>
                    </li>
                    <li>
                      <label class="sidebar-subitem">
                        <input type="radio" name="fees" class="radio" id="from-300-to-500">From 300 to 500 EGP
                      </label>
                    </li>
                    <li>
                      <label class="sidebar-subitem">
                        <input type="radio" name="fees" class="radio" id="above-500">Above 500 EGP
                      </label>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="mb-1 mt-2 text-center"><!--Search button -->
                <button class=" btn btn-primary align-items-center rounded-pill mt-3 " type="submit" >Search</button>
              </li>
            </ul>
          </div>
        </div>
        <!--side bar end-->

        <!--Doctors Portfolios Begin-->
        <div class="col-lg-9 doctor-portfolio">
          <div class="row">

            <div class="col-lg-4 col-sm-6 col-md-6 mb-4 ">
              <div class="position-relative doctor-inner-box">
                <div class="doctor-profile">
                  <div class="doctor-img">
                    <a href="doctor page.html"><img src="../img/people pic 4.jpg" alt="doctor-image" class="img-fluid w-100 "></a>
                  </div>
                </div>
                <div class="content mt-3">
                  <h4 class="mb-0"><a href="doctor page.html">Mohammad Adel</a></h4>
                  <h6 class="mb-0">Psychotherapist</h6>
                  <a href="#" class="doctors-dep-link">Child and Adolescence Disorders</a>
                </div> 
              </div>
            </div>
            
            <div class="col-lg-4 col-sm-6 col-md-6 mb-4 ">
              <div class="position-relative doctor-inner-box">
                <div class="doctor-profile">
                  <div class="doctor-img">
                    <a href="doctor page.html"><img src="../img/people pic 1.jpg" alt="doctor-image" class="img-fluid w-100 "></a>
                  </div>
                </div>
                <div class="content mt-3">
                  <h4 class="mb-0"><a href="doctor page.html">Mohammad Adel</a></h4>
                  <h6 class="mb-0">Clinical psychologist </h6>
                  <a href="#" class="doctors-dep-link">Child and Adolescence Disorders</a>
                </div> 
              </div>
            </div>
            
            <div class="col-lg-4 col-sm-6 col-md-6 mb-4 ">
              <div class="position-relative doctor-inner-box">
                <div class="doctor-profile">
                  <div class="doctor-img">
                    <a href="doctor page.html"><img src="../img/people pic 5.jpg" alt="doctor-image" class="img-fluid w-100 "></a>
                  </div>
                </div>
                <div class="content mt-3">
                  <h4 class="mb-0"><a href="doctor page.html">Mohammad Adel</a></h4>
                  <h6 class="mb-0">Psychologist </h6>
                  <a href="#" class="doctors-dep-link">Child and Adolescence Disorders</a>
                </div> 
              </div>
            </div>
            
            <div class="col-lg-4 col-sm-6 col-md-6 mb-4 ">
              <div class="position-relative doctor-inner-box">
                <div class="doctor-profile">
                  <div class="doctor-img">
                    <a href="doctor page.html"><img src="../img/people pic 7.jpg" alt="doctor-image" class="img-fluid w-100 "></a>
                  </div>
                </div>
                <div class="content mt-3">
                  <h4 class="mb-0"><a href="doctor page.html">Mohammad Adel</a></h4>
                  <h6 class="mb-0">Clinical psychologist </h6>
                  <a href="#" class="doctors-dep-link">Child and Adolescence Disorders</a>
                </div> 
              </div>
            </div>
            
            <div class="col-lg-4 col-sm-6 col-md-6 mb-4 ">
              <div class="position-relative doctor-inner-box">
                <div class="doctor-profile">
                  <div class="doctor-img">
                    <a href="doctor page.html"><img src="../img/people pic 3.jpg" alt="doctor-image" class="img-fluid w-100 "></a>
                  </div>
                </div>
                <div class="content mt-3">
                  <h4 class="mb-0"><a href="doctor page.html">Mohammad Adel</a></h4>
                  <h6 class="mb-0">Clinical psychologist </h6>
                  <a href="#" class="doctors-dep-link">Child and Adolescence Disorders</a>
                </div> 
              </div>
            </div>
            
            <div class="col-lg-4 col-sm-6 col-md-6 mb-4 ">
              <div class="position-relative doctor-inner-box">
                <div class="doctor-profile">
                  <div class="doctor-img">
                    <a href="doctor page.html"><img src="../img/people pic 8.jpg" alt="doctor-image" class="img-fluid w-100 "></a>
                  </div>
                </div>
                <div class="content mt-3">
                  <h4 class="mb-0"><a href="doctor page.html">Ahmed Abbas</a></h4>
                  <h6 class="mb-0">Psychologist </h6>
                  <a href="#" class="doctors-dep-link">Psychiatry of intellectual Disability (PID)</a>
                </div> 
              </div>
            </div>
            
            <div class="col-lg-4 col-sm-6 col-md-6 mb-4 ">
              <div class="position-relative doctor-inner-box">
                <div class="doctor-profile">
                  <div class="doctor-img">
                    <a href="doctor page.html"><img src="../img/people pic 2.jpg" alt="doctor-image" class="img-fluid w-100 "></a>
                  </div>
                </div>
                <div class="content mt-3">
                  <h4 class="mb-0"><a href="doctor page.html">Samir Mohammad</a></h4>
                  <h6 class="mb-0">Counselor</h6>
                  <a href="#" class="doctors-dep-link">Geriatric Psychiatry</a>
                </div> 
              </div>
            </div>
            
            <div class="col-lg-4 col-sm-6 col-md-6 mb-4 ">
              <div class="position-relative doctor-inner-box">
                <div class="doctor-profile">
                  <div class="doctor-img">
                    <a href="doctor page.html"><img src="../img/people pic 5.jpg" alt="doctor-image" class="img-fluid w-100 "></a>
                  </div>
                </div>
                <div class="content mt-3">
                  <h4 class="mb-0"><a href="doctor page.html">Amira Ali</a></h4>
                  <h6 class="mb-0">Psychologist </h6>
                  <a href="#" class="doctors-dep-link">Child and Adolescence Disorders</a>
                </div> 
              </div>
            </div>
          </div>
        </div>
        <!--Doctors Portfolios end-->
      </div><!--end row-->

      <div class="row mt-5 justify-content-center"><!--page numbers-->
        <div class="col-lg-4">
          <nav class="pagination py-2 ">
            <div class="nav-links">
              <span aria-current="page" class="page-numbers current">1</span>
              <a class="page-numbers" href="#">2</a>
              <a class="page-numbers" href="#">3</a>
              <a class="page-numbers" href="#"><i class="icofont-thin-double-right"></i></a>    
            </div>
          </nav>
        </div>
      </div> 

    </div><!--end container-->
  </section>



  

  <!--footer begin-->
  <!--footer begin-->
  <div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top my-footer">
      <div class="col-md-4 d-flex align-items-center">
        <span class="text-muted">&copy; 2022 Ain Shams Uni. , Faculty of Science,<br> Maths. Department. </span>
      </div>
      <div class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <a href="{{ url('/') }}" class="a-no-decor"><img src="../img/icon.png" width="45"></a>
      </div>
  
      <ul class="nav col-md-4  justify-content-end d-flex">
        <li class="ms-3"><a class="text-muted a-no-decor " href="https://github.com/AlyaaRushdy/Psyclini/tree/Final"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-github" viewBox="0 0 18 18">
          <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
          </svg></a></li>
        <li class="ms-3"><a class="text-muted a-no-decor " href="https://www.facebook.com/FacultyofScienceASU/"><i class="icofont-facebook"></i></a></li>
      </ul>
    </footer>
  </div>
  <!--footer end-->
  <!--footer end-->





  <script src="../js/jquery.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/bootstrap.bundle.js"></script>
  <script src="../js/slick.min.js"></script>
  <script src="../js/script.js"></script>
</body>
</html>


