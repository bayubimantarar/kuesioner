<body>
    <div id="wrapper">
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tabel Kuesioner <a href="<?php echo base_url('int/alumni/export_excel'); ?>" class="btn btn-sm btn-success"><i class="fa fa-file-excel-o"></i> Export Excel</a></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Tabel Kuesioner
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>NIM</th>
                                            <th>Nama</th>
                                            <th>Tanggal Kuesioner</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php  
                                        $no=0;
                                        foreach ($kuesioner as $row):
                                        $no++;
                                    ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $row['nim']; ?></a></td>
                                            <td><?php echo $row['nama']; ?></td>
                                            <td><?php echo $row['tanggal_kuesioner']; ?></td>
                                            <td><a href="<?php echo base_url('int/users/users_delete/'.$row['id']); ?>" class="btn btn-circle btn-danger" onclick="return confirm('Anda yakin akan menghapus data ini?')"><i class="fa fa-remove"></i></a> <a href="<?php echo base_url('int/alumni/export_excel_byid/'.$row['id']); ?>" class="btn btn-circle btn-success"><i class="fa fa-file-excel-o"></i></a></td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
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