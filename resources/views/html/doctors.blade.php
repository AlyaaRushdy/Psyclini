@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html>
<head>

    <title>Doctors - Psyclini</title>
  
</head>
<body id="bootstrap-overrides top">
  
  <section class="section doctors">
    <div class="container">
      <div class="row">

      
        <!--Side bar begin-->
        <div class="col-lg-3">
          <div class=" doctors-sidebar bg-white position-sticky fixed-top" >
            <form action="{{ route('doctors.search') }}" method="GET">
            <ul class="list-unstyled ps-0 ">
              <li class="mb-2">
              <input type="text" class="form-control " name= 'doctorName' placeholder="Search By Name">
              <i class="ti-search"></i>
              </li>

              <li class="mb-1"><!--speciality button and list-->
                <a class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#specialities-collapse" aria-expanded="false">
                  Specialities
                </a>
                <div class="collapse " id="specialities-collapse">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li>
                      <label class="sidebar-subitem">
                        <input type="checkbox" name="speciality"  value = "child and Adolescence Disorders" class="checkbox" id="child-adol-check" >Child and Adolescence Disorders 
                      </label>
                    </li>
                    <li>
                      <label class="sidebar-subitem">
                        <input type="checkbox" name="speciality"  value = "Geriatric Psychiatry" class="checkbox" id="geriatric-check">Geriatric Psychiatry 
                      </label>
                    </li>
                    <li>
                      <label class="sidebar-subitem">
                        <input type="checkbox" name="speciality"  value = "General Psychiatry" class="checkbox"  id="general-check">General Psychiatry 
                      </label>
                    </li>
                    <li>
                      <label class="sidebar-subitem">
                        <input type="checkbox" name="speciality"  value = "Psychiatry of Intellectual Disability (PID)" class="checkbox" id="pid-check">Psychiatry of Intellectual Disability (PID)
                      </label>
                    </li>
                    <li>
                      <label class="sidebar-subitem">
                        <input type="checkbox" name="speciality"  value = "Marital and Family Relations" class="checkbox" id="marital-check">Marital and Family Relations 
                      </label>
                    </li>
                    <li>
                      <label class="sidebar-subitem">
                        <input type="checkbox" name="speciality"  value = "Forensic Psychiatry" class="checkbox" id="forensic-check">Forensic Psychiatry
                      </label>
                    </li>
                    <li>
                      <label class="sidebar-subitem">
                        <input type="checkbox" name="speciality"  value = "Addiction" class="checkbox" id="addiction-check">Addiction
                      </label>
                    </li>
                    <li>
                      <label class="sidebar-subitem">
                        <input type="checkbox" name="speciality"  value = "life coach" class="checkbox" id="life-coach-check">Life Coach
                      </label>
                    </li>
                  </ul>
                </div>
              </li>
                <li class="mb-1"><!--gender button and radios-->
                <a class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#gender-collapse" aria-expanded="false">
                  Gender
                </a>
                <div class="collapse" id="gender-collapse">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li class="disp-inline">
                      <label class="sidebar-subitem">
                        <input type="radio" name="gender" value="male" class="radio" id="male">Male
                      </label>
                    </li>
                    <li class="disp-inline">
                      <label class="sidebar-subitem">
                        <input type="radio" name="gender" value="female" class="radio" id="female">Female
                      </label>
                    </li>
                  </ul>
                </div>
              </li>

              
              <li class="mb-1"><!--rating a-->
                <a class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#rating-collapse" aria-expanded="false">
                  Rating
                </a>
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
                <a class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#fee-collapse" aria-expanded="false">
                  Session Fees
                </a>
                <div class="collapse" id="fee-collapse">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small justify-content-between">
                    <li>
                      <label class="sidebar-subitem">
                        <input type="radio" name="fees" value="Less Than 150" class="radio text-muted" id="less-than-150">Less Than 150 EGP
                      </label>
                    </li>
                    <li>
                      <label class="sidebar-subitem">
                        <input type="radio" name="fees" value="150 Less Than 200" class="radio" id="from-150-to-200">From 150 to 200 EGP
                      </label>
                    </li>
                    <li>
                      <label class="sidebar-subitem">
                        <input type="radio" name="fees" value="From 200 To 300" class="radio" id="from-200-to-300">From 200 to 300 EGP
                      </label>
                    </li>
                    <li>
                      <label class="sidebar-subitem">
                        <input type="radio" name="fees" value="From 300 To 500" class="radio" id="from-300-to-500">From 300 to 500 EGP
                      </label>
                    </li>
                    <li>
                      <label class="sidebar-subitem">
                        <input type="radio" name="fees" value="Above 500" class="radio" id="above-500">Above 500 EGP
                      </label>
                    </li>
                  </ul>
                </div>
              </li>
              
              <li class="mb-1 mt-2 text-center"><!--Search button -->
                <button class=" btn btn-primary align-items-center rounded-pill mt-3 " type="submit" >Search</button>
              </li>
            </ul>
          </form>
          </div>
        </div>
        <!--side bar end-->

        <!--Doctors Portfolios Begin-->
        <div class="col-lg-9 doctor-portfolio">
          <div class="row">
            @foreach ($doctors as $doctor )
              
            <div class="col-lg-4 col-sm-6 col-md-6 mb-4 ">
              <div class="position-relative doctor-inner-box">
                <div class="doctor-profile">
                  <div class="doctor-img">
                    <a href="{{ route('doctor.profile' , $doctor->name) }}"><img src="{{ url('images/doc/' . $doctor->img ) }}" alt="doctor-image" class="img-fluid w-100 "></a>
                  </div>
                </div>
                <div class="content mt-3">
                  <h4 class="mb-0"><a href="{{ route('doctor.profile' , $doctor->name) }}">{{ $doctor->name }}</a></h4>
                  <a href="#" class="doctors-dep-link">{{ $doctor->speciality }}</a>
                </div> 
                <div class="mt-3">
                  <a href="{{ route('doctor.profile', $doctor->name)  }}" class=" btn btn-primary rounded-pill w-100">Book Now</a>
                </div> 
              </div>
            </div>
            @endforeach
            

          </div>
        </div>
        <!--Doctors Portfolios end-->
      </div><!--end row-->

      <div class="row mt-5 justify-content-center"><!--page numbers-->
        <div class="col-lg-4">
          <nav class="pagination py-2 ">
            <div class="nav-links">
              {{ $doctors->withQueryString()->links('vendor.pagination.custom') }}
            </div>
          </nav>
        </div>
      </div> 

    </div><!--end container-->
  </section>



  

  <!--footer begin-->
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
  <!--footer end-->
</body>
</html>
@endsection

