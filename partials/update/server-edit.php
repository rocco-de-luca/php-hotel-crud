<?php
// connect db
include_once __DIR__ . '/../database.php';

// get room to edit
if(!empty()$_GET['id'])) {
    $id_room = $_GET['id'];

    // query
    $sql = "SELECT * FROM `stanze` WHERE `id` = $id_room";
    $result = $conn->query($sql);

    if($result && $result->num_rows > 0) {
        $room = $result->fetch_assoch();
    }else{
        die('ID not exists');
    }
}else{
    die('not get room to edit');
}

// close connection
$conn->close();