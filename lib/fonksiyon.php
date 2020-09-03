<?php

	//VERITABANINA BAGLANMA KISMI.

	try{
			
    $pass = "_ry};%dJK\$hb";
		$baglanti=new PDO("mysql:host=localhost; dbname=u9648068_db2020; charset=utf8", "u9648068_db2020",$pass);
		$baglanti->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

  }
  
	catch(PDOException $e) {
	
		die($e ->getMessage());
    }
    
    class yonetim{


      public $title,$metaTitle,$metaDesc,$metaKey,$metaAuthor,$metaOwner,$metaCopy,
          $logo,$twitter,$face,$insta,$linkedin,$youtube,$telefon,$adres,$mail,
          $slogan1,$slogan2,$iletisimBaslik,$projelerBaslik;

      function __construct(){

  
        $pass = "_ry};%dJK\$hb";
        $baglanti=new PDO("mysql:host=localhost; dbname=u9648068_db2020; charset=utf8", "u9648068_db2020",$pass);
        $baglanti->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $ayarCek=$baglanti->prepare("select * from ayarlar");
        $ayarCek->execute();
        $sorguSon=$ayarCek->fetch();


        $this->title=$sorguSon["title"];
        $this->metaTitle=$sorguSon["metaTitle"];
        $this->metaDesc=$sorguSon["metaDesc"];
        $this->metaKey=$sorguSon["metaKey"];
        $this->metaAuthor=$sorguSon["metaAuthor"];
        $this->metaOwner=$sorguSon["metaOwner"];
        $this->metaCopy=$sorguSon["metaCopy"];
        $this->logo=$sorguSon["logo"];
        $this->twitter=$sorguSon["twitter"];
        $this->face=$sorguSon["face"];
        $this->insta=$sorguSon["insta"];
        $this->linkedin=$sorguSon["linkedin"];
        $this->youtube=$sorguSon["youtube"];
        $this->telefon=$sorguSon["telefon"];
        $this->adres=$sorguSon["adres"];
        $this->haritaAdres=$sorguSon["haritaAdres"];
        $this->mail=$sorguSon["mail"];
        $this->slogan1=$sorguSon["slogan1"];
        $this->slogan2=$sorguSon["slogan2"];
        $this->iletisimBaslik=$sorguSon["iletisimBaslik"];
        $this->projelerBaslik=$sorguSon["projelerBaslik"];
              
      }


      function hakkimizda($vt){

          $introAl=$vt->prepare("select * from hakkimizda");
          $introAl->execute();

          
          $sonucum=$introAl->fetch();

          echo'<div class="ashade-content">
          <!-- About Section for Desktop Layout Only -->
          <section class="ashade-section">
            <div class="ashade-row ashade-row-fullheight exclude-header">
              <div class="ashade-col col-6">
                <h2>
                  <span>';echo $this->slogan1; echo'</span>
                  MİSYONUMUZ
                </h2>
                <p>
                  '.$sonucum["misyon"].'
                </p> 
                
                <div class="align-right ashade-signature-wrap">
                  <img src="img/general/ssignature.png" alt="Signature" width="200" height="116">
                </div>
              </div>
              <div class="ashade-col col-6 align-bottom hide-on-tablet-port hide-on-phone">
                <img src="'.$sonucum["foto"].'" alt="Alko Soft" width="1240" height="1500">
                <video autoplay="" loop="" muted="" playsinline=""><source type="video/mp4" src="img/hizmetler/alkosoft-sanal-arttirilmis-gerceklik.mov"></video>
  
              </div>
  
            
            </div><!-- .ashade-row -->
          </section>
  
          
  
          <section class="ashade-section">
            <div class="ashade-row ashade-keep-on-tablet">
              <div class="ashade-col col-4">
                <div class="ashade-counter-item" data-delay="2000">
                  <span class="ashade-counter-label">MÜŞTERİ MEMNUNİYETİ(%)</span>
                  <span class="ashade-counter-value">'.$sonucum["memnuniyet"].'</span>
                </div>
              </div><!-- .ashade-col -->
              <div class="ashade-col col-4">
                <div class="ashade-counter-item" data-delay="2000">
                  <span class="ashade-counter-label">Yıllık Tecrübe</span>
                  <span class="ashade-counter-value">'.$sonucum["tecrübe"].'</span>
                </div>
              </div><!-- .ashade-col -->
              <div class="ashade-col col-4">
                <div class="ashade-counter-item" data-delay="2000">
                  <span class="ashade-counter-label">Tamamlanmış Proje</span>
                  <span class="ashade-counter-value">'.$sonucum["toplamproje"].'</span>
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
                              '.$sonucum["vizyon"].'
                              </p>
                          </div>
                      </div>
            <div class="ashade-row">
                          <div class="ashade-col col-12">
                            <div class="ashade-before-after" data-img-before="'.$sonucum["foto2"].'" data-img-after="img/general/aa.jpg">
                              <img src="'.$sonucum["foto2"].'" alt="Photo Processing" width="1920" height="1280">
                            </div>
                          </div>
                      </div>
          </section>
  
        
        </div>';
      }

      function oyun($vt){

          $introAl=$vt->prepare("select * from oyun");
          $introAl->execute();

          
          $sonucum=$introAl->fetch();


          echo'<section class="pb_section pb_section_v1" data-section="about" id="section-about">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-5 pr-md-5 pr-sm-0">
                      <h2 class="baslik">MOBİL OYUN</h2>
                      <p>'.$sonucum["icerik"].' <br><br>
                      <div class="ashade-contact-form__submit"><a href="teklif-al">
                        <input type="button" value="Teklif al" id="gonderbtn"></a>
                      </div></p>
                        </div>
                    <div class="col-lg-7">
                      <div class="images">
                        <img class="img1 img-fluid" src="'.$sonucum["foto1"].'" alt="">
                        <img class="img2" src="'.$sonucum["foto2"].'" alt="">
                      </div>
                    </div>
                    
                  </div>
                </div>  
              </section>
              <!-- END section -->
              
          
              <section class="pb_section" data-section="why-us" id="section-why-us">
                <div class="container">
                  <div class="row justify-content-md-center text-center mb-5">
                    <div class="col-lg-7">
                      <h2 class="baslik">Neler Yapıyoruz?</h2>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-7">
                      <div class="images right">
                        <img class="img1 img-fluid" src="'.$sonucum["foto3"].'" alt="">
                        <img class="img2 m-4" src="'.$sonucum["foto4"].'" alt="">
                      </div>
                    </div>
                    <div class="col-lg-5 pl-md-5 pl-sm-0">
                      <div id="exampleAccordion" class="pb_accordion" data-children=".item">
                        <div class="item">
                          <a data-toggle="collapse" data-parent="#exampleAccordion" href="#exampleAccordion1" aria-expanded="true" aria-controls="exampleAccordion1" class="pb_font-18">FPS Oyun</a>
                          <div id="exampleAccordion1" class="collapse show" role="tabpanel">
                            <p>'.$sonucum["fpsIcerik"].'</p>
                          </div>
                        </div>
                        <div class="item">
                          <a data-toggle="collapse" data-parent="#exampleAccordion" href="#exampleAccordion2" aria-expanded="false" aria-controls="exampleAccordion2" class="pb_font-18">TPS Oyun</a>
                          <div id="exampleAccordion2" class="collapse" role="tabpanel">
                            <p>'.$sonucum["tpsIcerik"].'</p>
                          </div>
                        </div>
                        <div class="item">
                          <a data-toggle="collapse" data-parent="#exampleAccordion" href="#exampleAccordion3" aria-expanded="false" aria-controls="exampleAccordion3" class="pb_font-18">RPG Oyun</a>
                          <div id="exampleAccordion3" class="collapse" role="tabpanel">
                            <p>'.$sonucum["rpgIcerik"].'</p>
                          </div>
                        </div>
                      </div>
          
                    </div>
                  </div>
                </div>
              </section>
              <!-- END section -->
          ';

      }

      function mobil($vt){

          $introAl=$vt->prepare("select * from mobil");
          $introAl->execute();

          
          $sonucum=$introAl->fetch();

          echo'<section class="pb_section pb_section_v1" data-section="about" id="section-about">
          <div class="container">
            <div class="row">
              <div class="col-lg-5 pr-md-5 pr-sm-0">
                <h2 class="baslik">MOBİL UYGULAMANIZI OLUŞTURALIM</h2>
                <p>
                '.$sonucum["icerik"].'<br><br>
                <div class="ashade-contact-form__submit"><a href="teklif-al">
                  <input type="button" value="Teklif al" id="gonderbtn"></a>
                </div>
                </p>
                
              </div>
              <div class="col-lg-7">
                <div class="images">
                  <img class="img1 img-fluid" src="'.$sonucum["foto1"].'" alt="">
                  <img class="img2" src="'.$sonucum["foto2"].'" alt="">
                </div>
              </div>
              
            </div>
          </div>  
        </section>
        <!-- END section -->
    
        
        <section class="pb_section bg-light">
          <div class="container">
            <div class="row">
              <div class="col-md">
                <div class="media pb_media_v2 d-block text-center mb-3">
                  <div class="icon border border-gray rounded-circle d-block mr-3 display-4 mx-auto mb-4"><img src="img/hizmetler/android-chrome-192x192.png" alt=""></div>
                  <div class="media-body">
                    <h3 class="mt-0 pb_font-20">MOBİL UYGULAMA GELİŞTİRME</h3>
                    <p>'.$sonucum["mobilUygulama"].'</p>
                  </div>
                </div>
              </div>
              <div class="col-md">
                <div class="media pb_media_v2 d-block text-center  mb-3">
                  <div class="icon border border-gray rounded-circle d-flex mr-3 display-4 mx-auto mb-4"><img src="img/hizmetler/icons8-game-controller-96.png"></div>
                  <div class="media-body">
                    <h3 class="mt-0 pb_font-20">MOBİL OYUN YAZILIMI</h3>
                    <p>'.$sonucum["mobilOyun"].'</p>
                  </div>
                </div>
              </div>
              <div class="col-md">
                <div class="media pb_media_v2 d-block text-center  mb-3">
                  <div class="icon border border-gray rounded-circle d-flex mr-3 display-4 mx-auto mb-4"><img src="img/hizmetler/icons8-monitor-100.png"></div>
                  <div class="media-body">
                    <h3 class="mt-0 pb_font-20">MOBİL E-TİCARET UYGULAMALARI</h3>
                    <p>'.$sonucum["mobilEtic"].'</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- END section -->';




      }

      function hizmet($vt){

        $introAl=$vt->prepare("select * from hizmetler");
        $introAl->execute();

        while($sonucum=$introAl->fetch(PDO::FETCH_ASSOC)):


          echo '<div>
                  <a href="'.$sonucum["link"].'" class="link-block">
                    <video class="pb_content-media" autoplay="" muted="" controls="" style="display:block;width:100%;height:auto;"><source type="video/mp4" src="'.$sonucum["video"].'"></video>
              
                    <div class="slide-text">
                      <h2>'.$sonucum["adi"].'</h2>
                      <p>Daha Fazla</p>
                    </div>
                  </a>
                </div>';

        endwhile;

      }

      function masaustu($vt){

        $introAl=$vt->prepare("select * from masaustu");
        $introAl->execute();

        
        $sonucum=$introAl->fetch();

        echo'<section class="pb_section" data-section="why-us" id="section-why-us">
            <div class="container">
              <div class="row justify-content-md-center text-center mb-5">
                <div class="col-lg-7">
                  <h2 class="baslik">
                  Özel Masaüstü Yazılımlar</h2>
                  <p>'.$sonucum["icerik1"].'<br><br>
                  <div class="ashade-contact-form__submit"><a href="teklif-al">
                    <input type="button" value="Teklif al" id="gonderbtn"></a>
                  </div>
                  </p>
                </div>
              </div>
            </div>
          </section>
          <!-- END section -->
          
          
          <section class="pb_section pb_section_v1" data-section="about" id="section-about">
            <div class="container">
              <div class="row">
                <div class="col-lg-5 pr-md-5 pr-sm-0">
                  <h2 class="baslik">Ne Yapıyoruz?</h2>
                  <p>
                  '.$sonucum["icerik2"].'
                  </p>
                  <section class="ashade-section">
                <div class="ashade-row">
                    <ul>
                      <li>İhtiyaca yönelik yazılımlar ve kesintisiz yazılım destek</li>
                      <li>Kapsamlı ve kolay içerik yönetimi</li>
                      <li>Ölçeklendirilebilir CMS çözümleri</li>
                      <li>Uygun maliyetli en son teknoloji modüler yapı</li>
                      <li>Kapsamlı analiz ve istatiksel veri depolama</li>
                      <li>Özel ve denenyimli proje yönetimi</li>
      
                    </ul>
                </div><!-- .ashade-row -->
              </section>
                </div>
                <div class="col-lg-7">
                  <div class="images">
                    <img class="img1 img-fluid" src="'.$sonucum["foto1"].'" alt="">
                    <img class="img2" src="'.$sonucum["foto2"].'" alt="">
                  </div>
                </div>
                
              </div>
            </div>  
          </section>
          <!-- END section -->
          <section class="pb_section bg-light">
            <div class="container">
              <div class="row">  
              <div class="col-md">
                  <div class="media pb_media_v2 d-block text-center  mb-3">
                    <div class="icon border border-gray rounded-circle d-flex mr-3 display-4 mx-auto mb-4"><img src="img/hizmetler/icons8-management-64.png"></div>
                    <div class="media-body">
                      <h3 class="mt-0 pb_font-20">ÖZEL CMS PROGRAMLAMA</h3>
                      <p>'.$sonucum["cms"].'</p>
                    </div>
                  </div>
                </div>
                <div class="col-md">
                  <div class="media pb_media_v2 d-block text-center mb-3">
                    <div class="icon border border-gray rounded-circle d-block mr-3 display-4 mx-auto mb-4"><img src="img/hizmetler/icons8-monitor-64.png"></div>
                    <div class="media-body">
                      <h3 class="mt-0 pb_font-20">ARAYÜZ & YAZILIM GELİŞTİRME</h3>
                      <p>'.$sonucum["arayuz"].'</p>
                    </div>
                  </div>
                </div>
              
                <div class="col-md">
                  <div class="media pb_media_v2 d-block text-center  mb-3">
                    <div class="icon border border-gray rounded-circle d-flex mr-3 display-4 mx-auto mb-4"><img src="img/hizmetler/icons8-page-64.png"></div>
                    <div class="media-body">
                      <h3 class="mt-0 pb_font-20">ANALİZ & RAPORLAMA</h3>
                      <p>'.$sonucum["analiz"].'</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- END section -->';

      }

      function web($vt){

        $introAl=$vt->prepare("select * from web");
        $introAl->execute();

        
        $sonucum=$introAl->fetch();

        echo'
                <section class="pb_section" data-section="why-us" id="section-why-us">
                <div class="container">
                  <div class="row justify-content-md-center text-center mb-5 ">
                    <div class="col-lg-7">
                      <h2 class="baslik">web tasarım & yazılım</h2>
                      <p>'.$sonucum["icerik"].'<br><br>
                      <div class="ashade-contact-form__submit"><a href="teklif-al">
                        <input type="button" value="Teklif al" id="gonderbtn"></a>
                      </div></p>
                    </div>
                  </div>
                </div>
              </section>
              <!-- END section -->
          
              <section class="pb_section bg-light">
              <div class="container">
                  <div class="row justify-content-md-center text-center mb-5">
                    <div class="col-lg-7">
                      <h2 class="mt-0 heading-border-top baslik" style="color:black; font-weight:bold;">Nasıl Yapıyoruz</h2>
                    </div>
                  </div>
                </div>
                <div class="container">
                  <div class="row">
                    <div class="col-md">
                      <div class="media pb_media_v2 d-block text-center mb-3">
                        <div class="icon border border-gray rounded-circle d-block mr-3 display-4 mx-auto mb-4"><img src="img/hizmetler/design.png"></div>
                        <div class="media-body">
                          <h3 class="mt-0 pb_font-20">Tasarım</h3>
                          <p>'.$sonucum["nasil1"].'</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md">
                      <div class="media pb_media_v2 d-block text-center  mb-3">
                        <div class="icon border border-gray rounded-circle d-flex mr-3 display-4 mx-auto mb-4"><img src="img/hizmetler/icons8-development-skill-100.png"></div>
                        <div class="media-body">
                          <h3 class="mt-0 pb_font-20">Geliştirme</h3>
                          <p>'.$sonucum["nasil2"].'</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md">
                      <div class="media pb_media_v2 d-block text-center  mb-3">
                        <div class="icon border border-gray rounded-circle d-flex mr-3 display-4 mx-auto mb-4"><img src="img/hizmetler/icons8-strategy-64.png"></div>
                        <div class="media-body">
                          <h3 class="mt-0 pb_font-20">Yayınlama</h3>
                          <p>'.$sonucum["nasil3"].'</p>
                        </div>
                      </div>
                    </div>
                    
                  </div>
                </div>
              </section>
              <!-- END section -->
          
              <section class="pb_section" data-section="why-us" id="section-why-us">
                <div class="container">
                  <div class="row justify-content-md-center text-center mb-5">
                    <div class="col-lg-7">
                      <h2 style="font-size:35px;" class="baslik">Avantajlarımız Neler?</h2>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-5">
                      <div class="images right">
                        <img class="img1 img-fluid" src="'.$sonucum["foto1"].'" alt="">
                        <!-- <video class="img2" autoplay="" loop="" muted="" playsinline=""><source type="video/mp4" src="img/hizmetler/mobile-game-oyun.gif"></video> -->
          
                        <img class="img2" src="'.$sonucum["foto2"].'" alt="">
                      </div>
                    </div>
                    <div class="col-lg-3 pl-md-5 pl-sm-0">
                      <div id="exampleAccordion" class="pb_accordion" data-children=".item">
                          <section class="ashade-section">
                          
          
                    <div class="ashade-row">
                      <div class="ashade-col col-12">
                        <ul>
                          <li>Responsive Website Tasarımı</li>
                          <li>Gelişmiş İçerik Yönetimi</li>
                          <li>Ücretsiz Domain Kaydı</li>
                          <li>E-Ticaret Entegrasyonları</li>
                          <li>1 Yıla Kadar Ücretsiz Bakım</li>
                        </ul>
                                  </div>
                                  <div class="ashade-col col-12">
                        <ul>
                          <li>Kullanıcı Dostu arayüzler</li>
                          <li>Ücretsiz Yıllık Hosting</li>
                          <li>Anahtar Teslim Kurulum & Yükleme</li>
                          <li>Website Entegreli Mobil Uygulama</li>
                          <li>This is a list item 05</li>
                        </ul>
                      </div>
                    </div><!-- .ashade-row -->
                  </section>
                      </div>
          
                    </div>
                  </div>
                </div>
              </section>
              <!-- END section -->';

      }

      function sanal($vt){

        $introAl=$vt->prepare("select * from sanal");
        $introAl->execute();

        

        while($sonucum=$introAl->fetch(PDO::FETCH_ASSOC)):
        echo'<div>


              <div class="d-lg-flex d-md-block slide_content">
              
                <div class="pb_content-media" style="background-image: url('.$sonucum["medya"].');"></div>
                <div class="slide_content-text text-center">
                  <div class="pb_icon_v1"><img style="padding-left:200px;" src="img/hizmetler/icons8-augmented-reality-64.png" alt=""></div><br>
                  
                  <p>'.$sonucum["icerik"].'</p>
                </div>
              </div>

              
            </div>';
        endwhile;

      }

      function modelleme($vt){

        $introAl=$vt->prepare("select * from modelleme");
        $introAl->execute();

        
        $sonucum=$introAl->fetch();

        echo'<section class="pb_section" data-section="why-us" id="section-why-us">
              <div class="container">
                <div class="row justify-content-md-center text-center mb-5">
                  <div class="col-lg-7">
                    <p style="font-size:35px;font-weight:bold;color:white">3D Modelleme & Animasyon</p>
                    <p>'.$sonucum["icerik"].'<br><br>
                    <div class="ashade-contact-form__submit"><a href="teklif-al">
                      <input type="button" value="Teklif al" id="gonderbtn"></a>
                    </div></p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6 p-5" >
                    <div class="images right">
                    <video class="img1 img-fluid" autoplay="" loop="" muted="" playsinline=""><source type="video/mp4" src="'.$sonucum["foto1"].'"></video>
                    <video class="img2" autoplay="" loop="" muted="" playsinline=""><source type="video/mp4" src="'.$sonucum["foto2"].'"></video>
        
                    </div>
                  </div>
                  <div class="col-lg-5 pl-md-5 pl-sm-0">
                    <div id="exampleAccordion" class="pb_accordion" data-children=".item">
                    <div class="item" style="text-align:center;font-weight:bold;font-size:20px">  Modelleme Süreci</div>
                      <div class="item">
                        <a data-toggle="collapse" data-parent="#exampleAccordion" href="#exampleAccordion1" aria-expanded="true" aria-controls="exampleAccordion1" class="pb_font-18"> Planlama</a>
                        <div id="exampleAccordion1" class="collapse show" role="tabpanel">
                          <p>'.$sonucum["planlama"].'</p>
                        </div>
                      </div>
        
        
        
                      <div class="item">
                        <a data-toggle="collapse" data-parent="#exampleAccordion" href="#exampleAccordion2" aria-expanded="false" aria-controls="exampleAccordion2" class="pb_font-18">Geliştirme</a>
                        <div id="exampleAccordion2" class="collapse" role="tabpanel">
                          <p>'.$sonucum["gelistirme"].'</p>
                        </div>
                      </div>
                      <div class="item">
                        <a data-toggle="collapse" data-parent="#exampleAccordion" href="#exampleAccordion3" aria-expanded="false" aria-controls="exampleAccordion3" class="pb_font-18">Yayınlama</a>
                        <div id="exampleAccordion3" class="collapse" role="tabpanel">
                          <p>'.$sonucum["yayinlama"].'</p>
                        </div>
                      </div>
                      <div class="item">
                        <a data-toggle="collapse" data-parent="#exampleAccordion" href="#exampleAccordion4" aria-expanded="false" aria-controls="exampleAccordion4" class="pb_font-18">Bakım</a>
                        <div id="exampleAccordion4" class="collapse" role="tabpanel">
                          <p>'.$sonucum["bakim"].'</p>
                        </div>
                      </div>
                    </div>
        
                  </div>
                </div>
              </div>
            </section>
            <!-- END section -->';

      }



      function referans($vt){

        $introAl=$vt->prepare("select * from referans");
        $introAl->execute();

        

        while($sonucum=$introAl->fetch(PDO::FETCH_ASSOC)):
        echo'
              <div class="ashade-album-item">
                <div class="ashade-album-item__inner">
                  <img src="'.$sonucum["foto"].'" alt="My Special Day" width="1150" height="1000">
                    <div class="ashade-album-item__overlay"></div>
                    <div class="ashade-album-item__title">
                      <h2>
                        <span>'.$sonucum["icerik"].'</span>
                        
                      </h2>
                    </div>
                    <a href="'.$sonucum["link"].'" target="_blank" class="ashade-button">İncele</a>
                  </div>
              </div><!-- .ashade-album-item -->
              ';
        endwhile;

      }


       
      public function sifreleme( $string, $action = 'e' ) {
        $secret_key = 'server12020XDFDFG312312dsasdetrerXCVX';
        $secret_iv  = 'server12020XDFDFG312312dsasdetrerXCVX';
        $output = false;
        $encrypt_method = "AES-256-CBC";
        $key = hash( 'sha256', $secret_key );
        $iv = substr( hash( 'sha256', $secret_iv ), 0, 16 );
        if( $action == 'e' ) {
        $output = base64_encode( openssl_encrypt( $string, $encrypt_method, $key, 0, $iv ) );
        }
        else if( $action == 'd' ){
        $output = openssl_decrypt( base64_decode( $string ), $encrypt_method, $key, 0, $iv );
        }
        return $output;
        }

        
    }




?>