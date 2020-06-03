<?php
//connect db
include_once __DIR__ . '/../database.php';
// utils
include __DIR__ . '/../function.php';

// get room id
if(empty($_POST['id'])){
    die('operazione non eseguibile');
}
$id_room = $_POST['id'];
$url = "$base_path?del=room";

// query
removeById($conn, `stanze`, $id_room, $url);


