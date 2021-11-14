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
<body style="background-image:url(https://images.unsplash.com/photo-1435575653489-b0873ec954e2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=870&q=80);background-repeat:no-repeat;background-size:cover">
<div class="container my-4">
<div class="card">
    <div class="card-body">
    <br>
    <table class="my-2 table table-borderless">
    <header>
        <h3 class = "text-center my-2" >Mahasiswa yang sudah mendaftar</h3>
    </header>
        <a href="daftar.php" class="btn btn-success" ><span><i class="bi bi-plus-circle"></i></span> Tambah Baru</a>
    <br>
        <a href="Home.php" class="my-1 btn btn-danger"><span><i class="bi bi-backspace"></i></span> Kembali </a>
    <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Nim</th>
                <th>Jurusan</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
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
                echo "<td>".$siswa["nim"]."</td>";
                echo "<td>".$siswa["Jurusan"]."</td>";
                echo "<td>".$siswa["jk"]."</td>";
                echo "<td>".$siswa["alamat"]."</td>";  
                echo "<td>";
                echo "<a class='btn btn-info mx-3 'href='edit.php?id=".$siswa['id']."'>Edit</a> ";
                echo "<a class='btn btn-danger' href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
    </tbody>
    </table>
    </div>
</div>
    </div>
</body>
</html