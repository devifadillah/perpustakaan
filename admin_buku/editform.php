<?php
    include 'koneks.php';

    $kode_buku = $_GET['kode_buku'];
    $sql = "SELECT * FROM data_buku WHERE kode_buku='$kode_buku'";
    $query = mysqli_query($connect, $sql);
    $buku = mysqli_fetch_array($query);

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
    <link rel="stylesheet" href="../admin_buku/adminbuku.css">
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
    <form action="editbuku.php" method="post">
        <h3>Data Buku</h3>
        <p><label>kode_buku : <input value="<?php echo $buku['kode_buku']?>" required="required" type="number" name="kode_buku"></label></p>
        <p><label>judul_buku : <input value="<?php echo $buku['judul_buku']?>" required="required" type="text" name="judul_buku"></label></p>
        <p><label>penerbit_buku: <input value="<?php echo $buku['penerbit_buku']?>" required="required" type="text" name="penerbit_buku"></label></p>
        <p><label>tahun_buku: <input value="<?php echo $buku['tahun_buku']?>" required="required" type="number" name="tahun_buku"></label></p>
        <p><label>jumlah_buku: <input value="<?php echo $buku ['jumlah_buku']?>" required="required" type="number" name="jumlah_buku"></label></p>
        <input type="submit" name="simpan" value="simpan">
    </form>
    </div>
</body>
</html>