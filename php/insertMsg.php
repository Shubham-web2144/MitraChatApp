<?php 
session_start();
include_once './config.php';

$incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
$outgoing_id = mysqli_real_escape_string($conn, $_POST['outgoing_id']);
$msg = mysqli_real_escape_string($conn, $_POST['chatMsg']);

if(!empty($msg)) {
    $currTime = time();
    $sql = "INSERT INTO `chats`(`outgoing_id`, `incoming_id`, `msg`, `msgTime`) VALUES ('${outgoing_id}','${incoming_id}','${msg}','${currTime}')";
    $query = mysqli_query($conn, $sql);
    if($query) {
        echo "inserted";
    }
}


?>