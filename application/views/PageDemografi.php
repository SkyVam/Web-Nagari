<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  
    <!-- Stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">

</head>

<body>
    <!-- Preloader -->
  
    <!-- ##### Breadcrumb Area Start ##### -->
     <section class="breadcrumb-area bg-img bg-overlay" style="background-color: black">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>DEMOGRAFI</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
   <br><br>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Archive Post Area Start ##### -->
    <div class="archive-post-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-8">
                    <div class="post-details-content bg-white mb-30 p-30 box-shadow">
                    <div class="section-heading">
                            <h4>Kondisi Demografis</h4>
                    </div>
                        <p style="text-align: justify;">Jumlah penduduk Nagari Parik Panjang menurut data yang ada pada Wali Nagari, penduduk Nagari Parik Panjang berjumlah sebanyak ± 492 jiwa yang terdiri atas ± 280 orang perempuan, ± 212 orang laki-laki dan 151 kepala keluarganya.</p>
                        <p style="text-align: justify;">Dalam persoalan pendidikan masyarakat Nagari Parik Panjang cukup banyak yang sampai ke jenjang Perguruan Tinggi, Adapun pendidikan penduduk yang ada di kampung rata-rata tamat SMA dan bahkan SMP.
Nagari Parik Panjang memiliki sekolah dasar (SD),  seluruh anak-anak desa tersebut pergi sekolah ke SD tersebut, bertempat di SD 22 Bukik Apik  terletak di Jorong Parik Panjang. Nagari Parik Panjang memiliki Taman Pendidikan Qur’an (TPQ) yang saat ini bertempat di Mushalla TPQ.</p>
<p style="text-align: justify;">Untuk tempat belajar bagi anak-anak SD, anak-anak Nagari Parik Panjang mesti pergi ke Jorong Parik Panjang karena untuk di Nagari Parik Panjang hanya ada SD. Sebagian ada juga yang pergi mengenyam pendidikan di luar daerah  seperti: SMA atau SMK di Matua, apalagi untuk tingkat Perguruan Tinggi (PT) yang nyata sarananya belum ada di Nagari Parik Panjang.</p>
<p style="text-align: justify;">Masyarakat Nagari Parik Panjang semuanya beragama Islam, sedangkan sarana peribadatannya adalah Mushalla TPQ, At-Taqwa dan Al-Falah. Dan memiliki dua buah mesjid yang bernama Mesjid Taqwa yang merupakan tempat ibadah, sementara Masjid Batu sudah tidak digunakan lagi.</p>
                    <div class="section-heading">
                            <h4>Profesi</h4>
                    </div>
                    <table class="table">
                    <thead>
                        <tr>
                      
                        <th scope="col">Nama Profesi</th>
                        <th scope="col">Jumlah Laki  Laki </th>
                        <th scope="col">Jumlah Perempuan </th>
                        </tr>
                    </thead>
                  <?php 
                  $no=1;
                  if (is_array($profesi) || is_object($profesi)){
                      foreach ($profesi as $p){ ?>
                      <tbody>
                    
                      <td><?php echo $p->nama_profesi ?></td>
                      <td><?php echo $p->lk_profesi ?></a></td>
                      <td><?php echo $p->pr_profesi ?></a></td>
                      </tbody>
                  <?php } } ?>
              </table>    
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-5 col-xl-4">
                    <div class="sidebar-area bg-white mb-30 box-shadow">
                        

                        <!-- Sidebar Widget -->
                        <div class="single-sidebar-widget p-30">
                            <!-- Section Title -->
                            <div class="section-heading">
                                <h5>Berita Terbaru</h5>
                            </div>
                            <ul class="catagory-widgets">
                            <?php 
                            $no=1;
                            if (is_array($berita) || is_object($berita)){
                            foreach ($berita as $b){ ?>

                                <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> <?php echo $b->judul_berita ?></span></a></li>
                                <?php } } ?>
                            </ul>
                        </div>

                        <div class="single-sidebar-widget p-30">
                            <!-- Section Title -->
                            <div class="section-heading">
                                <h5>Artikel Terbaru</h5>
                            </div>
                            <ul class="catagory-widgets">
                            <?php 
                            $no=1;
                            if (is_array($artikel) || is_object($artikel)){
                            foreach ($artikel as $a){ ?>

                                <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> <?php echo $a->judul_artikel ?></span></a></li>
                                <?php } } ?>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Archive Post Area End ##### -->
    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="<?php echo base_url();?>assets/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="<?php echo base_url();?>assets/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="<?php echo base_url();?>assets/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="<?php echo base_url();?>assets/js/active.js"></script>
</body>

</html>