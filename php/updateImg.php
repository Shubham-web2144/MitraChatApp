<?php
session_start();
include_once './config.php';
$filename = basename($_FILES['updateImg']['name']);
$fileType = pathinfo($filename, PATHINFO_EXTENSION);
$file_tmp = $_FILES['updateImg']['tmp_name'];

if(!empty($filename)) {
    $ext = array('png', 'jpeg', 'jpg');
    if(in_array($fileType, $ext)) {
        $currTime = time();
        $newFileName = $currTime.$filename;
        if(move_uploaded_file($file_tmp, "uploadedImg/".$newFileName)) {
            $sql = "UPDATE `user` SET `imgs` = '${newFileName}' WHERE `user`.`unique_id` = '{$_SESSION['unique_id']}'";
            $query = mysqli_query($conn, $sql);
            if($query) {
                echo "changed";
            }
            else {
                echo "Something went wrong";
            }
        }
    }
    else {
        echo "Please select - png,jpeg,jpg image";
    }
}
else {
    echo "Please select image";
}
?>