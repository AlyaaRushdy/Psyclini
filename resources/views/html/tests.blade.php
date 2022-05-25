@extends('layouts.app')
@section('content')
    


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/home_style.css">
    <link rel="stylesheet" href="../css/icofont.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="icon" href="../img/icon.png">
    <title>Psyclini</title>
    
</head>
<body id="bootstrap-overrides top">
  
  <!--nav bar begin-->
   <!--nav bar End-->

  
  <section class="section tests-main">
    <div class="container col-lg-10 ">
      
      <div class="row justify-content-between"><!--first row-->

        <div class="feature-item-tests col-lg-5"><!--test 1-->
          <a href="{{ route('test1') }}"><img src="../img/test1.jpg" alt="" class="img-fluid w-100"></a>
          <div class="content">
            <a href="{{ route('test1') }}"><h3 class="mt-4 mb-2 test-title dir-rtl"> اختبار الكسل و خمول النفس </h3></a>
            <p class="mb-4 dir-rtl">هل تقضي طوال ايام عطلتك في النوم والاستلقاء؟ اكتشف الان كم تبلغ نسبة الكسل لديك.</p>
            <a href="{{ route('test1') }}" class="read-more btn btn-primary rounded-pill">take Now<i class="icofont-simple-right ml-2"></i></a>
          </div>
        </div>
        <div class="feature-item-tests col-lg-5 " ><!--test 2-->
          <a href="{{ route('test2') }}"><img src="../img/test2.jpg" alt="" class="img-fluid w-100"></a>
          <div class="content">
            <a href="{{ route('test2') }}"><h3 class="mt-4 mb-2 test-title dir-rtl"> اختبار الاكتئاب </h3></a>
            <p class="mb-4 dir-rtl">تمر بتقلبات مزاجيه تؤثر عليك وعلي من حولك؟ قم بالاختبار لتعرف ما إذا كنت تعاني من الاكتئاب أم أنها مجرد تقلبات مزاجيه.</p>
            <a href="{{ route('test2') }}" class="read-more btn btn-primary rounded-pill">take Now<i class="icofont-simple-right ml-2"></i></a>
          </div>
        </div>
      </div>

      <div class="row justify-content-between"><!--second row-->

        <div class="feature-item-tests col-lg-5"><!--test 3-->
          <a href="{{ route('test3') }}"><img src="../img/test3.jpg" alt="" class="img-fluid w-100"></a>
          <div class="content">
            <a href="{{ route('test3') }}"><h3 class="mt-4 mb-2 test-title dir-rtl">اختبار إدمان الانترنت</h3></a>
            <p class="mb-4 dir-rtl">الانترنت يؤثر علي حالتنا النفسيه؟ اكتشف إذا ما كنت مدمناً علي الانترنت أم لا...</p>
            <a href="{{ route('test3') }}" class="read-more btn btn-primary rounded-pill">take Now<i class="icofont-simple-right ml-2"></i></a>
          </div>
        </div>
        <div class="feature-item-tests col-lg-5 " ><!--test 4-->
          <a href="{{ route('test4') }}"><img src="../img/test4.jpg" alt="" class="img-fluid w-100"></a>
          <div class="content">
            <a href="{{ route('test4') }}"><h3 class="mt-4 mb-2 test-title dir-rtl">مقياس الحاجات النفسية الاساسية</h3></a>
            <p class="mb-4 dir-rtl">نحن نحتاج الي إشباع حاجات نفسية في حياتنا كالحاجه إلي الأمن و الحب و الأنتماء وتحقيق وتقدير الذات, هذا الاختبار يخبرك بمدي تلبية هذه الحاجات لديك.</p>
            <a href="{{ route('test4') }}" class="read-more btn btn-primary rounded-pill">take Now<i class="icofont-simple-right ml-2"></i></a>
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
    






  <script src="../js/jquery.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/slick.min.js"></script>
  <script src="../js/script.js"></script>
</body>
</html>


@endsection