<body>
    <div id="wrapper">
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Form Edit</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Form Edit
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <?php echo form_open(base_url('kuesioner/send')); ?>
                                    <h1><b>Identitas Alumni</b></h1> 
                                    <hr>
                                    <?php 
                                        foreach ($alumni as $row):
                                    ?>
                                        <div class="form-group">
                                            <label>NIM</label>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <input type="hidden" class="form-control" name="nim" value="<?php echo $row['id']; ?>" readonly>
                                                    <input class="form-control" name="nim" value="<?php echo $row['nim']; ?>" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Lengkap</label>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <input class="form-control" name="nama" value="<?php echo $row['nama'] ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <input class="form-control" name="password">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Konfirmasi Password</label>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <input class="form-control" name="konfirmasi_password">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Email<?php echo form_error('nama'); ?></label>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <input class="form-control" name="email" value="<?php echo $row['email'] ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <textarea name="alamat" rows="4" class="form-control"><?php echo $row['alamat']; ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                            endforeach;
                                        ?>
                                        <button type="submit" class="btn btn-primary btn-sm" onclick="return confirm('Anda Yakin Menambah Data Ini?');">Kirim</button>
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