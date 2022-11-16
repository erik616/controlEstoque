<?php 
    $host = "localhost";
    $user = "root";
    $pass = "usbw";
    $db = "controle";

    $conn = mysqli_connect($host,$user,$pass,$db);
    if(!$conn){
        die("Houve outro erro: ". mysqli_connect());
    }
        
?>
