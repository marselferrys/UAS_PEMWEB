<?php
//Membuat koneksi ke database
$mysqli = mysqli_connect("localhost","root","root","students");

if (!$mysqli) {

die("Connection error: " . mysqli_connect_error());

}
?>