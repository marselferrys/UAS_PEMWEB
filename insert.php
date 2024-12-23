<?php
include('database.php');

$name = $_POST['name'];
$nim = $_POST['nim'];
$prodi = $_POST['prodi'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$interest = $_POST['interest'];
$address = $_POST['address'];

// Validate if NIM or email already exists
$check_nim = $mysqli->query("SELECT * FROM student_info WHERE nim = '$nim'");
$check_email = $mysqli->query("SELECT * FROM student_info WHERE email = '$email'");

if ($check_nim->num_rows > 0) {
    echo "<p>Error: NIM already exists.</p>";
    exit();
} elseif ($check_email->num_rows > 0) {
    echo "<p>Error: Email already exists.</p>";
    exit();
}

$mysqli->query("INSERT INTO student_info (name, nim, prodi, gender, email, phone, interest, address) 
VALUES ('$name', '$nim', '$prodi', '$gender', '$email', '$phone', '$interest', '$address')");

$res = $mysqli->query("SELECT id FROM student_info ORDER BY id DESC");
$row = $res->fetch_row();
$id = $row[0];

// Set a constant
define("FILEREPOSITORY", "profile_images/");

// Make sure that the file was POSTed.
if (is_uploaded_file($_FILES['pimage']['tmp_name'])) {
    // Was the file a JPEG?
    if ($_FILES['pimage']['type'] != "image/jpeg") {
        echo "<p>Profile image must be uploaded in JPEG format.</p>";
    } else {
        $filename = $nim . ".jpg";
        $result = move_uploaded_file($_FILES['pimage']['tmp_name'], FILEREPOSITORY . $filename);

        if ($result == 1) {
            echo "<p>File successfully uploaded.</p>";
        } else {
            echo "<p>There was a problem uploading the file.</p>";
        }
    }
}
header('location:crud.php');
?>
