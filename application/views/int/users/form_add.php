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
                                    <?php echo form_open(base_url('int/users/users_add')); ?>
                                        <div class="form-group">
                                            <label>Username<?php echo form_error('username'); ?></label>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <input class="form-control" name="username" value="<?php echo set_value('username'); ?>">
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
                                            <label>Confirm Password<?php echo form_error('konfirmasi_password'); ?></label>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <input type="password" class="form-control" name="konfirmasi_password">
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