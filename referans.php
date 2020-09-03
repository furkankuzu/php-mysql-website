<?php
  include_once("lib/fonksiyon.php");
  $yonetim=new yonetim();
  $title="Neler Yaptık | Alko Yazılım";
?>
<!DOCTYPE html>
<html lang="en">
<?php include("head.php"); ?>
<meta name="description" content="<?php echo $yonetim->metaDesc; ?>">
<title><?php  echo $title; ?></title>

<body class="has-spotlight ashade-albums-template ashade-albums-template--carousel">

<?php include 'header.php'?>
    <!-- Content -->
	<div class="ashade-albums-carousel-wrap">
		<div class="ashade-albums-carousel is-medium" id="albums_carousel">
			
		<?php echo $yonetim->referans($baglanti)?>
		
		
		
		</div><!-- .ashade-albums-carousel -->
		<div class="ashade-albums-carousel-progress">
			<div class="ashade-albums-carousel-progress__bar"></div>
		</div>
		
	</div><!-- .ashade-albums-carousel-wrap -->
	
    
    <?php include 'footer.php'?>
    <?php include 'script.php'?>
</body>

</html>