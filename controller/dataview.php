<?php
  // Call PHP SQL connection file
  require_once('connection.php');
  //Start of SQL query to fetch data
  $sql = "SELECT * FROM registro_land";
  $sql_query = mysqli_query($cnnsp, $sql);
  if(mysqli_num_rows($sql_query) != 0) {
    // Print HTML tags for each row found in the table
    foreach($sql_query as $key => $row) {
      $name = $row['nombre']. ' ' . $row['ap_paterno']. ' ' . $row['ap_materno'];
      echo "<tr><td>{$name}</td>";
      echo "<td>{$row['correo']}</td>";
      echo "<td>{$row['telefono']}</td>";
      if($row['aprobacion'] == 0) {
        echo "<td>Pendiente</td>";
      } elseif($row['aprobacion'] == 1) {
        echo "<td>Aprobado</td>";
      } else {
        echo "<td>Cancelado</td>";
      }
      $usid = $row['id'];
      // Creation of two button elements to update 'aprobacion' column of the database table
      echo "<td><div class='row'><form method='POST' action='".$_SERVER['PHP_SELF']."'><button class='btn btn-primary btn-round btn-sm' type='submit' name='valid' value='{$usid}'><i class='fa fa-check'></i></button><button class='btn btn-primary btn-round btn-sm ml-3' type='submit' name='cancel' value='{$usid}'><i class='fa fa-times'></i></button></form></div></td>";
    }
  }
  // SQL Query call to update 'aprobacion' column to 'aprobado' state
  if(isset($_POST['valid'])) {
    if($_SERVER["REQUEST_METHOD"] == "POST") {
      $rid = $_POST['valid'];
      $sqlv = "UPDATE registro_land SET aprobacion=1 WHERE id='{$rid}'";
      mysqli_query($cnnsp, $sqlv);
    }
  }
  // SQL Query call to update 'aprobacion' column to 'cancelado' state
  if(isset($_POST['cancel'])) {
    if($_SERVER["REQUEST_METHOD"] == "POST") {
      $rid = $_POST['cancel'];
      $sqlv = "UPDATE registro_land SET aprobacion=2 WHERE id='{$rid}'";
      mysqli_query($cnnsp, $sqlv);
    }
  }
?>