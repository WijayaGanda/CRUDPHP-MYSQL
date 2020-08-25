<?php
//menghapus data dari tabel
include("koneksi.php");

if (isset ($_GET['id'])){
    //ambil data dari query string

    $id=$_GET['id'];

    //buat query hapus
    $sql = "DELETE FROM calon_pemain WHERE id=$id";
    $query = mysqli_query($db,$sql);

    //apakah query hapus berhasil
    if($query){
        header('location: listpemain.php');
    }
    else{
        die("gagal menghapus");
    }
}

?>