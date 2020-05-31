<?php
//connect db
include_once __DIR__ . '/../database.php';
// get room id
if(empty($_POST['id'])){
    die('operazione non eseguibile');
}
$id_room = $_POST['id'];

// query
$sql = "DELETE FROM `stanze` WHERE `id` = $id_room ";
$result = $conn->query($sql);

var_dump($conn->affected_rows);

if($result && $conn->affected_rows > 0){
    header("location: $base_path?del=1");
}elseif ($result){
    echo 'nessuna stanza trovata';
} else{
    echo 'errore';
}

