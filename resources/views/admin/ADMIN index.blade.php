@extends('layouts.admin')
@section('content')
    

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Psyclini ADMIN/index</title>
  
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

      <div class="container">
        <div class="mt-3 page-heading">
          <h3 class="dark-blue-title">Welcome Back!</h3>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4 ml-3">
          <div class="card-body">
            <h4 class="mb-3 mt-3">Today <p id="date" class="disp-inline"></p> Appointments</h4>
            <div class="table-responsive ">
              <table class="table" id="table1">
                <thead> 
                  <tr class="justify-content-between">
                    <th>Patient's Name</th>
                    <th>From</th>
                    <th>To</th>
                    <th>Doctor's Name</th>
                    <th>Room No.</th>
                    <th>Fees (EGP)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Sahar Khaled</td>
                    <td>10:00 </td>
                    <td>10:30 </td>
                    <td>Marina Kamil</td>
                    <td>2</td>
                    <td>150</td>
                  </tr>
                  <tr>
                    <td>Sahar Khaled</td>
                    <td>10:00 </td>
                    <td>10:30 </td>
                    <td>Marina Kamil</td>
                    <td>2</td>
                    <td>150</td>
                  </tr>
                  <tr>
                    <td>Sahar Khaled</td>
                    <td>10:00 </td>
                    <td>10:30 </td>
                    <td>Marina Kamil</td>
                    <td>2</td>
                    <td>150</td>
                  </tr>
                  <tr>
                    <td>Sahar Khaled</td>
                    <td>10:00 </td>
                    <td>10:30 </td>
                    <td>Marina Kamil</td>
                    <td>2</td>
                    <td>150</td>
                  </tr>
                  <tr>
                    <td>Sahar Khaled</td>
                    <td>10:00 </td>
                    <td>10:30 </td>
                    <td>Marina Kamil</td>
                    <td>2</td>
                    <td>150</td>
                  </tr>
                  <tr>
                    <td>Sahar Khaled</td>
                    <td>10:00 </td>
                    <td>10:30 </td>
                    <td>Marina Kamil</td>
                    <td>2</td>
                    <td>150</td>
                  </tr>
                  <tr>
                    <td>Sahar Khaled</td>
                    <td>10:00 </td>
                    <td>10:30 </td>
                    <td>Marina Kamil</td>
                    <td>2</td>
                    <td>150</td>
                  </tr>
                  <tr>
                    <td>Sahar Khaled</td>
                    <td>10:00 </td>
                    <td>10:30 </td>
                    <td>Marina Kamil</td>
                    <td>2</td>
                    <td>150</td>
                  </tr>
                  <tr>
                    <td>Sahar Khaled</td>
                    <td>10:00 </td>
                    <td>10:30 </td>
                    <td>Marina Kamil</td>
                    <td>2</td>
                    <td>150</td>
                  </tr>
                  <tr>
                    <td>Sahar Khaled</td>
                    <td>10:00 </td>
                    <td>10:30 </td>
                    <td>Marina Kamil</td>
                    <td>2</td>
                    <td>150</td>
                  </tr>
                  <tr>
                    <td>Sahar Khaled</td>
                    <td>10:00 </td>
                    <td>10:30 </td>
                    <td>Marina Kamil</td>
                    <td>2</td>
                    <td>150</td>
                  </tr>
                  <tr>
                    <td>Sahar Khaled</td>
                    <td>10:00 </td>
                    <td>10:30 </td>
                    <td>Marina Kamil</td>
                    <td>2</td>
                    <td>150</td>
                  </tr>
                  <tr>
                    <td>Sahar Khaled</td>
                    <td>10:00 </td>
                    <td>10:30 </td>
                    <td>Marina Kamil</td>
                    <td>2</td>
                    <td>150</td>
                  </tr>
                  <tr>
                    <td>Sahar Khaled</td>
                    <td>10:00 </td>
                    <td>10:30 </td>
                    <td>Marina Kamil</td>
                    <td>2</td>
                    <td>150</td>
                  </tr>
                  <tr>
                    <td>Sahar Khaled</td>
                    <td>10:00 </td>
                    <td>10:30 </td>
                    <td>Marina Kamil</td>
                    <td>2</td>
                    <td>150</td>
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
  <script src="../js/date.js"></script>
  <script src="../js/simple-datatables.js"></script>
  <script>
    // Simple Datatable
    let table1 = document.querySelector('#table1');
    let dataTable = new simpleDatatables.DataTable(table1);
</script>
</body>

</html>

@endsection