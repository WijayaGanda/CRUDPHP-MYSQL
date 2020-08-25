<!--halaman untuk pemain yang akan daftar -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir pendaftaran pemain SepakBola</title>
</head>
<body>
    <header>
        <h2 align="center">Formulir Pendaftaran Pemain Baru</h2>
    </header>

    <form action="prosespendaftaran.php" method="POST">
        <p>
            <label for="nama">Nama :</label>
            <input type="text" name="nama" placeholder="Nama Lengkap"/><br><br>
        </p>
            
        <p> 
            <label for="alamat">Alamat :</label>
            <textarea name="alamat"></textarea><br><br>
        </p>
           
        <p>
            <label for="jenis_kelamin">Jenis Kelamin :</label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki"/>Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan"/>Perempuan</label><br><br>
        </p>
            
        <p>
         <label for="agama">Agama :</label>
            <select name="agama">
                <option>Islam</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Konghucu</option>
            </select><br><br>
        </p>
            
        <p>
            <label for="ttl">TTL :</label>
            <input type="text" name="ttl" placeholder="Tempat tanggal lahir"/><br><br>
        </p>
            
        <p>
            <label for="posisi">Posisi :</label>
            <select name="posisi">
                <option>Striker</option>
                <option>Bek</option>
                <option>Gelandang</option>
                <option>Sayap</option>
                <option>Goalkeeper</option>
            </select><br><br>
        </p>
           
        <p>
             <input type="submit" name="daftar" value="Daftar"/>
        </p>   
        



    </form>
</body>
</html>