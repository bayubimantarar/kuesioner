<body>
<div class="container">
<ol class="breadcrumb">
  <li><a href="<?php echo base_url('home'); ?>">Beranda</a></li>
  <li class="active">Kuesioner</li>
</ol>
<!-- <?php if($this->session->flashdata('notif')):?>
<div class="alert alert-success" role="alert">
    <p><?php echo $this->session->flashdata('notif'); ?></p>
</div>
<?php endif; ?> -->
<?php if($this->session->flashdata('notif')): ?>
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong><?php echo $this->session->flashdata('notif'); ?></strong>
</div>
<?php endif; ?>
    <div id="wrapper">
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Kuesioner Penelusuran Alumni<br>
                    Sekolah Tinggi Manajemen dan Informatika Bandung</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Form Pelacakan Alumni
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <?php echo form_open(base_url('form_kuesioner/kirim')); ?>
                                    <h1><b>Identitas Alumni</b></h1> 
                                    <hr>
                                    <div class="form-group">
                                        <label>NIM<?php echo form_error('nim'); ?></label>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <input type="text" name="nim" class="form-control" value="<?php echo set_value('nim'); ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Lengkap<?php echo form_error('nama'); ?></label>
                                        <div class="row">
                                            <div class="col-md-9">
                                                <input type="text" name="nama" class="form-control" value="<?php echo set_value('nama'); ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Lulus Tahun</label>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <select name="lulus" class="form-control">
                                                <?php
                                                    for($i=2015; $i>=1993; $i-=1):     
                                                ?>
                                                <option value="<?php echo $i; ?>"><?php echo $i ?></option>
                                                <?php 
                                                    endfor; 
                                                ?>     
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>No HP<?php echo form_error('no_hp'); ?></label>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <input type="text" name="no_hp" class="form-control" value="<?php echo set_value('no_hp'); ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Email<?php echo form_error('email'); ?></label>
                                        <div class="row">
                                            <div class="col-md-9">
                                                <input type="text" name="email" class="form-control" value="<?php echo set_value('email'); ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat<?php echo form_error('alamat'); ?></label>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <textarea name="alamat" class="form-control" rows="5"><?php echo set_value('alamat'); ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Kegiatan Setelah Lulus</label>
                                        <div class="row">
                                            <div class="col-md-9">
                                                <select name="kegiatan" class="form-control" id="status">
                                                    <option value="1">Bekerja</option>
                                                    <option value="2">Membuka Usaha</option>
                                                    <option value="3">Belum Bekerja</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Panel Bekerja -->
                                    <div class="panel-q 1">
                                    <h1><b>Bekerja</b></h1>
                                    <hr>
                                        <div class="form-group">
                                            <label>Nama Perusahaan</label>
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <input type="text" name="nama_perusahaan_bekerja" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat Perusahaan</label>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <textarea name="alamat_perusahaan_bekerja" class="form-control" rows="5"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Sektor Perusahaan/ Industri</label>
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <input type="text" name="sektor_perusahaan_bekerja" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Tahun Masuk Kerja</label>
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <input type="text" name="tahun_masuk" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Gaji Pertama</label>
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <input type="text" name="gaji_pertama" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Darimana Anda mendapatkan informasi lowongan pekerjaan (pilih yang sesuai)</label>
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <input type="radio" name="informasi_lowongan" value="Bursa Kerja"> 1. Bursa Kerja
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <input type="radio" name="informasi_lowongan" value="Media Masa"> 2. Media Masa
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <input type="radio" name="informasi_lowongan" value="Mailing List"> 3. Mailing List
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <input type="radio" name="informasi_lowongan" value="Pengumuman Di Web"> 4. Pengumuman Di Web
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <input type="radio" name="informasi_lowongan" value="Pengumuman Di Kampus"> 5. Pengumuman Di Kampus
                                                </div>
                                            </div>
                                            <!-- <div class="form-inline">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <input type="radio" name="informasi_lowongan" value="">Lainnya <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div> -->
                                        </div>
                                        <div class="form-group">
                                            <label>Menurut Anda dalam skala 1-5 (1=sangat tidak relevan, dan 5=sangat relevan, bagaimana relevansi pekerjaan Anda dengan latar belakang pendidikan Anda?</label>
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <input type="radio" name="skala_relevan" value="Sangat Tidak Relevan"> 1. Sangat Tidak Relevan
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <input type="radio" name="skala_relevan" value="Tidak Relevan"> 2. Tidak Relevan
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <input type="radio" name="skala_relevan" value="Tidak Tahu"> 3. Tidak Tahu
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <input type="radio" name="skala_relevan" value="Relevan"> 4. Relevan
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <input type="radio" name="skala_relevan" value="Sangat Relevan"> 5. Sangat Relevan
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Menurut Anda, pengetahuan/ kemampuan/ keterampilan apa yang anda dapatkan dari bangku kuliah yang paling relevan dengan pekerjaan Anda saat ini?</label>
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <input type="text" name="pengetahuan_relevan" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ##### -->

                                    <!-- Panel Usaha -->
                                    <div class="panel-q 2">
                                    <h1><b>Membuka Usaha</b></h1>
                                    <hr>
                                        <div class="form-group">
                                            <label>Nama Perusahaan</label>
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <input type="text" name="nama_usaha" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat Perusahaan</label>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <textarea name="alamat_usaha" class="form-control" rows="5"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Bidang Usaha</label>
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <input type="text" name="bidang_usaha" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Jumlah Karyawan (Termasuk pemilik)</label>
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <input type="text" name="jumlah_karyawan" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Besar omzet per bulan</label>
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <input type="text" name="omzet_perbulan" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Berapa besar (rupiah) pengeluaran rata-rata pebulan Bpk/Ibu/Sdr</label>
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <input type="text" name="pengeluaran_perbulan" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Menurut Anda dalam skala 1-5 (1=sangat tidak relevan, dan 5=sangat relevan, bagaimana relevansi pekerjaan Anda dengan latar belakang pendidikan Anda?</label>
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <input type="radio" name="skala_relevan_usaha" value="Sangat Tidak Relevan"> 1. Sangat Tidak Relevan
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <input type="radio" name="skala_relevan_usaha" value="Tidak Relevan"> 2. Tidak Relevan
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <input type="radio" name="skala_relevan_usaha" value="Tidak Tahu"> 3. Tidak Tahu
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <input type="radio" name="skala_relevan_usaha" value="Relevan"> 4. Relevan
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <input type="radio" name="skala_relevan_usaha" value="Sangat Relevan"> 5. Sangat Relevan
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ##### -->

                                    <!-- Panel Belum Bekerja -->
                                    <div class="panel-q 3">
                                    <h1><b>Belum Bekerja</b></h1>
                                    <hr>
                                        <div class="form-group">
                                            <label>Kegiatan yang Anda lakukan sekarang</label>
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <input type="radio" name="kegiatan_belum_bekerja" value="Mencari pekerjaan yang sesuai"> 1. Mencari pekerjaan yang sesuai
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <input type="radio" name="kegiatan_belum_bekerja" value="Mencari sekolah"> 2. Mencari sekolah
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <input type="radio" name="kegiatan_belum_bekerja" value="Mengikuti suami (menjadi ibu rumah tangga)"> 3. Mengikuti suami (menjadi ibu rumah tangga)
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <input type="radio" name="kegiatan_belum_bekerja" value="Mebantu orang tua"> 4. Membantu orang tua
                                                </div>
                                            </div>
                                            <!-- <div class="form-inline">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        Lainnya <input type="text" name="" class="form-control">
                                                    </div>
                                                </div>
                                            </div> -->
                                        </div>
                                        <div class="form-group">
                                            <label>Jika Anda sedang <u>mencari pekerjaan</u>, menurut Anda apa yang harus dilakukan oleh Jurusan/ Fakultas/ Universitas supaya Anda bisa mendapatkan pekerjaan dengan lebih cepat?</label>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <textarea name="saran_pekerjaan" class="form-control" rows="5"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Adakah saran perbaikan lain untuk kampus?</label>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <textarea name="saran_kampus" class="form-control" rows="5"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ##### -->

                                    <input type="submit" name="kirim" value="Kirim" class="btn btn-primary" onclick="return confirm('Apakah data sudah benar?');">
                                    <input type="reset" name="Hapus" value="Hapus" class="btn btn-danger">
                                    <p><br>*Terima Kasih atas ketersediaan Anda meluangkan waktu untuk mengisi keusioner ini sebagai umpan balik dan pelacakan alumni STMIK Bandung*</p>
                                    <?php echo form_close(); ?>
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
</div>
</body>
</html>