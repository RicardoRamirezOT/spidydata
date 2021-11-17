<?php
  // PHP function to prevent basic SQL injections to database
  function validateInput($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>