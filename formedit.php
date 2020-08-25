<?php
include("koneksi.php");
//halaman yang berisi form edit

//jika tidak ada data di query string
if (!isset($_GET['id'])){
    header('location : listpemain.php');
}

//ambil id dari query string
$id = $_GET['id'];

//query untuk mengambi data dari database
$sql = "SELECT * FROM calon_pemain WHERE id=$id";
$query = mysqli_query ($db, $sql);
//mengubah data dari query menjadi sebuah array
$pemain = mysqli_fetch_assoc($query);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir edit pemain SepakBola</title>
</head>
<body>
    <header>
        <h2 align="center">Formulir Edit Pemain</h2>
    </header>

    <form action="prosesedit.php" method="POST">

        <input type="hidden" name="id" value="<?php echo $pemain['id']?>"/>

        <p>
            <label for="nama">Nama :</label>
            <input type="text" name="nama" placeholder="Nama Lengkap" value="<?php echo $pemain ['nama']?>"/><br><br>
        </p>
            
        <p> 
            <label for="alamat">Alamat :</label>
            <textarea name="alamat"><?php echo $pemain['alamat'];?></textarea><br><br>
        </p>
           
        <p>
            <label for="jenis_kelamin">Jenis Kelamin :</label>
            <?php $jk=$pemain['jenis_kelamin'];?>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki')? "checked" : ""?>>Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'laki-laki')? "checked" : ""?>>Perempuan</label><br><br>
        </p>
            
        <p>
         <label for="agama">Agama :</label>
         <?php $agama=$pemain['agama'];?>
            <select name="agama">
                <option <?php echo ($agama = 'Islam')? "selected":""?>>Islam</option>
                <option <?php echo ($agama = 'Kristen')? "selected":""?>>Kristen</option>
                <option <?php echo ($agama = 'Hindu')? "selected":""?>>Hindu</option>
                <option <?php echo ($agama = 'Budha')? "selected":""?>>Budha</option>
                <option <?php echo ($agama = 'Konghucu')? "selected":""?>>Konghucu</option>
            </select><br><br>
        </p>
            
        <p>
            <label for="ttl">TTL :</label>
            <input type="text" name="ttl" placeholder="Tempat tanggal lahir" value="<?php echo $pemain['ttl'];?>"/><br><br>
        </p>
            
        <p>
            <label for="posisi">Posisi :</label>
            <?php $posisi=$pemain['posisi'];?>
            <select name="posisi">
                <option <?php echo ($posisi = 'Striker')? "selected":""?>>Striker</option>
                <option <?php echo ($posisi = 'Bek')? "selected":""?>>Bek</option>
                <option <?php echo ($posisi = 'Gelandang')? "selected":""?>>Gelandang</option>
                <option <?php echo ($posisi = 'Sayap')? "selected":""?>>Sayap</option>
                <option <?php echo ($posisi = 'Goalkeeper')? "selected":""?>>Goalkeeper</option>
            </select><br><br>
        </p>
           
        <p>
             <input type="submit" name="simpan" value="Simpan"/>
        </p>   
        



    </form>
</body>
</html>