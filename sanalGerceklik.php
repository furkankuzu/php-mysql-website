<?php
require_once("lib/config.php");
$db = getDB();
$data = $db->query("SELECT * FROM sanal_gerceklik ORDER By id DESC Limit 1")->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<?php include("head.php"); ?>

<body class="has-spotlight ashade-smooth-scroll no-top-padding blog-bg">

  <?php include("header.php"); ?>
  <link rel="stylesheet" href="css/hizmetler/slick.css">
  <link rel="stylesheet" href="css/hizmetler/slick-theme.css">
  <link rel="stylesheet" href="css/hizmetler/helpers.css">
  <link rel="stylesheet" href="css/hizmetler/style.css">

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

              if (empty($data["resim2"])) {
                $resim2 = "img/default.jpg";
              } else {
                $resim2 = "img/hizmetler/" . $data["resim2"];
              }

              ?>
              <img src="<?php echo $smallpic; ?>" alt="Alko Soft" width="1240" height="1500">
            </div>

          </div>

          <div class="ashade-grid ashade-grid-2cols mb-70 mt-100">
            <div class="ashade-gallery-item ashade-grid-item">
              <div class="col-box">
                <video class="pb_content-media" autoplay="" muted="" controls="" style="display:block;width:100%;height:auto;">
                  <source type="video/mp4" src="img/hizmetler/mg6.mp4"></video>
              </div>
            </div>

            <div class="ashade-gallery-item ashade-grid-item">
              <div class="col-box">
                <video class="pb_content-media" autoplay="" muted="" controls="" style="display:block;width:100%;height:auto;">
                  <source type="video/mp4" src="img/hizmetler/vr-park.mp4"></video>
              </div>
            </div>

            <div class="ashade-gallery-item ashade-grid-item">
              <div class="col-box">
                <video class="pb_content-media" autoplay="" muted="" controls="" style="display:block;width:100%;height:auto;">
                  <source type="video/mp4" src="img/hizmetler/real-time-vr.mp4"></video>
              </div>
            </div>

            <div class="ashade-gallery-item ashade-grid-item">
              <div class="col-box">
                <video class="pb_content-media" autoplay="" muted="" controls="" style="display:block;width:100%;height:auto;">
                  <source type="video/mp4" src="img/hizmetler/LiveAvatar%20Broadcast%20Augmented%20Reality%20-%20World,%20Meet%20S.E.A.N.mp4"></video>
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
  <script src="js/slick.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>