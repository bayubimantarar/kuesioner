<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
</head>
<body>
	<div class="container">
		 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Basic Form Elements
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <?php echo form_open(base_url('dashboard/proses_tambah')); ?>
                                        <div class="form-group">
                                            <label>NIM</label>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <input class="form-control" name="nim">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Lengkap</label>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <input class="form-control" name="nama_mahasiswa">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Lulus</label>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <select class="form-control" name="tahun">
                                                        <?php
                                                            for($i=2016; $i>=1905; $i-=1):     
                                                        ?>
                                                        <option value="<?php echo $i; ?>"><?php echo $i ?></option>
                                                        <?php 
                                                            endfor; 
                                                        ?>     
                                                        </select>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                            <label>No HP</label>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <input class="form-control" name="no_hp">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <input class="form-control" name="email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <textarea class="form-control" rows="5" name="alamat"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-sm" onclick="return confirm('Anda Yakin Menambah Data Ini?');">Simpan</button>
                                        <button type="reset" class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
	</div>
</body>
</html>