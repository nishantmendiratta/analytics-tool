<?php

// Create connection
$con=mysqli_connect(HOST,USERNAME,PASSWORD,DATABASE);

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>