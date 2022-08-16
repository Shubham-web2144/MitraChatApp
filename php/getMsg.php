<?php 

session_start();
include_once './config.php';


$incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
$outgoing_id = mysqli_real_escape_string($conn, $_POST['outgoing_id']);

$output = "";
$sql = "SELECT * FROM `chats` WHERE (`outgoing_id` = '${outgoing_id}' AND `incoming_id` = '${incoming_id}') OR (`outgoing_id` = '${incoming_id}' AND `incoming_id` = '${outgoing_id}') ORDER BY `id`";

$query = mysqli_query($conn, $sql);
if($query) {
    if(mysqli_num_rows($query) > 0) {
        while($data = mysqli_fetch_assoc($query)) {
            if($data['outgoing_id'] == $outgoing_id) {
                $output .= '<div class="outgoing__msg">
                <span class="msgtxt">
                  '.$data['msg'].'
                </span>
              </div>';
            }
            else {
                $output .= '<div class="incoming__msg">
                <span class="msgtxt">
                  '.$data['msg'].'
                </span>
              </div>';
            }
        }
    }
}
echo $output;
?>