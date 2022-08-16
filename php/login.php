<?php 

session_start();
include_once './config.php';
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

if(!empty($email) && !empty($password)) {
    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $fetchUserSql = "SELECT * FROM user WHERE email='${email}'";
        $fetchUserQuery = mysqli_query($conn, $fetchUserSql);
        if(mysqli_num_rows($fetchUserQuery) > 0) {
            $data = mysqli_fetch_assoc($fetchUserQuery);
            $userPass = $data['passwords'];
            if($password == $userPass) {
                $status = "Active now";
                $updateStatus = mysqli_query($conn, "UPDATE `user` SET `status`='${status}' WHERE `user`.`unique_id`='{$data['unique_id']}'");
                if($updateStatus) {
                    $_SESSION['unique_id'] = $data['unique_id'];
                    echo "login";
                }
                else{
                    echo "Something went wrong";
                }
            }
            else {
                echo "Password is wrong";
            }
        }
    }
    else {
        echo "Please enter valid email address";
    }
}
else {
    echo "Please enter all inputs field";
}


?>