<?php
require_once("lib/config.php");
require_once("lib/fonksiyon.php");
$yonetim = new yonetim();
$title="Blog | Alko Yazılım";
$db = getDB();

$page     = $_GET['page'] ? $_GET['page'] : 1;
$search   = $_GET['s'] ? $_GET['s'] : "all";
$category = $_GET['c'] ? $_GET['c'] : "";

if (empty($category)) {
    if ($search == "all") {
        $count = $db->prepare("SELECT * FROM bloglar ORDER BY id DESC");
        $count->execute();
        $cc = 0;
        foreach ($count as $ckey) {
            $cc++;
        }
    } else {
        $count = $db->prepare("SELECT * FROM bloglar WHERE title LIKE '%$search%' or metin LIKE '%$search%' ORDER BY id DESC");
        $count->execute();
        $cc = 0;
        foreach ($count as $ckey) {
            $cc++;
        }
    }
} else {
    $kid = $yonetim->sifreleme($category, "d");
    $count = $db->prepare("SELECT * FROM bloglar WHERE kategoriid=? ORDER BY id DESC");
    $count->execute(array($kid));
    $cc = 0;
    foreach ($count as $ckey) {
        $cc++;
    }
}

$total_content = $cc;
$limit = 6;
$lastPage = ceil($total_content / $limit);
$first = ($page - 1) * $limit;
?>


<!DOCTYPE html>
<html lang="en">
<?php include("head.php"); ?>
<meta name="description" content="<?php echo $yonetim->metaDesc; ?>">
<title><?php  echo $title; ?></title>

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
							<h4 class="text-center">SON TEKNOLOJİ HABERLERİ</h4>
						</div>
					</div>
				</section>
				<section class="ashade-section">
					<div class="ashade-row">
						<div class="ashade-col col-8">
							<div class="ashade-gallery-adjusted ashade-grid ashade-grid-2cols">
							
                            <?php
                        if ($sonSayfa >= $sayfa) {
                            if (empty($category)) {
                                if ($search == "all") {
                                    $getnews = $db->prepare("SELECT * FROM bloglar ORDER BY id DESC LIMIT :first,:limit");
                                    $getnews->bindValue(':limit', (int) $limit, PDO::PARAM_INT);
                                    $getnews->bindValue(':first', (int) $first, PDO::PARAM_INT);
                                    $getnews->execute();
                                } else {
                                    $getnews = $db->prepare("SELECT * FROM bloglar WHERE title LIKE '%$search%' or metin LIKE '%$search%' ORDER BY id DESC LIMIT :first,:limit");
                                    $getnews->bindValue(':limit', (int) $limit, PDO::PARAM_INT);
                                    $getnews->bindValue(':first', (int) $first, PDO::PARAM_INT);
                                    $getnews->execute();
                                }
                            } else {
                                $getnews = $db->prepare("SELECT * FROM bloglar WHERE kategoriid=:kid ORDER BY id DESC LIMIT :first,:limit");
                                $getnews->bindValue(':limit', (int) $limit, PDO::PARAM_INT);
                                $getnews->bindValue(':first', (int) $first, PDO::PARAM_INT);
                                $getnews->bindValue(':kid', (int) $kid, PDO::PARAM_INT);
                                $getnews->execute();
                            }
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

                            ?>
								<div class="ashade-album-item ashade-grid-item">
									<div class="ashade-album-item__image">
										<img src="<?php echo $img; ?>" alt="<?php echo $row["title"]; ?>">
									</div>
									<h5>
										<span><?php echo $day; ?> <?php echo $months[(int)$month]; ?>, <?php echo $year; ?></span>
										<?php echo $key["title"]; ?>
									</h5>
									<a href="blog-detay/<?php echo $yonetim->sifreleme($key["id"], "e"); ?>" class="ashade-album-item__link"></a>
                                </div><!-- .ashade-album-item -->

                                <?php
                            }
                        }
                        ?>


							</div>
                        </div>
                        
                        <div class="ashade-col col-4">

                            <h5>Kategoriler</h5>
                            <ul class="kategori">
                                <li><a href="?page=1&c=<?php echo $yonetim->sifreleme("1", "e"); ?>"><i class="fa fa-angle-right"></i> 3D Modelleme</a></li>
                                <li><a href="?page=1&c=<?php echo $yonetim->sifreleme("2", "e"); ?>"><i class="fa fa-angle-right"></i> AR / VR</a></li>
                                <li><a href="?page=1&c=<?php echo $yonetim->sifreleme("3", "e"); ?>"><i class="fa fa-angle-right"></i> Mobil Oyun</a></li>
                                <li><a href="?page=1&c=<?php echo $yonetim->sifreleme("4", "e"); ?>"><i class="fa fa-angle-right"></i> Web Tasarım</a></li>
                                <li><a href="?page=1&c=<?php echo $yonetim->sifreleme("5", "e"); ?>"><i class="fa fa-angle-right"></i> Web Yazılım</a></li>
                                <li><a href="?page=1&c=<?php echo $yonetim->sifreleme("6", "e"); ?>"><i class="fa fa-angle-right"></i> Sanal Gerçeklik</a></li>
                                <li><a href="/blog"><i class="fa fa-angle-right"></i> Tüm Kategoriler</a></li>
                            </ul>

                        </div>
					</div>
				</section>
			</div>
            
            
            <div class="ashade-content">
                        <ul class="pagination-ul">
                            <?php
                            if ($total_content > $limit) {
                                $x = 2;
                                if ($page > 1) {
                                    $previous = $page - 1;
                                    echo '<li><a href="blog/?page=' . $previous . '&s=' . $search . '">Previous</a></li>';
                                } else {
                                    echo '<li><a href="#" class="disablex">Previous</a></li>';
                                }

                                if ($page == 1) {
                                    echo '<li class="active"><a href="#">1</a></li>';
                                } else {
                                    echo '<li><a href="blog/?page=1&s=' . $search . '">1</a></li>';
                                }

                                if ($page - $x > 2) {
                                    echo '<li>...</li>';
                                    $i = $page - $x;
                                } else {
                                    $i = 2;
                                }


                                for ($i; $i <= $page + $x; $i++) {
                                    if ($i == $page) {
                                        echo '<li class="active"><a href="#">' . $i . '</a></li>';
                                    } else {
                                        echo '<li><a href="blog/?page=' . $i . '&s=' . $search . '">' . $i . '</a></li>';
                                    }
                                    if ($i == $lastPage) break;
                                }


                                if ($page + $x < $lastPage - 1) {
                                    echo '<li>...</li>';
                                    echo '<li><a href="blog/?page=' . $lastPage . '&s=' . $search . '">' . $lastPage . '</a></li>';
                                } elseif ($page + $x == $lastPage - 1) {
                                    echo '<li class="active"><a href="blog/?page=' . $lastPage . '&s=' . $search . '">' . $lastPage . '</a></li>';
                                }


                                if ($page < $lastPage) {
                                    $next = $page + 1;
                                    echo '<li><a href="blog/?page=' . $next . '&s=' . $search . '">Next</a></li>';
                                } else {
                                    echo '<li><a href="#"  class="disablex">Next</a></li>';
                                }
                            }
                            ?>



                        </ul>
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

    <script>
    $(document).ready(function() {
        $('#search').keydown(function(event) {
            if (event.keyCode == 13) {
                if ($("#search").val() == "") {
                    location.href = "?page=1&s=all";
                } else {
                    location.href = "?page=1&s=" + $("#search").val();
                }
                return false;
            }
        });

    });
</script>

</body>
</html>