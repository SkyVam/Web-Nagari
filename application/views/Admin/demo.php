<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboard Admin - Desa Mojorejo</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url();?>assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="<?php echo base_url();?>assets/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url();?>assets/css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <div id="wrapper">

   <!-- Sidebar -->
   <!-- Sidebar -->
   <ul class="sidebar navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="<?php echo base_url();?>C_Admin/ShowDashboardAdmin">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span>
      </a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="<?php echo base_url();?>C_Admin/ShowHalamanBerita">
        <i class="fas fa-fw fa-newspaper"></i>
        <span>Berita Desa</span>
      </a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="<?php echo base_url();?>C_Artikel/ShowHalamanArtikel">
        <i class="fas fa-fw fa-book"></i>
        <span>Artikel Desa</span>
      </a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url();?>C_Layanan/ShowHalamanLayanan">
          <i class="fas fa-fw fa-user-cog"></i>
          <span>Layanan Kependudukan</span>
        </a>
      </li>
    <li class="nav-item active">
      <a class="nav-link" href="<?php echo base_url();?>C_Comment/ShowComment">
        <i class="fas fa-fw fa-book"></i>
        <span>Daftar Komen</span>
      </a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="<?php echo base_url();?>C_APBD/ShowHalamanApbd">
        <i class="fas fa-fw fa-cart-plus"></i>
        <span>APBD</span>
      </a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="<?php echo base_url();?>C_Galeri/ShowHalamanGaleri">
        <i class="fas fa-fw fa-file-image"></i>
        <span>Gambar</span>
      </a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="<?php echo base_url();?>C_Umkm/ShowHalamanUmkm">
        <i class="fas fa-fw fa-industry"></i>
        <span>UMKM</span>
      </a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="<?php echo base_url();?>C_Organisasi/ShowHalamanOrganisasi">
        <i class="fas fa-fw fa-users"></i>
        <span>Organisasi</span>
      </a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="<?php echo base_url();?>C_PerangkatDesa/ShowHalamanPerangkatDesa">
        <i class="fas fa-fw fa-handshake"></i>
        <span>Perangkat Nagari</span>
      </a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="<?php echo base_url();?>C_Demografis/ShowHalamanDemografis">
        <i class="fas fa-fw fa-home"></i>
        <span>Demografis Warga</span>
      </a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="<?php echo base_url();?>C_Saran/ShowHalamanSaran">
        <i class="fas fa-fw fa-envelope"></i>
        <span>Saran</span>
      </a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="<?php echo base_url();?>C_Kontak/ShowHalamanKontak">
        <i class="fas fa-fw fa-phone"></i>
        <span>Kontak</span>
      </a>
    </li>
    
    
  </ul>
  <!--end of Sidebar-->


  <div id="content-wrapper">

    <div class="container-fluid">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <h4>Demografis Warga</h4>
        </li>
        
      </ol>
      <a href="<?php echo base_url();?>C_Demografis/ShowHalamanTambahDemografis" class="btn btn-primary btn-md">Tambah Catatan Demografis</a>
      <br>
      <br>
      
      
          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a >Profesi</a>
            </li>
            
          </ol>
          
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Id Profesi</th>
                <th scope="col">Nama Profesi</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Aksi </th>
              </tr>
            </thead>
            <?php 
            $no=1;
            if (is_array($profesi) || is_object($profesi)){
              foreach ($profesi as $p){ ?>
                <tbody>
                  <td><?php echo $p->id_profesi ?></td>
                  <td><?php echo $p->nama_profesi ?></td>
                  <td><?php echo $p->lk_profesi ?></a></td>
                  <td>
                    <a href="<?php echo base_url();?>C_Demografis/hapusProfesi?id_profesi=<?php echo $p->id_profesi?>">Delete</a>
                    <a href="<?php echo base_url();?>C_Demografis/showHalamanEditProfesi?id_profesi=<?php echo $p->id_profesi?>">Edit</a>
                  </td>
                </tbody>
              <?php } } ?>
            </table>
            <br>
            <br>
            <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a >Agama</a>
        </li>
        
      </ol>
      
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Id Agama</th>
            <th scope="col">Nama Agama</th>
            <th scope="col">Jumlah </th>
            <th scope="col">Aksi </th>
          </tr>
        </thead>
        <?php 
        $no=1;
        if (is_array($agama) || is_object($agama)){
          foreach ($agama as $a){ ?>
            <tbody>
              <td><?php echo $a->id_agama ?></td>
              <td><?php echo $a->nama_agama ?></td>
              <td><?php echo $a->lk_agama ?></a></td>
              <td>
                <a href="<?php echo base_url();?>C_Demografis/hapusAgama?id_agama=<?php echo $a->id_agama?>">Delete</a>
                <a href="<?php echo base_url();?>C_Demografis/showHalamanEditAgama?id_agama=<?php echo $a->id_agama?>">Edit</a>
              </td>
            </tbody>
          <?php } } ?>
        </table> 

          </div>
          <!-- /.content-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
          <i class="fas fa-angle-up"></i>
        </a>


        <!-- Bootstrap core JavaScript-->
        <script src="<?php echo base_url();?>assets/jquery/jquery.min.js"></script>
        <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="<?php echo base_url();?>assets/jquery-easing/jquery.easing.min.js"></script>

        <!-- Page level plugin JavaScript-->
        <script src="<?php echo base_url();?>assets/chart.js/Chart.min.js"></script>
        <script src="<?php echo base_url();?>assets/datatables/jquery.dataTables.js"></script>
        <script src="<?php echo base_url();?>assets/datatables/dataTables.bootstrap4.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="<?php echo base_url();?>assets/js/sb-admin.min.js"></script>

        <!-- Demo scripts for this page-->
        <script src="<?php echo base_url();?>assets/js/demo/datatables-demo.js"></script>
        <script src="<?php echo base_url();?>assets/js/demo/chart-area-demo.js"></script>

      </body>

      </html>
