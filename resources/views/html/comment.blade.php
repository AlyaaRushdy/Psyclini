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
            <div class="col-lg-12 mb-5">
              <div class="single-blog-item feature-item"><!--Post content begin-->
                <div class="comment-area"><!--Post Owner-->
                  <div class="comment-area-box post-owner">
                    @if ($post->doctor_id != NUll)
                      @if ( ($post->doctor->img) != NULL)
                        <div class="comment-thumb float-left">
                          <img alt="" src="{{ asset('images/doc/'. $post->doctor->img) }}" class="img-fluid">
                        </div>    
                      @else
                        <div class="comment-thumb float-left">
                          <img alt="" src="{{ asset('images/patients/123.jpg') }}" class="img-fluid">
                        </div>
                      @endif
                    @elseif ($post->patient_id != NUll)
                        @if ( ($post->patient->img) != NULL)
                          <div class="comment-thumb float-left">
                            <img alt="" src="{{ asset('images/patients/'. $post->patient->img) }}" class="img-fluid">
                          </div>    
                        @else
                          <div class="comment-thumb float-left">
                            <img alt="" src="{{ asset('images/patients/123.jpg') }}" class="img-fluid">
                          </div>
                        @endif
                    @else
                        @if ( ($post->secretary->img) != NULL)
                          <div class="comment-thumb float-left">
                            <img alt="" src="{{ asset('images/sec/'. $post->patient->img) }}" class="img-fluid">
                          </div>    
                        @else
                          <div class="comment-thumb float-left">
                            <img alt="" src="{{ asset('images/patients/123.jpg') }}" class="img-fluid">
                          </div>
                        @endif
                  @endif
                   
                    <div class="comment-info ">
                          @if ($post->patient_id != NUll)
                              <h4 class="mb-1 ">{{ $post->patient->name}}</h4>
                          @elseif ($post->doctor_id != NUll)
                              <h4 class="mb-1 "> Dr {{ $post->doctor->name}}</h4>
                          @else
                          <h4 class="mb-1 "> {{ $post->secretary->name}}</h4>
                          @endif
                    </div>
                  </div>
                </div>

                <img src="{{ asset('images/'. $post->image) }}" alt="" class="img-fluid">
                <div class="blog-item-content mt-5">

                  <div class="blog-item-meta mb-3"><!--Post headers-->
                    <span class="text-color-2 text-capitalize mr-3"><i class="icofont-book-mark mr-2"></i> {{ $post->speciality }}</span>
                    <span class="text-muted text-capitalize mr-3"><i class="icofont-comment mr-2"></i>{{ $post->comments_count }} Comments</span>
                    <span class="text-black text-muted text-capitalize mr-3"><i class="icofont-calendar mr-2"></i> {{ $post->added_at }}</span>
                  </div> 

                  <p class="article-parag"><!--Post Body-->
                        {!! nl2br($post->body) !!}
                  </p>
               
   
                </div>
              </div>
            </div>
            <div class="col-lg-12" id="comments"><!-- Comments -->
              <div class="comment-area mt-4 mb-5 feature-item">
                <h4 class="mb-4">Comments ... </h4>      
                @foreach ($comments as $comment)
                <ul class="comment-tree list-unstyled">
                  <li class="mb-5">
                    <div class="comment-area-box">
                      @if ($comment->doctor_id != NUll)
                          @if ( ($comment->doctor->img) != NULL)
                            <div class="comment-thumb float-left">
                              <img alt="" src="{{ asset('images/doc/'. $comment->doctor->img) }}" class="img-fluid">
                            </div>    
                          @else
                            <div class="comment-thumb float-left">
                              <img alt="" src="{{ asset('images/patients/123.jpg') }}" class="img-fluid">
                            </div>
                          @endif
                    @elseif ($comment->patient_id != NUll)
                             @if ( ($comment->patient->img) != NULL)
                                <div class="comment-thumb float-left">
                                  <img alt="" src="{{ asset('images/patients/'. $comment->patient->img) }}" class="img-fluid">
                                </div>    
                              @else
                                <div class="comment-thumb float-left">
                                <img alt="" src="{{ asset('images/patients/123.jpg') }}" class="img-fluid">
                              </div>
                            @endif
                    @else
                        @if ( ($comment->secretary->img) != NULL)
                          <div class="comment-thumb float-left">
                            <img alt="" src="{{ asset('images/sec/'. $comment->secretary->img) }}" class="img-fluid">
                          </div>    
                        @else
                          <div class="comment-thumb float-left">
                            <img alt="" src="{{ asset('images/patients/123.jpg') }}" class="img-fluid">
                          </div>
                        @endif
                  @endif
                      <div class="comment-info">
                            @if ($comment->patient_id != NUll)
                                <h5 class="mb-1 ">{{ $comment->patient->name}}</h5>
                            @elseif ($comment->doctor_id != NUll)
                                <h5 class="mb-1 "> Dr {{ $comment->doctor->name}}</h5>
                            @else
                                <h5 class="mb-1 "> Admin</h5>
                            @endif

                        <span class="date-comm"> {{ $comment->comment_added_at }}</span>
                      </div>
                      <div class="comment-content mt-3">
                        <p>{!! nl2br($comment->body) !!} </p>
                      </div>
                      <hr>
                    </div>
                  </li>
                </ul>
                
                @endforeach
              </div>
            </div>

            
              <form action="{{ route('comments.store', $post->id) }}" class="comment-form w-100 my-5" id="comment-form" method="POST">
                @csrf
                <div class="feature-item">
              <div class="col-lg-12 w-100"> <!--Write a Comment-->
                <h4 class="mb-4">Write a Comment</h4>
                  <textarea class="form-control mb-4 w-100" name="comment" id="comment" cols="30" rows="5" placeholder="Comment" required></textarea>
                  <input class="btn btn-primary rounded-pill" type="submit" name="submit-contact" id="submit_contact" value="Submit Comment">
                  </div>
                </form>
            </div>
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
      
                  <div class="sidebar-widget latest-post mb-3"><!--Latest Posts-->
                    <h4>Popular Posts</h4>
                    <div class="py-2">
                      <span class="text-sm text-muted">{{ $p->first()->created_at->format('d M-Y') }} </span>
                      <h6 class="my-2"><a href="{{ route('blog.page', $p->first()->id) }}">{{ $p->first()->body }}</a></h6>
                    </div>
      
                    <div class="py-2">
                      <span class="text-sm text-muted">{{ $pp->first()->created_at->format('d M-Y') }}</span>
                      <h6 class="my-2"><a href="{{ route('blog.page', $pp->first()->id) }}">{{ $pp->first()->body }}.</a></h6>
                    </div>
      
                    <div class="py-2">
                      <span class="text-sm text-muted">{{ $ppp->first()->created_at->format('d M-Y') }}</span>
                        <h6 class="my-2"><a href="{{route('blog.page', $ppp->first()->id)}}">{{ $ppp->first()->body }}</a></h6>
                    </div>                       
                  </div>
      
                  <div class="sidebar-widget category mb-3"><!--Department -->
                    <h4>Departments</h4>
                    <ul class="list-unstyled">
                      <li class="align-items-center">
                        <a href="{{ route('child.posts') }}">Child and Adolescence Disorders</a>
                        <span>({{ $post->child }})</span>
                      </li>
                      <li class="align-items-center">
                        <a href="{{ route('geriatric.posts') }}">Geriatric Psychiatry</a>
                        <span>({{ $post->geriatric }})</span>
                      </li>
                      <li class="align-items-center">
                        <a href="{{ route('general.posts') }}">General Psychiatry</a>
                        <span>({{ $post->general }})</span>
                      </li>
                      <li class="align-items-center">
                        <a href="{{ route('disability.posts') }}">Psychiatry of Intellectual Disability </a>
                        <span>({{ $post->pid }})</span>
                      </li>
                      <li class="align-items-center">
                        <a href="{{ route('family.posts') }}">Marital and Family Relations</a>
                        <span>({{ $post->marital }})</span>
                      </li>
                      <li class="align-items-center">
                        <a type="button" href="{{ route('forensic.posts') }}">Forensic Psychiatry</a>
                        <span>({{ $post->forensic }})</span>
                      </li>
                      <li class="align-items-center">
                        <a href="{{ route('addiction.posts') }}">Addiction</a>
                        <span>({{ $post->addiction }})</span>
                      </li>
                      <li class="align-items-center">
                        <a href="{{ route('life.posts') }}">Life Coach</a>
                          <span>({{ $post->life_coach }})</span>
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

