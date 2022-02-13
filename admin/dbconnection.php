<?php
$con=mysqli_connect("localhost", "//changeusername", "//changepassword", "//changedatabaseusename");

//username, password, databaseusername
if(mysqli_connect_errno()){
echo "Connection Fail, Please put correct database credentials".mysqli_connect_error();
}

  ?>
