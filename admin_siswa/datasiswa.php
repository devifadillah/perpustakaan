<?php
    include 'koneksi.php';
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
    <li><a href="../admin_buku/databuku.php"><i class="fas fa-stream"></i>Data Buku</a></li>
  </ul>
</div>
                    <!--Content-->
    <h4><a href="tambah.html"><button>Create</button></a></h4>

    <div class="wrapper">                  
    <div class="content">
    <table border="1">
        <tr>
            <th>id_anggota</th>
            <th>nama_anggota</th>
            <th>kelas_anggota</th>
            <th>tempat tanggal lahir</th>
            <th>jenis_kelamin</th>
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
                        <a href='formedit.php?id_anggota=".$pel['id_anggota']."'>Edit</a>
                        <a href='hapus.php?id_anggota=".$pel['id_anggota']."'>hapus</a>
                    </td>
                </tr>";
                } 
        ?>
    </table>
    </div>                    </div>
    
</body>
</html>