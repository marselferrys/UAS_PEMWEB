<div class="modal fade" id="edit<?php echo $row['id']; ?>" tabindex="-1" 
role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">  
<button type="button" class="close" data-dismiss="modal" 
aria-hidden="true">&times;</button>
<center><h4 class="modal-title" id="myModalLabel">Ubah Data</h4></center>
</div>
<div class="modal-body">
<?php
$edit = $mysqli->query("SELECT * FROM student_info WHERE id=" . $row['id']);
$erow = $edit->fetch_assoc();
?>
<div class="container-fluid">
<form method="POST" action="update.php?id=<?php echo $erow['id']; ?>" 
enctype="multipart/form-data">

<div class="row">
<div class="col-lg-4" align="left">
<label style="position:relative; top:7px;">Nama:</label>
</div>
<div class="col-lg-8">
<input type="text" name="name" class="form-control" 
value="<?php echo $erow['name']; ?>">
</div>
</div>
<div style="height:10px;"></div>

<div class="row">
<div class="col-lg-4" align="left">
<label style="position:relative; top:7px;">NIM:</label>
</div>
<div class="col-lg-8">
<input type="text" name="nim" class="form-control" 
value="<?php echo $erow['nim']; ?>">
</div>
</div>

<div style="height:5px;"></div>
<div class="row">
    <div class="col-lg-4" align="left">
        <label style="position:relative; top:7px;">Prodi:</label>
    </div>
    <div class="col-lg-8" align="left">
        <select name="prodi" class="form-control" >
            <option value="" disabled>Pilih Program Studi</option>
            <option value="Teknik Elektro" <?php if ($erow['prodi'] == 'Teknik Elektro') echo 'selected'; ?>>Program Studi Teknik Elektro</option>
            <option value="Teknik Geofisika" <?php if ($erow['prodi'] == 'Teknik Geofisika') echo 'selected'; ?>>Program Studi Teknik Geofisika</option>
            <option value="Teknik Informatika" <?php if ($erow['prodi'] == 'Teknik Informatika') echo 'selected'; ?>>Program Studi Teknik Informatika</option>
            <option value="Teknik Geologi" <?php if ($erow['prodi'] == 'Teknik Geologi') echo 'selected'; ?>>Program Studi Teknik Geologi</option>
            <option value="Teknik Mesin" <?php if ($erow['prodi'] == 'Teknik Mesin') echo 'selected'; ?>>Program Studi Teknik Mesin</option>
            <option value="Teknik Industri" <?php if ($erow['prodi'] == 'Teknik Industri') echo 'selected'; ?>>Program Studi Teknik Industri</option>
            <option value="Teknik Kimia" <?php if ($erow['prodi'] == 'Teknik Kimia') echo 'selected'; ?>>Program Studi Teknik Kimia</option>
            <option value="Teknik Fisika" <?php if ($erow['prodi'] == 'Teknik Fisika') echo 'selected'; ?>>Program Studi Teknik Fisika</option>
            <option value="Teknik Biosistem" <?php if ($erow['prodi'] == 'Teknik Biosistem') echo 'selected'; ?>>Program Studi Teknik Biosistem</option>
            <option value="Teknologi Industri Pertanian" <?php if ($erow['prodi'] == 'Teknologi Industri Pertanian') echo 'selected'; ?>>Program Studi Teknologi Industri Pertanian</option>
            <option value="Teknologi Pangan" <?php if ($erow['prodi'] == 'Teknologi Pangan') echo 'selected'; ?>>Program Studi Teknologi Pangan</option>
            <option value="Teknik Sistem Energi" <?php if ($erow['prodi'] == 'Teknik Sistem Energi') echo 'selected'; ?>>Program Studi Teknik Sistem Energi</option>
            <option value="Teknik Pertambangan" <?php if ($erow['prodi'] == 'Teknik Pertambangan') echo 'selected'; ?>>Program Studi Teknik Pertambangan</option>
            <option value="Teknik Material" <?php if ($erow['prodi'] == 'Teknik Material') echo 'selected'; ?>>Program Studi Teknik Material</option>
            <option value="Teknik Telekomunikasi" <?php if ($erow['prodi'] == 'Teknik Telekomunikasi') echo 'selected'; ?>>Program Studi Teknik Telekomunikasi</option>
            <option value="Rekayasa Kehutanan" <?php if ($erow['prodi'] == 'Rekayasa Kehutanan') echo 'selected'; ?>>Program Studi Rekayasa Kehutanan</option>
            <option value="Teknik Biomedik" <?php if ($erow['prodi'] == 'Teknik Biomedik') echo 'selected'; ?>>Program Studi Teknik Biomedik</option>
            <option value="Rekayasa Kosmetik" <?php if ($erow['prodi'] == 'Rekayasa Kosmetik') echo 'selected'; ?>>Program Studi Rekayasa Kosmetik</option>
            <option value="Rekayasa Minyak dan Gas" <?php if ($erow['prodi'] == 'Rekayasa Minyak dan Gas') echo 'selected'; ?>>Program Studi Rekayasa Minyak dan Gas</option>
            <option value="Rekayasa Instrumentasi dan Automasi" <?php if ($erow['prodi'] == 'Rekayasa Instrumentasi dan Automasi') echo 'selected'; ?>>Program Studi Rekayasa Instrumentasi dan Automasi</option>
        </select>
    </div>
