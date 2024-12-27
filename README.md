Nama: Marchel Ferry Timoteus S

NIM: 121140195

Link web:
[marchel-121140195-pwb.great-site.net](https://marchel-121140195-pwb.great-site.net/) 

Admin account:

email: marchel.121140195@student.iterac.a.cid

pass: 1234

User accout:

email: marselferry@gmail.com

pass: 123

# Hosting Aplikasi Web di InfinityFree

## Langkah-langkah untuk Meng-host Aplikasi Web:

1. **Registrasi Akun**
   - Kunjungi [InfinityFree](https://www.infinityfree.net/) dan daftar untuk akun gratis. Isi formulir pendaftaran dengan data yang valid.

2. **Buat Database**
   - Setelah akun siap, buat database MySQL untuk menyimpan data aplikasi. InfinityFree menyediakan layanan database MySQL gratis.

3. **Unggah File Aplikasi**
   - Hapus file yang tersedia di direktori  `htdocs` dan unggah file aplikasi anda ke direktori. 

4. **Konfigurasi Aplikasi**
   - Sesuaikan konfigurasi aplikasi anda dengan lingkungan hosting. Ini termasuk mengatur koneksi database, URL, dan pengaturan lainnya yang sesuai dengan server.

5. **Akses Aplikasi**
   - Setelah file diunggah dan konfigurasi selesai, akses aplikasi Anda menggunakan URL yang diberikan oleh InfinityFree.

## Penyedia Hosting yang Direkomendasikan

InfinityFree adalah pilihan yang baik untuk memulai, terutama untuk aplikasi web sederhana dengan anggaran terbatas. Namun, ada beberapa keterbatasan:

- **Keterbatasan Sumber Daya:** CPU dan RAM yang terbatas dapat memengaruhi performa jika traffic tinggi.
- **Fitur Terbatas:** Tidak sebanyak fitur yang ditawarkan penyedia hosting berbayar.
- **Stabilitas:** Berpotensi mengalami downtime atau penurunan performa.


### Memilih Penyedia Hosting:
- **Anggaran:** Berapa banyak yang ingin Anda keluarkan?
- **Kebutuhan:** Sumber daya dan fitur apa yang diperlukan oleh aplikasi Anda?
- **Fitur:** Cari fitur seperti SSL, backup otomatis, dan dukungan teknis.

## Praktik Keamanan untuk Aplikasi Web

1. **Perbarui Aplikasi Secara Berkala:**
   - Selalu perbarui aplikasi dan komponennya untuk menambal kerentanan.

2. **Gunakan Password yang Kuat:**
   - Pastikan menggunakan password yang kuat dan unik untuk akun hosting dan database.

3. **Batasi Akses:**
   - Batasi akses ke direktori sensitif seperti admin atau konfigurasi.

4. **Pasang Firewall:**
   - Gunakan firewall untuk melindungi server dari serangan berbahaya.

5. **Backup Data Secara Berkala:**
   - Lakukan backup data secara teratur untuk mencegah kehilangan data.

6. **Aktifkan SSL/TLS:**
   - Amankan koneksi antara server dan browser pengguna dengan sertifikat SSL/TLS.

# Bagian-Bagian Website

## Form Daftar
![Form Daftar](image/form_daftar.png)

## Form Login
![Form Login](image/form_login.png)

## Halaman User
![Halaman User](image/hal_user.png)

## Halaman Admin
![Halaman Admin](image/hal_admin.png)

## Form Tambah Data
![Form Tambah Data](image/form_tambah_data.png)

## Form Edit Data
![Form Edit Data](image/form_edit_data.png)

## Form Detail
![Form Detail](image/form_detail.png)

## Tombol Hapus Data
![Hapus Data](image/tombol_hapus.png)

# Langkah-Langkah Membuat Database dan Tabel di phpMyAdmin dan Laragon

## Masuk ke phpMyAdmin
1. Aktifkan laragon dan tekan tombol database untuk akses URL phpMyAdmin (contoh: `http://localhost/phpmyadmin`).

## Membuat Database Baru
1. Klik tab **Databases**.
2. Pada kolom **Database name**, masukkan nama database: `students`.
3. Pilih **Collation** (contoh: `utf8_general_ci`) agar mendukung berbagai karakter.
4. Klik tombol **Create**.

## Membuat Tabel `student_info`
1. Klik database `students` di sidebar kiri.
2. Klik tab **SQL** untuk menjalankan query SQL.
3. Masukkan query berikut untuk membuat tabel `student_info`:
   ```sql
   CREATE TABLE `student_info` (
     `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
     `name` VARCHAR(100) NOT NULL,
     `nim` VARCHAR(20) NOT NULL,
     `prodi` VARCHAR(50) NOT NULL,
     `gender` ENUM('Laki-laki', 'Perempuan') NOT NULL,
     `email` VARCHAR(100) NOT NULL,
     `phone` VARCHAR(20) NOT NULL,
     `interest` VARCHAR(100) NOT NULL,
     `address` TEXT
   );
   ``` 
4. Klik Go untuk mengeksekusi query.

## Membuat Tabel `users`
1. Masukkan query berikut di tab SQL untuk membuat tabel `users`:
```
CREATE TABLE `users` (
  `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `user_type` ENUM('admin', 'user') NOT NULL,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```
2. Klik Go untuk mengeksekusi query.
