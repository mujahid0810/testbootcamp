<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "soal4";

$Koneksi = mysqli_connect($host, $user, $pass, $db);

if(!$Koneksi){
    die("Koneksi Error : ".mysqli_connect_error);
}
?>