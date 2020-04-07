<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kontak";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die ("koneksi gagal dibangun");
$con = mysqli_select_db($conn, $dbname) or die("Database tidak dapat dibuka"); 
?>