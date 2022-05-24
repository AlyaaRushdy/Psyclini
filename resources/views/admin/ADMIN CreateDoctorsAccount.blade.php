@extends('layouts.admin')
@section('content')

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/admin main style.css">
    <link rel="stylesheet" href="../css/admin_bootstrap.css">
    <link rel="stylesheet" href="../css/icofont.css">
    <link rel="icon" href="../img/icon.png">
    <title>Psyclini ADMIN/ Create Doctor's Account</title>
   
<style>
  input[type= number]::-webkit-outer-spin-button,
  input[type= number]::-webkit-inner-spin-button{
    -webkit-appearance : none;
    -moz-appearance : none;
    margin :0;

  }

</style>
</head>
<body id="app">
  
 
  <div class="row">
    <div id="sidebar" class="active col-lg-3">

    </div>
  
    <div class="col-lg-1">
      <header class=" ml-5 pt-4">
        <a href="#" class="burger-btn d-block d-xl-none "><i class="icofont-navigation-menu fs-3 "></i></a>
      </header>
    </div>
    <div class="justify-content-center col-lg-8 d-flex mt-2">
      <div class="col-lg-9 col-md-9 ">
        <form action="{{ route('admin.doctor.account') }}" method="POST" enctype="multipart/form-data">
          @if (Session::get('fail'))
            <div class="alert alert-danger">
                {{ Session::get('fail') }}
            </div>
          @endif
          @csrf
        <div class=" rounded h-100 p-4">
            <h4 class="mb-4 pt-3 dark-blue-title">Create Doctor's Account</h4>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" name="name" id="floatingInput" value="{{ old('name') }}" placeholder="John Doe">
              <label for="floatingInput" class="required">Name</label>
              <span class="text-danger">@error('name'){{ $message }}@enderror</span>
            </div>
            <div class="form-floating mb-3">
              <input type="number" class="form-control" name="ssn" id="floatingInput" placeholder="Must be 12 Number" value="{{ old('ssn') }}">
              <label for="floatingInput" class="required">Social Security Number</label>
              <span class="text-danger">@error('ssn'){{ $message }}@enderror</span>
            </div>
            <div class="form-floating mb-3">
              <input type="email" class="form-control" name="email" value="{{ old('email') }}" id="floatingInput" name="email" placeholder="name@example.com">
              <label for="floatingInput" class="required">Email address</label>
              <span class="text-danger">@error('email'){{ $message }}@enderror</span>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" name="phone" id="floatingInput" value="{{ old('phone') }}" placeholder="012 3456 7890">
              <label for="floatingInput" class="required">Phone Number</label>
              <span class="text-danger">@error('phone'){{ $message }}@enderror</span>
            </div>          
            <div class="form-floating mb-3">
              <input type="number" class="form-control dob_max" name="birth_date" value="{{ old('birth_date') }}" id="floatingInput" placeholder="." onfocus="(this.type='date')" onblur="(this.type='text')">
              <label for="floatingInput" class="required">Date of Birth</label>
              <span class="text-danger">@error('birth_date'){{ $message }}@enderror</span>
            </div>
            <div class="form-floating mb-3">
              <select class="form-select black-title" id="floatingSelect" name="cate" aria-label="Floating label select example">
                  <option class="op" value="Child and Adolescence Disorders">Child and Adolescence Disorders</option>
                  <option class="op" value="General Psychiatry">General Psychiatry</option>
                  <option class="op" value="Geriatric Psychiatry">Geriatric Psychiatry</option>
                  <option class="op" value="Psychiatry of Intellectual Disability (PID)">Psychiatry of Intellectual Disability (PID)</option>
                  <option class="op" value="Marital and Family Relations">Marital and Family Relations</option>
                  <option class="op" value="Forensic Psychiatry">Forensic Psychiatry</option>
                  <option class="op" value="Addiction<">Addiction</option>
                  <option class="op" value="Life Coach">Life Coach</option>
              </select>
              <label for="floatingSelect" class="required">Department</label>
            </div>
            <div class="form-floating mb-4">
              <input type="password" class="form-control" id="floatingPassword" name="password"  placeholder="********">
              <label for="floatingPassword" class="required">Password</label>
              <span class="text-danger">@error('password'){{ $message }}@enderror</span>
            </div>
            <div class="form-floating mb-3">
              <input type="number" class="form-control" name="session_fees"  value="{{ old('session_fees') }}"  id="floatingInput" placeholder="150 ">
              <label for="floatingInput" class="required">Sessions' Fees</label>
              <span class="text-danger">@error('session_fees'){{ $message }}@enderror</span>

            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" name="education" id="floatingInput"  value="{{ old('education') }}" placeholder=".">
              <label for="floatingInput" class="required">Education</label>
              <span class="text-danger">@error('education'){{ $message }}@enderror</span>
            </div>
            <div class="form-floating mb-3">
              <input type="number" class="form-control" name="experience" id="floatingInput"  value="{{ old('experience') }}" placeholder="7">
              <label for="floatingInput" class="required">Experience</label>
              <span class="text-danger">@error('experience'){{ $message }}@enderror</span>

            </div>
            <div class="form-floating mb-3 pt-1">
              <input type="file" class="form-control p-custom " name="pic" id="floatingImg" value="{{ old('pic') }}" accept="image/*" >
              <label for="floatingImg" >Profile Picture</label>
              <span class="text-danger">@error('pic'){{ $message }}@enderror</span>
            </div>
            <div class="form-group mb-5 mt-4">
              <input type="submit" class="btn btn-primary rounded-pill w-100" value="Create Account">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="../js/bootstrap.bundle.js"></script>
  <script src="../js/admin main script.js"></script>

</body>
</html> 
@endsection