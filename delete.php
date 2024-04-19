<?php
require "conn.php";

if (!empty($_POST["id"])) {

    $id = mysqli_real_escape_string($connect, $_POST['id']);

    $sql = "DELETE FROM table_users WHERE user_id = '$id'";

    if (mysqli_query($connect, $sql)) {
        echo "Success";
    } else {
        "Failed";
    }

} else {
    echo "Field Required";

}
?>