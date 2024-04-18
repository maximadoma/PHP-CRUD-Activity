<?php
$data = array();
require "conn.php";

if (!empty($_POST["id"])) {

    $id = mysqli_real_escape_string($connect, $_POST['id']);

    $sql = "SELECT * FROM table_users WHERE user_id = '$id'";
    $que = mysqli_query($connect, $sql);

    if (mysqli_num_rows($que) > 0) {
        $i = 0;
        while ($row = mysqli_fetch_assoc($que)) {
            $data[$i] = $row;
            $i++;
        }
        echo json_encode($data, JSON_PRETTY_PRINT);
    } else {
       
        echo json_encode(array("message" => "No data found for this ID"), JSON_PRETTY_PRINT);
    }
} else {

    echo json_encode(array("message" => "ID field is required"), JSON_PRETTY_PRINT);
}
?>