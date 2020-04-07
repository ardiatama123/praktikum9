<link rel="stylesheet" type="text/css" href="css.css">
<?php 
include "koneksi.inc.php"; 


$sql="SELECT * from tbl_kontak order by nama;"; 
$qry=mysqli_query($conn, $sql) or die("Proses cetak gagal"); 
echo "<center><h1>DATA KONTAK</h1>
<table width='75%' cellpadding='2' cellspacing='0' border='1'> 
<tr>  
<th>Nama</th> 
<th>Jenis Kelamin</th>
<th>Email</th> 
<th>Alamat</th> 
<th>Kota</th> 
<th>Pesan</th> 
</tr>"; 

while($hasil=mysqli_fetch_row($qry)){ 
	echo "<tr>  
	<td>$hasil[1]</td> 
	<td>$hasil[2]</td> 
	<td>$hasil[3]</td> 
	<td>$hasil[4]</td> 
	<td>$hasil[5]</td> 
	<td>$hasil[6]</td> 
</tr></center>"; 
; 
} 

echo "</table>"; 
?>
<br> 
<button <a href='../kontak.html'></a>Kembali</button> 