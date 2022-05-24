@extends('layouts.admin')
@section('content')
    
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Psyclini ADMIN/ Approve Posts</title>
  
  <link rel="stylesheet" href="../css/admin_bootstrap.css">
  <link rel="stylesheet" href="../css/icofont.css">
  <link rel="stylesheet" href="../css/admin main style.css">
  <link rel="stylesheet" href="../css/datatable_style.css">
  <link rel="icon" href="../img/icon.png">
</head>

<body>
  <div id="app">
    <div id="sidebar" class="active ">
      
    </div>
    
    <div id="main">

      <header class="mb-4">
        <button href="#" class="burger-btn d-block d-xl-none"><i class="icofont-navigation-menu fs-3"></i></a>
      </header>

      <div class=" admin-approve-posts">
        <div class="card shadow mb-4 mt-5 ">
          <div class="card-body">
            <h4 class="mb-3 mt-2">Latests Posting Requests</h4>
            <div class="table-responsive ">
              <table class="table" id="table1">
                <thead> 
                  <tr class="justify-content-between">
                    <th>Creator Name</th>
                    <th>Creator Type</th>
                    <th >Posting Date</th>
                    <th>Content</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                    <tr>
                    @if ($post->doctor_id != Null )
                    <td> {{ $post->doctor->name }}</td>
                       <td>Doctor</td>
                       <td>{{ $post->created_at->diffForHumans() }}</td>
                       @elseif ($post->patient_id != Null )
                       <td>{{ $post->patient->name }}</td>
                       <td>Patient</td>
                       <td>{{ $post->created_at->diffForHumans() }}</td>
                    @endif
                    <td>
                      <button type="button" class="btn btn-outline-primary block" data-bs-toggle="modal" data-bs-target="#post-modal"> View </button>
                    </td>
                    <td>
                      <form action="{{ route('admin.destroy' , $post->id) }}" method="POST" enctype="multipart/form-data">
                        @method('DELETE')
                        @csrf
                        <a class="btn btn-outline-success mb-2 mr-2">Approve</a>
                      <button type="submit" class="btn btn-outline-danger mb-2"> Disapprove</button>
                      </form>
                    </td>
                  </tr>
                  @endforeach

                </tbody>
              </table>
            </div>


            <div class="modal fade" id="post-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content">
                  <div class="modal-header ">
                      <h5 class="modal-title " id="exampleModalCenterTitle"> Post Content </h5>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <div class="col-lg-3 pl-2">
                        <label > Post Body : </label>
                      </div>
                      <div class="col-lg-9 pb-1">
                        <label >
                          Some consultants are employed indirectly by the client via a consultancy staffing company, a company that provides consultants on an agency basis.
                          Non illo quas blanditiis repellendus laboriosam minima animi. Consectetur accusantium pariatur repudiandae!
                        </label>
                      </div>
                      <div class="col-lg-3 pl-2">
                        <label >Department : </label>
                      </div>
                      <div class="col-lg-9 pb-1">
                        <label > Child and Adolescence Disorders </label>
                      </div>
                      <div class="col-lg-3 pl-2">
                        <label > Image (if exists): </label>
                      </div>
                      <div class="col-lg-4 pb-1">
                        <img src="../img/banner.png" ></img >
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