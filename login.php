<?php
$servername = "%";
$username = "admin3";
$password = "123";
$dbname = "bitirme_projesi";

$user = $_POST['user'];
$pass = $_POST['sifre'];


    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die('Connection failed:'.$conn->connect_error);
    }
    else{
        $sql = "SELECT * FROM tbl_user WHERE user_name='$user' AND user_password='$pass'";
        $result = $conn->query($sql);
        $sql->close();
        $conn-> close();
    }
?>