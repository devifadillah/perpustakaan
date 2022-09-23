<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $id_anggota = $_POST['id_anggota'];
    $nama_anggota = $_POST['nama_anggota'];
    $kelas_anggota = $_POST['kelas_anggota'];
    $ttl = $_POST['TTL'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];

    $sql = "UPDATE `data_siswa` SET `id_anggota`='$id_anggota',`nama_anggota`='$nama_anggota',`kelas_anggota`='$kelas_anggota',`TTL`='$TTL',`jenis_kelamin`='$jenis_kelamin',`alamat`='$alamat' WHERE id_anggota ='$id_anggota'";

    $query = mysqli_query ($connect, $sql);

    if($query) {
        header('location: datasiswa.php');
    }else {
        header('location: simpan.php?status=gagal');
    }
}
?>