<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">



</head>
<body>
    <div id="app">
        {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
{{-- 
                        @if (Auth::guard('doctor')->check())
                    
                        <li class="nav-item dropdown user-dropdown">
                          {{-- <a class="nav-link dropdown-toggle" href="{{ route('doctor.index') }}"  id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @if(Auth::guard('doctor')->user()->img == NUll)
                            
                              <span><img src="{{ asset('images/patients/123.jpg') }}" width="50" height="50" alt=""></span>
                            
                            @else
        
                              <span><img src="{{ asset('images/'. Auth::guard('doctor')->user()->img) }}" width="50" height="50" alt=""></span>
                            
                            @endif
                        </a> --}}
                          <ul class="dropdown-menu " aria-labelledby="dropdown03">
                            {{-- <li><a class="dropdown-item" href="#" onclick="event.preventDefault();document.querySelector('#logout-form').submit();">
                              Logout
                                </a>
                            </li> --}}
                            <form id="logout-form" action="{{ route('doctors.logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                          </ul>
                        </li>
        


{{-- 
                        @if (Auth::guard('doctor')->check() )
                  
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::guard('doctor')->user()->name}}
                            </a>
            
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="adminDropdown">
                              <a href="{{route('doctor.index')}}" class="dropdown-item">Dashboard</a>
                              <a class="dropdown-item" href="#" onclick="event.preventDefault();document.querySelector('#admin-logout-form').submit();">
                                  Logout
                              </a>
                              <form id="admin-logout-form" action="{{ route('doctors.logout') }}" method="POST" style="display: none;">
                                  @csrf
                              </form>
                          </div>
                        </li>         
                    @endif  --}}
                    {{-- @endif --}}
                  

                    </ul>

                </div>
            </div>
        </nav> --}}

        <main class="py-4"> 
            @yield('content')
        </main>
    </div>

    
    <!-- Scripts -->

</body>
</html>
