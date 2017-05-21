<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Panduan Login</a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul>
                                        <li><b>NIM</b> diisi dengan NIM yang mahasiswa pakai</li>
                                        <li>Jika lupa password gunakan, <a href="#">I forgot my password</a>. kemudian masukkan <b>e-mail Anda</b></li>
                                        <li>Jika mengalami <b>permasalahan</b> dapat mengirimkan ke <b>info@stmik-bandung.ac.id</b> dengan menyebutkan permasalahan Subjek e-mail serta menyebutkan nim, nama, program studi, dan deskripsi permasalahan pada isi e-mail</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Panduan Kuesioner</a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul class="timeline">
                                        <li>
                                            <div class="timeline-badge danger"><i class="fa fa-user"></i></div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <h5 class="timeline-title"><b>Login Alumni</b></h5>
                                                </div>
                                                <div class="timeline-body">
                                                    <small>Alumni Terlebih dahulu login</small>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-inverted">
                                            <div class="timeline-badge primary"><i class="fa fa-pencil-square"></i></div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <h5 class="timeline-title"><b>Mengisi Form Kuesioner</b></h5>
                                                </div>
                                                <div class="timeline-body">
                                                    <small>Alumni Mengisi form kuesioner</small>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="timeline-badge success"><i class="fa fa-users"></i></div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <h5 class="timeline-title"><b>Perusahaan Mengisi Kuesioner</b></h5>
                                                </div>
                                                <div class="timeline-body">
                                                    <small>Atasan/ Manager/ Perwakilan dari perusahaan mengisi kuesioner</small>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-inverted">
                                            <div class="timeline-badge default"><i class="fa fa-check"></i></div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <h5 class="timeline-title"><b>Kuesioner</b></h5>
                                                </div>
                                                <div class="timeline-body">
                                                    <small>Kuesioner dikirim</small>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        </div>
                        <?php echo form_open(base_url('login/check_login')); ?>
                            <fieldset>
                                <div class="form-group">
                                <label>NIM</label>
                                <?php echo form_error('nim'); ?>
                                    <input class="form-control" name="nim" type="text" value="<?php echo set_value('nim'); ?>">
                                </div>
                                <label>Password</label>
                                <?php echo form_error('password'); ?>
                                <div class="form-group">
                                    <input class="form-control" name="password" type="password">
                                </div>
                                    <p class="text-info"><a href="#">I forgot my password</a></p>
                                <input type="submit" name="submit" value="Login" class="btn btn-lg btn-primary btn-block">
                            </fieldset>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>