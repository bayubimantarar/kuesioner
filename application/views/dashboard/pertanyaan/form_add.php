<body>
    <div id="wrapper">
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Form add pertanyaan</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Form add pertanyaan
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <?php echo form_open(base_url('dashboard/pertanyaan/pertanyaan_add')); ?>
                                        <div class="form-group">
                                            <label>Kategori</label>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <select name="id_kategori" class="form-control">
                                                        <?php 
                                                            foreach ($kategori as $row):
                                                        ?>
                                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['nama_kategori']; ?></option>
                                                        <?php 
                                                            endforeach;
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Pertanyaan<?php echo form_error('pertanyaan'); ?></label>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <textarea name="pertanyaan" class="form-control" rows="5"></textarea>
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