<?php
include("koneksi.php");

if(isset($_POST['daftar'])){
    $nama = $_POST['Nama'];
    $nim = $_POST['nim'];
    $jurusan = $_POST['Jurusan'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];

    $sql = "INSERT INTO mahasiswa (Nama, nim, Jurusan, jk, alamat) VALUE 
    ('$nama','$nim','$jurusan','$jk','$alamat')";
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