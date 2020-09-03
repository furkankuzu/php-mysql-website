<?php
require_once("lib/config.php");
$db = getDB();
$data = $db->query("SELECT * FROM hakkimizda ORDER By id DESC Limit 1")->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<?php include("head.php"); ?>

<body class="has-spotlight ashade-smooth-scroll no-top-padding blog-bg">

    <?php include("header.php"); ?>

    <!-- Content -->
    <div class="ashade-page-title-wrap">
        <h1 class="ashade-page-title">
            <span><?php echo $data["alt_baslik"]; ?></span>
            <?php echo $data["baslik"]; ?>
        </h1>
    </div>

    <main class="ashade-content-wrap">
        <div class="ashade-content-scroll">
            <div class="ashade-content">
                <section class="ashade-section">
                    <div class="ashade-row">
                        <div class="ashade-col col-12 text-center">

                        </div>
                    </div>
                </section>

                <section class="ashade-section">
                    <div class="ashade-row ashade-row-fullheight exclude-header" style="min-height: 784px;">
                        <div class="ashade-col col-6">
                            <h2>
                                <span>" Hayallerinizi kodluyoruz. "</span>
                                  MİZYONUMUZ
                            </h2>
                            <p>
                            <?php echo $data["misyon"]; ?> 
                            </p>

                            <div class="align-right ashade-signature-wrap">
                                <img src="img/general/ssignature.png" alt="Signature" width="200" height="116">
                            </div>
                        </div>
                        <div class="ashade-col col-6 align-bottom hide-on-tablet-port hide-on-phone">
                            <img src="img/hakkimizda/sanal-arttirilmis-gerceklik.jpg" alt="Alko Soft" width="1240" height="1500">
                        </div>


                    </div><!-- .ashade-row -->
                </section>

                <section class="ashade-section">
                    <div class="ashade-row ashade-keep-on-tablet">
                        <div class="ashade-col col-4">
                            <div class="ashade-counter-item is-counted" data-delay="2000">
                                <span class="ashade-counter-label">MÜŞTERİ MEMNUNİYETİ(%)</span>
                                <span class="ashade-counter-value"><?php echo $data["memnuniyet"]; ?></span>
                            </div>
                        </div><!-- .ashade-col -->
                        <div class="ashade-col col-4">
                            <div class="ashade-counter-item is-counted" data-delay="2000">
                                <span class="ashade-counter-label">Yıllık Tecrübe</span>
                                <span class="ashade-counter-value"><?php echo $data["tecrube"]; ?></span>
                            </div>
                        </div><!-- .ashade-col -->
                        <div class="ashade-col col-4">
                            <div class="ashade-counter-item is-counted" data-delay="2000">
                                <span class="ashade-counter-label">Tamamlanmış Proje</span>
                                <span class="ashade-counter-value"><?php echo $data["toplamproje"]; ?></span>
                            </div>
                        </div><!-- .ashade-col -->

                    </div><!-- .ashade-row -->
                </section>

                <section class="ashade-section">
                    <div class="ashade-row">
                        <div class="ashade-col col-12 align-center">
                            <h3>
                                VİZYONUMUZ
                            </h3>
                            <p class="ashade-intro">
                            <?php echo $data["vizyon"]; ?>
                            </p>
                        </div>
                    </div>
                    <div class="ashade-row">
                        <div class="ashade-col col-12">
                            <div class="ashade-before-after" data-img-before="img/general/bb.jpg" data-img-after="img/general/aa.jpg">
                                <img src="img/general/bb.jpg" alt="Photo Processing" width="1920" height="1280">
                                <div class="ashade-before-after-img ashade-before-img" style="background-image: url(&quot;img/general/bb.jpg&quot;);"></div>
                                <div class="ashade-before-after-img ashade-after-img" style="background-image: url(&quot;img/general/aa.jpg&quot;); width: 50%;"></div>
                                <div class="ashade-before-after-divider" style="left: 50%;"><i class="la la-arrows-h"></i></div>
                            </div>
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
    <?php include("footer.php"); ?>
    <?php include("script.php"); ?>
</body>

</html>