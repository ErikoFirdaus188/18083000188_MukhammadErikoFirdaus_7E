<?php

include("koneksi.php");
if( !isset($_GET['id'])){
    header('location: list.php');
}

$id = $_GET['id'];
$sql = "SELECT * FROM mahasiswa WHERE id=$id";
$query = mysqli_query($conn, $sql);
$siswa = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Nahasiswa</title>
</head>
<body>
    <header>
        <h5>Data Mahasiswa</h3>
    </header>
    <form action="edits.php" method="POST">
        <fieldset>
            <input type="hidden" Name="id" value="<?php echo
            $siswa['id'] ?>"/>
        <p>
            <label for="Nama">Nama: </label>
            <input type="text" name="Nama" placeholder="nama
            lengkap" value="<?php echo $siswa['Nama'] ?>" />    
        </p> 
        <p>
            <label for="Jurusan">Jurusan: </label>
            <input type="text" name="Jurusan" 
            placeholder="Jurusan" value="<?php echo $siswa['Jurusan'] ?>" />    
        </p>
        <p>
            <input type="submit" value="Simpan" Nama="simpan"
            />
        </p> 
</fieldset>   
</body>
</html>