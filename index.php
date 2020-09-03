<?php
require_once("lib/config.php");
$db = getDB();
$data = $db->query("SELECT * FROM ayarlar ORDER By id DESC Limit 1")->fetch(PDO::FETCH_ASSOC);
require_once("lib/fonksiyon.php");
$yonetim = new yonetim();
?>

<!DOCTYPE html>
<html lang="en">
<?php include("head.php"); ?>
<meta name="description" content="<?php echo $yonetim->metaDesc; ?>">


<body class="ashade-home-template has-spotlight ashade-smooth-scroll">
 	<?php include("header.php"); ?>
    <!-- Home Background -->
	<div class="ashade-home-background ashade-page-background is-video">
		<video src="video/home-bg02.mp4" width="100%" poster="img/bgs/bg-home-02.jpg" muted autoplay loop></video>
	</div>
	
	<div class="ashade-home-link--works ashade-home-link-wrap">
		<div class="ashade-home-link is-link">
			<a href="referans">
			<span>ÇALIŞMALARIMIZI KEŞFET</span>
			<span>PROJELER</span>
			</a>
		</div>
	</div>
	<div class="ashade-home-link--contacts ashade-home-link-wrap">
		<div class="ashade-home-link is-link">
			<a href="iletisim">
			<span>BİZE ULAŞ</span>
			<span>İLETİŞİM</span></a>
		</div>
	</div>

	<?php include 'footer.php' ?>
	<?php include 'script.php' ?>
</body>

<!-- Mirrored from demo.shadow-themes.com/html/ashade/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Jul 2020 08:22:09 GMT -->
</html>