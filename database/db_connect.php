<?php
 $con=mysqli_connect("localhost","id20111042_root","A2Z_Blogsite","id20111042_scholarship_admin_db");
//($GLOBALS["___mysqli_ston"] = mysqli_connect("localhost","admin","","scholarship_admin_db"));  //host,user,password,database
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 ?>