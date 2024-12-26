<?php
include('database.php');
session_start();

$id= intval($_GET['id']);
$name = $_POST['name'];
$nim = $_POST['nim'];
$prodi = $_POST['prodi'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$interest = $_POST['interest'];
$address = $_POST['address'];

// Validasi jika NIM atau email sudah ada
$stmt_nim = $mysqli->prepare("SELECT id FROM student_info WHERE nim = ? AND id != ?");
$stmt_nim->bind_param("si", $nim, $id);
$stmt_nim->execute();
if ($stmt_nim->get_result()->num_rows > 0) {
    die("NIM sudah ada!");
}

$stmt_email = $mysqli->prepare("SELECT id FROM student_info WHERE email = ? AND id != ?");
$stmt_email->bind_param("si", $email, $id);
$stmt_email->execute();
if ($stmt_email->get_result()->num_rows > 0) {
    die("Email sudah ada!");
}
 
// Update data
$stmt_update = $mysqli->prepare("UPDATE student_info SET name = ?, nim = ?, prodi = ?, gender = ?, email = ?, phone = ?, interest = ?, address = ? WHERE id = ?");
$stmt_update->bind_param("ssssssssi", $name, $nim, $prodi, $gender, $email, $phone, $interest, $address, $id);
 
// Set a constant
define ("FILEREPOSITORY","profile_images/");
 
// Make sure that the file was POSTed.
if (is_uploaded_file($_FILES['pimage']['tmp_name']))
{
// Was the file a JPEG?
if ($_FILES['pimage']['type'] != "image/jpeg") {
echo "<p>Profile image must be uploaded in JPEG format.</p>";
} else {
 
//$name = $_FILES['classnotes']['name'];
$filename=$nim.".jpg";
 
unlink(FILEREPOSITORY.$filename);
$result = move_uploaded_file($_FILES['pimage']['tmp_name'], FILEREPOSITORY.$filename);

if ($result == 1) echo "<p>File successfully uploaded.</p>";
else echo "<p>There was a problem uploading the file.</p>";
}
}
 
// Redirect sesuai jenis pengguna
if ($_SESSION['type'] == 'admin') {
    header('Location: crud.php');
} else {
    header('Location: user.php');
}
exit();
?>
