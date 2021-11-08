<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <div class="container my-3">
  <header>
        <h3 class="text-center">Data mahasiswa</h3>
  </header>
  <form action="pendaftaran.php" method="POST">
  <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" name ='Nama' class="form-control" Required>
  </div>
  <div class="mb-3">
        <label class="form-label">Nim</label>
        <input type="text" name ='nim' class="form-control" Required>
  </div>
  <div class="mb-3">
    <label class="form-label">Jurusan</label>
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

        <label class="form-label">Jenis Kelamin</label>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="jk" id="flexRadioDefault1" value="Laki-laki" checked>
        <label class="form-check-label" for="flexRadioDefault1">Laki-laki</label>
  </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="jk" id="flexRadioDefault1" value="Perempuan">
        <label class="form-check-label" for="flexRadioDefault1">Perempuan</label>
  </div>      
  </div>
  <div class="mb-3">
        <label class="form-label">Alamat</label>
        <textarea name ='alamat' class="form-control" Required></textarea>
  </div>
  <button type="submit" value="Daftar" name="daftar" class="btn btn-primary">Daftar</button>
  <a href="list.php" class="btn btn-danger"><span><i class="bi bi-backspace"></i></span> Kembali </a>
  </form>
  </div>
  </body>
  </html>