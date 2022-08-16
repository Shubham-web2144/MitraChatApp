<?php 
session_start();
include_once './config.php';

$gpname = mysqli_real_escape_string($conn, $_POST['groupname']);
$gpbio = mysqli_real_escape_string($conn, $_POST['groupBio']);

if(!empty($gpname) && !empty($gpbio)) {
    $filename = basename($_FILES['groupImg']['name']);
    $fileTypr = pathinfo($filename, PATHINFO_EXTENSION);
    $temp = $_FILES['groupImg']['tmp_name'];
    if(!empty($filename)) {
        $ext = ['png', 'jpeg', 'jpg'];
        if(in_array($fileTypr,$ext)) {
            $currTime = time();
            $imgName = $currTime.$filename;
            if(move_uploaded_file($temp,"./uploadedImg/".$imgName)) {
                $group_id = rand(0,100000);
                $sql = "INSERT INTO `groups`(`group_id`, `group_name`, `group_img`, `group_bio`) VALUES ('${group_id}','${gpname}','${imgName}','${gpbio}')";
                $query = mysqli_query($conn, $sql);
                if($query) {
                    echo 'created';
                }
            }
        }
        else {
            echo "Please select valid type image-jpeg,png,jpg";
        }
    }
    else {
        echo "Select image";
    }
}
else {
    echo "Please enter all inputs fields";
}

?>