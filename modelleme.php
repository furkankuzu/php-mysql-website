<?php
  include_once("lib/fonksiyon.php");
  $yonetim=new yonetim();
  $title="3D Modelleme | Alko Yazılım";
?>

<!DOCTYPE html>
<html lang="tr">
<?php include 'head.php' ?>
<meta name="description" content="Ekonomik ve yüksek kaliteli 3D Modelleme için hemen sitemizi ziyaret edin ve teklif alın.">
<title><?php echo $title; ?></title>
	<head>
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600|Montserrat:200,300,400" rel="stylesheet">
		<link rel="stylesheet" href="css/hizmetler/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/law-icons/font/flaticon.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/hizmetler/slick.css">
    <link rel="stylesheet" href="css/hizmetler/slick-theme.css">
    <link rel="stylesheet" href="css/hizmetler/helpers.css">
    <link rel="stylesheet" href="css/hizmetler/style.css">
    <link rel="icon" href="img/favicon2.png" sizes="32x32" />
	</head>
	<body data-spy="scroll" data-target="#pb-navbar" style="background-color: black;" data-offset="200">
    


<?php include 'header.php' ?>
    
    <?php echo $yonetim->modelleme($baglanti);?>
    
    <?php include 'hizmet.php' ?>


    
    <?php include 'footer.php' ?>
    <?php include 'script.php' ?>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/main.js"></script>

	</body>
</html>