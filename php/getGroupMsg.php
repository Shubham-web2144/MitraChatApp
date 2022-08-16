<?php

session_start();
include './config.php';

$logUser = mysqli_real_escape_string($conn, $_POST['outgoing_id']);
$groupID = mysqli_real_escape_string($conn, $_POST['incoming_id']);

$sql = "SELECT * FROM `groupmsg` LEFT JOIN `user` ON user.unique_id = groupmsg.user_id WHERE `group_id` = '${groupID}' ORDER BY `gp_id`";
$query = mysqli_query($conn, $sql);
$output = "";
if($query) {
    if(mysqli_num_rows($query) > 0) {
        while($data = mysqli_fetch_assoc($query)) {
            if($data['user_id'] == $logUser) {
                $output .= '<div class="outgoing__msg">
                                <span class="msgtxt">
                                '. $data['msg'] .'
                                </span>
                            </div>';
            }
            else {
                $output .= '<div class="incoming__msg">
                                <img src="../php/uploadedImg/'.$data['imgs'].'" class="incoming_msg-img" alt="">
                                <span class="msgtxt">
                                '. $data['msg'].'
                                </span>
                            </div>';
                
                
            }
        }
    }
    else {
        $output .= "No messages";
    }
}

echo $output;
