@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/home_style.css">
    <link rel="stylesheet" href="../css/icofont.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/slick-theme.css">
    <link rel="stylesheet" href="../css/slick.css">
    <link rel="icon" href="../img/icon.png">
    <title>Psyclini</title>
    
</head>
<body id="bootstrap-overrides top">
  
  <!--nav bar begin-->

  <!--nav bar End-->

  
  <section class="section tests-main">
    <div class="container col-lg-10 ">
      
      <div class="row justify-content-between"><!--first row-->


        <div class="feature-item-tests col-lg-5"><!--game 1-->

          <a href="{{ route('game1') }}"><img src="../img/mole.png" alt="" class="img-fluid w-100"></a>
          <div class="content">
            <a href="{{ route('game1') }}"><h3 class="mt-4 mb-2 test-title "> Whac-a-Mole</h3></a>
            <p class="mb-4 ">Try to hit as many as you can under 60 seconds </p>
            <a href="{{ route('game1') }}" class="read-more btn btn-primary rounded-pill">Play Now<i class="icofont-simple-right ml-2"></i></a>
          </div>
        </div>
        <div class="feature-item-tests col-lg-5 " ><!--game 2-->
          <a href="{{ route('game2') }}"><img src="../img/game2.jpg" alt="" class="img-fluid w-100"></a>
          <div class="content">
            <a href="{{ route('game2') }}"><h3 class="mt-4 mb-2 test-title "> Matching </h3></a>
            <p class="mb-4 ">Relax your brain and test your memory with this matching game</p>

            <a href="{{ route('game2') }}" class="read-more btn btn-primary rounded-pill">Play Now<i class="icofont-simple-right ml-2"></i></a>
          </div>
        </div>
      </div>

      <div class="row justify-content-between"><!--second row-->


        <div class="feature-item-tests col-lg-5"><!--game 3-->

          <a href="game3.html"><img src="../img/doctors.png" alt="" class="img-fluid w-100"></a>
          <div class="content">
            <a href="game3.html"><h3 class="mt-4 mb-2 test-title ">Game 3</h3></a>
            <p class="mb-4 ">Non illo quas blanditiis repellendus laboriosam minima animi. Consectetur accusantium pariatur repudiandae!</p>
            <a href="game3.html" class="read-more btn btn-primary rounded-pill">Play Now<i class="icofont-simple-right ml-2"></i></a>
          </div>
        </div>

        <div class="feature-item-tests col-lg-5 " ><!--game 4-->

          <a href="game4.html"><img src="../img/doctors.png" alt="" class="img-fluid w-100"></a>
          <div class="content">
            <a href="game4.html"><h3 class="mt-4 mb-2 test-title ">Game 4</h3></a>
            <p class="mb-4 ">Non illo quas blanditiis repellendus laboriosam minima animi. Consectetur accusantium pariatur repudiandae!</p>
            <a href="game4.html" class="read-more btn btn-primary rounded-pill">Play Now<i class="icofont-simple-right ml-2"></i></a>
          </div>
        </div>
      </div>

      <div class="row mt-5"><!--page numbers-->
        <div class="col-lg-8">
          <nav class="pagination py-2 d-inline-block">
            <div class="nav-links">
              <span aria-current="page" class="page-numbers current">1</span>
              <a class="page-numbers" href="#">2</a>
              <a class="page-numbers" href="#">3</a>
              <a class="page-numbers" href="#"><i class="icofont-thin-double-right"></i></a>    
            </div>
          </nav>
        </div>
      </div>

    </div>
  </section>

  <!--footer begin-->
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
  <!--footer end-->



  <script src="../js/jquery.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/slick.min.js"></script>
  <script src="../js/script.js"></script>
</body>
</html>


@endsection