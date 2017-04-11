<body>
    <div id="wrapper">
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Form Kuesioner</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Form Kuesioner
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
                                            <label>NIM<?php echo form_error('nim'); ?></label>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <input class="form-control" name="nim" value="<?php echo $row['nim']; ?>" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Lengkap<?php echo form_error('nama'); ?></label>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <input class="form-control" name="nama" value="<?php echo $row['nama'] ?>" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Lulus Tahun</label>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <select name="lulus" class="form-control">
                                                    <?php
                                                        for($i=2015; $i>=1993; $i-=1):     
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
                                            <label>Nama perusahaan<?php echo form_error('nama_perusahaan'); ?></label>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <input class="form-control" name="nama_perusahaan" value="<?php echo set_value('nama_perusahaan'); ?>">
                                                </div>
                                            </div>
                                        </div> <div class="form-group">
                                            <label>Masuk Tahun</label>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <select name="lulus" class="form-control">
                                                    <?php
                                                        for($i=2015; $i>=1993; $i-=1):     
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
                                            <label>Sebagai<?php echo form_error('sebagai'); ?></label>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <input class="form-control" name="sebagai" value="<?php echo set_value('sebagai'); ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Pimpinanan<?php echo form_error('nama_pimpinan'); ?></label>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <input class="form-control" name="nama_pimpinan" value="<?php echo set_value('nama_pimpinan'); ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Email Pimpinan<?php echo form_error('email_pimpinan'); ?></label>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <input class="form-control" name="email_pimpinan" value="<?php echo set_value('email_pimpinan'); ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                            endforeach;
                                        ?>
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