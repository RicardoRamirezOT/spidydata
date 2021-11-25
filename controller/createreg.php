<?php
  // PHP file call to SQL connection and PHP function that strips inputs
  require_once("connection.php");
  require_once("function.php");
  $name = $app = $apm = $tel = $email = "";
  if(isset($_POST["spsend"])){
    // Set all input data into variables
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      $name = validateInput($_POST["spname"]);
      $app = validateInput($_POST["spap"]);
      $apm = validateInput($_POST["spam"]);
      $tel = validateInput($_POST["spnum"]);
      $email = validateInput($_POST["spmail"]);
    }
    // Begin SQL Query to insert data in the table
    $sql = "INSERT INTO registro_land(nombre, ap_paterno, ap_materno, correo, telefono, aprobacion) VALUES ('$name', '$app', '$apm', '$email', '$tel', 0)";
    if(mysqli_query($cnnsp, $sql)){
      echo "<button id='activethanks' class='v-hid'></button>";
      $name = $app = $apm = $tel = $email = "";
      mysqli_close($cnnsp);
    } else{
      echo "Error:" . $sql . "<br>" . mysqli_error($cnnsp);
      $name = $app = $apm = $tel = $email = "";
      mysqli_close($cnnsp);
    } 
  }
?>