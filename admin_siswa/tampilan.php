<?php
    include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../admin_siswa/adminsiswa.css">
    <title>Data Perpustakaan</title>

    <style>
        <?php
        include '../admin_siswa/adminsiswa.css'
        ?>
    </style>
    
    
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
    <li><a href="#"><i class="fa-qrcode"></i>Dashboard</a></li>
    <li><a href="../admin_siswa/datasiswa.php"><i class="fas-link"></i>Data Siswa</a></li>
    <li><a href="../admin_buku/databuku.php"><i class="fas-stream"></i>Data Buku</a></li>
    </ul>
    </div>
    </div>
    </div>


    <h4><a href="tambah.html">Create </a></h4>
    <table border="1">
        <tr>
            <th>Id Anggota</th>
            <th>Nama Anggota</th>
            <th>Kelas Anggota</th>
            <th>tempat tanggal lahir</th>
            <th>Jenis Kelamin</th>
            <th>alamat</th>
            <th>action</th>
        </tr>

        <?php
                $sql = "SELECT * FROM data_siswa;";
                $query = mysqli_query($connect, $sql);
                while($pel = mysqli_fetch_array($query)){
                    echo"
                    <tr>
                    <td>$pel[0]</td>
                    <td>$pel[1]</td>
                    <td>$pel[2]</td>
                    <td>$pel[3]</td>
                    <td>$pel[4]</td>
                    <td>$pel[5]</td>
                    <td>
                        <a class='btn-edit' href='formedit.php? Id_anggota=".$pel['id_anggota']."'>Edit</a>
                        <a class='btn-edit' href='hapus.php?Id_anggota=".$pel['id_anggota']."'>hapus</a>
                    </td>
                </tr>";
                } 
        ?>
    </table>
</body>
</html>