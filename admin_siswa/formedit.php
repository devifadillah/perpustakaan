<?php
    include 'koneksi.php';

    $id_anggota = $_GET['id_anggota'];
    $sql = "SELECT * FROM data_siswa WHERE id_anggota='$id_anggota'";
    $query = mysqli_query($connect, $sql);
    $pel = mysqli_fetch_assoc($query);

    if(mysqli_num_rows($query) < 1) {
        die("data tidak ditemukan");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../admin_siswa/adminsiswa.css">
    <title>Data</title>
</head>
<body>

<div class="wrapp">
        <!--Sidebar-->
        <input type="checkbox" id="check">
        <label for="check">
      <i class="fa-bars" id="btn"></i>
      <i class="fa-times" id="cancel"></i>
    </label>            
         <div class="sidebar">
    <header>e-perpustakaan</header>
    <ul>
    <li><a href="#"><i class="fas fa-qrcode"></i>Dashboard</a></li>
    <li><a href="../admin_siswa/datasiswa.php"><i class="fas-link"></i>Data Siswa</a></li>
    <li><a href="../admin_buku/databuku.php"><i class="fas-stream"></i>Data Buku</a></li>
    </ul>
    </div>

    <div class="content">
    <form action="edit.php" method="post">
        <h3>Data Siswa</h3>
        <p><label>Id Anggota : <input value="<?php echo $pel['id_anggota']?>" required="required" type="number" name="id_anggota"></label></p>
        <p><label>Nama Anggota : <input value="<?php echo $pel['nama_anggota']?>" required="required" type="text" name="nama_anggota"></label></p>
        <p><label>Kelas Anggota: <input value="<?php echo $pel['kelas_anggota']?>" required="required" type="text" name="kelas_anggota"></label></p>
        <p><label>TTL: <input value="<?php echo $pel['TTL']?>" required="required" type="text" name="TTL"></label></p>
        <p><label>Jenis Kelamin: <input value="<?php echo $pel['jenis_kelamin']?>" required="required" type="text" name="jenis_kelamin"></label></p>
        <p><label>Alamat : <textarea required="required" name="alamat"><?php echo $pel['alamat']?></textarea></label></p>
        <input type="submit" name="simpan" value="simpan">
    </form>
    </div>
    </div>
</body>
</html>