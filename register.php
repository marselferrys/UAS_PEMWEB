<?php
include('database.php');
session_start();

$message = ''; // Variabel untuk pesan sukses atau error

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($mysqli, $_POST['name']);
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
    $password = mysqli_real_escape_string($mysqli, md5($_POST['password']));
    $confirm_password = mysqli_real_escape_string($mysqli, md5($_POST['cpassword']));
    $user_type = mysqli_real_escape_string($mysqli, $_POST['user_type']);

    // Periksa apakah email sudah terdaftar
    $check_user = mysqli_query($mysqli, "SELECT * FROM users WHERE email = '$email'") or die('Query failed');

    if (mysqli_num_rows($check_user) > 0) {
        $message = 'Email sudah terdaftar!';
    } else {
        // Periksa apakah password sesuai dengan konfirmasi
        if ($password != $confirm_password) {
            $message = 'Password dan konfirmasi password tidak sesuai!';
        } else {
            // Masukkan data pengguna ke tabel users
            $insert_user = mysqli_query($mysqli, "INSERT INTO users (name, email, password, user_type) VALUES ('$name', '$email', '$password', '$user_type')") or die('Query failed');

            if ($insert_user) {
                $message = 'success'; // Menandai pendaftaran berhasil
            } else {
                $message = 'Gagal mendaftarkan pengguna!';
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>

<div class="form-container">
    <form action="" method="post">
        <h3>Form Pendaftaran</h3>
        <input type="text" name="name" placeholder="Masukkan Nama Anda" required class="box">
        <input type="email" name="email" placeholder="Masukkan Email Anda" required class="box">
        <input type="password" name="password" placeholder="Masukkan Password Anda" required class="box">
        <input type="password" name="cpassword" placeholder="Konfirmasi Password Anda" required class="box">
        <select name="user_type" class="box">
            <option value="user">User</option>
            <option value="admin">Admin</option>
        </select>
        <label class="form-check">
            <input type="checkbox" class="form-check-input" name="terms_of_service" required>
            Data yang diberikan sudah benar
        </label>
        <input type="submit" name="submit" value="Register" class="btn">
        <p>Sudah punya akun? <a href="index.php">Login Sekarang!</a></p>
    </form>
</div>

<script>
    // Alert untuk pendaftaran berhasil atau pesan error
    const message = "<?php echo $message; ?>";

    if (message === 'success') {
        alert('Pendaftaran berhasil! Silakan login.');
        window.location.href = 'crud.php'; // Redirect ke halaman login
    } else if (message) {
        alert(message); // Menampilkan pesan error
    }
</script>

</body>
</html>
