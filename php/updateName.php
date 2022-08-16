<?php 
session_start();
include_once './config.php';
$updatedName = mysqli_real_escape_string($conn,$_POST['updateName']);

if(!empty($updatedName)) {
    $sql = "UPDATE `user` SET `name` = '${updatedName}' WHERE `user`.`unique_id` = '{$_SESSION['unique_id']}'";

    $query = mysqli_query($conn, $sql);
    if($query) {
        echo "updated";
    }
    else {
        echo "Something went wrong";
    }

}
else {
    echo "Please enter something";
}

?>