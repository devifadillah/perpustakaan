<?php
include 'koneks.php';

if (isset($_POST['simpan'])) {
    $kode_buku = $_POST['kode_buku'];
    $judul_buku = $_POST['judul_buku'];
    $penerbit_buku = $_POST['penerbit_buku'];
    $tahun_buku = $_POST['tahun_buku'];
    $status_buku = $_POST['status_buku'];
    $jumlah_buku = $_POST['jumlah_buku'];

    $sql = "UPDATE `data_buku` SET `kode_buku`='$kode_buku',`judul_buku`='$judul_buku',`penerbit_buku`='$penerbit_buku',`tahun_buku`='$tahun_buku',`status_buku`='$status_buku',`jumlah_buku`='$jumlah_buku' WHERE kode_buku='$kode_buku'";

    $query = mysqli_query ($connect, $sql);

    if($query) {
        header('location: databuku.php');
    }else {
        header('location: simpan.php?status=gagal');
    }
}
?>