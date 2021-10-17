<?php
include("koneksi.php");

if(isset($_POST['daftar'])){
    $nama = $_POST['Nama'];
    $jurusan = $_POST['Jurusan'];

    $sql = "INSERT INTO mahasiswa (Nama, Jurusan) VALUE 
    ('$nama','$jurusan')";
    $query = mysqli_query($conn, $sql);

    if($query) {
        header('Location: list.php?status=sukses');

    } else {
        header('Location: list.php?status=gagal');
    }
} else {
    die("askes dilarang....");
}
?>