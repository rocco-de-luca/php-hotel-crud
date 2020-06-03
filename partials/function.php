<?php

/**
 * GET ALL RECORDS FROM A DB TABLE
 */

 function getAll($conn, $table){
    $sql = "SELECT * FROM `$table`";
    $result = $conn->query($sql);
    //var_dump($result);
    if($result && $result->num_rows > 0) {
        $records = [];
    while($row = $result->fetch_assoc()){
        //var_dump($row);
        //echo "ID: $row{['id']} - Floor: {$row['floor']} <br>";
    
        //I people array rooms with single rooms
        $records[] = $row;
    }
    }else if($result){
        $records = [];
    }
    else{
        $records = false;
    }
    // close db connection
    $conn->close();

    return $records;
 }

 /**
  * GET SINGLE RECORD BY ID
  */
 function getById($conn, $table, $id){
    $sql = "SELECT * FROM `$table` WHERE `id` = $id";
$result = $conn->query($sql);
//var_dump($result);

if($conn && $result->num_rows > 0) {
    $record = $result->fetch_assoc();
    //var_dump($room);
}elseif($result){
    $record = [];
}else{
    $record = false;
}


// close connection
$conn->close();

return $record;
}

/**
 * DELETE A RECORD BY ID
 */

 function removeById($conn, $table, $id, $url){
     $sql = "DELETE FROM `$table` WHERE `id` = $id";
     $result = $conn->query($sql);

     var_dump($conn->affected_rows);

     if ($result && $conn->affected_rows > 0){
         header("Location: $url");
     }else if($result){
         die('nessuna stanza trovata');
     }else{
         die('errore');

         $conn->close();
     }
 }