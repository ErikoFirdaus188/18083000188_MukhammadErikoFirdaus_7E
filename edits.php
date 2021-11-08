<?php

include("koneksi.php");

    $id = $_POST['id'];
    $Nama = $_POST['Nama'];
    $nim = $_POST['nim'];
    $Jurusan = $_POST['Jurusan'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];

    $sql="UPDATE mahasiswa SET nama='$Nama', nim='$nim', Jurusan='$Jurusan', jk='$jk', alamat='$alamat'
    WHERE id='$id'";
    $query = mysqli_query($conn, $sql);
    header ('location: list.php');  
    
?>