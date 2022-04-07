<?php
	$a=$_REQUEST['id'];

	include "koneksi.php";

	mysqli_query($konek, "DELETE from mahasiswa where nim='$a'");

	header("location: index.php");
?>