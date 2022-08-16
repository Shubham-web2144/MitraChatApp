<?php 
    session_start();
    include_once './config.php';

    $sql = "SELECT * FROM `groups`";
    $query = mysqli_query($conn, $sql);
    $output = "";
    if($query) {
        if(mysqli_num_rows($query) > 0) {
            while($data = mysqli_fetch_assoc($query)) {
                $output .= '<a href="../pages/groupChat.php?group_id='.$data['group_id'].'" class="user__card">
                <img src="../php/uploadedImg/'. $data['group_img'] .'" alt="" class="user__card-img" />
                <h3>'.$data['group_name'].'</h3>
                <span>'.$data['group_bio'].'</span>
              </a>';
            }
        }
        else {
            $output .= "No chat room available";
        }
    }

    echo $output;
?>