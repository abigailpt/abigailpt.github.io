<?php
session_start();

// Verifikasi role pengguna
if (!isset($_SESSION['role']) || $_SESSION['role'] != 'pasien') {
    echo "
    <script>
        alert('Silahkan login terlebih dahulu');
        window.location.href = 'login.php';
    </script>";
    session_destroy();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KLINIK GIGI</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>
<body>
    <nav>
        <div class="luar">
            <div class="logo"><a href="#klinik">KLINIK DOKTER GIGI</a></div>
            <div class="menu">
                <ul>
                    <li><a href="logout.php">Logout</a></li>
                    <li><a href="#reservasi" class="btn-hijau">Reservasi</a></li>
                </ul>
            </div>
        </div>
    </nav>


<div class="form">
    <div class="konten">
    <div class="kepala">
    <div class="lock"></div>
        <h2 class="judul">Reservasi Dokter Gigi</h2>
    </div>
    <div class="artikel">
        <form class="horizontal" action="" method="post">
        <fieldset><legend>Data Pasien</legend>
            <div class="grup">
                <label for="name">Nama<span class="required" >*</span></label>
                <input type="text" name="Nama Lengkap" required placeholder="Nama Lengkap">
            </div>
            <div class="grup">
                <label for="umur">Umur<span class="required">*</span></label>
                <input type="password" name="th" required placeholder="umur">
            </div>
        </fieldset>
        <fieldset><legend></legend>
            <div class="grup">
                <label for="nama">Keluhan<span class="required">*</span></label>
                <input type="text" name="keluhan" required placeholder="keluhan">
            </div>
            <div class="grup">
                <label for="email">Email<span class="required">*</span></label>
                <input type="email" name="email" required placeholder="Email Address">
            </div>
            <div class="grup">
                <label for="no.telp">Telp/WhatsApp<span class="required">*</span></label>
                <input type="tel" name="Telp/WA" pattern="\d\d\d\d\d\d\d\d\d\d\d\d" required placeholder="08****">
            </div>
            <div>
                <label for="gambar">KTP/KK</label>
                <input type="file">
            </div>
            <div>
                <label for="">Jenis Konsul :</label>
                <input type="checkbox" style="color: aliceblue;">Scaling   
                <input style =color:aliceblue type="checkbox" >Pencabutan 
                <input type="checkbox">Penambalan 
                <input type="checkbox">Orthodonti
            </div>

            <div class="grup-offset">
                <label for="JK">Jenis Kelamin<span class="required">*</span></label>
                <input type="radio" name="JK" value="Laki-Laki" required>Laki-Laki
                <input type="radio" name="JK" value="Perempuan" required>Perempuan
            </div>

            <div class="grup-offsett">
                <button type="submit" value="Sign In">Submit</button>
                <button type="reset" value="Reset">Reset</button>
            </div>
            </fieldset>

            </form>
        </div>
    </div>
    </div>

<!--footer-->
<footer class="footer">
    <div class="footer-left">
        <p>Copyright &copy; 2023</p>
    </div>

    <div class="footer-center">
        <div>
            <i class="fa fa-map-marker"></i>
            <p><span> Klinik Dokter Gigi
                </span>Jl. Panjaitan No.1 Samarinda</p>
        </div>
        <div>
            <i class="fa fa-phone"></i>
            <p>Drg : 121212</p>
        </div>
        <div>
            <i class="fa fa-envelope"></i>
            <p><a href="#">klinikdrg1@gmail.com</a></p>
        </div>
    </div>

    <div class="footer-right">
        <p class="footer-about">
            <span>About</span>
            Website ini dibuat agar setiap orang dari seluruh lapisan masyarakat 
            memiliki kesempatan yang sama untuk mendapatkan edukasi, serta perawatan
            gigi dan mulut yang layak.
        </p>
    </div>
    
</footer>

</body>
</html>