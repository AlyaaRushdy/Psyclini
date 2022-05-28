@extends('layouts.app')
@section('content')
    

<!DOCTYPE html>
<html>
<head>
  <title>Whac-a-Mole - Psyclini</title>
    
</head>
<body id="bootstrap-overrides top">


  <section class="section game-wrap ">
    <div class="container col-lg-7 feature-item">
      <div class="col-lg-12 pb-2">
        <h2 class="blue-title pb-2"> Whac-a-Mole</h2>
        <label class="bold"> Your Score : </label>
        <label id="score">0</label><br>
        <label class="bold"> Time Left : </label>
        <label id="time-left">60</label>
      </div>
    
      <div class="container col-lg-9">
        <div class="row">
          <div class="square " id="1"></div>
          <div class="square " id="2"></div>
          <div class="square " id="3"></div>
          
      
          <div class="square" id="4"></div>
          <div class="square" id="5"></div>
          <div class="square" id="6"></div>
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

  <script src="../js/game1.js"></script> 


</body>
</html>

@endsection
