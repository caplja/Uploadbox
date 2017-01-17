<?php
$con = mysqli_connect("localhost","root","","register");
// Provjera konekcije
if (mysqli_connect_errno())
  {
  echo "Niste se uspjeli spojiti na MySQL: " . mysqli_connect_error();
  }
?>