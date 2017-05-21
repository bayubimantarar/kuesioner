<body>
<div id="myModalalumni" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalalumniLabel" aria-hidden="true"></div>
    <div id="wrapper">
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tabel Alumni <a href="<?php echo base_url('int/alumni/form_add'); ?>" class="btn btn-sm btn-info"><i class="fa fa-plus"></i> Tambah Data</a> <a href="<?php echo base_url('int/alumni/export_excel'); ?>" class="btn btn-sm btn-success"><i class="fa fa-file-excel-o"></i> Export Excel</a></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-md-12">
                    <?php if($this->session->flashdata('notif')): ?>
                        <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <?php echo $this->session->flashdata('notif'); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Data Alumni
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
                                            <th>Jurusan</th>
                                            <th>Email</th>
                                            <th>Alamat</th>
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
                                            <td><?php echo $row['nim']; ?></a></td>
                                            <td><?php echo $row['nama']; ?></td>
                                            <td>
                                            <?php 
                                                if($row['jurusan']==1){
                                                    echo "Teknik Informatika";
                                                }else{
                                                    echo "Sistem Informasi";
                                                }
                                            ?>
                                            </td>
                                            <td><?php echo $row['email']; ?></td>
                                            <td><?php echo $row['alamat']; ?></td>
                                            <td><a href="<?php echo base_url('int/alumni/form_edit/'.$row['id']); ?>" class="btn btn-circle btn-warning"><i class="fa fa-pencil"></i></a> <a href="<?php echo base_url('int/alumni/delete_process/'.$row['id']); ?>" class="btn btn-circle btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')"><i class="fa fa-remove"></i></a> <a href="<?php echo base_url('int/alumni/export_excel_byid/'.$row['id']); ?>" class="btn btn-circle btn-success"><i class="fa fa-file-excel-o"></i></a></td>
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