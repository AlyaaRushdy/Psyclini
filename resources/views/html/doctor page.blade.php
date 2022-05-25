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
                  <i class="icofont-star full-star"></i>
                  <i class="icofont-star full-star"></i>
                  <i class="icofont-star full-star"></i>
                  <i class="icofont-star full-star"></i>
                  <i class="icofont-star empty-star"></i>
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
                      <div class="feature-item style-2 " ><!--Testimonial 1-->
                        <div class="client-info ">
                          <p>knowledgeable, patient, committed, kind, great listener. Couldn't ask for more from a therapist. </p>
                        </div>
                        <h6 class="title-color">By : Mina Kamil</h6>
                      </div>
                      <div class="feature-item style-2 "><!--Testimonial 2-->
                        <div class="client-info">
                          <p> Dr Moustafa is a great therapist as I found him easy to open up to and he helped me develop the tools & skills needed to get through difficult time and to go forward. 
                            Would highly recommend him. 
                          </p>
                        </div>
                        <h6 class="title-color">By : Ahmed Salah</h6>
                      </div>
                      <div class="feature-item style-2 "><!--Testimonial 3-->
                        <div class="client-info">
                          <p>
                            Thanks Dr.Ahmed for your time and for listening to me. Best regards.
                          </p>
                        </div>
                        <h6 class="title-color">By : Doaa Ezz</h6>
                      </div>
              
                      <div class="feature-item style-2"><!--Testimonial 4-->
                        <div class="client-info">
                          <p class="dir-rtl">مريح جدا في التعامل و قدرت اتكلم معاه براحتي وبصدق</p>
                        </div>
                        <h6 class="title-color">By : Ezzat Mostafa</h6>
                      </div>
              
                      <div class="feature-item style-2"><!--Testimonial 5-->
                        <div class="client-info">
                          <p class="dir-rtl">
                            د كمال مخلص جدا ومنظم واسلوبه جميل ساعدني كتير في فهم مشاعري وازاي اتعامل معها بطريقة مختلفة غيرت عندي حاجات كتيرة شكرا جدا               </p>
                        </div>
                        <h6 class="title-color">By : Esraa Ahmed</h6>
                      </div>
            
                    </div>
                  </div>
                </div>
                <!--Rate Stars-->
                <div class="container review-meta d-flex align-items-center mt-3 mb-2">
                  <h5 class="pr-5 blue-title"> Rate :</h5>
                  <div class="starrating risingstar d-flex justify-content-center flex-row-reverse list-unstyled mt-0">
                    <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="5 Stars"></label>
                    <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="4 Stars"></label>
                    <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="3 Stars"></label>
                    <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="2 Stars"></label>
                    <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="1 Star"></label>
                  </div>                      
                </div> 
                <!--write a review-->
                <div class="col-lg-12 mb-5 ">
                  <form action="{{ route('reviews.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="review">
                      <h5 class="mb-3 blue-title">Write a Review :</h5> 
                      <div class="ml-2 mr-2">
                      <textarea class="form-control pr-2 mb-4" name="rev" id="comment" cols="30" rows="3" placeholder="What is your opinion??"></textarea>
                      </div>
                      <div class="text-right ">
                        <button class="btn btn-primary rounded-pill px-3 w-100">Submit</button>
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
            <form>
              <div class="row justify-content-center appts-details ">
                <!--each day details begin-->
                <div class="col-lg-4 text-align-center mb-3">
                  <div class="col-lg-11 border">
                    <h5 class="w-100 appt-day bg-gray">Tuesday<br>23/12/2022</h5>
                    <label class="single-appt col-lg-12">
                      <input type="radio" class="appts-radio" name="picked-appt" id="appt-1">
                      <span> 11:00 - 12:00</span>
                    </label>
                    <label class="single-appt col-lg-12 ">
                      <input type="radio" class="appts-radio" name="picked-appt" id="appt-2">
                      <span> 11:00 - 12:00</span>
                    </label>
                    <label class="single-appt col-lg-12">
                      <input type="radio" class="appts-radio" name="picked-appt" id="appt-3">
                      <span> 23:00 - 24:00</span>
                    </label>
                  </div>
                </div>
                <!--each day details end-->
                <!--each day details begin-->
                <div class="col-lg-4 text-align-center mb-3">
                  <div class="col-lg-11 border">
                    <h5 class="w-100 appt-day bg-gray">Tuesday<br>23/12/2022</h5>
                    <label class="single-appt col-lg-12">
                      <input type="radio" class="appts-radio" name="picked-appt" id="appt-1">
                      <span> 11:00 - 12:00</span>
                    </label>
                    <label class="single-appt col-lg-12 ">
                      <input type="radio" class="appts-radio" name="picked-appt" id="appt-2">
                      <span> 11:00 - 12:00</span>
                    </label>
                    <label class="single-appt col-lg-12">
                      <input type="radio" class="appts-radio" name="picked-appt" id="appt-3">
                      <span> 23:00 - 24:00</span>
                    </label>
                  </div>
                </div>
                <!--each day details end-->
                <!--massage section-->
                <div class="col-lg-12 m-3">
                  <textarea class="form-control pr-2 " name="rev" id="massage" cols="30" rows="3" placeholder="Include a Massage (Optional)"></textarea>
                </div>
                <div class="col-lg-12 text-align-center mt-3">
                  <button class="button book-button w-50" href="{{ route('book.store')}}" id="book-button">Book Now</button>
                </div>
              </div>
            </form>
          </div>
        </div>

      </div>
    </div>
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
  <script src="../js/popper.js"></script>
  <script src="../js/slick.min.js"></script>
  <script src="../js/script.js"></script>
</body>
</html>


@endsection
