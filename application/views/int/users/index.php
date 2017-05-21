<body>
    <div id="wrapper">
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                <h1 class="page-header">Table Users <a href="<?php echo base_url('int/users/form_add'); ?>" class="btn btn-sm btn-info"><i class="fa fa-plus"></i> Tambah Data</a></h1>
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
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Active Since</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php  
                                        $no=0;
                                        foreach ($users as $row):
                                        $no++;
                                    ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $row['username']; ?></a></td>
                                            <td><?php echo $row['email']; ?></td>
                                            <td><?php echo $row['active_since']; ?></td>
                                            <td><a href="<?php echo base_url('int/users/form_edit/'.$row['id']); ?>" class="btn btn-circle btn-warning"><i class="fa fa-pencil"></i></a> <a href="<?php echo base_url('int/users/users_delete/'.$row['id']); ?>" class="btn btn-circle btn-danger" onclick="return confirm('Anda yakin akan menghapus data ini?')"><i class="fa fa-remove"></i></a></td>
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