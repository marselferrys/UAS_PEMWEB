<?php

include('database.php');

session_start();
session_unset();
session_destroy();

// Output HTML untuk menampilkan alert
echo "
    <script>
        alert('Anda telah keluar.');
        window.location.href = 'index.php';
    </script>
";
exit;

?>