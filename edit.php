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
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Nahasiswa</title>
</head>
<body style="background-image:url(https://images.unsplash.com/photo-1435575653489-b0873ec954e2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=870&q=80);background-repeat:no-repeat;background-size:cover">
<div class="container my-3">
<div class="card">
    <div class="card-body">
    <header>
            <h5>Data Mahasiswa</h3>
    </header>
    <form action="edits.php" method="POST">
        <fieldset>
            <input type="hidden" Name="id" value="<?php echo 
            $siswa['id'] ?>"/>
    <div class="mb-3">
            <label class="form-label" for="Nama">Nama : </label>
            <input type="text" name ='Nama' placeholder="nama lengkap" value="<?php echo $siswa['Nama'] ?>" 
            class="form-control" Required/> 
    </div> 
    <div class="mb-3">
            <label class="form-label" for="nim">Nim : </label>
            <input type="text" name ='nim' placeholder="Masukkan nim" value="<?php echo $siswa['nim'] ?> "
            class="form-control" Required/> 
    </div> 
    <div class="mb-3">
            <label class="form-label">Jurusan : </label>
            <select type="text" name='Jurusan'class="form-control" Required>
            <option>Sistem Informasi</option>
            <option>Ekonomi dan Bisnis</option>
            <option>Hukum</option>
            <option>Psikologi</option>
            <option>Teknik Mesin</option>
            <option>Ilmu Sosial dan Politik</option>
    </select>
    </div>
    <div class="mb-3">

        <label class="form-label">Jenis Kelamin: </label>
        <div class="form-check">
        <input class="form-check-input" <?= $siswa['jk'] == 'perempuan'? 'checked' : ''?> type="radio" name="jk" id="flexRadioDefault1" value="Laki-laki">
        <label class="form-check-label" for="flexRadioDefault1">Laki-laki</label>
    </div>
        <div class="form-check">
        <input class="form-check-input" <?= $siswa['jk'] == 'perempuan'? 'checked' : ''?>type="radio" name="jk" id="flexRadioDefault1" value="Perempuan" checked>
        <label class="form-check-label" for="flexRadioDefault1">Perempuan</label>
    </div>      
    </div>
    <div div class="mb-3">
            <label class="form-label" for="alamat">Alamat : </label>
            <input type="text" name ='alamat' placeholder="Masukkan nim" value="<?php echo $siswa['alamat'] ?>"
            class="form-control" Required/> 
    </div> 
        
            <button type="submit" value="Simpan" Nama="simpan" class="btn btn-primary">Simpan </button>
            
        
</fieldset>  
</div> 
    </div>
</div>  
</body>
</html>