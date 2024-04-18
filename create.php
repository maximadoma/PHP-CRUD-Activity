<?php
require "conn.php";

if (!empty($_POST["uname"]) && !empty($_POST["pword"]) && !empty($_POST["email"])) {

   $uname = $_POST['uname'];
   $pword = $_POST['pword'];
   $email = $_POST['email'];

   $sql = "INSERT INTO table_users (user_username, user_password, user_email) VALUES ('$uname ', ' $pword ', '$email')";

   if (mysqli_query($connect, $sql)){
      echo "Success";
   } else {
      "Failed";
   }

   
} else {
   echo "Field Required";
}


?>