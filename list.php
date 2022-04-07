<table>
	<tr bgcolor="gold">
		<td> No </td>
		<td width="100" align="center"> NIM </td>
		<td width="200" align="center"> Nama Mahasiswa </td>
		<td width="300" align="center"> Alamat </td>
		<td width="400" align="center"> Program Studi </td>
		<td width="100" align="center"> Jenis Kelamin </td>
		<td width="200" align="center"> Proses </td>
	</tr>
	<?php
		include "koneksi.php";
		$hasil = mysqli_query($konek, "select * from mahasiswa");
		$no = 1;
		while ($row=mysqli_fetch_array($hasil)) {
			if ($no % 2 == 0)
				$bg='#cccddd';
			else
				$bg='$dddccc';
			echo"
				<tr bgcolor='$bg'>
					<td> $no </td>
					<td> $row[0] </td>
					<td> $row[1] </td>
					<td> $row[2] </td>
					<td> $row[3] </td>
					<td> $row[4] </td>
					<td align=center>
						<a href = hapus.php?id=$row[0]>[Hapus]</a>
						<a href = edit.php?id=$row[0]>[Edit]</a>
					</td>
				</tr>
			";
			$no++;
		}
	?>
</table>
