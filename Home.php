<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A layout example that shows off a responsive product landing page.">
    <title>Landing Page &ndash; Layout Examples &ndash; Pure</title>
    <link rel="stylesheet" href="/css/pure/pure-min.css">
    <link rel="stylesheet" href="/css/pure/grids-responsive-min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>



<div class="header">
    <div class="home-menu pure-menu pure-menu-horizontal pure-menu-fixed">
        <a class="pure-menu-heading" href="">Your Site</a>

        <ul class="pure-menu-list">
            <li class="pure-menu-item pure-menu-selected"><a href="#" class="pure-menu-link">Home</a></li>
            <li class="pure-menu-item"><a href="#" class="pure-menu-link">Tour</a></li>
            <li class="pure-menu-item"><a href="#" class="pure-menu-link">Sign Up</a></li>
        </ul>
    </div>
</div>

<div class="splash-container">
    <div class="splash">
        <h1 class="splash-head">Internet Publisher</h1>
        <p class="splash-subhead">
            Universitas Merdeka 
        </p>
        <p class="splash-subhead">
            Fakultas Teknologi Informasi
        </p>
        <p>
        <img width="110" alt="File Icons" class="pure-img-responsive" src="fti.png">
        </p>
    </div>
</div>

<div class="content-wrapper">
    <div class="content">
        <h2 class="content-head is-center">Tabel List Data Mahasiswa</h2>

        <div class="pure-g">
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">

                <h3 class="content-subhead">
                    <i class="fa fa-rocket"></i>
                    Melihat Data Mahasiswa
                </h3>
                <p>
                <a href = "list.php" type="submit" class="pure-button"  name="list.php" style="text-decoration: none;">Masuk daftar list</a>
                </p>

                <p>
                    Kumpulan Data Mahasiswa ( Nama,Nim, Jurusan, Jenis Kelamiin, dan Alamat )
                </p>
                
    </div>

    <div class="ribbon l-box-lrg pure-g">
        <div class="l-box-lrg is-center pure-u-1 pure-u-md-1-2 pure-u-lg-2-5">
            <img width="120" alt="File Icons" class="pure-img-responsive" src="cat.png">
        </div>
        <div class="pure-u-1 pure-u-md-1-2 pure-u-lg-3-5">

            <h2 class="content-head content-head-ribbon">Ulangan Tengah Semester</h2>

            <p>
                Saya Mukhammad Eriko Firdaus (1808300188) Kelas 7E, sedang mengikuti Ulangan T
                engah Semester Internet Publisher kali ini membuat Halaman Utama,Halaman Login dan register.
                Halaman administrator,Halaman CRUD.
                Mahasiswa mampu membuat Data list menggunakan Mysql.
                Software yang saya gunakan adalah Visual Studio Code.
            </p>
        </div>
    </div>

    <div class="content">
        <h2 class="content-head is-center">Login</h2>

        <div class="pure-g">
            <div class="l-box-lrg pure-u-1 pure-u-md-2-5">
            <form class="pure-form pure-form-stacked" action="pendaftaran.php" method="POST">
                    <fieldset>
                    <p>
                        <label for="nama">Nama: </label>
                        <input type="text" name="Nama" placeholder="Isikan Nama Lengkap" Required />
                    </p>
                    <p>
                        <label for="alamat">Jurusan: </label>
                        <input type="text" name="Jurusan" placeholder="Isikan Jurusan" Required/>
                    </p>
                    <p>
                        <button type="submit" class="pure-button" value="Daftar" name="daftar">Daftar</button>
                    </p>
                    </fieldset>
                </form>
            </div>

            <div class="l-box-lrg pure-u-1 pure-u-md-3-5">
                <h4>Contact Us</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.
                </p>

                <h4>More Information</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>
        </div>

    </div>

    <div class="footer l-box is-center">
        Universitas Merdeka Malang
    </div>

</div>

</body>
</html>