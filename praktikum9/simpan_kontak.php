<?php
include 'admin/koneksi.inc.php';

$nama = $_POST['nama'];
$jkel = $_POST['jkel'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$kota = $_POST['kota'];
$pesan = $_POST['pesan'];

if(mysqli_query($conn,"INSERT INTO tbl_kontak VALUES ('','$nama','$jkel','$email','$alamat','$kota','$pesan')")) {
	echo"<script>alert('Data Disimpan')</script>";
} else {
	echo"<script>alert('Koneksi  Gagal')</script>";
}

header("location: kontak.html");
?>