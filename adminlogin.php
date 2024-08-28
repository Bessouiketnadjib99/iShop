<?php
//include "connection.php";
include "config/dbconnect.php";

if (isset($_GET["adminlog"])) {

  $ausername = $_GET["adminusername"];
  $apassword = $_GET["adminpassword"];
  $sql = "select * From users where first_name='" . $ausername . "'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) == 0) {
      die("user not Found");
  }
  $first_name = mysqli_fetch_object($result);
  if ($apassword != $first_name->password) {
      die("error in password");
  }
  
  echo "admin connected successful";
   header("Location:/ONLINE_SHOP_PROJECT/index.php");
}

