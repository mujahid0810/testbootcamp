<?php
include "koneksi.php";
$hapus = mysqli_query($Koneksi, "DELETE FROM produk WHERE id='$_GET[id]'");

if ($hapus){
	header('location:data_produk.php');
}else{
	echo "Gagal menghapus data";
}
?>