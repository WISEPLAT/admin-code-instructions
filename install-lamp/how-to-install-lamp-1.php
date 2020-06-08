<?php
  $conn = new mysqli("localhost", "ndbadmin", "0urPassW0rdHeRe!1", "new_db");
  
  if ($conn->connect_error) {
    die("ERROR: Unable to connect: " . $conn->connect_error);
  } 

  echo 'Connected to the database.';

  $conn->close();
?>
