 <!-- Static navbar -->
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="<?php echo base_url('assets/img/logo.png'); ?>" alt="STMIK Bandung" height="30"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="#">Beranda</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profil <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Profil</a></li>
                <li><a href="#">Visi & Misi</a></li>
                <li><a href="#">Kurikulum</a></li>
                <li><a href="#">Fasilitas & Prestasi</a></li>
                <li><a href="#">Struktur Organisasi</a></li>
              </ul>
            </li>
            <li><a href="#about">Artikel</a></li>
            <li><a href="#contact">Berita</a></li>
            <li><a href="<?php echo base_url('form_kuesioner'); ?>">Kuesioner</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Galeri <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Galeri Foto</a></li>
                <li><a href="#">Galeri Video</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Publikasi <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Galeri Poster</a></li>
                <li><a href="#">Galeri Paper</a></li>
              </ul>
            </li>
            <li><a href="#contact">Kontak</a></li>
          </ul>
          <!-- <ul class="nav navbar-nav navbar-right">
            <li><a href="../navbar/">Default</a></li>
            <li class="active"><a href="./">Static top <span class="sr-only">(current)</span></a></li>
            <li><a href="../navbar-fixed-top/">Fixed top</a></li>
          </ul> -->
        </div><!--/.nav-collapse -->
      </div>
    </nav>