<?php
require "conn.php";

if (!empty($_POST["id"]) && !empty($_POST["uname"]) && !empty($_POST["pword"]) && !empty($_POST["email"])) {

    $id = $_POST['id'];
    $uname = $_POST['uname'];
    $pword = $_POST['pword'];
    $email = $_POST['email'];

    $sql = "UPDATE table_users SET user_username = '$uname', user_password = '$pword', user_email = '$email' WHERE user_id = '$id' ";

    if (mysqli_query($connect, $sql)) {
        echo "Success";
    } else {
        "Failed";
    }


} else {
    echo "Field Required";
}       


?>