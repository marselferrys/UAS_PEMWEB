<?php
// Menyertakan file koneksi ke database
include('database.php');

// Mengambil parameter `id` dari URL menggunakan metode GET
$id = $_GET['id'];

// Melakukan query ke database untuk menghapus data mahasiswa berdasarkan `id`
// Menggunakan `$mysqli->query()` untuk menjalankan query SQL
$mysqli->query("DELETE FROM student_info WHERE id=$id");

// Menghapus file gambar profil mahasiswa berdasarkan ID mahasiswa
// Gambar dihapus dari folder `profile_images/` dengan nama file sesuai ID
unlink("profile_images/" . $id . ".jpg");

// Mengarahkan pengguna kembali ke halaman `crud.php` setelah proses penghapusan selesai
header('Location: crud.php');

?>
