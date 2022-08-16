<?php 
session_start();
include_once './config.php';

$searchVal = mysqli_real_escape_string($conn, $_POST['search']);
$currID = $_SESSION['unique_id'];

if(!empty($searchVal)) {
    $sql = "SELECT * FROM `user` WHERE NOT `unique_id` = '${currID}' AND (`name` LIKE '%{$searchVal}%' OR `email` LIKE '%{$searchVal}%')";
    $query = mysqli_query($conn, $sql);
    $output = "";
    if(mysqli_num_rows($query) > 0) {
        while($data = mysqli_fetch_assoc($query)) {
            if($data['status'] == 'offline') {
                $output .= '<a href="../pages/chatArea.php?user_id='.$data['unique_id'].'" class="user__card">
                        <img src="../php/uploadedImg/'.$data['imgs'].'" alt="" class="user__card-img active">
                        <h3>'.$data['name'].'</h3>
                        <span>'.$data['status'].'</span>
                      </a>';
            }else {
                $output .= '<a href="../pages/chatArea.php?user_id='.$data['unique_id'].'" class="user__card">
                        <img src="../php/uploadedImg/'.$data['imgs'].'" alt="" class="user__card-img">
                        <h3>'.$data['name'].'</h3>
                        <span>'.$data['status'].'</span>
                      </a>';
            }
        }
    }
    else {
        $output = "No user exist";
    }
}
else {
    $output = "Please enter name or email";
}

echo $output;
?>