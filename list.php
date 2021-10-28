<?php include("koneksi.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <title>Data Mahasiswa</title>
</head>
<body>
    <div class="container my-3">
    <header>
        <h3 class = "text-center my-3" >Mahasiswa yang sudah mendaftar</h3>
    </header>
    
    <nav>
        <a href="daftar.php" class="btn btn-success" ><span><i class="bi bi-plus-circle"></i></span> Tambah Baru</a>
    </nav>
    <br>
    <table class="table table-borderless">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Jurusan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM mahasiswa";
            $query = mysqli_query($conn, $sql);

            while($siswa = mysqli_fetch_array($query)){
                echo "<tr>";

                echo "<td>".$siswa["id"]."</td>";
                echo "<td>".$siswa["Nama"]."</td>";
                echo "<td>".$siswa["Jurusan"]."</td>";
                
                echo "<td>";
                echo "<a class='btn btn-info'href='edit.php?id=".$siswa['id']."'>Edit</a> | ";
                echo "<a class='btn btn-danger' href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
                echo "</td>";
                echo "</tr>";
            
            }
            ?>
    </tbody>
    <a href="Home.php" class="btn btn-danger"><span><i class="bi bi-backspace"></i></span> Kembali </a>
    </table>
    </div>
</body>
</html