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



<section class="section game-wrap">
    <div align="center"><iframe src="http://localhost:51472/" frameborder="0" height="650" width="1000" ></iframe></div>
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
<script src="../js/slick.min.js"></script>
<script src="../js/script.js"></script> 


</body>
</html>

@endsection

