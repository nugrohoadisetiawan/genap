<html>
    <head></head>
    <body>
        <h1>Ruang smkn 1 sayung</h1>
        <form action="proses_tambah.php" method="POST">

<fieldset>

<p>
            <label for="nama_ruang">Nama Ruang : </label>
            <input type="text" name="nama_ruang" />
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
            <input type="text" name="kondisi" />
        </p>
        <p>
        <input type="submit" value="kirim" name="ruangan" />
</p>
        </fieldset>

    </form>
    </body>
</html>