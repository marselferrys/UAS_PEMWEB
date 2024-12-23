<?php

include('database.php');
session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
    header('location:index.php');
    exit();
}

$email = $_SESSION['user_email'];
$query = $mysqli->query("SELECT * FROM student_info WHERE email = '$email'");

if ($query->num_rows > 0) {
    $row = $query->fetch_assoc();
} else {
    die('<main><p>Data mahasiswa tidak ditemukan!</p></main>');
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Mahasiswa</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css"></style>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-filestyle/2.1.0/bootstrap-filestyle.min.js"> </script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        header {
            text-align: center;
            padding: 20px;
            background-color: rgb(177, 172, 209);
            color: white;
            position: relative;
        }

        header img {
            width: 80px;
        }

        header h2 {
            margin: 10px 0;
            font-weight: bold;
        }

        header .logout-btn {
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #e63946;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            display: inline-block;
        }

        main {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .profile {
            display: flex;
            flex-direction: row;
            gap: 20px;
        }

        .profile-photo {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 5px solid #4CAF50; /* Frame hijau */
        }

        .profile-details {
            flex: 1;
        }

        .profile-details table {
            width: 100%;
            border-collapse: collapse;
        }

        .profile-details th, .profile-details td {
            text-align: left;
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }

        .profile-details th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        .profile-details tr:hover {
            background-color: #f5f5f5; /* Warna latar saat hover */
            transition: background-color 0.3s ease; /* Transisi halus */
        }

        .profile-details .edit-btn {
            padding: 8px 16px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .profile-details .edit-btn:hover {
            background-color: #0056b3;
        }

        footer {
            text-align: left;
            padding: 10px;
            background-color: rgb(177, 172, 209);
            color: white;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<header>
    <img src="https://upload.wikimedia.org/wikipedia/commons/e/ef/Logo_ITERA.png" alt="Logo ITERA">
    <h2>PROFIL MAHASISWA</h2>
    <button class="logout-btn" onclick="window.location.href='logout.php';">Logout</button>
</header>

<main>
    <section class="profile">
        <img src="./profile_images/<?php echo $row['nim']; ?>.jpg" alt="Foto Profil" class="profile-photo">
        <div class="profile-details">
            <table>
                <tr>
                    <th>Nama Lengkap</th>
                    <td><?php echo $row['name']; ?></td>
                </tr>
                <tr>
                    <th>NIM</th>
                    <td><?php echo $row['nim']; ?></td>
                </tr>
                <tr>
                    <th>Prodi</th>
                    <td><?php echo $row['prodi']; ?></td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td><?php echo $row['gender']; ?></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><a href="mailto:<?php echo $row['email']; ?>"><?php echo $row['email']; ?></a></td>
                </tr>
                <tr>
                    <th>No. Telp</th>
                    <td><?php echo $row['phone']; ?></td>
                </tr>
                <tr>
                    <th>Bidang Minat</th>
                    <td><?php echo $row['interest']; ?></td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td><?php echo $row['address']; ?></td>
                </tr>
            </table>
            <br>
            <a href="#edit<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-warning btn-sm">
            <span class="glyphicon glyphicon-pencil">&nbsp;</span>Edit</a>&nbsp;
            <!-- Include edit modal -->
            <?php include('show_edit_modal.php'); ?>
        </div>
    </section>
</main>

<footer>
    <p><b>@2024. By marselferrys</b></p>
</footer>

</body>
</html>
