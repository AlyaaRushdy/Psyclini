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
<body id="bootstrap-overrides">
  
  <!--nav bar begin-->
  <header>
    <nav class="navbar navbar-expand-lg navigation" id="navbar">
      <div class="container">
        <a class="navbar-brand" href="index.html">
          <img src="../img/logo.png" alt="" class="img-fluid" >
        </a>

        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
          <span class="icofont-navigation-menu"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarmain">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('doctors/') }}">Doctors</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('articles/') }}">Articles</a></li>    
            <li class="nav-item"><a class="nav-link" href="{{ url('test/') }}">Tests</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('blog/') }}">Blog</a></li>    
            <li class="nav-item"><a class="nav-link" href="{{ url('') }}">Games</a></li>      
            <li class="nav-item"><a class="nav-link" href="#contact-us">Contact Us</a></li>
            <a class="btn btn-outline-primary rounded-pill order-1 order-lg-0 ms-lg-4" href="{{ url('sign in/') }}">Sign In</a>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!--nav bar End-->

  <section class="section blog-wrap">
    <div class="container">
      <div class="row">
        <div class="col-lg-8"><!--articles -->
          <div class="row">    
            <div class="col-lg-12 col-md-12 mb-5"><!--article 1-->
              <div class="blog-item">
                <div class="blog-thumb">
                  <img src="../img/الوسواس القهري.jpg" alt="" class="img-fluid ">
                </div>
                <div class="blog-item-content">
                  <div class="blog-item-meta mb-3 mt-4">
                    <span class="text-black text-capitalize text-muted mr-3"><i class="icofont-calendar mr-1"></i> 28th January</span>
                  </div> 
                  <h2 class="mt-3 mb-3"><a href="article page.html">الوسواس القهري</a></h2>
                  <p class="mb-4">هو أحد الاضطرابات النفسية العقلية التي قد تُصيب البعض و هو عبارة عن أفكار
                    و صور تدخل إلى عقل الإنسان بطريقة مكررة ويحاول جاهداً مقاومتها دون جدوى
                    و... 
                   </p>
                  <a href="article page.html" target="_blank" class="btn btn-primary rounded-pill">Read More <i class="icofont-simple-right ml-2  "></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-12 col-md-12 mb-5"><!--article 2-->
              <div class="blog-item">
                <div class="blog-thumb">
                  <img src="../img/الفصام.jpg" alt="" class="img-fluid ">
                </div>
                <div class="blog-item-content">
                  <div class="blog-item-meta mb-3 mt-4">
                    <span class="text-black text-capitalize text-muted mr-3"><i class="icofont-calendar mr-1"></i> 28th January</span>
                  </div> 
                  <h2 class="mt-3 mb-3"><a href="article 2 page.html">الشيزوفرينيا أو انفصام الشخصية</a></h2>
                  <p class="mb-4">تُعّرف الشيزوفرينيا، أو الفصام، أو الفُصام العقلي، أو السكيزوفرينيا، أو السكيتسوفرينيا بأنه اضطراب نفسي مزمن يفسّر فيه المصاب الواقع بشكل غير طبيعي، وتسبب الإصابة بفصام الشخصية الهلوسة، وحدوث مشاكل في التركيز، والتفكير، وطريقة التعبير عن المشاعر، بالإضافة الي... </p>
                  <a href="article 2 page.html" target="_blank" class="btn btn-primary rounded-pill">Read More <i class="icofont-simple-right ml-2  "></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-12 col-md-12 mb-5"><!--article 3-->
              <div class="blog-item">
                <div class="blog-thumb">
                  <img src="../img/banner.png" alt="" class="img-fluid ">
                </div>
                <div class="blog-item-content">
                  <div class="blog-item-meta mb-3 mt-4">
                    <span class="text-black text-capitalize text-muted mr-3"><i class="icofont-calendar mr-1"></i> 28th January</span>
                  </div> 
                  <h2 class="mt-3 mb-3"><a href="article page.html">Choose quality service over cheap service  all type of things</a></h2>
                  <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis aliquid architecto facere commodi cupiditate omnis voluptatibus inventore atque velit cum rem id assumenda quam recusandae ipsam ea porro, dicta ad.</p>
                  <a href="article page.html" target="_blank" class="btn btn-primary rounded-pill">Read More <i class="icofont-simple-right ml-2  "></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4"><!--Side Bar-->
          <div class="sidebar-wrap pl-lg-4 mt-5 mt-lg-0">
            <div class="sidebar-widget search  mb-3 "><!--Search-->
              <h4>Search Here</h4>
              <form action="#" class="search-form">
                <input type="text" class="form-control" placeholder="search">
                <i class="ti-search"></i>
              </form>
            </div>

            <div class="sidebar-widget latest-post mb-3"><!--Popular Atricles-->
              <h4>Popular Articles</h4>
              <div class="py-2">
                <span class="text-sm text-muted">03 Mar 2018</span>
                <h6 class="my-2"><a href="#">Thoughtful living in los Angeles</a></h6>
              </div>

              <div class="py-2">
                <span class="text-sm text-muted">03 Mar 2018</span>
                <h6 class="my-2"><a href="#">Vivamus molestie gravida turpis.</a></h6>
              </div>

              <div class="py-2">
                <span class="text-sm text-muted">03 Mar 2018</span>
                  <h6 class="my-2"><a href="#">Fusce lobortis lorem at ipsum semper sagittis</a></h6>
              </div>                       
            </div>

            <div class="sidebar-widget category mb-3"><!--Department -->
              <h4>Department</h4>
              <ul class="list-unstyled">
                <li class="align-items-center">
                  <a href="#">Child Disorders</a>
                  <span>(7)</span>
                </li>
                <li class="align-items-center">
                  <a href="#">Adolescence disorders</a>
                  <span>(20)</span>
                </li>
                <li class="align-items-center">
                  <a href="#">Mood Disorders (Depression)</a>
                  <span>(10)</span>
                </li>
                <li class="align-items-center">
                  <a href="#">Anxiety Disorders and Obsessions</a>
                  <span>(5)</span>
                </li>
                <li class="align-items-center">
                  <a href="#">Marriage Counselling/Relationship Disorders</a>
                  <span>(5)</span>
                </li>
                <li class="align-items-center">
                  <a href="#">Psychotic Disorders</a>
                  <span>(5)</span>
                </li>
                <li class="align-items-center">
                  <a href="#">Addiction</a>
                  <span>(5)</span>
                </li>
                <li class="align-items-center">
                  <a href="#">Sexual Disorders</a>
                  <span>(5)</span>
                </li>
                <li class="align-items-center">
                  <a href="#">Eating Disorders</a>
                  <span>(5)</span>
                </li>
              </ul>
            </div>
            <div class="sidebar-widget tags mb-3"><!--Tags -->
              <h4 class="mb-4">Tags</h4>
              <a href="#">Doctors</a>
              <a href="#">agency</a>
              <a href="#">company</a>
              <a href="#">medicine</a>
              <a href="#">surgery</a>
              <a href="#">Marketing</a>
              <a href="#">Social Media</a>
              <a href="#">Branding</a>
              <a href="#">Laboratory</a>
            </div>
          </div>
        </div>
      </div><!--end row-->
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




  <script src="../js/jquery.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/slick.min.js"></script>
  <script src="../js/script.js"></script>
</body>
</html>


