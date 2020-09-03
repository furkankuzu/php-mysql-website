-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 03 Eyl 2020, 12:05:09
-- Sunucu sürümü: 10.3.23-MariaDB-cll-lve
-- PHP Sürümü: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `u9648068_db2020`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

CREATE TABLE `ayarlar` (
  `id` int(11) NOT NULL,
  `title` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `metaTitle` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `metaDesc` text COLLATE utf8_turkish_ci NOT NULL,
  `metaKey` text COLLATE utf8_turkish_ci NOT NULL,
  `metaAuthor` varchar(40) COLLATE utf8_turkish_ci NOT NULL,
  `metaOwner` varchar(40) COLLATE utf8_turkish_ci NOT NULL,
  `metaCopy` varchar(40) COLLATE utf8_turkish_ci NOT NULL,
  `logo` varchar(40) COLLATE utf8_turkish_ci NOT NULL,
  `twitter` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `face` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `insta` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `linkedin` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `youtube` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `telefon` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `adres` text COLLATE utf8_turkish_ci NOT NULL,
  `haritaAdres` text COLLATE utf8_turkish_ci NOT NULL,
  `mail` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `slogan1` varchar(40) COLLATE utf8_turkish_ci NOT NULL,
  `slogan2` varchar(75) COLLATE utf8_turkish_ci NOT NULL,
  `iletisimBaslik` text COLLATE utf8_turkish_ci NOT NULL,
  `projelerBaslik` text COLLATE utf8_turkish_ci NOT NULL,
  `mesajtercih` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`id`, `title`, `metaTitle`, `metaDesc`, `metaKey`, `metaAuthor`, `metaOwner`, `metaCopy`, `logo`, `twitter`, `face`, `insta`, `linkedin`, `youtube`, `telefon`, `adres`, `haritaAdres`, `mail`, `slogan1`, `slogan2`, `iletisimBaslik`, `projelerBaslik`, `mesajtercih`) VALUES
