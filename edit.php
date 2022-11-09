<?php
include("koneksi.php");
if(!isset($_GET['id'])){
header("location:tampil.php?");
}
$kode = $_GET['id'];
$sql= "SELECT * FROM ruang where id=$kode";
$query = mysqli_query($db, $sql);
$ruang= mysqli_fetch_assoc($query);

if(mysqli_num_rows($query ) <1){
    die ("data tidak ditemukan");
}
?>
<html>
    <head></head>
    <body>
        <h1>From edit</h1>
        <form action="proses_edit.php" method="POST">

<fieldset>
<input type="hidden" name="id" value="<?php echo $ruang['id']?>" />
<p>
            <label for="nama_ruang">Nama Ruang : </label>
            <input type="text" name="nama_ruang" value="<?php echo $ruang['nama_ruang']?>" /> 
        </p>
        <p>jenis ruang :
           <select name = "jenis_ruang">
           <option value = "laboratorium">laboratorium</option>
           <option value = "kantin">kantin</option>
           <option value = "ruang kelas">ruang kelas</option>
           <option value = "mushola">mushola</option>
           <option value = "aula">aula</option>
        </p>
</select>

         <p> 
         <label for="kondisi">kondisi : </label>
            <input type="text" name="kondisi" value="<?php echo $ruang['kondisi']?>" />
        </p>
        <p>
        <input type="submit" value="kirim" name="ruangan" />
</p>
        </fieldset>

    </form>
    </body>
</html>