</div>

<div style="height:5px;"></div>
<div class="row">
    <div class="col-lg-4" align="left">
        <label style="position:relative; top:7px;">Jenis Kelamin:</label>
    </div>
    <div class="col-lg-8" align="left">
        <div class="radio">
            <label>
                <input type="radio" name="gender" value="Laki-laki" <?php if ($erow['gender'] == 'Laki-laki') echo 'checked'; ?> > Laki-laki
            </label>
        </div>
        <div class="radio">
            <label>
                <input type="radio" name="gender" value="Perempuan" <?php if ($erow['gender'] == 'Perempuan') echo 'checked'; ?> > Perempuan
            </label>
        </div>
    </div>
</div>

<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4" align="left">
<label style="position:relative; top:7px;">Email:</label>
</div>
<div class="col-lg-8">
<input type="email" name="email" class="form-control" 
value="<?php echo $erow['email']; ?>">
</div>
</div>
<div style="height:10px;"></div>

<div class="row">
<div class="col-lg-4" align="left">
<label style="position:relative; top:7px;">No. Telp:</label>
</div>
<div class="col-lg-8">
<input type="text" name="phone" class="form-control" 
value="<?php echo $erow['phone']; ?>">
</div>
</div>
<div style="height:10px;"></div>

<div class="row">
<div class="col-lg-4" align="left">
<label style="position:relative; top:7px;">Bidang Minat:</label>
</div>
<div class="col-lg-8">
<input type="text" name="interest" class="form-control" 
value="<?php echo $erow['interest']; ?>">
</div>
</div>
<div style="height:10px;"></div>

<div class="row">
<div class="col-lg-4" align="left">
<label style="position:relative; top:7px;">Alamat:</label>
</div>
<div class="col-lg-8">
<input type="text" name="address" class="form-control" 
value="<?php echo $erow['address']; ?>">
</div>
</div>
<div style="height:10px;"></div>

<div class="row">
<div class="col-lg-4" align="left">
<label style="position:relative; top:7px;">Photo Profil:</label>
</div>
<div class="col-lg-8">
<input type="file" class="filestyle" name="pimage">
</div>
</div>
<div style="height:10px;"></div>

</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">
<span class="glyphicon glyphicon-remove"></span> Batal</button>

<button type="reset" class="btn btn-warning">
<span class="glyphicon glyphicon-refresh"></span> Reset
</button>

<button type="submit" class="btn btn-warning">
<span class="glyphicon glyphicon-check"></span> Simpan</button>
</div>
</form>
</div>
</div>
</div>
<!-- /.modal -->
