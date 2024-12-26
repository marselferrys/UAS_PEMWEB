<?php
class Database {
    private $host = "xxx"; // Hostname atau alamat server database (contoh: localhost, IP address, atau domain
    private $username = "xxx";  // Username untuk autentikasi ke database (biasanya root untuk localhost)
    private $password = "xxx";  // Password yang digunakan untuk autentikasi username
    private $database = "students"; // Nama database yang ingin diakses
    public $connection; // Properti publik untuk menyimpan koneksi database

    // Constructor untuk menginisialisasi koneksi
    public function __construct() {
        $this->connect();
    }

    // Metode untuk membuat koneksi ke database
    private function connect() {
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);

        if ($this->connection->connect_error) {
            die("Connection error: " . $this->connection->connect_error);
        }
    }

    // Metode untuk menutup koneksi (opsional)
    public function close() {
        if ($this->connection) {
            $this->connection->close();
        }
    }
}

// Membuat instance dari class Database
$db = new Database();
$mysqli = $db->connection; // Mengakses koneksi
?>
