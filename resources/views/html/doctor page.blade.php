@extends('layouts.app')
@section('content')
    

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <title>Psyclini</title> 
    
</head>
<body id="bootstrap-overrides top">
  

  <section class="section doctor-page">
    <div class="container">
      <div class="row">
        <!--Doctor informations and reviews-->
        <div class="col-lg-7 col-md-7">
          <!--Basic info Section-->
          <div class="row feature-item"> 
            <div class="doctor-img-block col-lg-4">
              <img src="{{ url('images/doc/' .$doctor->img ) }}" alt="" class="img-fluid w-100">
              <div class="info-block mt-4">
                <h4 class="mb-0" id="doctor_name">{{ $doctor->name}}</h4>
              </div>
            </div>

            <div class="doctor-details mt-4 mt-lg-0 col-lg-8">
              <h4 >Basic Info</h4>
              <label class="doctor-title"> Speciality : <label> {{ $doctor->speciality}} </label></label><br>
              <label class="doctor-title"> Rating  : </label>
              <div class="row">
                <div class="d-flex justify-content-between col-lg-5 list-unstyled rating">
				{{$doctor->stars}}<i class="icofont-star full-star"></i>
                
                </div>
                <div class="col-lg-7">
                  <lable class="text-align-center pl-5 w-100 "> From {{ $doctor->ratting_times}} Patients</lable>
                </div>
              </div>              
            </div>
          </div>

          <div class="row feature-item doctor-qualification">
            <ul class="nav nav-tabs">
              <li><a data-toggle="tab" href="#doctor-details" class="nav-link active">Doctor's Details</a></li>
              <li><a data-toggle="tab" href="#reviews" class="nav-link ">Reviews</a></li>
            </ul>
          
            <div class="tab-content col-lg-12 col-md-12">
              <!--Doctor's Details Section-->
              <div id="doctor-details" class="tab-pane fade in active show">
                <div class="experience-section">
                  <h4 class="">Experience</h4>
                  <h5 class="pl-4 fw-normal">{{ $doctor->experince_years}} years</h5>
                </div>
                <div class="experience-section">
                  <h4 class="">Education</h4>
                  <h5 class="pl-4 fw-normal">{{ $doctor->education}} </h5>
                </div>
              </div>
<!--Reviews Section-->
              <div id="reviews" class="tab-pane fade doctor-reviews">
                <!--view existing reviews-->
                <div class="testimonial-2 review-contents">
                  <div class="row align-items-center">
                    <div class="col-lg-12 testimonial-wrap">
                      @foreach($review as $review)
					  <div class="feature-item style-2 " ><!--Testimonial 1-->
                        <div class="client-info ">
                          <p>{{$review->review}} </p>
                        </div>
                        <h6 class="title-color">Star : {{$review->star}}<i class="icofont-star full-star"></i></h6>
                      </div>
                      @endforeach
            
                    </div>
                  </div>
                </div>
                <!--Rate Stars-->
				                  
			<form action="{{ route('review.store') }}" method="POST" enctype="multipart/form-data">
               @csrf
			   <div class="container review-meta d-flex align-items-center mt-3 mb-2">
                  <h5 class="pr-5 title-color"> Rate :</h5>
                  <div class="starrating risingstar d-flex justify-content-center flex-row-reverse list-unstyled mt-0">
                    <input type="radio" id="star5" name="star" value="5" /><label for="star5" title="5 Stars"></label>
                    <input type="radio" id="star4" name="star" value="4" /><label for="star4" title="4 Stars"></label>
                    <input type="radio" id="star3" name="star" value="3" /><label for="star3" title="3 Stars"></label>
                    <input type="radio" id="star2" name="star" value="2" /><label for="star2" title="2 Stars"></label>
                    <input type="radio" id="star1" name="star" value="1" /><label for="star1" title="1 Star"></label>
                  </div>                      
                </div> 
                <!--write a review-->
                <div class="col-lg-12 mb-5 ">
                  
					<div class="review">
                      <h5 class="mb-3 title-color">Write a Review :</h5> 
                      <div class="ml-2 mr-2">
                        <textarea class="form-control pr-2 mb-4" name="rev" id="comment" cols="30" rows="3" placeholder="What is your opinion??"></textarea>
                      </div>
                      <div class="text-right ">
                        <button class="btn btn-primary rounded-pill px-3 w-100"name="did" value="{{$doctor->id}}">Submit</button>
                      </div>
                    </div>
                  </form>
                </div>
				
              </div> 
            </div>
          </div>
        </div>

        
        <!--Book appointment section-->
        <div class="col-lg-5 col-md-5 position-sticky fixed-top book-appt">
          <div class="sidebar-widget white-bg p-4">
            <h3 class="mb-3 mt-2">Book an Appointment</h3>
            <div class="appointment-fees justify-content-center mb-3">
              <i class="icofont-money"></i>
              <label class="60-min-fee">60 Minutes : {{$doctor->session_fees}} EGP</label>
            </div>
            <h5 class="mb-3 blue-title"> Available Appointments</h5>
            <form action="{{ route('appointment.reserve') }}" method="POST" enctype="multipart/form-data">
			
               @csrf

              <div class="row justify-content-center appts-details ">
                <!--each day details begin-->
                <div class="col-lg-4 text-align-center mb-3">
                  <div class="col-lg-11 border">
				@foreach($appointment2 as $appointment2)
                    <h5 class="w-100 appt-day bg-gray">{{$appointment2->day}}</h5>
					<label class="single-appt col-lg-12">
                      <input type="radio" class="appts-radio" name="app" value="{{$appointment2->id}}" id="appt-1">
                      <span> {{$appointment2->time}}</span>
                    </label>
					@endforeach 
                  </div>
                </div>
                <!--each day details end-->
<!--each day details begin-->
                <div class="col-lg-4 text-align-center mb-3">
                  <div class="col-lg-11 border">
				@foreach($appointment1 as $appointment1)
                    <h5 class="w-100 appt-day bg-gray">{{$appointment1->day}}</h5>
					<label class="single-appt col-lg-12">
                      <input type="radio" class="appts-radio" name="app" value="{{$appointment1->id}}" id="appt-1">
                      <span> {{$appointment1->time}}</span>
                    </label>
					@endforeach 
                  </div>
                </div>
                <!--each day details end-->
                <!--massage section-->
                <div class="col-lg-12 m-3">
                  <textarea class="form-control pr-2 " name="mas" id="massage" cols="30" rows="3" placeholder="Include a Massage (Optional)"></textarea>
                </div>
                <div class="col-lg-12 text-align-center mt-1">
			
				  <button class="button book-button w-50" id="book-button"name="did" value="{{$doctor->id}}" >Book Now</button>
                
				</div>
              </div>
            </form>
			
          </div>
        </div>

      </div>
    </div>
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




  <script src="../js/jquery.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/popper.js"></script>
  <script src="../js/slick.min.js"></script>
  <script src="../js/script.js"></script>
</body>
</html>


@endsection
