<?php
include('database.php');
session_start();

$message = ''; // Variabel untuk pesan sukses atau error

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
    $pass = mysqli_real_escape_string($mysqli, md5($_POST['password']));

    $select_users = mysqli_query($mysqli, "SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'") or die('Query failed');

    if (mysqli_num_rows($select_users) > 0) {
        $row = mysqli_fetch_assoc($select_users);

        if ($row['user_type'] == 'admin') {
            $_SESSION['type'] = $row['user_type'];
            $_SESSION['admin_name'] = $row['name'];
            $_SESSION['admin_email'] = $row['email'];
            $_SESSION['admin_id'] = $row['id'];
            $message = 'admin'; // Login sebagai admin
        } elseif ($row['user_type'] == 'user') {
            $_SESSION['type'] = $row['user_type'];
            $_SESSION['user_name'] = $row['name'];
            $_SESSION['user_email'] = $row['email'];
            $_SESSION['user_id'] = $row['id'];
            $message = 'user'; // Login sebagai user
        }
    } else {
        $message = 'Email atau password salah!';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>

<div class="form-container">
    <form action="" method="post">
        <h3>FORM LOGIN</h3>
        <input type="email" name="email" placeholder="Masukkan Email Anda" required class="box">
        <input type="password" name="password" placeholder="Masukkan Password Anda" required class="box">
        <input type="submit" name="submit" value="LOGIN" class="btn">
        <p>Tidak mempunyai akun? <a href="register.php">Daftarkan Sekarang!</a></p>
    </form>
</div>

<script>
    // Validasi pesan login
    const message = "<?php echo $message; ?>";

    if (message === 'admin') {
        alert('Login berhasil sebagai Admin!');
        window.location.href = 'crud.php'; // Redirect ke halaman admin
    } else if (message === 'user') {
        alert('Login berhasil sebagai User!');
        window.location.href = 'user.php'; // Redirect ke halaman user
    } else if (message) {
        alert(message); // Menampilkan pesan kesalahan
    }
</script>

</body>
</html>
