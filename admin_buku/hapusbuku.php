<?php
    include 'koneks.php';

    $kode_buku = $_GET['kode_buku']; 

    $sql = "DELETE FROM data_buku WHERE kode_buku='$kode_buku'";
    $query = mysqli_query($connect, $sql);

    if($query) {
        header('location: databuku.php');
    }else {
        header('location: simpan.php?status=gagal');
    }    
?>