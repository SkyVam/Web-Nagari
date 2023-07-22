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
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Amet tellus cras adipiscing enim eu turpis. Est placerat in egestas erat imperdiet. Egestas integer eget aliquet nibh praesent tristique magna sit amet. Eu non diam phasellus vestibulum lorem. Facilisi cras fermentum odio eu feugiat pretium. Vitae aliquet nec ullamcorper sit. Dictum varius duis at consectetur. Eget aliquet nibh praesent tristique. Tristique nulla aliquet enim tortor at.</p>
<p >
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Amet tellus cras adipiscing enim eu turpis. Est placerat in egestas erat imperdiet. Egestas integer eget aliquet nibh praesent tristique magna sit amet. Eu non diam phasellus vestibulum lorem. Facilisi cras fermentum odio eu feugiat pretium. Vitae aliquet nec ullamcorper sit. Dictum varius duis at consectetur. Eget aliquet nibh praesent tristique. Tristique nulla aliquet enim tortor at.</p>
                        
                       
                        <!-- Team Member Area -->
                        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

                        <div class="section-heading mt-30">
                            <h5>Luas Desa</h5>
                        </div>
                        <div class="w3-container">
  

  <table class="w3-table w3-bordered">
   
    <tr>
      <td>Luas Pemukiman</td>
      <td>533.700 m2</td>

    </tr>
    <tr>
      <td>Luas Persawahan</td>
      <td>846.030 m2</td>
   
    </tr>
    <tr>
      <td>Luas Perkebunan/Lindung</td>
      <td>1.290.000 m2</td>
    </tr>
  <tr>
      <td>Luas Kuburan/Lapang</td>
      <td>180.000 m2</td>
    </tr>
<tr>
      <td>Luas Pekarangan/Lapang TKD</td>
      <td>589.000 m2</td>
    </tr>
<tr>
      <td>Luas Taman/Jalan</td>
      <td>450.570 m2</td>
    </tr>
<tr>
      <td>Perkantoran</td>
      <td>700 m2</td>
    </tr>
<tr>
      <td>Luas Prasarana umum lainnya</td>
      <td>90.000 m2</td>
    </tr>
<tr>
      <td><b>Total Luas</td>
      <td><b>3.950.000 m2</td>
    </tr>

  </table>
</div>

                              <div class="section-heading mt-30">
                            <h5>Jalan Desa</h5>
                        </div>
                            <div class="w3-container">
  

  <table class="w3-table w3-bordered">
   <tr>
      <th>Nama Jalan</th>
      <th>Panjang/Jumlah</th>
 
    </tr>
    <tr>
      <td>Jalan Provinsi</td>
      <td>2 km</td>

    </tr>
    <tr>
      <td>Jalan Kabupaten</td>
      <td>1,2 km</td>
   
    </tr>
    <tr>
      <td>Jalan Desa</td>
      <td>4 km</td>
    </tr>
  <tr>
      <td>Jalan Makadam</td>
      <td>1,5 km</td>
    </tr>
<tr>
      <td>Jalan Tanah</td>
      <td>3 km</td>
    </tr>
<tr>
      <td>Jalan Konblok/Semen/Beton</td>
      <td>3,5 km</td>
    </tr>
<tr>
      <td>Jembatan Beton</td>
      <td>3 km</td>
    </tr>
<tr>
      <td>Luas Prasarana umum lainnya</td>
      <td>90.000 m2</td>
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