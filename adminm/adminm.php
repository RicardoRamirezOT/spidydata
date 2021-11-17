<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="../images/logo.svg">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Módulo admin
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../css/bootstrap.min.css" rel="stylesheet" />
  <link href="../css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <link href="../css/jquery.dataTables.min.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="<?php $_SERVER['PHP_SELF']; ?>">
          <div class="logo-size-small">
            <img src="../images/logo-spidy.png">
          </div>
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="<?php $_SERVER['PHP_SELF']; ?>">
              <i class="fa fa-list"></i>
              <p>Lista  </p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" style="height: 100vh;">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:;">Registros</a>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Lista de registro</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table" id="tabletest">
                    <thead class="text-primary">
                      <th>Nombre</th>
                      <th>Correo electrónico</th>
                      <th>Teléfono</th>
                      <th>Aprobado</th>
                      <th>Editar</th>
                    </thead>
                    <tbody><?php include('../controller/dataview.php'); ?></tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../js/jquery.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery.dataTables.min.js"></script>
  <script>
    $("#tabletest").DataTable();
  </script>
</body>
</html>