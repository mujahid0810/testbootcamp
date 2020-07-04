<h3>Data Produk</h3>
<hr>
<a href="input_produk.php"> Tambah Data</a>
<table border="1" cellspacing="0" width="100%">
	<tr>
		<td>Id</td>
		<td>nama</td>
		<td>importir_id</td>
		<td>photo</td>
		<td>qty</td>
		<td>price</td>
		<td>aksi</td>
	</tr>

	<?php

	include "koneksi.php";
	$sql_produk = mysqli_query($Koneksi, "SELECT * FROM produk ORDER BY id ASC");

	while ($d = mysqli_fetch_array($sql_produk)) {
		echo "<tr>

		<td> $d[id]</td>
		<td> $d[name]</td>
		<td> $d[importir_id]</td>
		<td> $d[photo]</td>
		<td> $d[qty]</td>
		<td> $d[price]</td>
		<td>
			<a href='edit_produk.php?id=$d[id]'>Edit</a> | <a href='hapus_produk.php?id=$d[id]'>Hapus</a>
		</td>
		</tr>";
	}


	?>
</table>