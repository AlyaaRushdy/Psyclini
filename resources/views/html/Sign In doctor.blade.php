@extends('layouts.app')
@section('content')

<!doctype html>
<html lang="en">
<head>
        <title>Psyclini</title>

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
                                            <h3 class="mb-4">Therapist Sign In</h3>
                                        </div>          
                                    </div>
                                    <form action="{{ route('doctor.check') }}" class="signin-form" method="POST">
                                        @csrf
                                        @if (Session::get('fail'))
                                        <div class="alert alert-danger">
                                            {{ Session::get('fail') }}
                                        </div>
                                        @endif
                                        <div class="form-group mt-3">
                                            <input type="text" class="form-control" name="email" value="{{old('email')}}" required>
                                            <label class="form-control-placeholder" for="Username"  >E-mail</label> 
                                            <span class="text-danger">@error('email'){{ $message }}@enderror</span>
										</div>
                                        <div class="form-group">
                                            <input id="password-field" type="password" class="form-control" name = 'password' required>
                                            <label class="form-control-placeholder" for="password">Password</label>
                                            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                            <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="form-control btn btn-primary rounded-pill submit px-3">Sign In</button>
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

        

</body>
</html>
@endsection

