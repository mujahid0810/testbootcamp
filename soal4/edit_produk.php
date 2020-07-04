<h3>Form Eit Data Produk</h3>
<hr>
<?php
include "koneksi.php";
if (isset($_GET['id'])) {
$sql_edit=mysqli_query($Koneksi, "SELECT * FROM produk WHERE id='$_GET[id]'");
$e=mysqli_fetch_array($sql_edit);
}
?>
<form method="post" action="">
	<table>
		<tr>
			<td>ID :</td>
			<td><input type="text" name="txtid" value="<?php echo $e['id'];?>" readonly></td>
		</tr>
		<tr>
			<td>Name :</td>
			<td><input type="text" name="txtname" value="<?php echo $e['name'];?>"></td>
		</tr>
		<tr>
			<td>IMPORTIR_ID :</td>
			<td><input type="text" name="txtimportir_id" value="<?php echo $e['importir_id'];?>"></td>
		</tr>
		<tr>
			<td>PHOTO :</td>
			<td><input type="text" name="txtphoto" value="<?php echo $e['photo'];?>"></td>
		</tr>
		<tr>
			<td>QTY :</td>
			<td><input type="text" name="txtqty" value="<?php echo $e['qty'];?>"></td>
		</tr>
		<tr>
			<td>PRICE :</td>
			<td><input type="text" name="txtprice" value="<?php echo $e['price'];?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="simpan"></td>
		</tr>
	</table>
</form>

<?php

	
	if ($_SERVER['REQUEST_METHOD']=='POST') {
		$update = mysqli_query($Koneksi, "UPDATE produk SET id='$_POST[txtid]',
															name='$_POST[txtname]',
															importir_id='$_POST[txtimportir_id]',
															photo='$_POST[txtphoto]',
															qty='$_POST[txtqty]',
															price='$_POST[txtprice]'
															WHERE id='$_POST[txtid]'");

		if($update){
			header('location:data_produk.php');
		}
	}

?>