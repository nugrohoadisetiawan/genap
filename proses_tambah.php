<?php
include("koneksi.php");
if(isset($_POST['ruangan'])){
	$kode = $_POST['id'];
    $nama_ruang = $_POST['nama_ruang'];
	$jenis_ruang = $_POST['jenis_ruang'];
    $kondisi =  $_POST['kondisi'];


	$sql = "INSERT INTO ruang (id,nama_ruang,jenis_ruang,kondisi) VALUES ('$kode','$nama_ruang','$jenis_ruang','$kondisi')";
	$query = mysqli_query($db, $sql);

    if( $query ) {
		header('Location:tampil.php?status=sukses');
	} else {
		header('Location:tampil.php?status=gagal');
	}
}
?>