@extends('layouts.app')
@section('content')

<!doctype html>
<html lang="en">
    <head>
        <title>Psyclini</title>
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../css/icofont.css">
        <link rel="stylesheet" href="../css/signin_signup_style.css">
        <link rel="stylesheet" href="../css/home_style.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/flick/jquery-ui.css" rel="stylesheet">
        <link rel="icon" href="../img/icon.png">
 	<body>  

        <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-7 col-lg-5">
                        <div class="wrap">
                                <div class="signup-wrap p-4 p-md-5">
                                    <div class="d-flex">
                                        <div class="w-100 ">
                                            <h3 class="">Sign Up</h3>
                                            <label class="text-muted text-helper">If You're a Therapist Please Contact the Secretary <a href="index.html#contact-us">Here</a></label>
                                        </div>         
                                    </div>

                                    <form action="{{ route('patient.data') }}"  method="POST" class="signup-form" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group mt-3">
                                            <input type="text" class="form-control"  name = "name" required>
                                            <label class="form-control-placeholder required" for="Username" >Name </label>
                                            @if ($errors->has('name'))
                                                <span class="text-danger">{{ $errors->first('name') }}
                                             @endif  
                                        </div>
                                        
                                        <div class="form-group mt-3">
                                        <input type="tel" class="form-control" name="phone" required>
                                            <label class="form-control-placeholder required" for="phone">Phone Number</label>
                                            @if ($errors->has('phone'))
                                                <span class="text-danger">{{ $errors->first('phone') }}
                                            @endif
                                        </div>
                                        <div class="form-group mt-4">
                                        <input class="form-control " name="dob" id="my_date" required>
                                            <label class="form-control-placeholder required " for="dob">Date of Birth</label>
                                            @if ($errors->has('dob'))
                                                 <span class="text-danger">{{ $errors->first('dob') }}
                                             @endif
                                        </div>
                                        <div class="form-group mt-3">
                                        <input type="email" class="form-control" name="email" required>
                                            <label class="form-control-placeholder required" for="email" >E-mail</label>
                                            @if ($errors->has('email'))
                                                <span class="text-danger">{{ $errors->first('email') }}
                                            @endif
                                        </div>
                                        <div class="form-group">
                                        <input id="password-field" type="password" class="form-control" required>
                                            <label class="form-control-placeholder required " for="password">Password</label>
                                            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                            @if ($errors->has('password'))
                                                <span class="text-danger">{{ $errors->first('password') }}
                                             @endif
                                        </div>
                                        <div class="form-group mt-4 profile-pic">
                                            {{-- <label class="lbl" >Add a Profile Picture</label> --}}
                                            {{-- <label class="btn btn-outline-primary w-50 ml-4">Add<input type="file" name= "patient_image" class="ml-2" placeholder="Browse" accept="image/*"> </label> --}}
                                            <label class="text-muted add-img">
                                                <i class="icofont-image"><input type="file" name="patient-pic" id="post-pic" class="post-pic" accept="image/*"></i>
                                                Add an Image 
                                              </label>
                                        </div> 
                                        <div class="form-group">
                                            <button type="submit" class="form-control btn btn-primary rounded-pill submit px-3">Sign Up</button>
                                        </div>
                
                                    </form>
                                    <p class="text-center sign-color">Already a Member? <a href="{{ route('signin') }}" >Sign In</a></p>
                            </div>
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

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script><!--لينك jquery الرئيسي -->
	    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script><!--لينك المكتبه بتاعه التاريخ نفسه-->
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/singin_signup.js"></script>

        <script>
            $("#my_date").datepicker({
                maxDate: "-548",
                changeMonth: true,
                changeYear: true,
                yearRange: "-100:+0"
            });
        </script>
	</body>
</html>
@endsection
