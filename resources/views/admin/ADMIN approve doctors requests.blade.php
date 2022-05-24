@extends('layouts.admin')
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Psyclini ADMIN/ Approve Doctors' Requests</title>
  
  <link rel="stylesheet" href="../css/admin_bootstrap.css">
  <link rel="stylesheet" href="../css/icofont.css">
  <link rel="stylesheet" href="../css/admin main style.css">
  <link rel="stylesheet" href="../css/datatable_style.css">
  <link rel="icon" href="../img/icon.png">
</head>

<body>
    
    <div id="main">

      <header class="mb-4">
        <a href="#" class="burger-btn d-block d-xl-none"><i class="icofont-navigation-menu fs-3"></i></a>
      </header>

      <div class="">
        <div class="card shadow mb-4 mt-5 ">
          <div class="card-body">
            <h4 class="mb-3 mt-2">Latests Requests</h4>
            <div class="table-responsive ">
              <table class="table" id="table1">
                <thead> 
                  <tr class="justify-content-between">
                    <th>Doctor Name</th>
                    <th>Doctor Email</th>
                    <th >Request Date</th>
                    <th>Request Type</th>
                    <th>Content</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Mohammed Mostafa</td>
                    <td>naderali75@gmail.com</td>
                    <td>13/4/2022</td>
                    <td>Addition</td>
                    <td>
                      <button type="button" class="btn btn-outline-primary block" data-bs-toggle="modal" data-bs-target="#add-modal"> View </button>
                    </td>
                    <td>
                      <button class="btn btn-outline-success mb-2 mr-2">Approve</button>
                      <button class="btn btn-outline-danger mb-2">Disapprove</button>
                    </td>
                  </tr>
                  <tr>
                    <td>Nader Ali</td>
                    <td>naderali75@gmail.com</td>
                    <td>13/4/2022</td>
                    <td>Cancelation</td>
                    <td>
                      <button type="button" class="btn btn-outline-primary block" data-bs-toggle="modal" data-bs-target="#cancel-modal"> View </button>
                    </td>
                    <td>
                      <button class="btn btn-outline-success mb-2 mr-2">Approve</button>
                      <button class="btn btn-outline-danger mb-2">Disapprove</button>
                    </td>
                  </tr>
                  <tr>
                    <td>Nader Ali</td>
                    <td>naderali75@gmail.com</td>
                    <td>13/4/2022</td>
                    <td>Changing</td>
                    <td>
                      <button type="button" class="btn btn-outline-primary block" data-bs-toggle="modal" data-bs-target="#change-modal"> View </button>
                    </td>
                    <td>
                      <button class="btn btn-outline-success mb-2 mr-2">Approve</button>
                      <button class="btn btn-outline-danger mb-2">Disapprove</button>
                    </td>
                  </tr>
                  <tr>
                    <td>Nader Ali</td>
                    <td>naderali75@gmail.com</td>
                    <td>13/4/2022</td>
                    <td>Addition</td>
                    <td>
                      <button type="button" class="btn btn-outline-primary block" data-bs-toggle="modal" data-bs-target="#add-modal"> View </button>
                    </td>
                    <td>
                      <button class="btn btn-outline-success mb-2 mr-2">Approve</button>
                      <button class="btn btn-outline-danger mb-2">Disapprove</button>
                    </td>
                  </tr>
                  <tr>
                    <td>Nader Ali</td>
                    <td>naderali75@gmail.com</td>
                    <td>13/4/2022</td>
                    <td>Addition</td>
                    <td>
                      <button type="button" class="btn btn-outline-primary block" data-bs-toggle="modal" data-bs-target="#add-modal"> View </button>
                    </td>
                    <td>
                      <button class="btn btn-outline-success mb-2 mr-2">Approve</button>
                      <button class="btn btn-outline-danger mb-2">Disapprove</button>
                    </td>
                  </tr>
                  <tr>
                    <td>Nader Ali</td>
                    <td>naderali75@gmail.com</td>
                    <td>13/4/2022</td>
                    <td>Addition</td>
                    <td>
                      <button type="button" class="btn btn-outline-primary block" data-bs-toggle="modal" data-bs-target="#add-modal"> View </button>
                    </td>
                    <td>
                      <button class="btn btn-outline-success mb-2 mr-2">Approve</button>
                      <button class="btn btn-outline-danger mb-2">Disapprove</button>
                    </td>
                  </tr>
                  <tr>
                    <td>Nader Ali</td>
                    <td>naderali75@gmail.com</td>
                    <td>13/4/2022</td>
                    <td>Addition</td>
                    <td>
                      <button type="button" class="btn btn-outline-primary block" data-bs-toggle="modal" data-bs-target="#add-modal"> View </button>
                    </td>
                    <td>
                      <button class="btn btn-outline-success mb-2 mr-2">Approve</button>
                      <button class="btn btn-outline-danger mb-2">Disapprove</button>
                    </td>
                  </tr>
                  <tr>
                    <td>Nader Ali</td>
                    <td>naderali75@gmail.com</td>
                    <td>13/4/2022</td>
                    <td>Addition</td>
                    <td>
                      <button type="button" class="btn btn-outline-primary block" data-bs-toggle="modal" data-bs-target="#add-modal"> View </button>
                    </td>
                    <td>
                      <button class="btn btn-outline-success mb-2 mr-2">Approve</button>
                      <button class="btn btn-outline-danger mb-2">Disapprove</button>
                    </td>
                  </tr>
                  <tr>
                    <td>Nader Ali</td>
                    <td>naderali75@gmail.com</td>
                    <td>13/4/2022</td>
                    <td>Addition</td>
                    <td>
                      <button type="button" class="btn btn-outline-primary block" data-bs-toggle="modal" data-bs-target="#add-modal"> View </button>
                    </td>
                    <td>
                      <button class="btn btn-outline-success mb-2 mr-2">Approve</button>
                      <button class="btn btn-outline-danger mb-2">Disapprove</button>
                    </td>
                  </tr>
                  <tr>
                    <td>Nader Ali</td>
                    <td>naderali75@gmail.com</td>
                    <td>13/4/2022</td>
                    <td>Addition</td>
                    <td>
                      <button type="button" class="btn btn-outline-primary block" data-bs-toggle="modal" data-bs-target="#add-modal"> View </button>
                    </td>
                    <td>
                      <button class="btn btn-outline-success mb-2 mr-2">Approve</button>
                      <button class="btn btn-outline-danger mb-2">Disapprove</button>
                    </td>
                  </tr>
                  <tr>
                    <td>Nader Ali</td>
                    <td>naderali75@gmail.com</td>
                    <td>13/4/2022</td>
                    <td>Addition</td>
                    <td>
                      <button type="button" class="btn btn-outline-primary block" data-bs-toggle="modal" data-bs-target="#add-modal"> View </button>
                    </td>
                    <td>
                      <button class="btn btn-outline-success mb-2 mr-2">Approve</button>
                      <button class="btn btn-outline-danger mb-2">Disapprove</button>
                    </td>
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