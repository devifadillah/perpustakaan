<?php
    include 'koneksi.php';

    $id_anggota = $_GET['id_anggota']; 

    $sql = "DELETE FROM data_siswa WHERE id_anggota='$id_anggota'";
    $query = mysqli_query($connect, $sql);

    if($query) {
        header('location: datasiswa.php');
    }else {
        header('location: simpan.php?status=gagal');
    }    
?>