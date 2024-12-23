<?php

include('database.php');

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:crud.php');
}

?>

<!DOCTYPE html>
<html>
<head>

<title>Dashboard Data Mahasiswa</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css"></style>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-filestyle/2.1.0/bootstrap-filestyle.min.js"> </script>
<script>
$(document).ready(function(){
    $('#empTable').dataTable();
    $('.file-upload').file_upload();
});
</script>

<style>
.profile-photo {
  height: 150px;
  width: 150px;
  border-radius: 50%; /* Membuat gambar berbentuk lingkaran */
  object-fit: cover;
  border: 5px solid #4CAF50; /* Frame hijau */
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2); /* Efek bayangan */
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

        footer {
            text-align: center;
            justify-content: center;
            padding: 10px;
            background-color: rgb(177, 172, 209);
            color: white;
            margin-top: 20px;
        }

</style>

<!-- Font Awesome -->
<link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">

</head>
<body style="margin:20px auto">

<header>
    <img src="https://upload.wikimedia.org/wikipedia/commons/e/ef/Logo_ITERA.png" alt="Logo ITERA">
    <h2>Data Mahasiswa</h2>
    <button class="logout-btn" onclick="window.location.href='logout.php';">Logout</button>
</header>


<div class="container">
<br/><br/>
<div class="row header col-sm-12" style="text-align:center;color:green">
<span class="pull-left">
<a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm">
<span class="glyphicon glyphicon-plus"></span> Tambah Data
</a></span>

<div style="height:50px;"></div>
<table class="table table-striped table-bordered table-responsive table-hover" id="empTable">
    <thead>
        <th><center>Photo</center></th>
        <th><center>Nama Lengkap</center></th>
        <th><center>Nim</center></th>
        <th><center>Prodi</center></th>
        <th><center>Jenis Kelamin</center></th>
        <th><center>Email</center></th>
        <th><center>No. Telp</center></th>
        <th><center>Bidang Minat</center></th>
        <th><center>Alamat</center></th>
        <th><center>Action</center></th>
    </thead>
    <tbody>
        <?php
        $result = $mysqli->query("SELECT * FROM student_info");
        while($row = $result->fetch_assoc()){
        $img = "profile_images/".$row['nim']. ".jpg";
        ?>
        <tr>
            <td> <img src='<?php echo $img ?>' height="50px" width="70px" /></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['nim']; ?></td>
            <td><?php echo $row['prodi']; ?></td>
            <td><?php echo $row['gender']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td><?php echo $row['interest']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td>
                <a href="#detail<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-success btn-sm">
                    <span class="glyphicon glyphicon-eye-open">&nbsp;</span>Detail
                </a>&nbsp;
                <a href="#edit<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-warning btn-sm">
                    <span class="glyphicon glyphicon-pencil">&nbsp;</span>Edit
                </a>&nbsp;
                <a href="#del<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-danger btn-sm">
                    <span class="glyphicon glyphicon-trash">&nbsp;</span>Delete
                </a>&nbsp;

                <!-- Include detail modal -->
                <?php include('show_detail_modal.php'); ?>
                <!-- Include edit modal -->
                <?php include('show_edit_modal.php'); ?>
                <!-- Include delete modal -->
                <?php include('show_delete_modal.php'); ?>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>
</div>

<!-- Include add modal -->
<?php include('show_add_modal.php'); ?>
</div>

<footer>
    <p><b>@2024. By marselferrys</b></p>
</footer>

<script src="JS/script.js"></script>

</body>
</html>
