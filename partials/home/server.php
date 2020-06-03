<?php
// include DB
include __DIR__ . '/../database.php';
// utilities
include __DIR__ . '/../functions.php';
// get hompage rooms list
$rooms = getAll($conn, 'stanze');
