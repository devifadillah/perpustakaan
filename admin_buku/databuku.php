<?php
    include 'koneks.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-Perpustakaan</title>
    <link rel="stylesheet" href="../style.css">
    <script src="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet"></script>
</head>
<body>

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
    <li><a href="../admin_siswa/datasiswa.php"><i class="fas fa-link"></i>Data Siswa</a></li>
    <li><a href="../admin_buku/databuku.php"><i class="fas f  a-stream"></i>Data Buku</a></li>
  </ul>
</div>

                    <!--Content-->
  <h4><a href="tambahbuku.html"><button> Create</button></a></h4>
  <div class="content">
    <table border="1">
        <tr>
            <th>kode_buku</th>
            <th>judul_buku</th>
            <th>penerbit_buku</th>
            <th>tahun_buku</th>
            <th>status_buku</th>
            <th>jumlah_buku</th>
            <th>action</th>
        </tr>

        <?php
                $sql = "SELECT * FROM data_buku;";
                $query = mysqli_query($connect, $sql);
                while($buk = mysqli_fetch_array($query)){
                    echo"
                    <tr>
                    <td>$buk[0]</td>
                    <td>$buk[1]</td>
                    <td>$buk[2]</td>
                    <td>$buk[3]</td>
                    <td>$buk[4]</td>
                    <td>$buk[5]</td>
                    <td>
                        <a href='editform.php?kode_buku=".$buk['kode_buku']."'>Edit</a>
                        <a href='hapusbuku.php?kode_buku=".$buk['kode_buku']."'>hapus</a>
                    </td>
                </tr>";
                } 
        ?>
    </table>
                </div>
                
</body>
</html>