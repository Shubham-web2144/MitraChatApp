<?php 

session_start();

if(isset($_SESSION['unique_id'])) {
    include_once './config.php';
    $logoutID = mysqli_real_escape_string($conn, $_GET['logout_id']);
    if(isset($logoutID)) {
        $status = "offline";
        $sql = "UPDATE `user` SET `status` = '${status}' WHERE `user`.`unique_id` = '${logoutID}'";
        $query = mysqli_query($conn, $sql);
        if($query) {
            session_unset();
            session_destroy();
            header("location: ../pages/loginPage.html");
        }
    }
}

?>