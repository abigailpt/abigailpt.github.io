<?php
session_start();

// Verifikasi role pengguna
if (!isset($_SESSION['role']) || $_SESSION['role'] != 'admin') {
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
            <div class="logo"><a href="beranda.html">KLINIK DOKTER GIGI</a></div>
            <div class="menu">
                <ul>
                    <li><a href="logout.php">Logout</a></li>
                    <li><a href="#data" class="btn-hijau">Admin</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <br>
    <h1>Perhitungan Persentase Pasien</h1>
    <br>
    <form>
      <label for="male-pasien">Jumlah pasien laki-laki:</label>
      <input type="number" id="male-pasien" name="male-pasien" required>

      <label for="female-pasien">Jumlah pasien perempuan:</label>
      <input type="number" id="female-pasien" name="female-pasien" required>

      <button type="submit">Hitung</button>
    </form>

    <div id="result"></div>

    <script>
      const form = document.querySelector("form");

      form.addEventListener("submit", (event) => {
        event.preventDefault();

        const malePasien = Number(document.getElementById("male-pasien").value);
        const femalePasien = Number(document.getElementById("female-pasien").value);

        const totalPasien = malePasien + femalePasien;
        const malePercentage = (malePasien / totalPasien) * 100;
        const femalePercentage = (femalePasien / totalPasien) * 100;

        const result = document.getElementById("result");
        result.innerHTML = `
          <p>Jumlah pasien laki-laki: ${malePasien}</p>
          <p>Jumlah pasien perempuan: ${femalePasien}</p>
          <p>Total pasien: ${totalPasien}</p>
          <p>Persentase pasien laki-laki: ${malePercentage.toFixed(2)}%</p>
          <p>Persentase pasien perempuan: ${femalePercentage.toFixed(2)}%</p>
        `;
      });
    </script>
  </body>
</html>

