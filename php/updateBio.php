<?php

session_start();
include './config.php';

$updatedBio = mysqli_real_escape_string($conn, $_POST['updateBio']);

if(!empty($updatedBio)) {
    $sql = "UPDATE `user` SET `bio` = '${updatedBio}' WHERE `user`.`unique_id` = '{$_SESSION['unique_id']}'";
    $query = mysqli_query($conn, $sql);
    if($query) {
        echo "updated";
    }
    else {
        echo "Something went wrong";
    }

}
else {
    echo "Please enter your bio";
}

?>