<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "fin";
$koneksi = mysqli_connect($host,$user,$pass,$database,3307)
            or die("Tidak terkoneksi dengan database");
?>