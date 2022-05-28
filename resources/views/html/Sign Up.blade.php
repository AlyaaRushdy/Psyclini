@extends('layouts.app')
@section('content')<!doctype html>
<html lang="en">
<head>
<title>Psyclini</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../css/signin_signup_style.css">
<link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/flick/jquery-ui.css" rel="stylesheet">
</head>
<body> <section class="ftco-section">
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
</div> <form action="{{ route('patient.data') }}" method="POST" class="signup-form" enctype="multipart/form-data">
@csrf
@if (Session::get('fail'))
<div class="alert alert-danger">
{{ Session::get('fail') }}
</div>
@endif
<div class="form-group mt-3">
<input type="text" class="form-control" name = "name" required>
<label class="form-control-placeholder" for="Username" >Name<span class="red-color">*</span></label>
<span class="text-danger">@error('name'){{ $message }}@enderror</span>
</div>
<div class="form-group mt-3">
<input type="email" class="form-control" name="email" required>
<label class="form-control-placeholder" for="email" >E-mail<span class="red-color">*</span></label>
<span class="text-danger">@error('email'){{ $message }}@enderror</span> </div>
<div class="form-group mt-3">
<input type="number" class="form-control" name="phone" required>
<label class="form-control-placeholder" for="phone">Phone Number<span class="red-color">*</span></label>
<span class="text-danger">@error('phone'){{ $message }}@enderror</span> </div>
<div class="form-group mt-3">
<select class="form-control" name="gender" id="gender-select" >
<option value="_none" class="form-control-placeholder required" disabled selected>Gender</option>
<option value="Male">Male</option>
<option value="Female">Female</option>
</select>
</div>
<div class="form-group mt-4">
<input class="form-control " name="dob" id="my_date" required>
<label class="form-control-placeholder required " for="dob">Date of Birth</label>
<span class="text-danger">@error('dob'){{ $message }}@enderror</span> </div>
<div class="form-group">
<input id="password-field" type="password" name = "password" class="form-control" required>
<label class="form-control-placeholder" for="password">Password <span class="red-color">*</span></label>
<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
<span class="text-danger">@error('password'){{ $message }}@enderror</span> </div>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script><!--لينك jquery الرئيسي -->
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script><!--لينك المكتبه بتاعه التاريخ نفسه-->
<script src="../js/singin_signup.js"></script> <script>
$("#my_date").datepicker({
maxDate: "-548",
changeMonth: true,
changeYear: true,
yearRange: "-100:+0",
dateFormat: 'yy-mm-dd'
});
</script>
</body>
</html>
@endsection

