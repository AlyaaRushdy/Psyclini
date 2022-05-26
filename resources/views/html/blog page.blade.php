@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html>
<head>
    <title>Psyclini</title>
    
</head>
<body id="bootstrap-overrides">
 
  <section class="section blog-wrap">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="row">
            {{-- @foreach ($posts as $post) --}}
            <div class="col-lg-12 mb-5">
              <div class="single-blog-item feature-item"><!--Post content begin-->
                <div class="comment-area"><!--Post Owner-->
                  <div class="comment-area-box post-owner">
                    <div class="comment-thumb float-left">
                      <img alt="" src="../img/people pic 5.jpg" class="img-fluid">
                    </div>
                    <div class="comment-info ">
                      <h4 class="mb-1 ">mohamed</h4>
                    </div>
                  </div>
                </div>

                {{-- <img src="{{ asset('images/'. $post->image) }}" alt="" class="img-fluid"> --}}
                <div class="blog-item-content mt-5">

                  <div class="blog-item-meta mb-3"><!--Post headers-->
                    <span class="text-color-2 text-capitalize mr-3"><i class="icofont-book-mark mr-2"></i> Child Disorders</span>
                    <span class="text-muted text-capitalize mr-3"><i class="icofont-comment mr-2"></i>2 Comments</span>
                    <span class="text-black text-muted text-capitalize mr-3"><i class="icofont-calendar mr-2"></i> 28th January 2019</span>
                  </div> 

                  <p class="article-parag"><!--Post Body-->
                        this is post
                  </p>
               
                  
                </div>
              </div>
            </div>
            <div class="col-lg-12" id="comments"><!-- Comments -->
              <div class="comment-area mt-4 mb-5 feature-item">
                <h4 class="mb-4">Comments ... </h4>
                <ul class="comment-tree list-unstyled">
                  <li class="mb-5">
                    <div class="comment-area-box">
                      <div class="comment-thumb float-left">
                        <img alt="" src="../img/people pic 2.jpg" class="img-fluid">
                      </div>
                      <div class="comment-info">
                        <h5 class="mb-1">name</h5>
                        <span class="date-comm"> Posted April 7, 2019</span>
                      </div>
                      <div class="comment-meta mt-2">
                        <a href="#"><i class="icofont-reply mr-2 text-muted"></i>Reply</a>
                      </div>
                      <div class="comment-content mt-3">
                        <p>Some consultants are employed indirectly by the client via a consultancy staffing company, a company that provides consultants on an agency basis. </p>
                      </div>
                    </div>
                  </li>

                  {{-- <li>
                    <div class="comment-area-box">
                      <div class="comment-thumb float-left">
                        <img alt="" src="../img/people pic 5.jpg" class="img-fluid">
                      </div>
                      <div class="comment-info">
                        <h5 class="mb-1">Mostafa Ezz</h5>
                        <span class="date-comm"> Posted June 7, 2019</span>
                      </div>
                      <div class="comment-meta mt-2">
                        <a href="#"><i class="icofont-reply mr-2 text-muted"></i>Reply </a>
                      </div>
                      <div class="comment-content mt-3">
                        <p>Some consultants are employed indirectly by the client via a consultancy staffing company, a company that provides consultants on an agency basis. </p>
                      </div>
                    </div>
                  </li> --}}
                </ul>
              </div>
            </div>

            <div class="col-lg-12"><!--Write a Comment-->
              <form action="{{ route('test', $post->id) }}" class="comment-form my-5" id="comment-form" method="POST">
                @csrf
                <h4 class="mb-4">Write a Comment</h4>
                <textarea class="form-control mb-4" name="comment" id="comment" cols="30" rows="5" placeholder="Comment"></textarea>
                <input class="btn btn-primary rounded-pill" type="submit" name="submit-contact" id="submit_contact" value="Submit Comment">
              </form>
            </div>
            {{-- @endforeach --}}
          </div>
        </div>

              <div class="col-lg-4"><!--Side Bar-->
                <div class="sidebar-wrap pl-lg-4 mt-5 mt-lg-0">
                  <div class="sidebar-widget search  mb-3 "><!--Search-->
                    <h4>Search Here</h4>
                    <form action="{{ route('post.search') }}"  method="GET" class="search-form">
                      <input type="text" class="form-control" name= 'posts' placeholder="search">
                      <i class="ti-search"></i>
                     
                        {{-- <button class="btn btn-primary rounded-pill px-3 ">Post</button> --}}
                    
                    </form>
                  </div>
      
                  <div class="sidebar-widget latest-post mb-3"><!--Popular Posts-->
                    <h4>Popular Posts</h4>
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
                    <h4>Departments</h4>
                    <ul class="list-unstyled">
                      <li class="align-items-center">
                        <a href="#">Child and Adolescence Disorders</a>
                        <span>(0)</span>
                      </li>
                      <li class="align-items-center">
                        <a href="#">Geriatric Psychiatry</a>
                        <span>(0)</span>
                      </li>
                      <li class="align-items-center">
                        <a href="#">General Psychiatry</a>
                        <span>(0)</span>
                      </li>
                      <li class="align-items-center">
                        <a href="#">Psychiatry of Intellectual Disability (PID)</a>
                        <span>(0)</span>
                      </li>
                      <li class="align-items-center">
                        <a href="#">Marital and Family Relations</a>
                        <span>(0)</span>
                      </li>
                      <li class="align-items-center">
                        <a href="#">Forensic Psychiatry</a>
                        <span>(0)</span>
                      </li>
                      <li class="align-items-center">
                        <a href="#">Addiction</a>
                        <span>(0)</span>
                      </li>
                      <li class="align-items-center">
                        <a href="#">Life Coach</a>
                        <span>(0)</span>
                      </li>                
                    </ul>
                  </div>
                  
                  <div class="sidebar-widget tags mb-3"><!--Tags -->
                    <h4 class="mb-4">Tags</h4>
                    <a href="#">Doctors</a>
                    <a href="#">Counseling</a>
                    <a href="#">Autism</a>
                    <a href="#">Medicine</a>
                    <a href="#">Neurodivergent</a>
                    <a href="#">Eating Disorders</a>
                    <a href="#">Anxiety</a>
                    <a href="#">Depression</a>
                    <a href="#">OCD</a>
                  </div>
                </div>
              </div>
            </div><!--end row-->
          </div>
        </section>
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

