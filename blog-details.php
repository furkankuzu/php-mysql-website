<?php
require_once("lib/config.php");
require_once("lib/fonksiyon.php");
$yonetim = new yonetim();
$title = "Blog | Alko Yazılım";
$db = getDB();
$id = $yonetim->sifreleme($_GET['bid'], "d");

$getnews = $db->prepare("SELECT * FROM bloglar WHERE id=?");
$getnews->execute(array($id));

foreach ($getnews as $key) {
    $day     = date('d', strtotime($key["tarih"]));
    $month   = date('m', strtotime($key["tarih"]));
    $year    = date('Y', strtotime($key["tarih"]));
    $months  = array(1 => 'Jan', 2 => 'Feb', 3 => 'Mar', 4 => 'Apr', 5 => 'May', 6 => 'Jun', 7 => 'Jul', 8 => 'Aug', 9 => 'Sep', 10 => 'Oct', 11 => 'Nov', 12 => 'Dec');
    if (empty($key["resim"])) {
        $img = "img/default.jpg";
    } else {
        $img = "img/blog/" . $key["resim"];
    }
    $baslik = $key["title"];
    $icerik = $key["metin"];
    $etiketler = $key["etiketler"];
}

?>


<!DOCTYPE html>
<html lang="en">
<?php include("head.php"); ?>
<meta name="description" content="<?php echo $yonetim->metaDesc; ?>">
<title><?php echo $title; ?></title>

<body class="has-spotlight ashade-smooth-scroll no-top-padding blog-bg">
    <?php include("header.php"); ?>

    <!-- Content -->
    <div class="ashade-page-title-wrap">
        <h1 class="ashade-page-title">
            <span>Bizden Haberler</span>
            Blog
        </h1>
    </div>

    <main class="ashade-content-wrap">
        <div class="ashade-content-scroll">
            <div class="ashade-content">
                <section class="ashade-section">
                    <div class="ashade-row">
                        <div class="ashade-col col-12 text-center">
                            <h4 class="text-center"><?php echo $baslik; ?></h4>
                        </div>
                    </div>
                </section>
                <section class="ashade-section">
                    <div class="ashade-row">
                        <div class="ashade-col col-8">
                            <div class="ashade-gallery-adjusted ashade-grid ashade-grid-2cols">
                                <img src="<?php echo $img; ?>" />
                                <span class="date-span"><?php echo $day; ?> <?php echo $months[(int)$month]; ?>, <?php echo $year; ?></span>
                                <p>
                                    <?php echo $icerik; ?>
                                </p>
                            </div>
                        </div>

                        <div class="ashade-col col-4">

<h5>Kategoriler</h5>
<ul class="kategori">
    <li><a href="blog/?page=1&c=<?php echo $yonetim->sifreleme("1", "e"); ?>"><i class="fa fa-angle-right"></i> 3D Modelleme</a></li>
    <li><a href="blog/?page=1&c=<?php echo $yonetim->sifreleme("2", "e"); ?>"><i class="fa fa-angle-right"></i> AR / VR</a></li>
    <li><a href="blog/?page=1&c=<?php echo $yonetim->sifreleme("3", "e"); ?>"><i class="fa fa-angle-right"></i> Mobil Oyun</a></li>
    <li><a href="blog/?page=1&c=<?php echo $yonetim->sifreleme("4", "e"); ?>"><i class="fa fa-angle-right"></i> Web Tasarım</a></li>
    <li><a href="blog/?page=1&c=<?php echo $yonetim->sifreleme("5", "e"); ?>"><i class="fa fa-angle-right"></i> Web Yazılım</a></li>
    <li><a href="blog/?page=1&c=<?php echo $yonetim->sifreleme("6", "e"); ?>"><i class="fa fa-angle-right"></i> Sanal Gerçeklik</a></li>
    <li><a href="/blog"><i class="fa fa-angle-right"></i> Tüm Kategoriler</a></li>
</ul>

</div>


                    </div>
                </section>
            </div>





        </div>
    </main>

    <div class="ashade-to-top-wrap ashade-back-wrap">
        <div class="ashade-back is-to-top">
            <span>Geri dön</span>
            <span>Yukarı</span>
        </div>
    </div>

    <?php include("script.php"); ?>
</body>

</html>