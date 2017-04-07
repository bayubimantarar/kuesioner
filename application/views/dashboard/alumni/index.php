<body>
    <div id="wrapper">
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tables <!-- <a href="<?php echo base_url('dashboard/users/form_add_users'); ?>" class="btn btn-sm btn-info"><i class="fa fa-plus"></i> Tambah Data</a> --></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            DataTables Advanced Tables
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
                                            <th>Tahun Lulus</th>
                                            <th>No HP</th>
                                            <th>Email</th>
                                            <th>Kegiatan</th>
                                            <th>Opsi</th>
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
                                            <td><a href="<?php echo $row['nim']; ?>"><?php echo $row['nim']; ?></a></td>
                                            <td><?php echo $row['nama']; ?></td>
                                            <td><?php echo $row['lulus']; ?></td>
                                            <td><?php echo $row['no_hp']; ?></td>
                                            <td><?php echo $row['email']; ?></td>
                                            <td>
                                                <?php 
                                                    if($row['kegiatan']==1){
                                                        echo 'Bekerja';
                                                    }else if($row['kegiatan']==2){
                                                        echo 'Membuka Usaha';
                                                    }else{
                                                        echo 'Belum Bekerja';
                                                    }    
                                                ?>    
                                            </td>
                                            <td><a href="#" class="btn btn-circle btn-danger"><i class="fa fa-remove"></i></a> <a href="#" class="btn btn-circle btn-warning"><i class="fa fa-pencil"></i></a></td>
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