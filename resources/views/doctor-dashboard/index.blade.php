{{-- @extends('layouts.doctorApp')
@section('content') --}}
{{-- @if (Auth::guard('doctor')->check()){ --}}

  <!DOCTYPE html>
  <html lang="en">
  
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Psyclini DOCTOR/ Index</title>
      
      <link rel="stylesheet" href="../css/admin_bootstrap.css">
      <link rel="stylesheet" href="../css/icofont.css">
      <link rel="stylesheet" href="../css/admin main style.css">
      <link rel="stylesheet" href="../css/datatable_style.css">
      <link rel="icon" href="../img/icon.png">
  </head>
  
  <body>
    <div id="app">
      <div id="sidebar" class="active">
        <div class="sidebar-wrapper">
          <div class="sidebar-header">
            <div class="d-flex justify-content-between">
              <div class="logo">
                <a href="{{ route('doctor.index') }}"><img src="../img/logo.png" alt="Logo" srcset=""></a>
              </div>
              <div class="toggler">
                <a href="#" class="sidebar-hide d-xl-none d-block"></a>
              </div>
            </div>
          </div>
          <div class="sidebar-menu">
            <ul class="menu">            
              <li class="sidebar-item {{ Request::is('doctor-index') ? 'active' : '' }} ">
                <a href="{{ route('doctor.index') }}" class='sidebar-link'>
                  <span>Dashboard</span>
                </a>
              </li>
                
              <li class="sidebar-item has-sub">
                <a href="#" class='sidebar-link'>
                  <span>Appointments</span>
                </a>
                <ul class="submenu ">
                  <li class="submenu-item {{ Request::is('requests modifications') ? 'active' : '' }} ">
                    <a href="{{ route('doctor.modifications') }}">Request Modifications</a>
                  </li>
                  <li class="submenu-item {{ Request::is('requests status') ? 'active' : '' }} ">
                    <a href="{{ route('doctor.status') }}">Requests' Status</a>
                  </li>
                </ul>
              </li>
              
              <li class="sidebar-item has-sub">
                <a href="#" class='sidebar-link active'>
                  <span>Publish</span>
                </a>
                <ul class="submenu ">
                  <li class="submenu-item ">
                    <a href="{{ route('doctor.post') }}">Post</a>
                  </li>
                  <li class="submenu-item {{ Request::is('publish article') ? 'active' : '' }} ">
                    <a href="{{ route('doctor.article') }}">Article</a>
                  </li>
                </ul>
              </li>
  
              <li class="sidebar-item {{ Request::is('/') ? 'active' : '' }} ">
                {{-- <a class="nav-link" href="{{ url('/') }}">Home</a> --}}
                <a href="{{ url('/') }}" class="sidebar-link"> 
                  <span>Go to the Main Website <i class="icofont-simple-right"></i></span>
                </a>
              </li>
              <li class="sidebar-item log-out ">
                <a href="{{ route('doctor.logout') }}" class="text-muted">Log Out</a>
              </li>
              
            </ul>           
          </div>
        </div>
      </div>
      
      <div id="main">
  
        <header class="mb-4">
          <a href="#" class="burger-btn d-block d-xl-none"><i class="icofont-navigation-menu fs-3"></i></a>
        </header>
        
        <div class="container">
  
          <div class="mt-3 page-heading">
            <h3 class="dark-blue-title">Welcome Back, Doctor  {{ Auth::guard('doctor')->user()->name}}!</h3>
          </div>
  
          <!-- DataTales Example -->
          <div class="card shadow mb-4 ml-3">
            <div class="card-body">
              <h4 class="mb-3 mt-2 pb-2">Your Appointments This Week</h4>
              <div class="table-responsive ">
                <table class="table" id="table1">
                  <thead> 
                    <tr class="justify-content-between">
                      <th>Patient's Name</th>
                      <th>Date</th>
                      <th>From</th>
                      <th>To</th>
                      <th>Room No.</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Sahar Khaled</td>
                      <td>13/4/2022</td>
                      <td>10:00 </td>
                      <td>10:30 </td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>Sahar Khaled</td>
                      <td>13/4/2022</td>
                      <td>10:00 </td>
                      <td>10:30 </td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>Sahar Khaled</td>
                      <td>13/4/2022</td>
                      <td>10:00 </td>
                      <td>10:30 </td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>Sahar Khaled</td>
                      <td>13/4/2022</td>
                      <td>10:00 </td>
                      <td>10:30 </td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>Sahar Khaled</td>
                      <td>13/4/2022</td>
                      <td>10:00 </td>
                      <td>10:30 </td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>Sahar Khaled</td>
                      <td>13/4/2022</td>
                      <td>10:00 </td>
                      <td>10:30 </td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>Sahar Khaled</td>
                      <td>13/4/2022</td>
                      <td>10:00 </td>
                      <td>10:30 </td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>Sahar Khaled</td>
                      <td>13/4/2022</td>
                      <td>10:00 </td>
                      <td>10:30 </td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>Sahar Khaled</td>
                      <td>13/4/2022</td>
                      <td>10:00 </td>
                      <td>10:30 </td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>Sahar Khaled</td>
                      <td>13/4/2022</td>
                      <td>10:00 </td>
                      <td>10:30 </td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>Sahar Khaled</td>
                      <td>13/4/2022</td>
                      <td>10:00 </td>
                      <td>10:30 </td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>Sahar Khaled</td>
                      <td>13/4/2022</td>
                      <td>10:00 </td>
                      <td>10:30 </td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>Sahar Khaled</td>
                      <td>13/4/2022</td>
                      <td>10:00 </td>
                      <td>10:30 </td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>Sahar Khaled</td>
                      <td>13/4/2022</td>
                      <td>10:00 </td>
                      <td>10:30 </td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>Sahar Khaled</td>
                      <td>13/4/2022</td>
                      <td>10:00 </td>
                      <td>10:30 </td>
                      <td>2</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
  
      </div>
    </div>
  
  
    
    <script src="../js/bootstrap.bundle.js"></script> 
    <script src="../js/admin main script.js"></script>
    <script src="../js/simple-datatables.js"></script>
    <script>
      // Simple Datatable
      let table1 = document.querySelector('#table1');
      let dataTable = new simpleDatatables.DataTable(table1, {
        columns: [
          { select: 2, sortable: false }
        ]
      });
    </script>
  </body>
  
  </html>
  
{{-- 
}
   
 @endif --}}

{{-- @endsection --}}