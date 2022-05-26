<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
 {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../css/icofont.css">
<link rel="stylesheet" href="../css/signin_signup_style.css">
<link rel="stylesheet" href="../css/slick-theme.css">
<link rel="stylesheet" href="../css/slick.css">
<link rel="stylesheet" href="../css/home_style.css"> 
 <link rel="stylesheet" href="../css/bootstrap.min.css"> 
<link rel="icon" href="../img/icon.png">


</head>
<body id="bootstrap-overrides top">


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
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="{{ url('department') }}" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Departments</a>
              <ul class="dropdown-menu" aria-labelledby="dropdown02">
                <li><a class="dropdown-item" href="{{ url('department') }}">All Departments</a></li>
                <li><a class="dropdown-item" href="{{ url('department' . '#child_adol') }}">Child and Adolescence Disorders</a></li>
                <li><a class="dropdown-item" href="{{ url('department' . '#general') }}">General Psychiatry</a></li>
                <li><a class="dropdown-item" href="{{ url('department' . '#geriatric') }}">Geriatric Psychiatry</a></li>
                <li><a class="dropdown-item" href="{{ url('department' . '#pid') }}">Psychiatry of Intellectual Disability (PID)</a></li>
                <li><a class="dropdown-item" href="{{ url('department' . '#marital') }}">Marital and Family Relations</a></li>
                <li><a class="dropdown-item" href="{{ url('department' . '#forensic') }}">Forensic Psychiatry</a></li>
                <li><a class="dropdown-item" href="{{ url('department' . '#addiction') }}">Addiction</a></li>
                <li><a class="dropdown-item" href="{{ url('department' . '#life_coach') }}">Life Coach</a></li>
              </ul>
            </li>
            <li class="nav-item"><a class="nav-link" href="{{ url('doctors/') }}">Doctors</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('articles/') }}">Articles</a></li>    
            <li class="nav-item"><a class="nav-link" href="{{ url('tests/') }}">Tests</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('blog/') }}">Blog</a></li>    
            <li class="nav-item"><a class="nav-link" href="{{ url('games/') }}">Games</a></li>  
            <li class="nav-item"><a class="nav-link" href="{{ url('/'.'#contact-us') }}">Contact Us</a></li>    
                @if (Auth::guard('patient')->check())
                <li class="nav-item dropdown user-dropdown">
                  <a class="nav-link dropdown-toggle" href="{{ route('home') }}"  id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @if(Auth::guard('patient')->user()->img == NUll)
                    
                      <span><img src="{{ asset('images/patients/123.jpg') }}" width="50" height="50" alt=""></span>
                    
                    @else

                      <span><img src="{{ asset('images/patients/'. Auth::guard('patient')->user()->img) }}" width="50" height="50" alt=""></span>
                    
                    @endif
                </a>
                  <ul class="dropdown-menu " aria-labelledby="dropdown03">
                    <li><a href="{{route('home')}}" class="dropdown-item">Welcome, {{ Auth::guard('patient')->user()->name}}</a></li>
                    <li><a href="{{route('pHistory')}}" class="dropdown-item">History</a></li>
                    <li><a href="{{route('Upcom')}}" class="dropdown-item">Upcoming Appointment </a></li>
                    <li><a class="dropdown-item" href="#" onclick="event.preventDefault();document.querySelector('#logout-form').submit();">
                      Logout</a>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
                  </ul>
                </li>

                @elseif (Auth::guard('doctor')->check() )
                <li class="nav-item dropdown user-dropdown">
                  <a class="nav-link dropdown-toggle" href="{{ route('home') }}"  id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @if(Auth::guard('doctor')->user()->img == NUll)
                    
                      <span><img src="{{ asset('images/patients/123.jpg') }}" width="50" height="50" alt=""></span>
                    
                    @else

                      <span><img src="{{ url('images/doc/' . Auth::guard('doctor')->user()->img) }}" width="50" height="50" alt=""></span>
                    
                    @endif
                </a>
                  <ul class="dropdown-menu " aria-labelledby="dropdown03">
                    <li><a href="{{route('home')}}" class="dropdown-item">Welcome, {{ Auth::guard('doctor')->user()->name}}</a></li>
                    <li><a class="dropdown-item" href="#" onclick="event.preventDefault();document.querySelector('#logout-form').submit();">
                      Logout
                        </a>
                    </li>
                    <form id="logout-form" action="{{ route('doctor.logout') }}" method="GET" style="display: none;">
                      @csrf
                  </form>
                  </ul>
                </li>

                @elseif (Auth::guard('admin')->check() )
                    <li class="nav-item dropdown user-dropdown">
                      <a class="nav-link dropdown-toggle" href="{{ route('home') }}"  id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @if(Auth::guard('admin')->user()->img == NUll)
                    
                      <span><img src="{{ asset('images/patients/123.jpg') }}" width="50" height="50" alt=""></span>
                    
                    @else

                      <span><img src="{{ url('images/sec/' . Auth::guard('admin')->user()->img) }}" width="50" height="50" alt=""></span>
                    
                    @endif
                </a>
                  <ul class="dropdown-menu " aria-labelledby="dropdown03">
                    <li><a href="{{route('home')}}" class="dropdown-item">Welcome, {{ Auth::guard('admin')->user()->name}}</a></li>
                    <li><a class="dropdown-item" href="#" onclick="event.preventDefault();document.querySelector('#logout-form').submit();">
                      Logout
                        </a>
                    </li>
                    <form id="logout-form" action="{{ route('admin.logout') }}" method="GET" style="display: none;">
                      @csrf
                  </form>
                  </ul>
                </li>
           
                    @else               
                    
                    <a class="btn btn-outline-primary rounded-pill order-1 order-lg-0 ms-lg-4"  href="{{ url('sign in/') }}">Sign In</a>
                  @endif
                  
          </ul>
           
        </div>
    </div>
    </nav>
  </header>
  <!--nav bar End-->


        <main class="py-4">
            @yield('content')
        </main>
    </div>
    
{{-- @if (session('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('status') }}
      <button type="button" class="close" data-dismiss="alert" aria-label="close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
@endif --}}
<script src="../js/sweetalert.min.js"></script>

@if (Session('status'))
    <script>
        swal("{{ Session('status') }}", 'You Can See It in Our Blog!', 'success');
    </script>
    
@endif 
@if (Session('status2'))
    <script>
        swal("{{ Session('status2') }}");
    </script>
    
@endif 
{{-- @yield('scripts') --}}
{{-- @if (session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      {{ session('error') }}
      <button type="button" class="close" data-dismiss="alert" aria-label="close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
@endif --}}

<script>
  $(document).ready(function(){
    setTimeout(function() {
      $(".alert").alert('close');
    }, 3000);
  });
  
</script>

  <script src="../js/jquery.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/slick.min.js"></script>
  <script src="../js/script.js"></script>
</body>
</html>



{{-- @if (Auth::guard('patient')->user())
@guest
<li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        {{ Auth::guard('patient')->user()->name}}
    </a>

    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
        
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</li>         
@endguest
@if (Auth::guard('doctor')->user() )
@guest
<li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        {{ Auth::guard('doctor')->user()->name}}
    </a>

    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
        
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</li>         
@endguest
@else
<a class="btn btn-outline-primary rounded-pill order-1 order-lg-0 ms-lg-4" href="{{ url('sign in/') }}">Sign In</a>
@endif --}}
