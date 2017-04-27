<body>
    <div id="wrapper">
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Kuesioner <a href="<?php echo base_url('kuesioner/form'); ?>" class="btn btn-sm btn-info"><i class="fa fa-plus"></i> Mulai Kuesioner</a></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Table Track Kuesioner
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
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php  
                                        $no=0;
                                        foreach ($alumni as $row):
                                        $no++;
                                    ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $row['nim'] ?></td>
                                            <td><?php echo $row['nama']; ?></td>
                                            <td><?php echo $row['created']; ?></td>
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