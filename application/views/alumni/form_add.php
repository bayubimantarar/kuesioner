<body>
    <div id="wrapper">
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Form add users</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Form add users
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <?php echo form_open(base_url('alumni/add_process')); ?>
                                        <div class="form-group">
                                            <label>NIM<?php echo form_error('nim'); ?></label>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <input class="form-control" name="nim" value="<?php echo set_value('nim'); ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Lengkap<?php echo form_error('nama'); ?></label>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <input class="form-control" name="nama" value="<?php echo set_value('nama'); ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Password<?php echo form_error('password'); ?></label>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <input type="password" class="form-control" name="password">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Konfirmasi Password<?php echo form_error('confirm_password'); ?></label>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <input type="password" class="form-control" name="confirm_password">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Jurusan</label>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <select name="jurusan" class="form-control">
                                                        <option value="1">Teknik Informatika</option>
                                                        <option value="2">Sistem Informasi</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Email<?php echo form_error('email'); ?></label>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <input class="form-control" name="email" value="<?php echo set_value('email'); ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat<?php echo form_error('alamat'); ?></label>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <textarea name="alamat" class="form-control" rows="4"></textarea>
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
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
</body>
</html>