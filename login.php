<?php
session_start();
session_unset();

// Menangkap data dari form login jika ada
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    // Menyimpan data role ke dalam session
    $_SESSION['role'] = $role;

    // Melakukan validasi login
    if ($username == 'admin' && $password == '123' && $role == 'admin') {
      $_SESSION['role'] = $role;
        header('Location: admin.php');
        exit; 
    } elseif ($username == 'karyawan' && $password == '123' && $role == 'karyawan') {
      $_SESSION['role'] = $role;
        header('Location: karyawan.php');
        exit; 
    } elseif ($username == 'pasien' && $password == '123' && $role == 'pasien') {
      $_SESSION['role'] = $role;
        header('Location: reservasi.php');
        exit; 
    } else {
        $error = 'Username atau salah!';
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="login.css">
    </head>
    <body>
        <div class="login">
            <h1>LOGIN</h1>
            <form action="login.php" method="post" id="form-login"> <!-- Mengganti action menjadi "login.php" -->
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" placeholder="Username" required><br>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Password" required><br>
                <select name="role">
                    <option value="admin">Admin</option>
                    <option value="karyawan">Karyawan</option>
                    <option value="pasien">Pasien</option>
                </select>
                <br><br>
                <button type="submit" id="login">LOGIN</button> <br>
                <br>
                <?php if (isset($error)) { ?>
                    <p style="color: red;"><?php echo $error; ?></p>
                <?php } ?>
            </form>
        </div>
    </body>
</html>