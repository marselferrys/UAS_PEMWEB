<!-- Add New Employee -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Tambah Data</h4></center>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="POST" action="insert.php" class="form-horizontal" enctype="multipart/form-data" onclick="">
                        <div class="row">
                            <div class="col-lg-4">
                                <label class="control-label" style="position:relative; top:7px;">Nama Lengkap:</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" name="name" required>
                            </div>
                        </div>
                        <div style="height:10px;"></div>

                        <div class="row">
                            <div class="col-lg-4">
                                <label class="control-label" style="position:relative; top:7px;">NIM:</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" name="nim" required>
                            </div>
                        </div>
                        <div style="height:10px;"></div>

                        <div class="row">
                            <div class="col-lg-4">
                                <label class="control-label" style="position:relative; top:7px;">Prodi:</label>
                            </div>
                            <div class="col-lg-8">
                                <select name="prodi" class="form-control" required>
                                    <option value="" disabled selected>Pilih Program Studi</option>
                                    <option value="Teknik Elektro">Teknik Elektro</option>
                                    <option value="Teknik Geofisika">Teknik Geofisika</option>
                                    <option value="Teknik Informatika">Teknik Informatika</option>
                                    <option value="Teknik Geologi">Teknik Geologi</option>
                                    <option value="Teknik Mesin">Teknik Mesin</option>
                                    <option value="Teknik Industri">Teknik Industri</option>
                                    <option value="Teknik Kimia">Teknik Kimia</option>
                                    <option value="Teknik Elektro">Program Studi Teknik Elektro</option>
                                    <option value="Teknik Kimia">Program Studi Teknik Kimia</option>
                                    <option value="Teknik Fisika">Program Studi Teknik Fisika</option>
                                    <option value="Teknik Biosistem">Program Studi Teknik Biosistem</option>
                                    <option value="Teknologi Industri Pertanian">Program Studi Teknologi Industri Pertanian</option>
                                    <option value="Teknologi Pangan">Program Studi Teknologi Pangan</option>
                                    <option value="Teknik Sistem Energi">Program Studi Teknik Sistem Energi</option>
                                    <option value="Teknik Pertambangan">Program Studi Teknik Pertambangan</option>
                                    <option value="Teknik Material">Program Studi Teknik Material</option>
                                    <option value="Teknik Telekomunikasi">Program Studi Teknik Telekomunikasi</option>
                                    <option value="Rekayasa Kehutanan">Program Studi Rekayasa Kehutanan</option>
                                    <option value="Teknik Biomedik">Program Studi Teknik Biomedik</option>
                                    <option value="Rekayasa Kosmetik">Program Studi Rekayasa Kosmetik</option>
                                    <option value="Rekayasa Minyak dan Gas">Program Studi Rekayasa Minyak dan Gas</option>
                                    <option value="Rekayasa Instrumentasi dan Automasi">Program Studi Rekayasa Instrumentasi dan Automasi</option>
                                </select>
                            </div>
                        </div>
                        <div style="height:10px;"></div>

                        <div class="row">
                            <div class="col-lg-4">
                                <label class="control-label" style="position:relative; top:7px;">Jenis Kelamin:</label>
                            </div>
                            <div class="col-lg-8">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="gender" value="Laki-laki" required> Laki-laki
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="gender" value="Perempuan" required> Perempuan
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div style="height:10px;"></div>

                        <div class="row">
                            <div class="col-lg-4">
                                <label class="control-label" style="position:relative; top:7px;">Email:</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="email" class="form-control" name="email" required>
                            </div>
                        </div>
                        <div style="height:10px;"></div>

                        <div class="row">
                            <div class="col-lg-4">
                                <label class="control-label" style="position:relative; top:7px;">No. Telp:</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" name="phone" required>
                            </div>
                        </div>
                        <div style="height:10px;"></div>

                        <div class="row">
                            <div class="col-lg-4">
                                <label class="control-label" style="position:relative; top:7px;">Bidang Minat:</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" name="interest" required>
                            </div>
                        </div>
                        <div style="height:10px;"></div>

                        <div class="row">
                            <div class="col-lg-4">
                                <label class="control-label" style="position:relative; top:7px;">Alamat:</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" name="address" required>
                            </div>
                        </div>
                        <div style="height:10px;"></div>

                        <div class="row">
                            <div class="col-lg-4">
                                <label class="control-label" style="position:relative; top:7px;">Photo Profil:</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="file" class="filestyle" name="pimage" required>
                            </div>
                        </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">
                    <span class="glyphicon glyphicon-remove"></span> Batal
                </button>
                <button type="reset" class="btn btn-warning">
                    <span class="glyphicon glyphicon-refresh"></span> Reset
                </button>
                <button type="submit" class="btn btn-primary">
                    <span class="glyphicon glyphicon-floppy-disk"></span> Simpan</a>
                </form>
            </div>
        </div>
    </div>
</div>
