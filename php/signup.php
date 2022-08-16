<?php
session_start();
include_once "./config.php";

$name = mysqli_real_escape_string($conn,$_POST['name']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$password = mysqli_real_escape_string($conn,$_POST['password']);

if(!empty($name) && !empty($email) && !empty($password)) {
    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $sql = "SELECT * FROM `user` WHERE email = '${email}'";
        $query = mysqli_query($conn, $sql);
        if(mysqli_num_rows($query) > 0) {
            echo $email . " " . "This email address already registered";
        }
        else {
            if(isset($_FILES['image'])) {
                $imgName = $_FILES['image']['name'];
                $imgType = $_FILES['image']['type'];
                $tmpName = $_FILES['image']['tmp_name'];

                $imgExplode = explode('.', $imgName);
                $imgExt = end($imgExplode);
                $ext = ['jpeg', 'png', 'jpg'];

                if(in_array($imgExt, $ext) == true) {
                    $currTime = time();
                    $newImgName = $currTime.$imgName;
                    if(move_uploaded_file($tmpName, "uploadedImg/".$newImgName)) {
                        $randId = rand($currTime, 100000);
                        $status = "Active now";
                        $bios = "This is your bio you can edit it";
                        $insertSql = "INSERT INTO `user`(`unique_id`, `name`, `email`, `imgs`, `passwords`, `bio`, `status`) VALUES ('{$randId}','{$name}','{$email}','{$newImgName}','{$password}','{$bios}','{$status}')";
                        $insertQuery = mysqli_query($conn, $insertSql);
                        if($insertQuery) {
                            $fetchUserSql = "SELECT * FROM user WHERE email='${email}'";
                            $fetchUserQuery = mysqli_query($conn, $fetchUserSql);
                            if(mysqli_num_rows($fetchUserQuery) > 0) {
                                $data  = mysqli_fetch_array($fetchUserQuery);
                                $_SESSION['unique_id'] = $data['unique_id'];
                                echo "signup";
                            }
                            // mail
                            $sub = "Thanks for registerd with Mitra 😎";
                            $to = $email;
                            $body = "You have succesfully created your acoount in Mitra, Please log in for experience our chatting application";
                            $sender = "From Your new Mitra";
                            mail($to,$sub,$body,$sender);
                        }
                        else {
                            echo "System problem";
                        }
                    }
                    else {
                        echo "Something went wrong";
                    }
                }
                else {
                    echo "Please select valid image jpeg,jpg,png";
                }
            }
            else {
                echo "Please select profile image";
                
            }
        }
    }
    else {
        echo "Please enter valid email address";
    }
}
else {
    echo "Please enter all inputs fields";
}
?>