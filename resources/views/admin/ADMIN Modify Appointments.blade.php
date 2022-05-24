@extends('layouts.admin')
@section('content')
    


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Psyclini ADMIN/ Modify Appointments</title>
  
  <link rel="stylesheet" href="../css/admin_bootstrap.css">
  <link rel="stylesheet" href="../css/icofont.css">
  <link rel="stylesheet" href="../css/admin main style.css">
  <link rel="stylesheet" href="../css/jquery.timepicker.css">
  <link rel="icon" href="../img/icon.png">
</head>

<body>
    
  <div id="main">

    <header class="mb-4">
      <a href="#" class="burger-btn d-block d-xl-none"><i class="icofont-navigation-menu fs-3"></i></a>
    </header>

    <div class="container pt-4 req-mod ml-2">
      <div class="row ">
        <div class="col-lg-10 card shadow  mr-5">
          <h4 class="dark-blue-title pt-4 pl-3 pb-3">Add Appointment</h4>
          <div class="col-lg-12 card mb-4 add-appointment align-items-center">
            <form class="col-lg-10">
              <div class="row pl-4">
                <div class="col-lg-4 pb-2 ">
                  <label class=""> Doctor's Name : </label>
                </div>
                <div class="col-lg-8 pb-4 ">
                  <select name="doctor-name" class="form-select w-100" id="" required>
                    <option value="" >Select Doctor's Name</option>
                    <option value="1">Ahmed Ezzat</option>
                    <option value="2">Ezzat Sayed</option>
                  </select>
                </div>
                <div class="col-lg-4 pb-2 ">
                  <label class=""> Doctor's Phone Number : </label>
                </div>
                <div class="col-lg-8 pb-4 ">
                  <select name="doctor-phone" class="form-select w-100" id="" required>
                    <option value="" >Select Doctor's Number</option>
                    <option value="1">01288887887</option>
                    <option value="2">01234567899</option>
                  </select>
                </div>
                <div class="col-lg-4 pb-2 ">
                  <label class=""> Date : </label>
                </div>
                <div class="col-lg-8 pb-4 ">
                  <input type="date" class="w-100 min_today" required>
                </div>
                <div class="col-lg-4 pb-2 ">
                  <label > Time : </label>
                </div>
                <div class="col-lg-8 pb-4">
                  <input name="datetime" class="w-100 appt_time" required>
                </div>
              </div>
              <div class="col-lg-12 d-flex justify-content-center">
                <input type="submit" class="btn btn-primary w-50" value="Submit"> 
              </div>
            </form>
          </div>
        </div>

        <div class="col-lg-10 card shadow  mr-5">
          <h4 class="dark-blue-title pt-4 pl-3 pb-3">Cancel Appointment</h4>
          <div class="col-lg-12 card mb-4 add-appointment align-items-center">
            <form class="col-lg-10">
              <div class="row pl-4">
                <div class="col-lg-4 pb-2 ">
                  <label class=""> Doctor's Name : </label>
                </div>
                <div class="col-lg-8 pb-4 ">
                  <select name="doctor-name" class="form-select w-100" id="" required>
                    <option value="" >Select Doctor's Name</option>
                    <option value="1">Ahmed Ezzat</option>
                    <option value="2">Ezzat Sayed</option>
                  </select>
                </div>
                <div class="col-lg-4 pb-2 ">
                  <label class=""> Doctor's Phone Number : </label>
                </div>
                <div class="col-lg-8 pb-4 ">
                  <select name="doctor-phone" class="form-select w-100" id="" required>
                    <option value="" >Select Doctor's Number</option>
                    <option value="1">01288887887</option>
                    <option value="2">01234567899</option>
                  </select>
                </div>
                <div class="col-lg-4 pb-2 ">
                  <label class=""> Date : </label>
                </div>
                <div class="col-lg-8 pb-4" >
                  <input type="date" class="w-100 min_today" required>
                </div>
                <div class="col-lg-4 pb-2 ">
                  <label > Time : </label>
                </div>
                <div class="col-lg-8 pb-4" >
                  <input name="datetime" class="w-100 appt_time" required>
                </div>
              </div>
              <div class="col-lg-12 d-flex justify-content-center">
                <input type="submit" class="btn btn-primary w-50" value="Submit"> 
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>      
  </div> 




  <script src="../js/bootstrap.bundle.js"></script> 
  <script src="../js/admin main script.js"></script>
  <script src="../js/jquery.js"></script>
  <script src="../js/jquery.timepicker.js"></script>
  <script src="../js/date.js"></script>
  <script src="../js/time.js"></script>

</body>

</html>
@endsection