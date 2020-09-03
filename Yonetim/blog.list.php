<?php
  include_once("assets/fonksiyon.php");
  $yonetim = new yonetim();
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8">
   
    <title>Alkosoft-Yönetim Paneli</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/logo/logo2.png">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">    
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">   
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>

</head>

<body>

  <div id="preloader">
    <div class="loader">

    </div>

  </div>

  <div class="page-container">
    <div class="sidebar-menu">
      <div class="sidebar-header">

        <div class="logo">
          <a href="control.php"><img src="assets/images/logo/logo2.png" alt="logo"/> </a>
        </div>
      </div>

      <div class="main-menu">

        <div class="menu-inner">

          <nav>
            <ul class="metismenu" id="menu">
              
              
                  
                  
                  <!--<li><a href="control.php?sayfa=mail"><i class="fa fa-envelope-o"></i><span>Mail Ayarları</span></a></li>-->
                
                  <li><a href="javascript:void(0)" aria-expanded="true">
              
              <i class="fa fa-cog"></i><span>Site Ayarlar</span></a>

              <ul class="collapse">
              <li><a href="control.php?sayfa=siteayarlar"><i class="ti-pencil"></i><span>Site Ayarları</span></a></li>
              <li><a href="control.php?sayfa=hakkimizda"><i class="ti-flag"></i><span>Hakkımızda Ayarları</span></a></li>
              <li><a href="control.php?sayfa=oyunAyar"><i class="ti-game"></i><span>Oyun Ayarları</span></a></li>
              <li><a href="control.php?sayfa=mobilAyar"><i class="ti-mobile"></i><span>Mobil Uygulama Ayarları</span></a></li>
              <li><a href="control.php?sayfa=masaustuAyar"><i class="ti-desktop"></i><span>Masaüstü Uygulama Ayarları</span></a></li>
              <li><a href="control.php?sayfa=webAyar"><i class="ti-desktop"></i><span>Web Tasarım Ayarları</span></a></li>
              <li><a href="control.php?sayfa=webProje"><i class="ti-eye"></i><span>Web Projeler</span></a></li>
              <li><a href="control.php?sayfa=sanal"><i class="ti-image"></i><span>Sanal Gerçeklik Ayarları</span></a></li>
              <li><a href="control.php?sayfa=modelleme"><i class="ti-image"></i><span>3D Modelleme Ayarları</span></a></li>
              <li><a href="control.php?sayfa=referans"><i class="ti-eye"></i><span>Referans Ayarları</span></a></li>
              </ul>
            
            </li>
              
                <li><a href="blog-list.php"><i class="ti-eye"></i><span>Blog</span></a></li>
                
               <!-- <li><a href="control.php?sayfa=gelenkutu"><i class="fa fa-envelope"></i><span>Gelen Kutusu</span></a></li>-->
              
            
            </ul>
          </nav>
        </div>
      </div>
    </div>

    <!-----SİDEBAR BİTİYOR.--->


  <div class="main-content">
    <div class="header-area">
      <div class="row align-items-center">

        <div class="col-md-6 col-sm-8 clearfix">

          <div class="nav-btn pull-left">
            
            <span></span>
            <span></span>
            <span></span>

          </div> 
        </div>
        

        <div class="col-sm-6 clearfix">

        <div class="user-profile pull-right" style="margin-right: 1px; border-radius:7px">
          
          <h4 class="user-name dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user mr-2"></i><?php echo $yonetim->kuladial($baglanti); ?><i class="fa fa-angle-down"></i></h4>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="control.php?sayfa=ayarlar"><i class="fa fa-cog mr-1"></i> Profil Ayarları</a>
            <a class="dropdown-item" href="control.php?sayfa=kulayar"><i class="fa fa-male mr-2"></i>Admin Ayarları</a>
            <a class="dropdown-item" href="control.php?sayfa=cikis"><i class="fa fa-minus-circle mr-2"></i>Çıkış</a>
          </div>
          </div>
        </div>

      </div>
    </div>

    <div class="main-content-inner">
      <div class="row">
        <div class="col-lg-12 mt-5 bg-white text-center" style="min-height:500px;">

       

        </div>
      </div>
    </div>
      
  </div>

  
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>    
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script> 
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>
