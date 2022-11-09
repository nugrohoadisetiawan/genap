<?php
include("koneksi.php");?>

<html>
    <head>
</head>
<body>
    <h1>Data Ruangan</h1>
    <h4> <a href=ruangan.php>Tambah</a></h4>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Nama Ruang</th>
            <th>Jenis Ruang</th>
            <th>Kondisi</th>
            
</tr>

<?php
include("koneksi.php");
$sql='SELECT * FROM ruang';
$query = mysqli_query($db, $sql);
while($ruang=mysqli_fetch_array($query)){
    echo "<tr>";
    echo "<td>".$ruang['id']."</td>";
    echo "<td>".$ruang['nama_ruang']."</td>";
    echo "<td>".$ruang['jenis_ruang']."</td>";
    echo "<td>".$ruang['kondisi']."</td>";
    echo "<td>";
    echo "<a href='edit.php?id=".$ruang['id']."'>Edit</a> |";
    echo "<a href='hapus.php?id=".$ruang['id']."'>Hapus</a>";
    echo "</td>";
    echo "</tr>";
 }
 ?>
 </table>
</body>
</html>