<?php
//koneksi ke database
    
$server ="localhost";
$user = "root";
$password ="";
$nama_database ="pendaftaran_pemain";

$db = mysqli_connect($server,$user,$password,$nama_database);
if(!$db){
    die("gagal terhubung ke daabase" . mysqli_connect_error());
}
?>