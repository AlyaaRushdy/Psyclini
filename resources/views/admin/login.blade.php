@extends('layouts.app')
@section('content')
    
<!doctype html>
<html lang="en">
    <head>
        <title>Psyclini</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../css/icofont.css">
        <link rel="stylesheet" href="../css/signin_signup_style.css">
        <link rel="stylesheet" href="../css/home_style.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="icon" href="../img/icon.png">
    </head>
	<body>
      

        <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-7 col-lg-5">
                        <div class="wrap">
                                <div class="login-wrap p-4 p-md-5">
                                    <div class="d-flex">
                                        <div class="w-100">
                                            <h3 class="mb-4">Secretary Sign In</h3>
                                        </div>          
                                    </div>
                                    <form action="{{ route('admin.check') }}" class="signin-form" method="POST">
                                        @csrf
                                        <div class="form-group mt-3">
                                            <input type="text" class="form-control" name="email" required>
                                            <label class="form-control-placeholder" for="Username" >E-mail</label> 
                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
										</div>
                                        <div class="form-group">
                                            <input id="password-field" type="password" class="form-control" name = 'password' required>
                                            <label class="form-control-placeholder" for="password">Password</label>
                                            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                            @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="form-control btn btn-primary rounded-pill submit px-3">Sign In</button>
                                        </div>
                                        <div class="form-group d-md-flex">
                                            <div class="w-50 text-left">
                                                <label class="checkbox-wrap checkbox-primary mb-0"> Remember Me
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>          
                                        </div>
                                    </form>
                                    <p class="text-center sign-color" >You Are a Therapist ?<a href="{{ route('doctor.signin') }}"> Sign In Here</a></p>
                                    <p class="text-center sign-color" >Not a Member ?<a href="{{ route('signUp') }}"> Sign Up</a></p>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container"><!--footer-->
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

        
        <script src="../js/jquery.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/singin_signup.js"></script>
	</body>
</html>
@endsection
