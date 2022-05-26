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
                                            <h3 class="mb-4">Sign In</h3>
                                        </div>          
                                    </div>
                                    <form action="{{ route('patient.login') }}" class="signin-form" method="POST">
                                        @csrf
                                            @if (Session::get('fail'))
                                            <div class="alert alert-danger">
                                                {{ Session::get('fail') }}
                                            </div>
                                          @endif
                                        <div class="form-group mt-3">
                                            <input type="text" class="form-control" name="email" value="{{ old('email') }}" required>
                                            <label class="form-control-placeholder" for="Username" >E-mail</label> 
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


	</body>
</html>
@endsection