(1, 'Alko Yazılım | Sanal Gerçeklik &amp; Masaüstü &amp; Mobil Oyun, Uygulama Yazılımları', 'Alko Yazılım', 'Firmanız, markanız ve projeniz için ihtiyacınız olan tüm Web &amp; Masaüstü &amp; Mobil Yazılım Geliştirme ve Dijital Pazarlama Hizmetleri’ni geniş bir yelpazede sunuyoruz.', 'Yazılım Firması,Yazılım,yazılım,alko,alkosoft,Alko,AlkoSoft,ALKOSOFT', 'Alkosoft', 'Alper Koca', 'Copyright  ©  2020', 'Alkosoft', 'https://twitter.com/Alkosoft1', 'https://www.facebook.com/AlkosoftOfficial', 'https://www.instagram.com/alkosoft/', 'linkedin.com/company/alko-soft', 'https://www.youtube.com/channel/UC29ipjLpQ7ns5wZhuIrTo6g?%2F%3Fsub_confirmation=', '+90 530 209 37 09', 'Sakarya Üniversitesi Teknoloji Geliştirme Bölgesi Esentepe Mah. Akademiyolu Sok. No:10 D Blok 103 Serdivan / SAKARYA', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.975838077855!2d30.33656851540584!3d40.74055717932875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14ccad9127b5bef9%3A0x686e060294777c82!2sAlkosoft%20Bili%C5%9Fim!5e0!3m2!1str!2str!4v1597828632592!5m2!1str!2str', 'info@alkoyazilim.com', '&quot; Hayallerinizi kodluyoruz. &quot;', '&quot; coding the future &quot;', 'Projenizde Birlikte Çalışalım&lt;br&gt; Hedeflerinize ulaşmanıza ve işinizi büyütmenize yardımcı oluyoruz.', 'Firmanız, markanız ve projeniz için ihtiyacınız olan tüm Web &amp; Masaüstü &amp; Mobil Yazılım Geliştirme ve Dijital Pazarlama Hizmetleri’ni geniş bir yelpazede sunuyoruz.', 3);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bloglar`
--

CREATE TABLE `bloglar` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `metin` text NOT NULL,
  `userid` int(11) NOT NULL,
  `tarih` datetime NOT NULL,
  `goruntu` int(11) NOT NULL,
  `etiketler` text NOT NULL,
  `resim` varchar(100) NOT NULL,
  `kategoriid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `bloglar`
--

INSERT INTO `bloglar` (`id`, `title`, `metin`, `userid`, `tarih`, `goruntu`, `etiketler`, `resim`, `kategoriid`) VALUES
(1, 'rytrtyrt', 'rtyrtyrtyrt', 1, '2020-08-27 12:12:31', 21, '12121', '', 1),
(2, 'rytrtyrt', 'rtyrtyrtyrt', 1, '2020-08-27 12:12:31', 21, '12121', '', 1),
(3, 'rytrtyrt', 'rtyrtyrtyrt', 1, '2020-08-27 12:12:31', 21, '12121', '', 1),
(4, 'rytrtyrt', 'rtyrtyrtyrt', 1, '2020-08-27 12:12:31', 21, '12121', '', 1),
(5, 'rytrtyrt', 'rtyrtyrtyrt', 1, '2020-08-27 12:12:31', 21, '12121', '', 1),
(6, 'rytrtyrt', 'rtyrtyrtyrt', 1, '2020-08-27 12:12:31', 21, '12121', '', 1),
(7, 'rytrtyrt', 'rtyrtyrtyrt', 1, '2020-08-27 12:12:31', 21, '12121', '', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gelenmail`
--

CREATE TABLE `gelenmail` (
  `id` int(11) NOT NULL,
  `ad` varchar(40) COLLATE utf8_turkish_ci NOT NULL,
  `mailadres` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `konu` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `mesaj` text COLLATE utf8_turkish_ci NOT NULL,
  `tarih` varchar(10) COLLATE utf8_turkish_ci NOT NULL,
  `durum` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `gelenmail`
--

INSERT INTO `gelenmail` (`id`, `ad`, `mailadres`, `konu`, `mesaj`, `tarih`, `durum`) VALUES
(1, 'furkan', 'furkan@kuzu', 'mail', 'içerik', '19/08/2020', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gelenmailayar`
--

CREATE TABLE `gelenmailayar` (
  `id` int(11) NOT NULL,
  `host` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `mailadres` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `port` int(11) NOT NULL,
  `aliciadres` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `gelenmailayar`
--

INSERT INTO `gelenmailayar` (`id`, `host`, `mailadres`, `sifre`, `port`, `aliciadres`) VALUES
(1, 'hosttt', 'ma', 'sif', 123, 'alici@asd');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimizda`
--

CREATE TABLE `hakkimizda` (
  `id` int(11) NOT NULL,
  `title` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `meta_title` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `meta_key` text COLLATE utf8_turkish_ci NOT NULL,
  `meta_desc` text COLLATE utf8_turkish_ci NOT NULL,
  `baslik` varchar(60) COLLATE utf8_turkish_ci NOT NULL,
  `alt_baslik` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `foto` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `misyon` text COLLATE utf8_turkish_ci NOT NULL,
  `vizyon` text COLLATE utf8_turkish_ci NOT NULL,
  `memnuniyet` varchar(4) COLLATE utf8_turkish_ci NOT NULL,
  `tecrube` varchar(4) COLLATE utf8_turkish_ci NOT NULL,
  `toplamproje` varchar(5) COLLATE utf8_turkish_ci NOT NULL,
  `foto2` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `metaDesc` text COLLATE utf8_turkish_ci NOT NULL,
  `metaKey` text COLLATE utf8_turkish_ci NOT NULL,
  `icerik` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `hakkimizda`
--

INSERT INTO `hakkimizda` (`id`, `title`, `meta_title`, `meta_key`, `meta_desc`, `baslik`, `alt_baslik`, `foto`, `misyon`, `vizyon`, `memnuniyet`, `tecrube`, `toplamproje`, `foto2`, `metaDesc`, `metaKey`, `icerik`) VALUES
(1, 'Hakkımızda | Alko Yazılım', 'asdasd', 'asdasdasd', 'asdasdasdasd', 'BİZ KİMİZ?', 'HAKKIMIZDA', 'img/hakkimizda/sanal-arttirilmis-gerceklik.jpg', 'Müşteri memnuniyetini esas alan bir yaklaşımla kalite ve maliyet dengesini kurup, uluslararası kalite standartlarında bilişim ürün ve hizmetlerini sunmak,\r\n\r\nTeknolojik yetenek ve kapasitesini Ar-Ge çalışmalarıyla geliştirerek, özgün ürün tasarlayabilen, etkin eğitim ve danışmanlık hizmetleri veren güvenilir bir uluslararası şirket olmak, Kendini geliştirme arzusuyla bilgi ve becerilerini yenileyen, aidiyet duygusu, görev anlayışı ve sorumluluk bilinci yüksek, takım çalışmasına yatkın, moral değerleri taşıyan çalışanları olmaktır.\r\n', 'Dünyadaki teknolojik gelişmelere hızla uyum sağlamak, hizmet verdiği işletmelere de aynı değişimi yansıtarak, müşterilerinin verimli, rekabetçi ve kârlı firmalar olması yönünde çözümler üretmek bir yazılım firmasının sahip olması gereken en önemli ilkelerin başında gelmektedir. Bu bilinçle hareket ederek, ulusal ve uluslararası düzeyde sektörün geleceğine yön veren lider bir firma olma yolunda emin adımlarla ilerlemekte, yakaladığı hızlı büyüme ivmesini istikrarla sürdürmektedir.\r\n\r\n', '99', '12', '250', 'img/general/bb.jpg', 'Firmanız, markanız ve projeniz için ihtiyacınız olan tüm Web & Masaüstü & Mobil Yazılım Geliştirme ve Dijital Pazarlama Hizmetleri’ni geniş bir yelpazede sunuyoruz.', '', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hizmetler`
--

CREATE TABLE `hizmetler` (
  `id` int(11) NOT NULL,
  `link` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `video` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `adi` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `hizmetler`
--

INSERT INTO `hizmetler` (`id`, `link`, `video`, `adi`) VALUES
(1, 'oyun', 'img/hizmetler/LiveAvatar%20Broadcast%20Augmented%20Reality%20-%20World,%20Meet%20S.E.A.N.mp4', 'Oyun'),
(2, 'mobil-uygulama', 'img/hizmetler/mg6.mp4', 'Mobil Uygulama'),
(3, 'masaustu-yazilim', 'img/hizmetler/Sanal-gerceklik-projesi-alko-1.mp4', 'Masaüstü Yazılım'),
(4, 'webtasarim-yazilim', 'img/hizmetler/Real-time - sanal gerceklik.mp4', 'Web Tasarım/Yazılım'),
(5, 'sanal-gerceklik', 'img/hizmetler/sanal-gerçeklik-alkosoft.mp4', 'Artırılmış Gerçeklik'),
(6, 'modelleme', 'img/hizmetler/3D-modelleme-Autodesk.mp4', '3D Modelleme');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `masaustu`
--

CREATE TABLE `masaustu` (
  `id` int(11) NOT NULL,
  `icerik1` text COLLATE utf8_turkish_ci NOT NULL,
  `icerik2` text COLLATE utf8_turkish_ci NOT NULL,
  `foto1` varchar(75) COLLATE utf8_turkish_ci NOT NULL,
  `foto2` varchar(75) COLLATE utf8_turkish_ci NOT NULL,
  `cms` text COLLATE utf8_turkish_ci NOT NULL,
  `arayuz` text COLLATE utf8_turkish_ci NOT NULL,
  `analiz` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `masaustu`
--

INSERT INTO `masaustu` (`id`, `icerik1`, `icerik2`, `foto1`, `foto2`, `cms`, `arayuz`, `analiz`) VALUES
(1, 'Masaüstü yazılımlar, son kullanıcının makinesi üzerinde çalıştırılan, gereken tüm sistem kaynaklarını son kullanıcı makinesindeki işletim sisteminden alan yazılımlardır. Masaüstü yazılımlara, tüm işletmeler ihtiyaç duyabilir. Küçük ve orta ölçekli firmaların kullanacağı temel hesap-stok uygulamaları için yazılabildikleri gibi büyük çaplı firmalarda aynı zaman diliminde milyonlarca kullanıcının bağlı olduğu sistemler için de yazılabilirler.\r\n', 'İhtiyaçlarınızı analiz ederek sizler için en uygun çözümü sunmaya hazır bulunan firmamız, masaüstü yazılım alanlarında da benzersiz projeleri hayata geçirmeye devam ediyor. Geliştirdiğimiz size özel masaüstü yazılımlar sayesinde işletmenizin tüm faaliyetlerini takip edebilir, yine beklentilerinizi karşılayan kurumunuza özgü fonksiyonlar vasıtasıyla iş akışınızı hızlandırabilirsiniz.\r\n\r\n', 'img/hizmetler/artirilmis-gerceklik-nedir-1024x576.jpg', 'img/hizmetler/desk-1024x689.jpeg', 'Firmanıza özel modüler içerik yönetim sistemleri kuruyoruz. Hedefimiz maksimum verim alabileceğiniz masaüstü yazılımlar çıkartmak\r\n', 'Online platformda çalışan, hedefinize odaklı ve kullanıcının kolay hakim olacağı arayüzler geliştirip yazılımla entegre ediyoruz.\r\n', 'İş gücünü en aza indiren, analiz ve raporlama kolaylığı sağlayan, kapalı devre olarak çalışan ve web tabanlı yazılım uygulamalarından daha hızlı ve seri olan yazılımlar geliştiriyoruz.\r\n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mobil`
--

CREATE TABLE `mobil` (
  `id` int(11) NOT NULL,
  `icerik` text COLLATE utf8_turkish_ci NOT NULL,
  `foto1` varchar(40) COLLATE utf8_turkish_ci NOT NULL,
  `foto2` varchar(65) COLLATE utf8_turkish_ci NOT NULL,
  `mobilUygulama` text COLLATE utf8_turkish_ci NOT NULL,
  `mobilOyun` text COLLATE utf8_turkish_ci NOT NULL,
  `mobilEtic` text COLLATE utf8_turkish_ci NOT NULL,
  `baslik` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `alt_baslik` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `resim` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `mobil`
--

INSERT INTO `mobil` (`id`, `icerik`, `foto1`, `foto2`, `mobilUygulama`, `mobilOyun`, `mobilEtic`, `baslik`, `alt_baslik`, `resim`) VALUES
(1, 'Hayalinizdeki proje için mobil uygulama yaptırmak ve Android &amp; iOS platformlarında yayınlamak mı istiyorsunuz ? Mobil uygulama geliştiren firmalar size yüksek maliyetli teklif mi sundular ?\r\n\r\nAlanında uzman ekibimizle gelin mobil uygulama fikrinizi beraber projelendirelim, hem tasarım ve performansıyla üstün kullanıcı deneyimi sunan mobil uygulamanız olsun, hem de uygulamanız Google Play Store ve App Store’da öne çıkarak kazanç elde etsin.\r\n ', 'model01.jpg', 'img/hizmetler/model02.png', 'Uygulama marketlerinde yayınlanmak üzere, son kullanıcı için özel olarak hazırlanmış mobil uygulamalar geliştiriyoruz\r\n', 'Görsel ve fonksiyonel tasarımdan başlayarak hayalinizdeki mobil oyunlara ulaşmanız için gereken tüm süreçte profesyonel hizmet veriyoruz\r\n', 'Kurumsal kimliğinizi yansıtacak, satışlarınızda belirgin oranda farklar yaratacak, markanıza özel e-ticaret mobil uygulamaları geliştiriyoruz.', 'MOBİL UYGULAMA', 'Android & Ios Native Uygulamalar', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mobil_oyun`
--

CREATE TABLE `mobil_oyun` (
  `id` int(11) NOT NULL,
  `title` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `meta_title` text COLLATE utf8_turkish_ci NOT NULL,
  `meta_key` text COLLATE utf8_turkish_ci NOT NULL,
  `meta_desc` text COLLATE utf8_turkish_ci NOT NULL,
  `baslik` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `alt_baslik` text COLLATE utf8_turkish_ci NOT NULL,
  `icerik` text COLLATE utf8_turkish_ci NOT NULL,
  `nasil1` text COLLATE utf8_turkish_ci NOT NULL,
  `nasil2` text COLLATE utf8_turkish_ci NOT NULL,
  `nasil3` text COLLATE utf8_turkish_ci NOT NULL,
  `resim` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `mobil_oyun`
--

INSERT INTO `mobil_oyun` (`id`, `title`, `meta_title`, `meta_key`, `meta_desc`, `baslik`, `alt_baslik`, `icerik`, `nasil1`, `nasil2`, `nasil3`, `resim`) VALUES
(1, 'Masaüstü &amp; Mobil Oyun | Alko Yazılım', 'yyyy', 'asdasdasd', 'asdasdasd', 'MASAÜSTÜ &amp; MOBİL OYUN', 'Yeni Oyun Dünyası', 'Akıllı telefon ve tabletlerin çok yaygın bir şekilde kullanılmaya başlamasıyla birlikte mobil oyun yazılımı da büyük ilgi görmeye başlamıştır.\r\n\r\nÖzellikle artık eğlence olarak akıllı cihaz kullanıcıları oyun uygulamalarını çok fazla kullanmaktadırlar. Bu nedenle mobil oyun yazılımları da her geçen gün daha çok yapılmakta ve kullanıcılara sunulmaktadır.\r\n', 'FPS(First Person Shooter) yani Birinci Şahıs Nişancı oyunları oyun tarihinin vazgeçilmez oyun türlerinden biridir. Çok fazla çeşidi vardır.Savaş,yarış,strateji gibi çeşitleri olsad a asıl amacı oyuncunun kendi gözünden oynuyormuşcasına hissi yaşatan oyunlara denir. Bizimde üzerine yoğunlaştığımız oyun türlerinden biridir.\r\n', 'TPS(Third-Person Shooter) yani Üçüncü Şahıs Bakış Açısı, değişik şekillerde oyuncu karakterini gösteren 3 boyutlu bilgisayar ve video oyunu türüdür. Üçüncü şahıs nişancı türündeki oyunlarda genellikle oyuncu karakterinin arkasından oyun görülür. Üçüncül kişi bakış açısı çevreyi daha iyi görmeyi sağlar.\r\n', 'RPG(Role Playing Game) gerçek hayatta geliştirebildiğiniz yeteneklerinizi ve tecrübelerinizi bu oyun türünde geliştirme imkanı bulursunuz. RPG oyun türü tamamen sizin oluşturduğunuz bir karakterle size farklı bir dünyada var olma şansı tanıyan eşsiz bir oyun türüdür.\r\n', 'arnedir.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mobil_uygulama`
--

CREATE TABLE `mobil_uygulama` (
  `id` int(11) NOT NULL,
  `title` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `meta_title` text COLLATE utf8_turkish_ci NOT NULL,
  `meta_key` text COLLATE utf8_turkish_ci NOT NULL,
  `meta_desc` text COLLATE utf8_turkish_ci NOT NULL,
  `baslik` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `alt_baslik` text COLLATE utf8_turkish_ci NOT NULL,
  `icerik` text COLLATE utf8_turkish_ci NOT NULL,
  `nasil1` text COLLATE utf8_turkish_ci NOT NULL,
  `nasil2` text COLLATE utf8_turkish_ci NOT NULL,
  `nasil3` text COLLATE utf8_turkish_ci NOT NULL,
  `resim` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `mobil_uygulama`
--

INSERT INTO `mobil_uygulama` (`id`, `title`, `meta_title`, `meta_key`, `meta_desc`, `baslik`, `alt_baslik`, `icerik`, `nasil1`, `nasil2`, `nasil3`, `resim`) VALUES
(1, 'Mobil Uygulama | Alko Yazılım', 'asdasdasaaa', 'asdasdasd', 'asdasdasd', 'MOBİL UYGULAMA', 'Android & Ios Native Uygulamalar', 'Hayalinizdeki proje için mobil uygulama yaptırmak ve Android &amp; iOS platformlarında yayınlamak mı istiyorsunuz ? Mobil uygulama geliştiren firmalar size yüksek maliyetli teklif mi sundular ?\r\n\r\nAlanında uzman ekibimizle gelin mobil uygulama fikrinizi beraber projelendirelim, hem tasarım ve performansıyla üstün kullanıcı deneyimi sunan mobil uygulamanız olsun, hem de uygulamanız Google Play Store ve App Store’da öne çıkarak kazanç elde etsin.\r\n ', 'Uygulama marketlerinde yayınlanmak üzere, son kullanıcı için özel olarak hazırlanmış mobil uygulamalar geliştiriyoruz\r\n', 'Görsel ve fonksiyonel tasarımdan başlayarak hayalinizdeki mobil oyunlara ulaşmanız için gereken tüm süreçte profesyonel hizmet veriyoruz\r\n', 'Kurumsal kimliğinizi yansıtacak, satışlarınızda belirgin oranda farklar yaratacak, markanıza özel e-ticaret mobil uygulamaları geliştiriyoruz.', 'model01.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `modelleme`
--

CREATE TABLE `modelleme` (
  `id` int(11) NOT NULL,
  `icerik` text COLLATE utf8_turkish_ci NOT NULL,
  `planlama` text COLLATE utf8_turkish_ci NOT NULL,
  `gelistirme` text COLLATE utf8_turkish_ci NOT NULL,
  `yayinlama` text COLLATE utf8_turkish_ci NOT NULL,
  `bakim` text COLLATE utf8_turkish_ci NOT NULL,
  `foto1` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `foto2` varchar(100) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `modelleme`
--

INSERT INTO `modelleme` (`id`, `icerik`, `planlama`, `gelistirme`, `yayinlama`, `bakim`, `foto1`, `foto2`) VALUES
(1, 'Firmamız bünyesinde çalışan 3D Modelleme ve Animasyon ekibiyle birlikte aklınızda ve hayalnizde projeleri gerçeğe dönüştürüyoruz. Her türlü projelerinizde uzman ekibimizle hayalleriniz gerçekleştiriyoruz.', 'Sizden beklentilerinizi ve yapılmasını istediklerinizi projeleştirip, zaman planlamasını oluşturuyoruz.\r\n', 'Tasarım onayı sonrası projeyi, hedef müşteri odaklı ve içerik yönetim sistemi merkezli geliştiriyoruz.\r\n', 'Başarılı demo testlerinden ve sizin onayınızdan sonra projenizi teslim edip yayına alıyoruz.\r\n', 'Bitmedi! Projenizi yayına aldıktan sonra da sistemin verimliliğinin devamı ve bakımı için her zaman yanınızdayız.', 'img/hizmetler/3D-Character-Dancing-Animation.mp4', 'img/hizmetler/3D-animasyon-ornekleri.mp4');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `oyun`
--

CREATE TABLE `oyun` (
  `id` int(11) NOT NULL,
  `title` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `meta_title` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `meta_key` text COLLATE utf8_turkish_ci NOT NULL,
  `meta_desc` text COLLATE utf8_turkish_ci NOT NULL,
  `baslik` varchar(60) COLLATE utf8_turkish_ci NOT NULL,
  `alt_baslik` varchar(60) COLLATE utf8_turkish_ci NOT NULL,
  `icerik` text COLLATE utf8_turkish_ci NOT NULL,
  `foto1` varchar(40) COLLATE utf8_turkish_ci NOT NULL,
  `foto2` varchar(40) COLLATE utf8_turkish_ci NOT NULL,
  `fpsIcerik` text COLLATE utf8_turkish_ci NOT NULL,
  `tpsIcerik` text COLLATE utf8_turkish_ci NOT NULL,
  `rpgIcerik` text COLLATE utf8_turkish_ci NOT NULL,
  `foto3` varchar(40) COLLATE utf8_turkish_ci NOT NULL,
  `foto4` varchar(40) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `oyun`
--

INSERT INTO `oyun` (`id`, `title`, `meta_title`, `meta_key`, `meta_desc`, `baslik`, `alt_baslik`, `icerik`, `foto1`, `foto2`, `fpsIcerik`, `tpsIcerik`, `rpgIcerik`, `foto3`, `foto4`) VALUES
(1, 'Masaüstü &amp; Mobil Oyun | Alko Yazılım', '4eeeee', 'asdasda', 'asdasdasd', 'Masaüstü & Mobil', 'OYUN', 'Akıllı telefon ve tabletlerin çok yaygın bir şekilde kullanılmaya başlamasıyla birlikte mobil oyun yazılımı da büyük ilgi görmeye başlamıştır.\r\n\r\nÖzellikle artık eğlence olarak akıllı cihaz kullanıcıları oyun uygulamalarını çok fazla kullanmaktadırlar. Bu nedenle mobil oyun yazılımları da her geçen gün daha çok yapılmakta ve kullanıcılara sunulmaktadır.\r\n', 'img/hizmetler/arnedir.jpg', 'img/hizmetler/oyunyaz.jpg', 'FPS(First Person Shooter) yani Birinci Şahıs Nişancı oyunları oyun tarihinin vazgeçilmez oyun türlerinden biridir. Çok fazla çeşidi vardır.Savaş,yarış,strateji gibi çeşitleri olsad a asıl amacı oyuncunun kendi gözünden oynuyormuşcasına hissi yaşatan oyunlara denir. Bizimde üzerine yoğunlaştığımız oyun türlerinden biridir.\r\n', 'TPS(Third-Person Shooter) yani Üçüncü Şahıs Bakış Açısı, değişik şekillerde oyuncu karakterini gösteren 3 boyutlu bilgisayar ve video oyunu türüdür. Üçüncü şahıs nişancı türündeki oyunlarda genellikle oyuncu karakterinin arkasından oyun görülür. Üçüncül kişi bakış açısı çevreyi daha iyi görmeyi sağlar.\r\n', 'RPG(Role Playing Game) gerçek hayatta geliştirebildiğiniz yeteneklerinizi ve tecrübelerinizi bu oyun türünde geliştirme imkanı bulursunuz. RPG oyun türü tamamen sizin oluşturduğunuz bir karakterle size farklı bir dünyada var olma şansı tanıyan eşsiz bir oyun türüdür.\r\n', 'img/hizmetler/2.jpg', 'img/hizmetler/4.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `referans`
--

CREATE TABLE `referans` (
  `id` int(11) NOT NULL,
  `foto` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `icerik` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `link` varchar(150) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sanal`
--

CREATE TABLE `sanal` (
  `id` int(11) NOT NULL,
  `medya` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `icerik` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `sanal`
--

INSERT INTO `sanal` (`id`, `medya`, `icerik`) VALUES
(1, 'img/hizmetler/sg1.jpg', 'Bu teknolojiden faydalanabilmeniz için akıllı gözlük, akıllı telefon ya da tablet bulunması gerekir.Arttırılmış Gerçeklik (Augmented Reality) için tasarlanmış görseli cihazınızdaki uygulama ile tanımladığınızda, cihazınız görseli algılıyor ve yeni bir görüntüyle karşılaşıyorsunuz. Microsoft’un ürünü olan Hololens gözlükleri artırılmış gerçeklik alanında olan videosunu izleleyebilirsiniz.'),
(2, 'img/hizmetler/sg2.jpg', 'Teknolojik gelişmeler ile birlikte dünyada eğitim, askeriye, tasarım, spor, eğlence ve sağlık sektörlerinde artırılmış gerçeklik teknolojisi kullanılmaya\r\n başlanmıştır.  Dünyada hemen hemen her alana yayılmış olan bu teknoloji ülkemizde halen çok kısıtlı olarak kullanılmaktadır.\r\n  “Artırılmış Gerçeklik“ teknolojisinin mobil cihazlarla birlikte kullanımında insanların hayatını ne kadar kolaylaştıracağı düşünüldüğünde bu teknolojiyi\r\n   iş dünyasıyla buluşturmak artık bir zorunluluk haline gelmiştir. Bizler bu teknolojiyi sizlere sunarak, ister kataloğunuzda,broşürünüzde veya\r\n   farklı bir basılı materyalde, isterseniz tamamen size ve sektörünüze özel farklı bir çözüm ile artırılmış gerçeklik web veya mobil uygulaması sunuyoruz.'),
(3, 'img/hizmetler/sg3.jpg', 'İnteraktif modellerle öğrenmek her zaman daha akılda kalıcı oluyor.  Artırılmış gerçeklik teknolojisi de bir şekilde bunu sağlıyor. Eğitim sektöründe büyük değişimlere öncülük edercek. Bunun pek çok örneklerini de sektörde  görmeye başlıyoruz.'),
(4, 'img/hizmetler/sg4.png', 'Niantic Labs tarafından geliştirilen Pokemon Go’nun başarısı ile artırılmış gerçekliğin en büyük başarısı oldu.\r\nPokemon Go oyununun bu başarısını mümkün kılan teknoloji halihazırda geliştiricisi Niantic’in ilk oyunu Ingress\'e dayanmaktadır .\r\nPokemon Go hakkında hala bilginiz yoksa videomuzu izleyebilirsiz');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sanal_gerceklik`
--

CREATE TABLE `sanal_gerceklik` (
  `id` int(11) NOT NULL,
  `title` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `meta_title` text COLLATE utf8_turkish_ci NOT NULL,
  `meta_key` text COLLATE utf8_turkish_ci NOT NULL,
  `meta_desc` text COLLATE utf8_turkish_ci NOT NULL,
  `baslik` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `alt_baslik` text COLLATE utf8_turkish_ci NOT NULL,
  `icerik` text COLLATE utf8_turkish_ci NOT NULL,
  `nasil1` text COLLATE utf8_turkish_ci NOT NULL,
  `nasil2` text COLLATE utf8_turkish_ci NOT NULL,
  `nasil3` text COLLATE utf8_turkish_ci NOT NULL,
  `resim` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `sanal_gerceklik`
--

INSERT INTO `sanal_gerceklik` (`id`, `title`, `meta_title`, `meta_key`, `meta_desc`, `baslik`, `alt_baslik`, `icerik`, `nasil1`, `nasil2`, `nasil3`, `resim`) VALUES
(1, 'Sanal Gerçeklik | Alko Yazılım', 'asdasdasaaa', 'asdasdasd', 'asdasdasd', 'SANAL GERÇEKLİK', 'Virtual Reality', 'Teknik olarak sanal gerçeklik terimi bireylerin orda olma hissini yaşadığı bilgisayar kaynaklı 3 boyutlu ortamlar için kullanılıyor. Kullanıcılar, çeşitli çevre birimleri (kasklı ekran vb.) aracılığıyla sanal ortamlara dahil oluyor. O ortama girdiği andan itibaren kullanıcının gerçeklik ile bağlantısı kopuyor ve tamamen sanal gerçekliğin yaratıldığı ortamda olma hissini yaşıyor. Kullanıcıların bu deneyimi “gerçekten” yaşayabilmesi için, sanal gerçeklik tasarımlarının kusursuz olması gerekir; aksi takdirde yaratılan zayıf “gerçeklik hissiyatı” kullanıcının bu deneyimi tam olarak yaşayamamasına sebep olur.\r\nİnteraktif modellerle öğrenmek her zaman daha akılda kalıcı oluyor. Artırılmış gerçeklik teknolojisi de bir şekilde bunu sağlıyor. Eğitim sektöründe büyük değişimlere öncülük edercek. Bunun pek çok örneklerini de sektörde görmeye başlıyoruz.', 'Bu teknolojiden faydalanabilmeniz için akıllı gözlük, akıllı telefon ya da tablet bulunması gerekir.Arttırılmış Gerçeklik (Augmented Reality) için tasarlanmış görseli cihazınızdaki uygulama ile tanımladığınızda, cihazınız görseli algılıyor ve yeni bir görüntüyle karşılaşıyorsunuz. Microsoft’un ürünü olan Hololens gözlükleri artırılmış gerçeklik alanında olan videosunu izleleyebilirsiniz.', 'Teknolojik gelişmeler ile birlikte dünyada eğitim, askeriye, tasarım, spor, eğlence ve sağlık sektörlerinde artırılmış gerçeklik teknolojisi kullanılmaya\r\n başlanmıştır.  Dünyada hemen hemen her alana yayılmış olan bu teknoloji ülkemizde halen çok kısıtlı olarak kullanılmaktadır.\r\n  “Artırılmış Gerçeklik“ teknolojisinin mobil cihazlarla birlikte kullanımında insanların hayatını ne kadar kolaylaştıracağı düşünüldüğünde bu teknolojiyi\r\n   iş dünyasıyla buluşturmak artık bir zorunluluk haline gelmiştir. Bizler bu teknolojiyi sizlere sunarak, ister kataloğunuzda,broşürünüzde veya\r\n   farklı bir basılı materyalde, isterseniz tamamen size ve sektörünüze özel farklı bir çözüm ile artırılmış gerçeklik web veya mobil uygulaması sunuyoruz.', 'İnteraktif modellerle öğrenmek her zaman daha akılda kalıcı oluyor.  Artırılmış gerçeklik teknolojisi de bir şekilde bunu sağlıyor. Eğitim sektöründe büyük değişimlere öncülük edercek. Bunun pek çok örneklerini de sektörde  görmeye başlıyoruz.', 'sanalgerceklik-2020.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `web`
--

CREATE TABLE `web` (
  `id` int(11) NOT NULL,
  `title` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `meta_title` text COLLATE utf8_turkish_ci NOT NULL,
  `meta_key` text COLLATE utf8_turkish_ci NOT NULL,
  `meta_desc` text COLLATE utf8_turkish_ci NOT NULL,
  `baslik` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `alt_baslik` text COLLATE utf8_turkish_ci NOT NULL,
  `icerik` text COLLATE utf8_turkish_ci NOT NULL,
  `nasil1` text COLLATE utf8_turkish_ci NOT NULL,
  `nasil2` text COLLATE utf8_turkish_ci NOT NULL,
  `nasil3` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `web`
--

INSERT INTO `web` (`id`, `title`, `meta_title`, `meta_key`, `meta_desc`, `baslik`, `alt_baslik`, `icerik`, `nasil1`, `nasil2`, `nasil3`) VALUES
(1, 'Web Tasarım | Alko Yazılım', 'asdasdasaaa', 'asdasdasd', 'asdasdasd', 'WEB TASARIM', 'Son Teknoloji Web Siteleri', 'Günümüzde internet, iletişim, tanıtım ve satış için en etkili araçtır. Bugün web siteleri işletmelerin dijital dünyada temsilcisi hâline gelmiştir. Satın alacağımız bir ürüne veya hizmete karar verirken bir şirketi veya markayı araştırırken internete bakıyoruz. Sizleri dijital dünyada başarıyla temsil edip hedef kitlenizle buluşturacak &quot;Kurumsal Web Tasarım&quot;, &quot;Responsive Web Sitesi Tasarımı&quot;, &quot;Mobil Web Sitesi Tasarımı&quot; hizmetlerimizle her zaman yanınızdayız.', 'Mobil ve seo uyumlu web tasarım çözümlerimizle potansiyel müşterilerinize ulaşmanızı sağlıyoruz.', 'Dijital medya ekibimizle markanızıın hedefe ulaşması yolunda profesyonel paylaşımlara imza atıyoruz.', 'Web sayfanızın Google arama sonuçlarında üst sıralarda yer almasını sağlayan çalışmalar yapıyoruz.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `web_projeler`
--

CREATE TABLE `web_projeler` (
  `id` int(11) NOT NULL,
  `adi` varchar(50) NOT NULL,
  `resim` varchar(150) NOT NULL,
  `link` text NOT NULL,
  `kategoriid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `web_projeler`
--

INSERT INTO `web_projeler` (`id`, `adi`, `resim`, `link`, `kategoriid`) VALUES
(1, 'abc', 'asd.png', 'www.abc.com', 0),
(2, 'twitter', 'asd.png', 'www.twitter.com', 0),
(3, 'web tasarim', 'asd.png', 'facebook.com', 0),
(4, 'web', 'asd.png', 'youtube.com', 0),
(6, '57567', 'aaa.jpg', '75675', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yonetim`
--

CREATE TABLE `yonetim` (
  `id` int(11) NOT NULL,
  `kulad` varchar(60) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(60) COLLATE utf8_turkish_ci NOT NULL,
  `aktif` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yonetim`
--

INSERT INTO `yonetim` (`id`, `kulad`, `sifre`, `aktif`) VALUES
(1, 'furkan', '021c6cd3a69730ac97d0b65576a9004f', 1),
(3, 'bilge', '021c6cd3a69730ac97d0b65576a9004f', 1);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ayarlar`
--
ALTER TABLE `ayarlar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `bloglar`
--
ALTER TABLE `bloglar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `gelenmail`
--
ALTER TABLE `gelenmail`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `gelenmailayar`
--
ALTER TABLE `gelenmailayar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `hakkimizda`
--
ALTER TABLE `hakkimizda`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `hizmetler`
--
ALTER TABLE `hizmetler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `masaustu`
--
ALTER TABLE `masaustu`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `mobil_oyun`
--
ALTER TABLE `mobil_oyun`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `mobil_uygulama`
--
ALTER TABLE `mobil_uygulama`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `modelleme`
--
ALTER TABLE `modelleme`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `oyun`
--
ALTER TABLE `oyun`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `referans`
--
ALTER TABLE `referans`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sanal`
--
ALTER TABLE `sanal`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sanal_gerceklik`
--
ALTER TABLE `sanal_gerceklik`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `web`
--
ALTER TABLE `web`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `web_projeler`
--
ALTER TABLE `web_projeler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yonetim`
--
ALTER TABLE `yonetim`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `ayarlar`
--
ALTER TABLE `ayarlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `bloglar`
--
ALTER TABLE `bloglar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `gelenmail`
--
ALTER TABLE `gelenmail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `gelenmailayar`
--
ALTER TABLE `gelenmailayar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `hakkimizda`
--
ALTER TABLE `hakkimizda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `hizmetler`
--
ALTER TABLE `hizmetler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `masaustu`
--
ALTER TABLE `masaustu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `mobil_oyun`
--
ALTER TABLE `mobil_oyun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `mobil_uygulama`
--
ALTER TABLE `mobil_uygulama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `modelleme`
--
ALTER TABLE `modelleme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `oyun`
--
ALTER TABLE `oyun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `referans`
--
ALTER TABLE `referans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Tablo için AUTO_INCREMENT değeri `sanal`
--
ALTER TABLE `sanal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `sanal_gerceklik`
--
ALTER TABLE `sanal_gerceklik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `web`
--
ALTER TABLE `web`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `web_projeler`
--
ALTER TABLE `web_projeler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `yonetim`
--
ALTER TABLE `yonetim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
