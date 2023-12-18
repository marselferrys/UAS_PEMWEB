<?php
// Koneksi ke database
$servername = "localhost";
$username = "username_database";
$password = "password_database";
$dbname = "chel_course_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

// Ambil data dari formulir HTML
$full_name = $_POST['user_name'];
$email = $_POST['user_mail'];
$phone_number = $_POST['user_number'];
$institution = $_POST['user_univ'];
$instagram = $_POST['user_insta'];
$course = $_POST['course'];
$interests = implode(", ", $_POST['interests']);
$receive_info = isset($_POST['radio']) && $_POST['radio'] == 'Html_format' ? 1 : 0;
$reason = $_POST['reason'];

// Masukkan data ke database
$sql = "INSERT INTO registrations (full_name, email, phone_number, institution, instagram, course, interests, receive_info, reason)
        VALUES ('$full_name', '$email', '$phone_number', '$institution', '$instagram', '$course', '$interests', '$receive_info', '$reason')";

if ($conn->query($sql) === TRUE) {
    echo "Pendaftaran berhasil!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Tutup koneksi
$conn->close();
?>
