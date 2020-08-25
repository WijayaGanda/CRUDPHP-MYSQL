<?php
include("koneksi.php");
?>
<!--halaman untuk pemain yang sudah terdaftar -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Pemain Baru</title>
</head>
<body>
    <header> 
        <h3>Pemain yang sudah mendaftar</h3>
    </header>

    <nav>
        <a href="formdaftar.php">Tambah Baru</a>
    </nav>
    <br>
    <table border="1">
        <thead>
            <tr>
                <td>NO</td> 
                <td>Nama</td>
                <td>Alamat</td>       
                <td>Jenis Kelamin</td>
                <td>Agama</td>
                <td>TTL</td>
                <td>Posisi</td>
            </tr>
        </thead>
        

        <tbody>
            <?php
                //mengambil data pemain pada db calon_pemain
                $sql = "SELECT * FROM calon_pemain";
                $query = mysqli_query($db,$sql);

                //mysqli_fetch_array untuk menjadikan hasil menjadi array 
                while($pemain = mysqli_fetch_array($query)){
                    echo "<tr>";

                    echo "<td>".$pemain['id']. "</td>";
                    echo "<td>".$pemain['nama']. "</td>";
                    echo "<td>".$pemain['alamat']. "</td>";
                    echo "<td>".$pemain['jenis_kelamin']. "</td>";
                    echo "<td>".$pemain['agama']. "</td>";
                    echo "<td>".$pemain['ttl']. "</td>";
                    echo "<td>".$pemain['posisi']. "</td>";

                    echo "<td>";
                    echo "<a href='formedit.php?id=".$pemain['id']."'>Edit</a> | ";
                    echo "<a href='hapus.php?id=".$pemain['id']."'>Hapus</a>";
                    echo "</td>";


                    echo "</tr>";

                    
                }
            ?>
        </tbody>    

                <p>Total : <?php echo mysqli_num_rows($query)?></p>
    </table>
    

</body>
</html>

