<?php include_once("config.php");?>
<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru | SMA PLUS PGRI CIBINONG</title>
    <link rel="stylesheet" href="yo.css">

</head>

<body>
    <header>
        <h3>Siswa yang sudah mendaftar</h3>
    </header>

    <nav>
    <ul>
        <li><a href="form-daftar.php">[+] Tambah Baru</a></li>
        <li><a href="list-siswa.php">Pendaftar </a></li>
    </ul>    
    </nav>

    <br>

    <table border="2">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Sekolah Asal</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>
    <?php include("config.php"); ?>
        <?php
      $sql = "SELECT * FROM calon_siswa";
      $query = mysqli_query($db, $sql);
      $no=1;
    while($siswa = mysqli_fetch_assoc($query)){
            echo "<tr>";

            echo "<td>".$siswa['id']."</td>";
            echo "<td>".$siswa['nama']."</td>";
            echo "<td>".$siswa['alamat']."</td>";
            echo "<td>".$siswa['jenis_kelamin']."</td>";
            echo "<td>".$siswa['agama']."</td>";
            echo "<td>".$siswa['sekolah_asal']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
            $no++;        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
    </body>
</html>
