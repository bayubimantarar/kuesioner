<body>
    <div id="wrapper">
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header">
                    <?php echo form_open(base_url('int/diagram_it/export_excel_diagram_it')); ?>
                        <h1>Informasi Teknologi</h1>
                        <div class="form-group">
                            <label>Export excel:</label>
                        </div>
                        <div class="form-group">
                            <div class="form-inline">
                                <div class="form-group">
                                    <label>Jurusan</label>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <select name="jurusan" class="form-control">
                                                <option value="1">Teknik Informatika</option>
                                                <option value="2">Sistem Informasi</option>
                                                <option value="3">Semua Jurusan</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-inline">
                                <div class="form-group">
                                    <label>Tanggal</label>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <input type="date" name="dari" value="" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>/</label>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <input type="date" name="sampai" value="" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-sm btn-success "><i class="fa fa-file-excel-o"></i> Export Excel</button>
                            </div>
                        </div>
                    <?php echo form_close(); ?>
                </div> <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Informasi Teknologi
                        </div><!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="bar-diagram-it"></div>
                        </div><!-- /.panel-body -->
                    </div><!-- /.panel -->
                </div>
            </div><!-- /.row -->
    </div><!-- /#page-wrapper -->
</div><!-- /#wrapper -->