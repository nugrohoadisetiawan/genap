<?php
include("koneksi.php");
isset($_GET['id']);
$kode = $_GET['id'];
$sql= "DELETE FROM ruang where id=$kode";
$query = mysqli_query($db, $sql);

if($query){
    header("Location:tampil:php?status=sukses");
}else{
    die("akses dilarang");
}
?>