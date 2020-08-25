<?php
include("koneksi.php");
//halaman untuk memproses data inputan
//cek tombol daftar sudah di klik atau belum
if (isset($_POST['daftar'])){
    //ambil data dari formulir
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $ttl = $_POST['ttl'];
    $posisi = $_POST['posisi'];

    //query untuk memasukkan ke database
    $sql = "INSERT INTO calon_pemain (nama, alamat, jenis_kelamin, agama, ttl, posisi) VALUE ('$nama', '$alamat', '$jk', '$agama', '$ttl', '$posisi')";
    $query = mysqli_query($db, $sql);

    //query simpan berhasil atau tidak
    if ($query){
        //jika berhasil
        header('Location: listpemain.php?status = sukses');
    }
    else {
        //jika tidak
        header('Location: listpemain.php?status = gagal');
    }
}else{
    die("akses dilarang");
}
?>