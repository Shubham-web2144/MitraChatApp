<?php

include_once './config.php';

$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$msg = mysqli_real_escape_string($conn, $_POST['msg']);

if(!empty($name) && !empty($email) && !empty($msg)) {
    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $sql = "INSERT INTO `contact`(`name`, `email`, `msg`) VALUES ('${name}','${email}','${msg}')";
        $query = mysqli_query($conn,$sql);
        if($query) {
            echo "submited";

            $to = "shubhamkjadhav21@gmail.com";
            $sub = "New contact form query";
            $body = "user name : $name <br> user mail : $email <br> $msg";
            mail($to, $sub, $body);
        }
    }
    else {
        echo "Enter valid email id";
    }
}
else {
    echo "All inputs fields are required";
}

?>