@extends('layouts.app')
@section('content')
<!DOCTYPE html>
    
<html>
<head>

    <title>Psyclini</title>
<style>
input[type= number]::-webkit-outer-spin-button,
input[type= number]::-webkit-inner-spin-button{
  -webkit-appearance : none;
  -moz-appearance : none;
  margin :0;

}

</style>
 
<link rel="stylesheet" href="../css/home_style.css">
<link rel="stylesheet" href="../css/icofont.css">
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/slick-theme.css">
<link rel="stylesheet" href="../css/slick.css">
<link rel="icon" href="../img/icon.png">    
</head>
<body id="bootstrap-overrides top">

  <!--banner begin-->
  <section class="banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-12 col-xl-7">
          <div class="block">
            <span class="text-uppercase text-sm letter-spacing ">It's never too late!</span>
            <h1 class="mb-3 mt-3">Your Mental Health Matters</h1>
            
            <p class="mb-4 pr-5 font-large-p">With the help of the best Therapists, Psychiatrists and Counselors get back up on your feet.</p>
            <div class="btn-container ">
              <a href="#doctor_mainpage" class="btn btn-sm btn-outline-primary rounded-pill order-1 order-lg-0 ms-lg-4">Get Started<i class="icofont-simple-right ml-2  "></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--banner end-->

  <!--book an appointment section begin-->
  <section class="section" id="doctor_mainpage">
    <div class="container ">
      <div class="row align-items-center ">
        <div class="col-lg-7">
          <div class="appoinment-content">
            <img src="../img/doctors.png" alt="" class="img-fluid">
          </div>
        </div>
        <div class="col-lg-4">
          <div class=" pl-4 mt-4 mt-lg-0">
            <h2 class="title-color">Easy, Fast<br>& Efficient</h2>
            <p class="mt-4 mb-5 font-large-p">Choose your therapist and book an appointment from the comfort of your home.</p>
            <a href="{{ route('home') }}" class="btn btn-sm btn-outline-primary rounded-pill order-1 order-lg-0 ms-lg-4">Book an Appointment<i class="icofont-simple-right ml-3"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--book an appointment section end-->

  <!--Working Hours Table begin-->
  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="feature-block d-lg-flex">
            <div class="feature-item-clinic mb-5 mb-lg-0"><!--Clinic Working Hours-->
              <div class="feature-icon mb-4">
                <i class="icofont-ui-clock"></i>
              </div>
              <span>Timing schedule</span>
              <h4 class="mb-3">Clinic Working Hours</h4>
              <ul class="w-hours list-unstyled">
                <li class="d-flex justify-content-between">Sat : <span class="morning-sch">10:00 - 15:00</span> <span>&</span> <span class="afternoon-sch"> 17:00 - 22:00</span></li>
                <li class="d-flex justify-content-between">Sun : <span class="morning-sch">10:00 - 15:00</span> <span>&</span> <span class="afternoon-sch"> 17:00 - 22:00</span></li>
                <li class="d-flex justify-content-between">Mon : <span class="morning-sch">10:00 - 15:00</span> <span>&</span> <span class="afternoon-sch"> 17:00 - 22:00</span></li>
                <li class="d-flex justify-content-between">Tue : <span class="morning-sch">10:00 - 15:00</span> <span>&</span> <span class="afternoon-sch"> 17:00 - 22:00</span></li>
                <li class="d-flex justify-content-between">Wed : <span class="morning-sch">10:00 - 15:00</span> <span>&</span> <span class="afternoon-sch"> 17:00 - 22:00</span></li>
                <li class="d-flex justify-content-between">Thu : <span class="morning-sch">10:00 - 15:00</span> <span>&</span> <span class="afternoon-sch"> 17:00 - 22:00</span></li>
                <li class="d-flex justify-content-between">Fri : <span class="afternoon-sch"> 17:00 - 22:00</span></li>
              </ul>
            </div>
            <div class="feature-item-doctors mb-5 mb-lg-0"><!--Doctors Working Hours-->
              <div class="feature-icon mb-4">
                <i class="icofont-ui-clock"></i>
              </div>
              <span>Timing schedule</span>
              <h4 class="mb-3">Doctors Working Days</h4>
              <ul class="w-hours list-unstyled">
                <li class="d-flex justify-content-between">Sat <span class="vr inv"></span> <span class="morning-sch"><span><a href="#">Mohammad Adel</a></span></span> <span class="vr"></span> <span class="morning-sch"><span><a href="#">Walaa Mohammad</a></span></span> <span class="vr"></span> <span class="morning-sch"><span><a href="#">Ahmed Abd El Ghane</a></span></span> <span class="vr"></span> <span class="afternoon-sch"><span><a href="#">Amira Ali</a></span></span> <span class="vr"></span> <span class="afternoon-sch"><span><a href="#">Amir Karim</a></span></span> <span class="vr"></span> <span class="afternoon-sch"><span><a href="#">Amin Ali</a></span></span></li>
                <li class="d-flex justify-content-between">Sun <span class="vr inv"></span> <span class="morning-sch"><span><a href="#">Samir Mohammad</a></span></span> <span class="vr"></span> <span class="morning-sch"><span><a href="#">Marina Kamil</a></span></span> <span class="vr"></span> <span class="morning-sch"><span><a href="#">Said Ali</a></span></span> <span class="vr"></span> <span class="afternoon-sch"><span><a href="#">Manar Ahmed</a></span></span> <span class="vr"></span> <span class="afternoon-sch"><span><a href="#">Samar Said</a></span></span> <span class="vr"></span> <span class="afternoon-sch"><span><a href="#">Moustafa Said</a></span></span></li>
                <li class="d-flex justify-content-between">Mon <span class="vr inv"></span> <span class="morning-sch"><span><a href="#">Ahmed Abbas</a></span></span> <span class="vr"> </span> <span class="morning-sch"><span><a href="#">Nader Ali</a></span></span> <span class="vr"> </span> <span class="afternoon-sch"><span><a href="#">Salah Abd Alah</a></span></span> <span class="vr"> </span> <span class="afternoon-sch"><span><a href="#">Kamal Mohammad</a></span></span></li>
                <li class="d-flex justify-content-between">Tue <span class="vr inv"></span> <span class="morning-sch"><span><a href="#">Mohammad Adel</a></span></span> <span class="vr"></span> <span class="morning-sch"><span><a href="#">Mohammad Adel</a></span></span> <span class="vr"></span> <span class="morning-sch"><span><a href="#">Ahmed Abd El Ghane</a></span></span> <span class="vr"></span> <span class="afternoon-sch"><span><a href="#">Amira Ali</a></span></span> <span class="vr"></span> <span class="afternoon-sch"><span><a href="#">Amir Karim</a></span></span> <span class="vr"></span> <span class="afternoon-sch"><span><a href="#">Amin Ali</a></span></span></li>
                <li class="d-flex justify-content-between">Wed <span class="vr inv"></span> <span class="morning-sch"><span><a href="#">Samir Mohammad</a></span></span> <span class="vr"></span> <span class="morning-sch"><span><a href="#">Marina Kamil</a></span></span> <span class="vr"></span> <span class="morning-sch"><span><a href="#">Said Ali</a></span></span> <span class="vr"></span> <span class="afternoon-sch"><span><a href="#">Manar Ahmed</a></span></span> <span class="vr"></span> <span class="afternoon-sch"><span><a href="#">Samar Said</a></span></span> <span class="vr"></span> <span class="afternoon-sch"><span><a href="#">Moustafa Said</a></span></span></li>
                <li class="d-flex justify-content-between">Thu <span class="vr inv"></span> <span class="morning-sch"><span><a href="#">Ahmed Abbas</a></span></span> <span class="vr"> </span> <span class="morning-sch"><span><a href="#">Nader Ali</a></span></span> <span class="vr"> </span> <span class="afternoon-sch"><span><a href="#">Salah Abd Alah</a></span></span> <span class="vr"> </span> <span class="afternoon-sch"><span><a href="#">Kamal Mohammad</a></span></span></li>
                <li class="d-flex justify-content-between">Fri <span>Open</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Working Hours Table end-->

  <!--testimonial section begin-->
  <section class="section testimonial-2 gray-bg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-7">
          <div class="section-title text-center">
            <h2>What Our Patients Say</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row align-items-center " >
        <div class="col-lg-12 testimonial-wrap-2">

          <div class="testimonial-block style-2  gray-bg" ><!--Testimonial 1-->
            <i class="icofont-quote-right"></i>
            <div class="testimonial-thumb">
              <img src="../img/Testimonial 1 pic.jpg" alt="" class="img-fluid">
            </div>
            <div class="client-info ">
              <h4>Amazing service!</h4>
              <span>Azza Shawky</span>
              <p>knowledgeable, patient, committed, kind, great listener. Couldn't ask for more from a therapist. </p>
            </div>
            <h5>To Doctor : <a href="#"> Marina Kamil</a></h5>
          </div>
  
          <div class="testimonial-block style-2  gray-bg"><!--Testimonial 2-->
            <div class="testimonial-thumb">
              <img src="../img/Testimonial 2 pic.jpg" alt="" class="img-fluid">
            </div>
            <div class="client-info">
              <h4>Expert doctors!</h4>
              <span>Essam Mansour</span>
              <p> Dr Moustafa is a great therapist as I found him easy to open up to and he helped me develop the tools & skills needed to get through difficult time and to go forward. 
                Would highly recommend him. 
              </p>
            </div>
            <h5>To Doctor : <a href="#"> Moustafa Said</a></h5>
            <i class="icofont-quote-right"></i>
          </div>
  
          <div class="testimonial-block style-2  gray-bg"><!--Testimonial 3-->
            <div class="testimonial-thumb">
              <img src="../img/Testimonial 3 pic.jpg" alt="" class="img-fluid">
            </div>
            <div class="client-info">
              <h4>The Best!</h4>
              <span>Naser Ezz El-Dean</span>
              <p>
                Thanks Dr.Ahmed for your time and for listening to me. Best regards.
              </p>
            </div>
            <h5>To Doctor : <a href="#"> Ahmed Abd El Ghane</a></h5>
            <i class="icofont-quote-right"></i>
          </div>
  
          <div class="testimonial-block style-2  gray-bg"><!--Testimonial 4-->
            <div class="testimonial-thumb">
              <img src="../img/Testimonial 4 pic.jpg" alt="" class="img-fluid">
            </div>
            <div class="client-info">
              <h4>Nice Environment!</h4>
              <span>Mina Emad</span>
              <p class="mt-4 dir-rtl">مريح جدا في التعامل و قدرت اتكلم معاه براحتي وبصدق</p>
            </div>
            <i class="icofont-quote-right"></i>
            <h5>To Doctor : <a href="#">Samir Mohammad</a></h5>
          </div>
  
          <div class="testimonial-block style-2  gray-bg"><!--Testimonial 5-->
            <div class="testimonial-thumb">
              <img src="../img/Testimonial 5 pic.jpg" alt="" class="img-fluid">
            </div>
            <div class="client-info">
              <h4>Great Responses</h4>
              <span>Esraa Mostafa</span>
              <p class="dir-rtl">
                د كمال مخلص جدا ومنظم واسلوبه جميل ساعدني كتير في فهم مشاعري وازاي اتعامل معها بطريقة مختلفة غيرت عندي حاجات كتيرة شكرا جدا               </p>
            </div>
            <i class="icofont-quote-right"></i>
            <h5>To Doctor : <a href="#">Kamal Mohammad</a></h5>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!--testimonial section end-->

  <!--contact us section begin-->
  <section class="section contact" id="contact-us">
    <div class="container ">
      <div class="col-md-5">
        <h2 class="title-color">Contact Us</h2><br>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-5 ">
          <div class="address-block">
            <div class="media">
              <i class="icofont-location-pin"></i>
              <div class="media-body">
                <h3>Location</h3>
                <p>17 Bahgat Ali St., Zamalek<br>Cairo, Egypt</p>
              </div>
            </div>
            <div class="media">
              <i class="icofont-phone"></i>
              <div class="media-body">
                <h3>Phone</h3>
                <p>(+20) 012 3456 7891<br> (+20) 02 2345 6234 </p>
              </div>
            </div>
            <div class="media">
              <i class="icofont-ui-email"></i>
              <div class="media-body">
                <h3>Email</h3>
                <p>psyclini_clinic@gmail.com</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-8 col-md-7">
          <div class="contact-form">
            <form action="{{ route('contact.store')}}" class="row" method="POST">
              @csrf
              <div class="col-lg-6">
                <input type="text" name="name" class="form-control main" placeholder="Name" required>
                @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }} </span>
                @endif
              </div>
              <div class="col-lg-6">
                <input type="email" class="form-control main" placeholder="Email" name="email" required>
                @if ($errors->has('email'))
                   <span class="text-danger">{{ $errors->first('email') }} </span>
                @endif
              </div>
              <div class="col-lg-12">
                <input type="number" class="form-control main"  name="phone" placeholder="Phone Number" required>
                @if ($errors->has('phone'))
                   <span class="text-danger">{{ $errors->first('phone') }} </span>
                @endif
              </div>
              <div class="col-lg-12">
                <textarea name="message" rows="8" class="form-control main" placeholder="Your message"></textarea>
                @if ($errors->has('message'))
                    <span class="text-danger">{{ $errors->first('message') }} </span>
                @endif
              </div>
              <div class="col-md-12 text-right">
                <button class=" btn btn-primary rounded-pill submit px-3" type="submit">Send Message</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--contact us section end-->

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



</body>
</html>
@endsection

