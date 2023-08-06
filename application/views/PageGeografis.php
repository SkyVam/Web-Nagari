<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->



   
   <title>Halaman Geografis-Nagari Parik Panjang</title>
    <!-- Stylesheet -->
 <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">



</head>
<body>
  
    
    <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-black bg-overlay"style="background-color: black;">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Kondisi Geografis</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->

  
    <!-- ##### About Us Area Start ##### -->
    <section class="about-us-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-8">
                    <!-- About Us Content -->
                    <div class="about-us-content bg-white mb-30 p-30 box-shadow" style="margin-top: -80px;">
                        <!-- Section Title -->
                        <div class="section-heading">
                            <h4>Tentang Desa</h4>
                        </div>            
                        <p style="text-align: justify;">Nagari Parik Panjang terletak di Kecamatan Matur Kabupaten Agam. Jorong ini berada sekitar ± 2,5 km dari Pasar Matur sebagai pasar utama di Nagari Parik Panjang, dan dari kota Bukittinggi berjarak sekitar ± 90 km. Batas wilayah Nagari Parik Panjang sebelah timur berbatasan dengan Nagari Panta Pauh, sebelah barat berbatasan dengan Nagari Matur Mudiak, sebelah utara berbatasan dengan Nagari Matua Mudiak, adapun sebelah selatan berbatasan dengan Nagari Matua Hilia. </p>
                        <p style="text-align: justify;">Nagari Parik Panjang adalah sebuah desa yang terletak di Kecamatan Matur Kabupaten Agam. Nagari Parik Panjang daerahnya terdiri dari persawahan, perkebunan. Persawahan di Nagari Parik Panjang memiliki musim tanam dan musim panen yang berbeda, sementara perkebunan dipenuhi dengan perkebunan Tebu dan Cabe.</p>
<p style="text-align: justify;">Nagari Parik Panjang adalah sebuah desa yang kaya akan air dan juga dialiri oleh sungai yang berasal dari mata air perbukitan di dekat Nagari Parik Panjang tersebut.
Seperti sudah tradisi di Nagari Parik Panjang, bahwa pemuda/I nya apabila ingin melanjutkan menuntut ilmu ke jenjang yang lebih tinggi seperti melanjutkan sekolah menengah umum atau pun kuliah, mereka melanjutkan keluar daerah Parik Panjang seperti ke Padang, Bukittinggi dan kota-kota lainnya dikarenakan di Nagari Parik Panjang tidak ada  Sekolah Menengah Umum (SMU), di Nagari Parik Panjang hanya  berdiri Sekolah Dasar (SD) saja itupun di gabung dengan dua jorong yaitu Jorong Parik Panjang dan Jorong Mudiak Sawah. </p>
<p style="text-align: justify;">Tetapi ada juga dari pemuda/I yang lain tidak ingin melanjutkan sekolah ke jenjang berikutnya hanya tamat SD atau SMP, karena ingin menolong orang tua yang bekerja sebagai petani, dan pada umumnya mereka lebih banyak merantau daripada tinggal di desa mereka. Oleh karena itu sulit untuk mencari pemuda/I di Nagari Parik Panjang tersebut.</p>
                        <!-- Team Member Area -->
                        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

                        <div class="section-heading mt-30">
                            <h5>Luas Desa</h5>
                        </div>
                        <div class="w3-container">
  

  <table class="w3-table w3-bordered">
   
    <tr>
      <td>Luas Kemiringan Lahan</td>
      <td>50,380 Ha</td>

    </tr>
    <tr>
      <td>Ketinggian di Atas Permukaan Laut</td>
      <td>1200 m</td>
   
    </tr>
    <tr>
      <td>Irigasi berpengairan teknis</td>
      <td>-</td>
    </tr>
  <tr>
      <td>Sawah Teririgasi</td>
      <td>122,180 Ha</td>
    </tr>
<tr>
      <td>Sawah Tadah Hujan</td>
      <td>6,280 Ha</td>
    </tr>
<tr>
      <td>Luas Lahan Pemukiman</td>
      <td>40,106 Ha</td>
    </tr>
<tr>
      <td>Kawasan Rawan Bencana</td>
      <td>8,204 Ha</td>
    </tr>
  </table>
</div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-5 col-xl-4">
                    <div class="sidebar-area bg-white mb-30 box-shadow" style="margin-top: -80px;">
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

                                <li><a href="<?php echo base_url();?>C_Berita/showSingleBerita?id_berita=<?php echo $b->id_berita?>"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> <?php echo $b->judul_berita ?></span></a></li>
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

                                <li><a href="<?php echo base_url();?>C_Artikel/showSingleArtikel?id_artikel=<?php echo $a->id_artikel?>"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> <?php echo $a->judul_artikel ?></span></a></li>
                                <?php } } ?>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### About Us Area End ##### -->

   
        
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