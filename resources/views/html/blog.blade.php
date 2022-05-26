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

            <div class="col-lg-12 mb-5"><!--Create a Post-->
              <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="single-blog-item feature-item create-post">
                <h4 class="mb-1">Create a Post</h4> 
                <textarea class="form-control mb-4" name="comment" id="comment" cols="30" rows="5" placeholder="What are you thinking??"></textarea>
                <label >Department
                  <select class="form-select post-dep-dropdown" name="cate" >
                    <option class="op" value="Child and Adolescence Disorders">Child and Adolescence Disorders</option>
                    <option class="op" value="General Psychiatry">General Psychiatry</option>
                    <option class="op" value="Geriatric Psychiatry">Geriatric Psychiatry</option>
                    <option class="op" value="Psychiatry of Intellectual Disability (PID)">Psychiatry of Intellectual Disability (PID)</option>
                    <option class="op" value="Marital and Family Relations">Marital and Family Relations</option>
                    <option class="op" value="Forensic Psychiatry">Forensic Psychiatry</option>
                    <option class="op" value="Addiction<">Addiction</option>
                    <option class="op" value="Life Coach">Life Coach</option>
                  </select>
                </label>
                <label class="text-muted add-img">
                  <i class="icofont-image"><input type="file" name="post-pic" id="post-pic" class="post-pic" accept="image/*"></i>
                  Add an Image 
                </label>
                <div class="text-right ">
                    <button class="btn btn-primary rounded-pill px-3 ">Post</button>
                  </div>
              </div>
              </form>
            </div>



            @foreach ($posts as $post)
            <div class="col-lg-12 mb-5"><!--Post 1-->
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

                <a href="{{ route('blog.page', $post->id) }}"><img src="{{ asset('images/'. $post->image) }}" alt="" class="img-fluid"></a>
                <div class="blog-item-content mt-5">

                  <div class="blog-item-meta mb-3"><!--Post headers-->
                    <span class="text-color-2 text-capitalize mr-3"><i class="icofont-book-mark mr-2"></i> {{ $post->speciality }}</span>
                    <span class="text-muted text-capitalize mr-3"><i class="icofont-comment mr-2"></i>{{ $post->comments_count }} Comments</span>
                    <span class="text-black text-muted text-capitalize mr-3"><i class="icofont-calendar mr-2"></i> {{ $post->added_at }}</span>
                  </div> 

                  <p class="article-parag">
                      {!! nl2br($post->body) !!} 
                  </p>
                  
                  <a href="{{ route('blog.page', $post->id) }}" target="_blank" class="btn btn-primary rounded-pill">Read More <i class="icofont-simple-right ml-2  "></i></a>
                </div>
                
            </div>
        </div>
        
        @endforeach
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
                  <h6 class="my-2"><a href="{{route('blog.page', $ppp->first()->body)}}">{{ $ppp->first()->body }}</a></h6>
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
      <div class="row mt-5"><!--page numbers-->
        <div class="col-lg-8">
          <nav class="pagination py-2 d-inline-block">
            <div class="nav-links">
                {!!  $posts->withQueryString()->links('vendor.pagination.custom') !!} 
            </div>
          </nav>
        </div>
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

