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

            <div class="col-lg-12" id="comments"> <!-- Comments -->
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
                </ul>
              </div>
            </div>

            <div class="col-lg-12"> <!--Write a Comment-->
              <form action="{{ route('test', $post->id) }}" class="comment-form my-5" id="comment-form" method="POST">
                @csrf
                <h4 class="mb-4">Write a Comment</h4>
                <textarea class="form-control mb-4 w-100" name="comment" id="comment" cols="30" rows="5" placeholder="Comment"></textarea>
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
                </div>
              </div>
            </div><!--end row-->
          </div>
        </section>
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
          
          
</body>
</html>
@endsection

