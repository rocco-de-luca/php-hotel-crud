<?php
include __DIR__ . '/../database.php';
// get hompage rooms list
$sql = "SELECT * FROM `stanze`";
$result = $conn->query($sql);
//var_dump($result);
if($result && $result->num_rows > 0) {
    $rooms = [];
while($row = $result->fetch_assoc()){
    //var_dump($row);
    //echo "ID: $row{['id']} - Floor: {$row['floor']} <br>";

    //I people array rooms with single rooms
    $rooms[] = $row;
}
}else if($result){
    echo 'no results';
}
else{
    echo 'query error';
}
// close db connection
$conn->close();