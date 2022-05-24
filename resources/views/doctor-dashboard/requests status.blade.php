<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Psyclini DOCTOR/ Requests' Status</title>
    
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
            <a href="#" class='sidebar-link'>
              <span>Publish</span>
            </a>
            <ul class="submenu ">
              <li class="submenu-item {{ Request::is('create post') ? 'active' : '' }} ">
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
        
        <div class="card shadow mb-4 mt-5 ml-3">
          <div class="card-body">
            <h4 class="mb-3 mt-2">Latests Requests</h4>
            
            <div class="table-responsive ">
              <table class="table" id="table1">
                <thead> 
                  <tr class="justify-content-between">
                    <th class="my-w">Request Submitting Date</th>
                    <th>Request Type</th>
                    <th>Content</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>13/4/2022</td>
                    <td>Addition</td>
                    <td>
                      <button type="button" class="btn btn-outline-primary block" data-bs-toggle="modal" data-bs-target="#add-modal"> View </button>
                    </td>
                    <td class="req-pending">Pending</td>
                  </tr>
                  <tr>
                    <td>13/4/2022</td>
                    <td>Cancelation</td>
                    <td>
                      <button type="button" class="btn btn-outline-primary block" data-bs-toggle="modal" data-bs-target="#cancel-modal"> View </button>
                    </td>
                    <td class="req-accepted">Accepted</td>
                  </tr>
                  <tr>
                    <td>13/4/2022</td>
                    <td>Changing</td>
                    <td>
                      <button type="button" class="btn btn-outline-primary block" data-bs-toggle="modal" data-bs-target="#change-modal"> View </button>
                    </td>
                    <td class="req-rejected">Rejected</td>
                  </tr>
                  <tr>
                    <td>13/4/2022</td>
                    <td>Addition</td>
                    <td>
                      <button type="button" class="btn btn-outline-primary block" data-bs-toggle="modal" data-bs-target="#add-modal"> View </button>
                    </td>
                    <td class="req-pending">Pending</td>
                  </tr>
                  <tr>
                    <td>13/4/2022</td>
                    <td>Addition</td>
                    <td>
                      <button type="button" class="btn btn-outline-primary block" data-bs-toggle="modal" data-bs-target="#add-modal"> View </button>
                    </td>
                    <td class="req-pending">Pending</td>
                  </tr>
                  <tr>
                    <td>13/4/2022</td>
                    <td>Addition</td>
                    <td>
                      <button type="button" class="btn btn-outline-primary block" data-bs-toggle="modal" data-bs-target="#add-modal"> View </button>
                    </td>
                    <td class="req-pending">Pending</td>
                  </tr>
                  <tr>
                    <td>13/4/2022</td>
                    <td>Addition</td>
                    <td>
                      <button type="button" class="btn btn-outline-primary block" data-bs-toggle="modal" data-bs-target="#add-modal"> View </button>
                    </td>
                    <td class="req-pending">Pending</td>
                  </tr>
                  <tr>
                    <td>13/4/2022</td>
                    <td>Addition</td>
                    <td>
                      <button type="button" class="btn btn-outline-primary block" data-bs-toggle="modal" data-bs-target="#add-modal"> View </button>
                    </td>
                    <td class="req-pending">Pending</td>
                  </tr>
                  <tr>
                    <td>13/4/2022</td>
                    <td>Addition</td>
                    <td>
                      <button type="button" class="btn btn-outline-primary block" data-bs-toggle="modal" data-bs-target="#add-modal"> View </button>
                    </td>
                    <td class="req-pending">Pending</td>
                  </tr>
                  <tr>
                    <td>13/4/2022</td>
                    <td>Addition</td>
                    <td>
                      <button type="button" class="btn btn-outline-primary block" data-bs-toggle="modal" data-bs-target="#add-modal"> View </button>
                    </td>
                    <td class="req-pending">Pending</td>
                  </tr>
                  <tr>
                    <td>13/4/2022</td>
                    <td>Addition</td>
                    <td>
                      <button type="button" class="btn btn-outline-primary block" data-bs-toggle="modal" data-bs-target="#add-modal"> View </button>
                    </td>
                    <td class="req-pending">Pending</td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div class="modal fade" id="add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content">
                  <div class="modal-header ">
                      <h5 class="modal-title " id="exampleModalCenterTitle"> Request Content </h5>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <div class="col-lg-4 pl-3">
                        <label > Request Type: </label>
                      </div>
                      <div class="col-lg-8 pl-3">
                        <label > Addition </label>
                      </div>
                      <div class="col-lg-4 pl-3">
                        <label > Date : </label>
                      </div>
                      <div class="col-lg-8 pl-3">
                        <label > 12/3/2022 </label>
                      </div>
                      <div class="col-lg-4 pl-3">
                        <label > Time : </label>
                      </div>
                      <div class="col-lg-8 pl-3">
                        <label > 02:30 PM </label>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary ml-1" data-bs-dismiss="modal">
                      <span class="d-none d-sm-block">OK</span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal fade" id="cancel-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content">
                  <div class="modal-header ">
                      <h5 class="modal-title " id="exampleModalCenterTitle"> Request Content </h5>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <div class="col-lg-4 pl-3">
                        <label > Request Type: </label>
                      </div>
                      <div class="col-lg-8 pl-3">
                        <label > Cancelation </label>
                      </div>
                      <div class="col-lg-4 pl-3">
                        <label > Date : </label>
                      </div>
                      <div class="col-lg-8 pl-3">
                        <label > 12/3/2022 </label>
                      </div>
                      <div class="col-lg-4 pl-3">
                        <label > Time : </label>
                      </div>
                      <div class="col-lg-8 pl-3">
                        <label > 02:30 PM </label>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary ml-1" data-bs-dismiss="modal">
                      <span class="d-none d-sm-block">OK</span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal fade" id="change-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content">
                  <div class="modal-header ">
                      <h5 class="modal-title " id="exampleModalCenterTitle"> Request Content </h5>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <div class="col-lg-4 pl-3">
                        <label > Request Type: </label>
                      </div>
                      <div class="col-lg-8 pl-3">
                        <label > Changing </label>
                      </div>
                      <div class="col-lg-4 pl-3">
                        <label >From Date : </label>
                      </div>
                      <div class="col-lg-8 pl-3">
                        <label > 12/3/2022 </label>
                      </div>
                      <div class="col-lg-4 pl-3">
                        <label > Time : </label>
                      </div>
                      <div class="col-lg-8 pl-3">
                        <label > 02:30 PM </label>
                      </div>
                      <div class="col-lg-4 pl-3">
                        <label >To Date : </label>
                      </div>
                      <div class="col-lg-8 pl-3">
                        <label > 15/3/2022 </label>
                      </div>
                      <div class="col-lg-4 pl-3">
                        <label > Time : </label>
                      </div>
                      <div class="col-lg-8 pl-3">
                        <label > 02:30 PM </label>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary ml-1" data-bs-dismiss="modal">
                      <span class="d-none d-sm-block">OK</span>
                    </button>
                  </div>
                </div>
              </div>
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
    let dataTable = new simpleDatatables.DataTable(table1);
  </script>
</body>

</html>

@endsection