<?php
    include 'koneksi.php';

    if (isset($_POST['simpan'])) {
    $id_anggota = $_POST['id_anggota'];
    $nama_anggota = $_POST['nama_anggota'];
    $kelas_anggota = $_POST['kelas_anggota'];
    $ttl = $_POST['TTL'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];

        $sql ="INSERT INTO `data_siswa` (id_anggota, nama_anggota, kelas_anggota, TTL, jenis_kelamin, alamat) VALUES ('$id_anggota', '$nama_anggota', '$kelas_anggota', '$ttl', '$jenis_kelamin', '$alamat');";
        
        $query = mysqli_query($connect, $sql);

        if($query) {
            header('location: datasiswa.php');
        }else {
            header('location:simpan.php?status=gagal');
        }
    }
?>