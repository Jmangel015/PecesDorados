<?php   ?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Peces Dorados| Atletas</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="../../index3.html" class="nav-link">Inicio</a>
        </li>

      </ul>

     

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">

          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <!-- Message Start -->

              <!-- Message End -->
            </a>



            <!-- Notifications Dropdown Menu -->


      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="../../index3.html" class="brand-link">
        <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Peces Dorados</span>
      </a>

      <!-- Sidebar -->

      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->








      <section class="content">
        <div class="container-fluid">
          <div class="col-12">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <br>
              <div class="col col-5">

                <div class="">
                  <div>
                    <div class="card-header ">
                      <h3 class="card-title">Cursos</h3>
                    </div>

                    <div class="form-group">
                      <form method="POST" action="atletaInscripcion.php">
                        <select class="form-control form-control-sm" required="require">
                          <option selected hidden default></option>
                          <option value="">Mi Curso aqui</option>
                          <option value="">Mi Curso aqui</option>
                          <option value="">Mi Curso aqui</option>
                          <option value="">Mi Curso aqui</option>
                          <option value="">Mi Curso aqui</option>
                        </select>

                        <br>
                        <input class="btn btn-warning" type="submit" value="Inscribir">
                      </form>
                    </div>


                  </div>





                </div>


                <!-- /.card-body -->
              </div>



              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Mis cursos</h3>
                </div>
                <div class="card-body p-0">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Curso</th>
                      </tr>
                    </thead>
                    <tbody>


                      <tr>
                        <?php
                        //Ciclo Repetitivo para generar mas tablas segun los registros asignados
                        for ($i = 1; $i < 5; $i++) {

                          ?>

                          <td><?php echo $i; ?></td>
                          <td><?php echo $i; ?></td>
                      </tr>

                    <?php
                    }
                    ?>


                    </tbody>
                  </table>
                </div>

              </div>








              <!-- Main content -->

              <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->


            <!-- Control Sidebar -->

            <!-- /.control-sidebar -->
          </div>
          <!-- ./wrapper -->

          <!-- jQuery -->
          <script src="../../plugins/jquery/jquery.min.js"></script>
          <!-- Bootstrap 4 -->
          <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
          <!-- DataTables -->
          <script src="../../plugins/datatables/jquery.dataTables.js"></script>
          <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
          <!-- AdminLTE App -->
          <script src="../../dist/js/adminlte.min.js"></script>
          <!-- AdminLTE for demo purposes -->
          <script src="../../dist/js/demo.js"></script>
          <!-- page script -->
          <script>
            $(function() {
              $("#example1").DataTable();
              $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "language": {
                  "paginate": {
                    "next": "Siguiente",
                    "previous": "Anterior"
                  },
                  "info": "Mostrando _PAGE_ of _PAGES_ Resultados"
                },
              });




            });
          </script>


</body>

</html>