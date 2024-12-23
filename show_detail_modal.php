<!-- Detail Model -->
<div class="modal fade" id="detail<?php echo $row['id']; ?>" tabindex="-1" 
role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" 
aria-hidden="true">&times;</button>
<h3><b>Detail Profil</b> </h3>
</div>
<div class="modal-body">
<?php
$edit=$mysqli->query("select * from student_info where id=".$row['id']);
$erow=$edit->fetch_assoc();
?>
<div class="container-fluid">
<form method="POST" action="update.php?id=<?php echo $erow['id']; ?>" 
enctype="multipart/form-data">
 
<div class="row">
<div class="col-lg-12" align="center">
<?php $img = "profile_images/".$row['nim']. ".jpg";?>
<img src='<?php echo $img ?>' height="150px" width="170px" class="profile-photo" />
</div>
</div>

<div style="height:5px;"></div>
<div class="row">
<div class="col-lg-4" align="left">
<label style="position:relative; top:7px;">Nama:</label>
</div>
<div class="col-lg-8" align="left">
<?php echo $erow['name']; ?>
</div>
</div>

<div style="height:5px;"></div>
<div class="row">
<div class="col-lg-4" align="left">
<label style="position:relative; top:7px;">NIM:</label>
</div>
<div class="col-lg-8" align="left">
<?php echo $erow['nim']; ?>
</div>
</div>

<div style="height:5px;"></div>
<div class="row">
<div class="col-lg-4" align="left">
<label style="position:relative; top:7px;">Prodi:</label>
</div>
<div class="col-lg-8" align="left">
<?php echo $erow['prodi']; ?>
</div>
</div>

<div style="height:5px;"></div>
<div class="row">
<div class="col-lg-4" align="left">
<label style="position:relative; top:7px;">Jenis Kelamin:</label>
</div>
<div class="col-lg-8" align="left">
<?php echo $erow['gender']; ?>
</div>
</div>

<div style="height:5px;"></div>
<div class="row">
<div class="col-lg-4" align="left">
<label style="position:relative; top:7px;">Email:</label>
</div>
<div class="col-lg-8" align="left">
<?php echo $erow['email']; ?>
</div>
</div>



<div style="height:5px;"></div>
<div class="row">
<div class="col-lg-4" align="left">
<label class="control-label" style="position:relative; top:7px;">No.HP:</label>
</div>
<div class="col-lg-8" align="left">
<?php echo $erow['phone']; ?>
</div>
</div>

<div style="height:5px;"></div>
<div class="row">
<div class="col-lg-4" align="left">
<label style="position:relative; top:7px;">Bidang Minat:</label>
</div>
<div class="col-lg-8" align="left">
<?php echo $erow['interest']; ?>
</div>
</div>

 
<div style="height:5px;"></div>
<div class="row">
<div class="col-lg-4" align="left">
<label style="position:relative; top:7px;">Alamat:</label>
</div>
<div class="col-lg-8" align="left">
<?php echo $erow['address']; ?>
</div>
</div>

 
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal"> 
Close</button>
 
</div>
</form>
</div>
</div>
</div>
<!-- /.modal -->