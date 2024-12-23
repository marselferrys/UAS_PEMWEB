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
 
$mysqli->query("UPDATE student_info 
    SET 
        name='$name', 
        nim='$nim', 
        prodi='$prodi', 
        gender='$gender', 
        email='$email',
        phone='$phone', 
        interest='$interest', 
        address='$address' 
    WHERE id=$id");
 
 
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
$result = move_uploaded_file($_FILES['pimage']['tmp_name'],
FILEREPOSITORY.$filename);

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