<?php

session_start();
include_once './config.php';

$logUser = mysqli_real_escape_string($conn, $_POST['outgoing_id']);
$groupID = mysqli_real_escape_string($conn, $_POST['incoming_id']);
$msg = mysqli_real_escape_string($conn, $_POST['chatMsg']);

if(!empty($msg)) {
    $randomId = rand(0,100000);
    $sql = "INSERT INTO `groupmsg`(`gpmsg_id`, `group_id`, `user_id`, `msg`) VALUES ('${randomId}', '${groupID}','${logUser}','${msg}')";
    $query = mysqli_query($conn, $sql);
    if($query) {
        echo "inserted";
    }
}

?>