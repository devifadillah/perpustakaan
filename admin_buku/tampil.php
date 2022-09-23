<?php
    include 'koneks.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../admin_buku/adminbuku.css">
    <title>Data Perpustakaan</title>
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
    <li><a href="../admin_siswa/datasiswa.php"><i class="fas-link"></i>Data Siswa</a></li>
    <li><a href="../admin_buku/databuku.php"><i class="fas-stream"></i>Data Buku</a></li>
    </ul>
    </div>

    <h3>Data Buku</h3>
    <h4><a href="tambahbuku.html">Create </a></h4>
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
                while($buku = mysqli_fetch_array($query)){
                    echo"
                    <tr>
                    <td>$buku[0]</td>
                    <td>$buku[1]</td>
                    <td>$buku[2]</td>
                    <td>$buku[3]</td>
                    <td>$buku[4]</td>
                    <td>$buku[5]</td>
                    <td>
                        <a class='btn-edit' href='editform.php?kode_buku=".$buku['kode_buku']."'>Edit</a>
                        <a class='btn-edit' href='hapusbuku.php?kode_buku=".$buku['kode_buku']."'>hapus</a>
                    </td>
                </tr>";
                } 
        ?>
    </table>
</body>
</html>