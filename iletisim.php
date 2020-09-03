<?php

use PHPMailer\PHPMailer\PHPMailer;

include_once("lib/fonksiyon.php");
$yonetim = new yonetim();
$msg = "";
function MailGonder($usermail, $userisim, $mesaj)
{
	require("Mail/class.phpmailer.php");
	require 'Mail/PHPMailerAutoload.php';
	$xmail = new PHPMailer();
	$xmail->IsSMTP();                                   // send via SMTP
	$xmail->Host     = "smtp.yandex.com"; // SMTP servers
	$xmail->SMTPSecure = 'tsl';
	$xmail->Port = 587;
	$xmail->SMTPAuth = true;
	$xmail->Username = "alkoyazilim54@yandex.com.tr";  // SMTP username
	$xmail->Password = "evlmorfpjwsonldy"; // SMTP password
	$xmail->CharSet  = 'utf-8';
	$xmail->SetFrom('alkoyazilim54@yandex.com.tr', 'Alko Yazılım');
	$xmail->AddAddress($usermail, $userisim);
	$xmail->Subject  =  "Iletisim Formu";
	


	$xmail->IsHTML(true);
	$xmail->Body     =  $mesaj;
	if (!$xmail->Send()) {
		return 0;
		echo $msg = "Mailer Error: " . $mail->ErrorInfo;
		exit;
	} else {
		echo'<script>alert("Mesajınız gönderildi.")</script>';
		return 1;
	}
}

if (isset($_POST["submit"])) {
	$isim = $_POST["name"];
	$mail = $_POST["email"];
	$msg  = $_POST["msg"];

	$body = "<table>";
	$body .= "<tr>";
	$body .= "<td><b>İsim Soyisim</b></td> <td>" . $isim . "</td>";
	$body .= "</tr>";
	$body .= "<tr>";
	$body .= "<td><b>E Mail</b></td> <td>" . $mail . "</td>";
	$body .= "</tr>";
	$body .= "<tr>";
	$body .= "<td><b>Mesaj</b></td> <td>" . $msg . "</td>";
	$body .= "</tr>";
	$body .= "</table>";

	MailGonder("nalperkoca@gmail.com", "Alko Yazılım", $body);
}
$title = "İletişim | Alko Yazılım";

?>
<!DOCTYPE html>
<html lang="en">
<?php include("head.php"); ?>
<title><?php echo $title; ?></title>
<body class="has-spotlight ashade-smooth-scroll no-top-padding blog-bg">

	<?php include("header.php"); ?>
	
	<!-- Content -->
	<div class="ashade-page-title-wrap">
		<h1 class="ashade-page-title">
			<span>Bizimle İletişime Geçin</span>
			İLETİŞİM
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
						<div class="ashade-col col-12">
							<div class="ashade-gallery-adjusted ashade-grid ashade-grid-2cols">
								<div class="ashade-album-item ashade-grid-item">
									<div class="ashade-contact-details">

										<h4 class="ashade-contact-details__title" style="color: blanchedalmond;">
											<span>İletişim ve Sosyal Medya</span>
											İLETİŞİM BİLGİLERİ
										</h4>
										<ul class="ashade-contact-details__list">
											<li>
												<i class="ashade-contact-icon la la-map-marker"></i>
												<?php echo $yonetim->adres ?>
											</li>
											<li>
												<i class="ashade-contact-icon la la-phone"></i>
												<a href="tel:<?php echo $yonetim->telefon ?>"><?php echo $yonetim->telefon ?></a>
											</li>
											<li>
												<i class="ashade-contact-icon la la-envelope"></i>
												<a href="mailto:<?php echo $yonetim->mail ?>"><?php echo $yonetim->mail ?></a>
											</li>
											<li class="ashade-contact-socials">
												<i class="ashade-contact-icon la la-share-alt"></i>
												<a href="<?php echo $yonetim->twitter ?>" target="_blank">Tw</a>
												<a href="<?php echo $yonetim->face ?>" target="_blank">Fb</a>
												<a href="<?php echo $yonetim->linkedin ?>" target="_blank">LI</a>
												<a href="<?php echo $yonetim->insta ?>" target="_blank">In</a>
												<a href="<?php echo $yonetim->youtube ?>" target="_blank">Yt</a>
											</li>
										</ul>


									</div>
								</div>

								<div class="ashade-album-item ashade-grid-item">
									<p style="font-size:35px;font-weight:bold;color:white;text-align:center">İletişime Geç</p>
									<div class="container">
										<form action="" method="post" class="ashade-contact-form">
											<div>
												<input class="form-norm" placeholder="İsim & Ünvan" type="text" name="name" required autofocus>
											</div>
											<div>
												<input class="form-norm" placeholder="E-Posta" type="email" name="email" required>
											</div>


											<div>
												<textarea style="color: rgb(146, 139, 139);" placeholder="Lütfen mesajınızı buraya yazın." name="msg" required></textarea>
											</div>
											<div>
												<input name="submit" type="submit" id="submit">
											</div>
										</form>
										<?php echo "$gittiMesaji"; ?>
									</div>
								</div>


							</div>
						</div>
					</div>
				</section>

				<div class="col-lg-12 pr-md-12 pr-sm-0" style="margin-top:40px;">
					<div style="width: 100%"><iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=alkosoft+(My%20Business%20Name)&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div>

				</diV>

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