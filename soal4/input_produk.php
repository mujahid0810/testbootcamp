<h3>Form Input Data Produk</h3>
<hr>
<form method="post" action="">
	<table>
		<tr>
			<td>ID :</td>
			<td><input type="text" name="txtid"></td>
		</tr>
		<tr>
			<td>Name :</td>
			<td><input type="text" name="txtname"></td>
		</tr>
		<tr>
			<td>IMPORTIR_ID :</td>
			<td><input type="text" name="txtimportir_id"></td>
		</tr>
		<tr>
			<td>PHOTO :</td>
			<td><input type="text" name="txtphoto"></td>
		</tr>
		<tr>
			<td>QTY :</td>
			<td><input type="text" name="txtqty"></td>
		</tr>
		<tr>
			<td>PRICE :</td>
			<td><input type="text" name="txtprice"></td>
		</tr>
		<tr>
			<td>Save :</td>
			<td><input type="submit" value="simpan"></td>
		</tr>
	</table>
</form>

<?php

	include "koneksi.php";
	if ($_SERVER['REQUEST_METHOD']=='POST') {
		$simpan = mysqli_query($Koneksi, "INSERT INTO produk (id,name,importir_id,photo,qty,price) 
			VALUES ('$_POST[txtid]','$_POST[txtname]','$_POST[txtimportir_id]','$_POST[txtphoto]','$_POST[txtqty]','$_POST[txtprice]')");

		if($simpan){
			header('location:data_produk.php');
		}
	}

?>