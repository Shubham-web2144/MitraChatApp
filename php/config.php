<?php 

$user = "root";
$pass = "";
$dbname = "mitra";
$host = "localhost";

$conn = mysqli_connect($host, $user, $pass, $dbname);

if(!$conn) {
    echo "Db is not connected" .mysqli_connect_error();
}

?>