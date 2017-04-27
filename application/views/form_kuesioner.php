<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">TRACER STUDY KOMPETENSI LULUSAN STMIK BANDUNG</h1>
        </div><!-- /.col-lg-12 -->
    </div><!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Form Pelacakan Alumni
                </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <?php echo form_open(base_url('form_kuesioner/add_process')); ?>
                                    <h2><b>Identitas Alumni</b></h2>
                                    <hr>
                                    <div class="form-group">
                                        <label>NIM<?php echo form_error('nim'); ?></label>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <input type="text" name="nim" class="form-control" value="<?php echo $user_info['nim']; ?>" readonly>
                                                <input type="hidden" name="token" class="form-control" value="<?php echo $user_info['token']; ?>">
                                                <input type="hidden" name="id_token" class="form-control" value="<?php echo $user_info['id']; ?>">
                                                <input type="hidden" name="tanggal_kuesioner" class="form-control" value="<?php echo date('Y-m-d'); ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Lengkap<?php echo form_error('nama'); ?></label>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <input type="text" name="nama" class="form-control" value="<?php echo $user_info['nama']; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Jurusan<?php echo form_error('jurusan'); ?></label>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <input type="text" name="hasil_jurusan" class="form-control" value="<?php if($user_info['jurusan']==1){echo 'Teknik Informatika';}else{echo 'Sistem Informasi';} ?>" readonly>
                                            </div>
                                            <div class="col-md-3">
                                                <input type="hidden" name="jurusan" class="form-control" value="<?php echo $user_info['jurusan'] ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <textarea name="alamat" class="form-control" rows="4" readonly><?php echo $user_info['alamat']; ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Sebagai (Jabatan diperusahaan)</label>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <input type="text" name="sebagai" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Tahun masuk (Tahun Masuk ke perusaahan) <?php echo form_error('tahun_masuk'); ?></label>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <select name="tahun_masuk" class="form-control">
                                                    <?php
                                                        for($i=date('Y'); $i>=1993; $i-=1):     
                                                    ?>
                                                    <option value="<?php echo $i; ?>"><?php echo $i ?></option>
                                                    <?php 
                                                        endfor; 
                                                    ?>     
                                                    </select>
                                            </div>
                                        </div>
                                    </div>
                                    <h2><b>Identitas Perusahaan</b></h2>
                                    <hr>
                                    <div class="form-group">
                                        <label>Nama perusahaan<?php echo form_error('nama_perusahaan'); ?></label>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <input type="text" name="nama_perusahaan" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Bergerak di bidang<?php echo form_error('bidang'); ?></label>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <select name="bidang" id="bidang" class="form-control">
                                                    <option value="1">IT</option>
                                                    <option value="2">NON IT</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h2><b>Kompetensi Manajemen dan Profesionalisme</b></h2>
                                                <table class="table table-bordered">
                                                <tr>
                                                    <th rowspan="2"><center><p style="margin-top:15px">No</p></center></th>
                                                    <th rowspan="2"><center><p style="margin-top:15px">Jenis Kemampuan</p></center></th>
                                                    <th colspan="4"><center>Kualifikasi</center></th>
                                                </tr>
                                                <tr>
                                                    <td><center>Sangat Baik</center></td>
                                                    <td><center>Baik</center></td>
                                                    <td><center>Cukup</center></td>
                                                    <td><center>Kurang</center></td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Integritas (Etika & Moral)</td>
                                                    <td><center><input type="radio" name="mp1" value="4"></center></td>
                                                    <td><center><input type="radio" name="mp1" value="3"></center></td>
                                                    <td><center><input type="radio" name="mp1" value="2"></center></td>
                                                    <td><center><input type="radio" name="mp1" value="1"></center></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Keahlian berdasarkan bidang ilmu (profesionalisme)</td>
                                                    <td><center><input type="radio" name="mp2" value="4"></center></td>
                                                    <td><center><input type="radio" name="mp2" value="3"></center></td>
                                                    <td><center><input type="radio" name="mp2" value="2"></center></td>
                                                    <td><center><input type="radio" name="mp2" value="1"></center></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Bahasa Inggris</td>
                                                    <td><center><input type="radio" name="mp3" value="4"></center></td>
                                                    <td><center><input type="radio" name="mp3" value="3"></center></td>
                                                    <td><center><input type="radio" name="mp3" value="2"></center></td>
                                                    <td><center><input type="radio" name="mp3" value="1"></center></td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Penggunaan Teknologi Informasi</td>
                                                    <td><center><input type="radio" name="mp4" value="4"></center></td>
                                                    <td><center><input type="radio" name="mp4" value="3"></center></td>
                                                    <td><center><input type="radio" name="mp4" value="2"></center></td>
                                                    <td><center><input type="radio" name="mp4" value="1"></center></td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Komunikasi</td>
                                                    <td><center><input type="radio" name="mp5" value="4"></center></td>
                                                    <td><center><input type="radio" name="mp5" value="3"></center></td>
                                                    <td><center><input type="radio" name="mp5" value="2"></center></td>
                                                    <td><center><input type="radio" name="mp5" value="1"></center></td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>Kerjasama tim</td>
                                                    <td><center><input type="radio" name="mp6" value="4"></center></td>
                                                    <td><center><input type="radio" name="mp6" value="3"></center></td>
                                                    <td><center><input type="radio" name="mp6" value="2"></center></td>
                                                    <td><center><input type="radio" name="mp6" value="1"></center></td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>Pengembangan diri</td>
                                                    <td><center><input type="radio" name="mp7" value="4"></center></td>
                                                    <td><center><input type="radio" name="mp7" value="3"></center></td>
                                                    <td><center><input type="radio" name="mp7" value="2"></center></td>
                                                    <td><center><input type="radio" name="mp7" value="1"></center></td>
                                                </tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="panel-q 1">
                                            <div class="row">
                                                <div class="col-md-12">
                                            <h2><b>Kompetensi teknologi informasi (untuk perusahaan teknologi informasi )</b></h2>
                                                <table class="table table-bordered">
                                                <tr>
                                                    <th rowspan="2"><center><p style="margin-top:15px">No</p></center></th>
                                                    <th rowspan="2"><center><p style="margin-top:15px">Jenis Kemampuan</p></center></th>
                                                    <th colspan="4"><center>Kualifikasi</center></th>
                                                </tr>
                                                <tr>
                                                    <td><center>Sangat Baik</center></td>
                                                    <td><center>Baik</center></td>
                                                    <td><center>Cukup</center></td>
                                                    <td><center>Kurang</center></td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Kemampuan dalam menguasai sekurang-kurangnya satu Bahasa pemrograman</td>
                                                    <td><center><input type="radio" name="ti1" value="4"></center></td>
                                                    <td><center><input type="radio" name="ti1" value="3"></center></td>
                                                    <td><center><input type="radio" name="ti1" value="2"></center></td>
                                                    <td><center><input type="radio" name="ti1" value="1"></center></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Kemampuan dalam menguasai tools aplikasi pemrograman</td>
                                                    <td><center><input type="radio" name="ti2" value="4"></center></td>
                                                    <td><center><input type="radio" name="ti2" value="3"></center></td>
                                                    <td><center><input type="radio" name="ti2" value="2"></center></td>
                                                    <td><center><input type="radio" name="ti2" value="1"></center></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Kemampuan dalam menguasai aplikasi database</td>
                                                    <td><center><input type="radio" name="ti3" value="4"></center></td>
                                                    <td><center><input type="radio" name="ti3" value="3"></center></td>
                                                    <td><center><input type="radio" name="ti3" value="2"></center></td>
                                                    <td><center><input type="radio" name="ti3" value="1"></center></td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Kemampuan dalam mengimplementasikan rancangan database</td>
                                                    <td><center><input type="radio" name="ti4" value="4"></center></td>
                                                    <td><center><input type="radio" name="ti4" value="3"></center></td>
                                                    <td><center><input type="radio" name="ti4" value="2"></center></td>
                                                    <td><center><input type="radio" name="ti4" value="1"></center></td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Kemampuan dalam melakukan rekayasa Perangkat Lunak</td>
                                                    <td><center><input type="radio" name="ti5" value="4"></center></td>
                                                    <td><center><input type="radio" name="ti5" value="3"></center></td>
                                                    <td><center><input type="radio" name="ti5" value="2"></center></td>
                                                    <td><center><input type="radio" name="ti5" value="1"></center></td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>Kemampuan dalam mengoperasikan berbagai sistem operasi ( Windows/ Linux)</td>
                                                    <td><center><input type="radio" name="ti6" value="4"></center></td>
                                                    <td><center><input type="radio" name="ti6" value="3"></center></td>
                                                    <td><center><input type="radio" name="ti6" value="2"></center></td>
                                                    <td><center><input type="radio" name="ti6" value="1"></center></td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>Kemampuan dalam implementasi Jaringan Komputer</td>
                                                    <td><center><input type="radio" name="ti7" value="4"></center></td>
                                                    <td><center><input type="radio" name="ti7" value="3"></center></td>
                                                    <td><center><input type="radio" name="ti7" value="2"></center></td>
                                                    <td><center><input type="radio" name="ti7" value="1"></center></td>
                                                </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="submit" name="kirim" value="Kirim" class="btn btn-primary" onclick="return confirm('Apakah data sudah benar?');">
                                    <input type="reset" name="Hapus" value="Hapus" class="btn btn-danger">
                                    <p><br>*Terima Kasih atas ketersediaan Anda meluangkan waktu untuk mengisi keusioner ini sebagai umpan balik bagi pengembangan Program Studi S1 Teknik Informatika/ Sistem Informasi dan pelacakan alumni STMIK Bandung *</p>
                                    <?php echo form_close(); ?>
                                </div><!-- /.col-lg-6 (nested) -->
                            </div><!-- /.row (nested) -->
                        </div><!-- /.panel-body -->
                    </div><!-- /.panel -->
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->