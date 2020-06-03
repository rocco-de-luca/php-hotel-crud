<?php
// connect to db
include __DIR__ . '/../database.php';

// utilities
include __DIR__ . '/../function.php';

// get room ID
$id_room = $_GET['id'];

// query selected room
$room = getById($conn, 'stanze', $id_room);
