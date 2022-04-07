<?php
	$a=$_POST['nim'];
	$a1=$_POST['nama'];
	$a2=$_POST['alamat'];
	$a3=$_POST['prodi'];
	$a4=$_POST['jeniskelamin'];

	include "koneksi.php";
	
	mysqli_query($konek, "UPDATE mahasiswa SET nama='$a1',alamat='$a2',prodi='$a3',jeniskelamin='$a4' WHERE nim='$a'");
	
	header("location:index.php");
?>