<?php

include_once './config.php';

$name = mysqli_escape_string($conn, $_POST['fname']);
$mail = mysqli_real_escape_string($conn, $_POST['fmail']);
$msg = mysqli_real_escape_string($conn, $_POST['msg']);

if(!empty($name) && !empty($mail) && !empty($msg)) {
    if(filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        $sql = "INSERT INTO `feedback`(`user_name`, `email`, `feedBack_msg`) VALUES ('${name}','${mail}','${msg}')";
        $query = mysqli_query($conn, $sql);
        if($query) {
            echo "submited";
        }
    }
    else {
        echo "Please enter valid email";
    }
}
else {
    echo "Please enter all fields";
}

?>