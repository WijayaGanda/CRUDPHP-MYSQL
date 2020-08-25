<?php
include("koneksi.php");
//halaman untuk memproses data yang akan diedit/diubah

//cek tombol simpan sudah di klik atau belum
if (isset($_POST['simpan'])){
    
    //ambil data dari formedit
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $ttl = $_POST['ttl'];
    $posisi = $_POST['posisi'];

    //query update
    $sql = "UPDATE calon_pemain SET nama='$nama', alamat='$alamat', jenis_kelamin='$jk', agama='$agama', ttl='$ttl', posisi='$posisi' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    //query update berhasil?
    if ($query){
        //jika berhasil
        header('location: listpemain.php');
    } else{
        //jika gagal
        die('gagal menyimpan perubahan');
    }

}else {
    die("gagal");
}
?>