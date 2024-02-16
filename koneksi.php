<?php

$server = "localhost";
$username = "root";
$pass = "";
$db = "database"; //sesuaikan nama databasenya
$koneksi = mysqli_connect($server, $username, $pass, $db); //pastikan urutan pemanggilan variable

//untuk cek jika koneksi gagal ke data base
if(mysqli_connect_errno()){
    echo "koneksi gagal : ".mysqli_connect_error();
}