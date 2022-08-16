<?php 
session_start();
include_once './config.php';

$loggedUser = $_SESSION['unique_id'];
$output = "";
$sql = "SELECT * FROM `user` WHERE NOT unique_id = ${loggedUser}";
$query = mysqli_query($conn, $sql);

if($query) {
    if(mysqli_num_rows($query) > 0)  {
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
        $output = "No user exists";
    }
}

echo $output;
