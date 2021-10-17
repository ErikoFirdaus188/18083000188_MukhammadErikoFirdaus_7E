<?php

include("koneksi.php");


    $id = $_POST['id'];
    $Nama = $_POST['Nama'];
    $Jurusan = $_POST['Jurusan'];

    $sql = "UPDATE mahasiswa SET nama='$Nama' ,
    Jurusan='$Jurusan' WHERE id=$id";
    $query = mysqli_query($conn, $sql);
    header ('location: list.php');
        
?>