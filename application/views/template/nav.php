<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Nagari Parik Panjang</title>
  
  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="<?php echo base_url();?>assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url();?>assets/css/agency.min.css" rel="stylesheet">

</head>
<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container"> 
     <a href="<?php echo site_url();?>C_Home">
      <img src="<?php echo base_url();?>assets/img/logos/logo2.png" width="65" height="45"> 
     </a>  

    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      Menu
      <i class="fas fa-bars"></i>
    </button>
    <div class="navbar-collapse collapse" id="navbarResponsive">
      <ul class="navbar-nav text-uppercase ml-auto">
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="<?php echo base_url();?>">Beranda</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Profil
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?php echo base_url();?>/C_Profil/ShowSejarah">Sejarah Nagari</a>
            <a class="dropdown-item" href="<?php echo base_url();?>/C_Profil/ShowDemografi">Demografis</a>
            <a class="dropdown-item" href="<?php echo base_url();?>/C_Profil/ShowGeografi">Geografis</a>
            <a class="dropdown-item" href="<?php echo base_url();?>/C_PerangkatDesa/showDetailPerdes">Pemerintah Nagari</a>
            <a class="dropdown-item" href="<?php echo base_url();?>/C_Profil/ShowVisiMisi">Visi Misi</a>
            <a class="dropdown-item" href="<?php echo base_url();?>/C_Profil/ShowPeta">Peta</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?php echo base_url();?>/C_APBD/ShowApbd">APBD</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Informasi
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo base_url();?>/C_Berita/ShowUserTambahBerita">Tambah Berita</a>
              <a class="dropdown-item" href="<?php echo base_url();?>/C_Berita/ShowBerita">Berita</a>
              <a class="dropdown-item" href="<?php echo base_url();?>/C_Artikel/ShowArtikel">Artikel</a>
              
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Layanan
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo base_url();?>/C_Layanan/ShowLayanan">Layanan Kependudukan</a>
              </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo base_url();?>/C_Umkm/ShowUmkmOrganisasi">Organisasi&UMKM</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo base_url();?>/C_Galeri/ShowGaleri">Galeri</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo base_url();?>/C_Kontak/ShowKontak">Saran</a>
            </li>
            <li class="nav-item">
              <?php if ($this->session->userdata('email_admin')==NULL) {?>
                <a class="nav-link js-scroll-trigger" href="<?php echo base_url();?>/C_Login/ShowFormLogin">LOGIN</a>
              <?php } 
              else { ?>
                <a class="nav-link js-scroll-trigger" href="<?php echo base_url();?>/C_Admin/ShowDashboardAdmin">Dashboard</a>
              <?php } ?>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url();?>assets/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url();?>assets/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="<?php echo base_url();?>assets/js/jqBootstrapValidation.js"></script>
    <script src="<?php echo base_url();?>assets/js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url();?>assets/js/agency.min.js"></script>
  </body>
  </html>
