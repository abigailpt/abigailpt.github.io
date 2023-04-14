<?php
session_start();

// Verifikasi role pengguna
if (!isset($_SESSION['role']) || $_SESSION['role'] != 'karyawan') {
    echo "
    <script>
        alert('Silahkan login terlebih dahulu');
        window.location.href = 'login.php';
    </script>";
    session_destroy();
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
	<title>Data Dokter</title>
	<style>
		body {
			background-color: pink;
		}

		h1 {
			text-align: center;
			font-size: 36px;
			margin-top: 50px;
			margin-bottom: 30px;
			color: #4c4c4c;
		}

		table {
			border-collapse: collapse;
			margin: 0 auto;
			font-size: 18px;
			border: 2px solid #4c4c4c;
			width: 80%;
		}

		table th, table td {
			padding: 10px;
			text-align: center;
			border: 1px solid #4c4c4c;
		}

		table th {
			background-color: #4c4c4c;
			color: #fff;
		}
	</style>
</head>
<body>
    <nav>
        <div class="luar">
            <div class="logo"><a href="beranda.html">KLINIK DOKTER GIGI</a></div>
            <div class="menu">
                <ul>
                    <li><a href="logout.php">Logout</a></li>
                    <li><a href="#karyawan" class="btn-hijau">Karyawan</a></li>
                </ul>
            </div>
        </div>
    </nav>
	<h1>Data Dokter</h1>
	<table>
		<tr>
			<th>Nama Dokter</th>
			<th>Umur</th>
			<th>Spesialis</th>
			<th>Jadwal Kerja</th>
		</tr>
		<tr>
			<td>drg. John Doe</td>
			<td>35</td>
			<td>Scaling</td>
			<td>Senin-Jumat 09.00-20.00</td>
		</tr>
		<tr>
			<td>drg. Jane Smith</td>
			<td>40</td>
			<td>Pencabutan</td>
			<td>Senin-Jumat 08.00-18.00</td>
		</tr>
		<tr>
			<td>drg. James Lee</td>
			<td>45</td>
			<td>Penambalan</td>
			<td>Senin-Sabtu 11.00-18.00</td>
		</tr>
        <tr>
            <td>drg. Hendra</td>
			<td>45</td>
			<td>Orthodonti</td>
			<td>Senin-Jumat 09.00-22.00</td>
        </tr>
	</table>
</body>
</html>