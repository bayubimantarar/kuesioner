<body>
    <div id="wrapper">
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Forms</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Basic Form Elements
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <?php echo form_open(base_url('dashboard/form')); ?>
                                        <div class="form-group">
                                            <label>NIM</label>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <input class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Lengkap</label>
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <input class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Lulus</label>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-inline">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <select class="form-control">
                                                            <option selected="selected">Tanggal</option>}
                                                            option
                                                            <?php 
                                                                for ($i=1; $i<32; $i++):
                                                            ?>
                                                              <option><?php echo $i; ?></option>
                                                            <?php 
                                                                endfor; 
                                                            ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <select class="form-control">
                                                                <option selected="selected">Bulan</option>
                                                                <?php
                                                                    $bulan = array(
                                                                            "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
                                                                    $jlh_bln=count($bulan);
                                                                    for($c=0; $c<$jlh_bln; $c+=1):
                                                                ?>
                                                                <option value="<?php echo $bulan[$c]; ?>"><?php echo $bulan[$c]; ?></option>
                                                                <?php  
                                                                    endfor;
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <select class="form-control">
                                                                <option selected="selected">Tahun</option>
                                                                <?php
                                                                    for($i=2016; $i>=1905; $i-=1):     
                                                                ?>
                                                               <option value="<?php echo $i; ?>"><?php echo $i ?></option>
                                                                <?php 
                                                                    endfor; 
                                                                ?>     
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>No HP</label>
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <input class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <input class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <textarea class="form-control" rows="5"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Status</label>
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <select name="status" class="form-control" id="status">
                                                        <option value="belum">Belum Bekerja</option>
                                                        <option value="bekerja">Bekerja</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
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
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default bekerja panel-q">
                        <div class="panel-heading">
                            Kerja
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <?php echo form_open(base_url('dashboard/form')); ?>
                                        <div class="form-group">
                                            <label>NIM</label>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <input class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Lengkap</label>
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <input class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Lulus</label>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-inline">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <select class="form-control">
                                                            <option selected="selected">Tanggal</option>}
                                                            option
                                                            <?php 
                                                                for ($i=1; $i<32; $i++):
                                                            ?>
                                                              <option><?php echo $i; ?></option>
                                                            <?php 
                                                                endfor; 
                                                            ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <select class="form-control">
                                                                <option selected="selected">Bulan</option>
                                                                <?php
                                                                    $bulan = array(
                                                                            "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
                                                                    $jlh_bln=count($bulan);
                                                                    for($c=0; $c<$jlh_bln; $c+=1):
                                                                ?>
                                                                <option value="<?php echo $bulan[$c]; ?>"><?php echo $bulan[$c]; ?></option>
                                                                <?php  
                                                                    endfor;
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <select class="form-control">
                                                                <option selected="selected">Tahun</option>
                                                                <?php
                                                                    for($i=2016; $i>=1905; $i-=1):     
                                                                ?>
                                                               <option value="<?php echo $i; ?>"><?php echo $i ?></option>
                                                                <?php 
                                                                    endfor; 
                                                                ?>     
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>No HP</label>
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <input class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <input class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <textarea class="form-control" rows="5"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-default">Submit Button</button>
                                        <button type="reset" class="btn btn-default">Reset Button</button>
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
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default belum panel-q">
                        <div class="panel-heading">
                            Belum
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <?php echo form_open(base_url('dashboard/form')); ?>
                                        <div class="form-group">
                                            <label>NIM</label>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <input class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Lengkap</label>
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <input class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Lulus</label>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-inline">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <select class="form-control">
                                                            <option selected="selected">Tanggal</option>}
                                                            option
                                                            <?php 
                                                                for ($i=1; $i<32; $i++):
                                                            ?>
                                                              <option><?php echo $i; ?></option>
                                                            <?php 
                                                                endfor; 
                                                            ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <select class="form-control">
                                                                <option selected="selected">Bulan</option>
                                                                <?php
                                                                    $bulan = array(
                                                                            "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
                                                                    $jlh_bln=count($bulan);
                                                                    for($c=0; $c<$jlh_bln; $c+=1):
                                                                ?>
                                                                <option value="<?php echo $bulan[$c]; ?>"><?php echo $bulan[$c]; ?></option>
                                                                <?php  
                                                                    endfor;
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <select class="form-control">
                                                                <option selected="selected">Tahun</option>
                                                                <?php
                                                                    for($i=2016; $i>=1905; $i-=1):     
                                                                ?>
                                                               <option value="<?php echo $i; ?>"><?php echo $i ?></option>
                                                                <?php 
                                                                    endfor; 
                                                                ?>     
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>No HP</label>
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <input class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <input class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <textarea class="form-control" rows="5"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-default">Submit Button</button>
                                        <button type="reset" class="btn btn-default">Reset Button</button>
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