<?php
require_once("lib/config.php");
$db = getDB();
$data = $db->query("SELECT * FROM mobil_oyun ORDER By id DESC Limit 1")->fetch(PDO::FETCH_ASSOC);
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
          <div class="ashade-row">
            <div class="ashade-col col-6">
              <?php echo $data["icerik"]; ?>
              <div class="col-12" style="margin-top:20px;">
                <div class="ashade-contact-form__submit"><a href="teklif-al">
                    <input type="button" value="Teklif al" id="gonderbtn"></a>
                </div>
              </div>
            </div>
            <div class="ashade-col col-6 align-bottom hide-on-tablet-port hide-on-phone">
              <?php
              if (empty($data["resim"])) {
                $smallpic = "img/default.jpg";
              } else {
                $smallpic = "img/hizmetler/" . $data["resim"];
              }
              ?>
              <img src="<?php echo $smallpic; ?>" alt="Alko Soft" width="1240" height="1500">
            </div>

          </div>

          <div class="ashade-row mt-100">
            <div class="ashade-col col-4">
              <div class="col-box">
                <figure>
                  <img class="box-img" src="img/hizmetler/web-yeni.png">
                </figure>
              </div>
              <h5 class="text-center mt-20">
               FPS Oyun
              </h5>
              <div class="text-center mt-10 box-desc">
                <?php echo $data["nasil1"]; ?>
              </div>

            </div>

            <div class="ashade-col col-4">
              <div class="col-box">
                <figure>
                  <img class="box-img" src="img/hizmetler/sosyal-yeni.png">
                </figure>
              </div>
              <h5 class="text-center mt-20">
                TPS Oyun
              </h5>
              <div class="text-center mt-10 box-desc">
                <?php echo $data["nasil2"]; ?>
              </div>

            </div>

            <div class="ashade-col col-4">
              <div class="col-box">
                <figure>
                  <img class="box-img" src="img/hizmetler/seo-yeni.png">
                </figure>
              </div>
              <h5 class="text-center mt-20">
                RPG Oyun
              </h5>
              <div class="text-center mt-10 box-desc">
                <?php echo $data["nasil3"]; ?>
              </div>

            </div>

          </div>

        </section>


        <section class="ashade-section">
          <div class="ashade-row">
            <div class="ashade-col col-12 text-center">
              <h4>Bazı Oyunlarımızdan Sahneler</h4>
            </div>
          </div>

          <div class="ashade-grid ashade-grid-3cols mt-70 mb-70">
            <?php
            $cek = $db->prepare("SELECT * FROM web_projeler WHERE kategoriid=1 ORDER By id DESC");
            $cek->execute();
            foreach ($cek as $key) {
              if (empty($key["resim"])) {
                $resim = "img/default.jpg";
              } else {
                $resim = "img/referanslar/" . $key["resim"];
              }

              if (empty($key["link"])) {
                $link = "#";
              } else {
                $link = $key["link"];
              }
            ?>
              <div class="ashade-gallery-item ashade-grid-item">
                <a href="<?php echo $link; ?>">
                  <div class="referans-box">
                    <figure>
                      <img src="<?php echo $resim; ?>">
                    </figure>
                    <div class="referans-shadow"></div>
                    <span class="referans-title"><?php echo $key["adi"]; ?></span>
                  </div>
                </a>
              </div>
            <?php
            }
            ?>

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