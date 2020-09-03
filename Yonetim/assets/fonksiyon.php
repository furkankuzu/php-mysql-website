<?php ob_start();


try {

	$pass = "_ry};%dJK\$hb";
	$baglanti = new PDO("mysql:host=localhost; dbname=u9648068_db2020; charset=utf8", "u9648068_db2020", $pass);
	$baglanti->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {

	die($e->getMessage());
}


class yonetim
{



	//------------------------GENEL SORGU FONKSİYONU--------------------------
	function sorgum($vt, $sorgu, $tercih = 0)
	{
		$al = $vt->prepare($sorgu);
		$al->execute();

		if ($tercih == 1) :
			return	$al->fetch();

		elseif ($tercih == 2) :
			return $al;
		endif;
	}


	//--------------------------site ayar----------------------------------------
	function siteAyar($baglanti)
	{

		$sonuc = $this->sorgum($baglanti, "select * from ayarlar", 1);

		if ($_POST) :

			//form input elemanlarının 'name' değerleri ile değişkenlerimiz eşitleniyor.

			$title = htmlspecialchars($_POST["title"]);
			$metaTitle = htmlspecialchars($_POST["metaTitle"]);
			$metaDesc = htmlspecialchars($_POST["metaDesc"]);
			$metaKey = htmlspecialchars($_POST["metaKey"]);
			$metaAuthor = htmlspecialchars($_POST["metaAuthor"]);
			$metaCopy = htmlspecialchars($_POST["metaCopy"]);
			$twitter = htmlspecialchars($_POST["twitter"]);
			$face = htmlspecialchars($_POST["face"]);
			$insta = htmlspecialchars($_POST["insta"]);
			$linkedin = htmlspecialchars($_POST["linkedin"]);
			$youtube = htmlspecialchars($_POST["youtube"]);
			$telefon = htmlspecialchars($_POST["telefon"]);
			$adres = htmlspecialchars($_POST["adres"]);
			$mail = htmlspecialchars($_POST["mail"]);
			$slogan1 = htmlspecialchars($_POST["slogan1"]);
			$slogan2 = htmlspecialchars($_POST["slogan2"]);





			//bu kısımda değişkenlerin doluluk,boşluk kontrolleri yapılabilir.
			//if(title=="") gibi.


			//veritabanındaki sütunlarımız set edilmek için guncelleme degişkeninde tutuluyor.
			$guncelleme = $baglanti->prepare("update ayarlar set title=?,metaTitle=?,
				metaDesc=?,metaKey=?,metaAuthor=?,metaCopy=?,twitter=?,
				face=?,insta=?,linkedin=?,youtube=?,telefon=?,adres=?,
				mail=?,slogan1=?,slogan2=?");

			//değişkenlerimizdeki değerleri sütunlarımızın yanındaki '?' simgelerine sıralarıyla atıyoruz.
			$guncelleme->bindParam(1, $title, PDO::PARAM_STR);
			$guncelleme->bindParam(2, $metaTitle, PDO::PARAM_STR);
			$guncelleme->bindParam(3, $metaDesc, PDO::PARAM_STR);
			$guncelleme->bindParam(4, $metaKey, PDO::PARAM_STR);
			$guncelleme->bindParam(5, $metaAuthor, PDO::PARAM_STR);
			$guncelleme->bindParam(6, $metaCopy, PDO::PARAM_STR);
			$guncelleme->bindParam(7, $twitter, PDO::PARAM_STR);
			$guncelleme->bindParam(8, $face, PDO::PARAM_STR);
			$guncelleme->bindParam(9, $insta, PDO::PARAM_STR);
			$guncelleme->bindParam(10, $linkedin, PDO::PARAM_STR);
			$guncelleme->bindParam(11, $youtube, PDO::PARAM_STR);
			$guncelleme->bindParam(12, $telefon, PDO::PARAM_STR);
			$guncelleme->bindParam(13, $adres, PDO::PARAM_STR);
			$guncelleme->bindParam(14, $mail, PDO::PARAM_STR);
			$guncelleme->bindParam(15, $slogan1, PDO::PARAM_STR);
			$guncelleme->bindParam(16, $slogan2, PDO::PARAM_STR);




			$guncelleme->execute();

			echo '<div class="alert alert-success" role="alert">
				
				<strong>Site ayarları </strong>başarıyla güncellendi.
				
				</div>';
			header("refresh:1.5,url=control.php?sayfa=siteayarlar");

		else :
?>
			<form action="control.php?sayfa=siteayarlar" method="post">

				<div class="row">
					<div class="col-lg-7 mx-auto mt-3">


						<h3 class="text-dark">Site Ayarları</h3>
					</div>
					<!---**************************---->
					<div class="col-lg-7 mx-auto mt-3 border">
						<div class="row">

							<div class="col-lg-3 border-right pt-3 text-left">
								<span style="font-size: 18px;">Başlık</span>

							</div>
							<div class="col-lg-9 p-1">
								<input type="text" name="title" class="form-control" value="<?php echo $sonuc["title"] ?>" />
							</div>

						</div>
					</div>

					<!---**************************---->
					<div class="col-lg-7 mx-auto border">
						<div class="row">

							<div class="col-lg-3 border-right pt-3 text-left">
								<span style="font-size: 18px;">Meta Başlık</span>
							</div>

							<div class="col-lg-9 p-1">
								<input type="text" name="metaTitle" class="form-control" value="<?php echo $sonuc["metaTitle"] ?>" />
							</div>

						</div>
					</div>

					<!---**************************---->
					<div class="col-lg-7 mx-auto border">
						<div class="row">

							<div class="col-lg-3 border-right pt-3 text-left">
								<span style="font-size: 18px;">Site Açıklama</span>
							</div>

							<div class="col-lg-9 p-1">
								<input type="text" name="metaDesc" class="form-control" value="<?php echo $sonuc["metaDesc"] ?>" />
							</div>

						</div>
					</div>

					<!---**************************---->
					<div class="col-lg-7 mx-auto border">
						<div class="row">

							<div class="col-lg-3 border-right pt-3 text-left">
								<span style="font-size: 18px;">Meta Key</span>
							</div>

							<div class="col-lg-9 p-1">
								<textarea rows="3" name="metaKey" class="form-control"><?php echo $sonuc["metaKey"] ?></textarea>
							</div>

						</div>
					</div>

					<!---**************************---->
					<div class="col-lg-7 mx-auto border">
						<div class="row">

							<div class="col-lg-3 border-right pt-3 text-left">
								<span style="font-size: 18px;">Meta Author</span>
							</div>

							<div class="col-lg-9 p-1">
								<input type="text" name="metaAuthor" class="form-control" value="<?php echo $sonuc["metaAuthor"] ?>" />
							</div>

						</div>
					</div>


					<!---**************************---->
					<div class="col-lg-7 mx-auto border">
						<div class="row">

							<div class="col-lg-3 border-right pt-3 text-left">
								<span style="font-size: 18px;">Meta Copyright</span>
							</div>

							<div class="col-lg-9 p-1">
								<input type="text" name="metaCopy" class="form-control" value="<?php echo $sonuc["metaCopy"] ?>" />
							</div>

						</div>
					</div>



					<!---**************************---->
					<div class="col-lg-7 mx-auto border">
						<div class="row">

							<div class="col-lg-3 border-right pt-3 text-left">
								<span style="font-size: 18px;">Twitter</span>
							</div>

							<div class="col-lg-9 p-1">
								<input type="text" name="twitter" class="form-control" value="<?php echo $sonuc["twitter"] ?>" />
							</div>

						</div>
					</div>

					<!---**************************---->
					<div class="col-lg-7 mx-auto border">
						<div class="row">

							<div class="col-lg-3 border-right pt-3 text-left">
								<span style="font-size: 18px;">Facebook</span>
							</div>

							<div class="col-lg-9 p-1">
								<input type="text" name="face" class="form-control" value="<?php echo $sonuc["face"] ?>" />
							</div>

						</div>
					</div>

					<!---**************************---->
					<div class="col-lg-7 mx-auto border">
						<div class="row">

							<div class="col-lg-3 border-right pt-3 text-left">
								<span style="font-size: 18px;">Instagram</span>
							</div>

							<div class="col-lg-9 p-1">
								<input type="text" name="insta" class="form-control" value="<?php echo $sonuc["insta"] ?>" />
							</div>

						</div>
					</div>

					<!---**************************---->
					<div class="col-lg-7 mx-auto border">
						<div class="row">

							<div class="col-lg-3 border-right pt-3 text-left">
								<span style="font-size: 18px;">LinkedIn</span>
							</div>

							<div class="col-lg-9 p-1">
								<input type="text" name="linkedin" class="form-control" value="<?php echo $sonuc["linkedin"] ?>" />
							</div>

						</div>
					</div>

					<!---**************************---->
					<div class="col-lg-7 mx-auto border">
						<div class="row">

							<div class="col-lg-3 border-right pt-3 text-left">
								<span style="font-size: 18px;">Youtube</span>
							</div>

							<div class="col-lg-9 p-1">
								<input type="text" name="youtube" class="form-control" value="<?php echo $sonuc["youtube"] ?>" />
							</div>

						</div>
					</div>

					<!---**************************---->
					<div class="col-lg-7 mx-auto border">
						<div class="row">

							<div class="col-lg-3 border-right pt-3 text-left">
								<span style="font-size: 18px;">Telefon</span>
							</div>

							<div class="col-lg-9 p-1">
								<input type="text" name="telefon" class="form-control" value="<?php echo $sonuc["telefon"] ?>" />
							</div>

						</div>
					</div>

					<!---**************************---->
					<div class="col-lg-7 mx-auto border">
						<div class="row">

							<div class="col-lg-3 border-right pt-3 text-left">
								<span style="font-size: 18px;">Adres</span>
							</div>

							<div class="col-lg-9 p-1">
								<textarea rows="2" name="adres" class="form-control"><?php echo $sonuc["adres"] ?></textarea>
							</div>

						</div>
					</div>


				</div>
				<!---**************************---->
				<div class="col-lg-7 mx-auto border">
					<div class="row">

						<div class="col-lg-3 border-right pt-3 text-left">
							<span style="font-size: 18px;">Mail</span>
						</div>

						<div class="col-lg-9 p-1">
							<input type="text" name="mail" class="form-control" value="<?php echo $sonuc["mail"] ?>" />
						</div>

					</div>
				</div>
				<!---**************************---->
				<div class="col-lg-7 mx-auto border">
					<div class="row">

						<div class="col-lg-3 border-right pt-3 text-left">
							<span style="font-size: 18px;">Slogan 1</span>
						</div>

						<div class="col-lg-9 p-1">
							<input type="text" name="slogan1" class="form-control" value="<?php echo $sonuc["slogan1"] ?>" />
						</div>

					</div>
				</div>

				<!---**************************---->
				<div class="col-lg-7 mx-auto border">
					<div class="row">

						<div class="col-lg-3 border-right pt-3 text-left">
							<span style="font-size: 18px;">Slogan 2 </span>
						</div>

						<div class="col-lg-9 p-1">
							<input type="text" name="slogan2" class="form-control" value="<?php echo $sonuc["slogan2"] ?>" />
						</div>

					</div>
				</div>









				<div class="col-lg-7 mx-auto mt-3 border-bottom">
					<input type="submit" name="buton" class="btn btn-dark m-1" value="Güncelle">
				</div>

			</form>


		<?php

		endif;
	}

	//--------------------------Mail ayarları----------------------------------

	function mailayar($baglanti)
	{

		$sonuc = $this->sorgum($baglanti, "select * from gelenmailayar", 1);

		if ($_POST) :

			//form input elemanlarının 'name' değerleri ile değişkenlerimiz eşitleniyor.

			$host = htmlspecialchars($_POST["host"]);
			$mailadres = htmlspecialchars($_POST["mailadres"]);
			$sifre = htmlspecialchars($_POST["sifre"]);
			$port = htmlspecialchars($_POST["port"]);
			$aliciadres = htmlspecialchars($_POST["aliciadres"]);


			//bu kısımda değişkenlerin doluluk,boşluk kontrolleri yapılabilir.
			//if(title=="") gibi.


			//veritabanındaki sütunlarımız set edilmek için guncelleme degişkeninde tutuluyor.
			$guncelleme = $baglanti->prepare("update gelenmailayar set host=?,mailadres=?,sifre=?,port=?,aliciadres=?");

			//değişkenlerimizdeki değerleri sütunlarımızın yanındaki '?' simgelerine sıralarıyla atıyoruz.
			$guncelleme->bindParam(1, $host, PDO::PARAM_STR);
			$guncelleme->bindParam(2, $mailadres, PDO::PARAM_STR);
			$guncelleme->bindParam(3, $sifre, PDO::PARAM_STR);
			$guncelleme->bindParam(4, $port, PDO::PARAM_STR);
			$guncelleme->bindParam(5, $aliciadres, PDO::PARAM_STR);
			$guncelleme->execute();

			echo '<div class="alert alert-success" role="alert">
				
				<strong>Mail ayarları </strong>başarıyla güncellendi.
				
				</div>';
			header("refresh:1.5,url=control.php?sayfa=mail");

		else :
		?>
			<form action="control.php?sayfa=mail" method="post">

				<div class="row text-center">


					<div class="col-lg-5 mx-auto">
						<div class="col-lg-12 mx-auto mt-3">
							<h3 class="text-dark">Mail Ayarları</h3>
						</div>
						<!---**************************---->
						<div class="col-lg-12 mx-auto mt-3 border">
							<div class="row">

								<div class="col-lg-4 border-right pt-3 text-left">
									<span style="font-size: 18px;">Host</span>

								</div>
								<div class="col-lg-8 p-1">
									<input type="text" name="host" class="form-control" value="<?php echo @$sonuc["host"] ?>" />
								</div>

							</div>
						</div>

						<!---**************************---->
						<div class="col-lg-12 mx-auto border">
							<div class="row">

								<div class="col-lg-4 border-right pt-3 text-left">
									<span style="font-size: 18px;">Mail Adresi</span>
								</div>

								<div class="col-lg-8 p-1">
									<input type="text" name="mailadres" class="form-control" value="<?php echo @$sonuc["mailadres"] ?>" />
								</div>

							</div>
						</div>

						<!---**************************---->
						<div class="col-lg-12 mx-auto border">
							<div class="row">

								<div class="col-lg-4 border-right pt-3 text-left">
									<span style="font-size: 18px;">Host Şifre</span>
								</div>

								<div class="col-lg-8 p-1">
									<input type="text" name="sifre" class="form-control" value="<?php echo @$sonuc["sifre"] ?>" />
								</div>

							</div>
						</div>

						<!---**************************---->
						<div class="col-lg-12 mx-auto border">
							<div class="row">

								<div class="col-lg-4 border-right pt-3 text-left">
									<span style="font-size: 18px;">Port</span>
								</div>

								<div class="col-lg-8 p-1">
									<input type="text" name="port" class="form-control" value="<?php echo @$sonuc["port"] ?>" />
								</div>

							</div>
						</div>
						<!---**************************---->
						<div class="col-lg-12 mx-auto border">
							<div class="row">

								<div class="col-lg-4 border-right pt-3 text-left">
									<span style="font-size: 18px;">Alıcı Mail</span>
								</div>

								<div class="col-lg-8 p-1">
									<input type="text" name="aliciadres" class="form-control" value="<?php echo @$sonuc["aliciadres"] ?>" />
								</div>

							</div>
						</div>


					</div>

					<div class="col-lg-12 mx-auto mt-3">
						<input type="submit" name="buton" class="btn btn-dark m-1" value="Güncelle">
					</div>
				</div>

			</form>


		<?php

		endif;
	}





	//-----------------------ADMİN GİRİŞİ--------------------------------------

	function sifrele($veri)
	{
		return base64_encode(gzdeflate(gzcompress(serialize($veri))));
	}

	function coz($veri)
	{

		return unserialize(gzuncompress(gzinflate(base64_decode($veri))));
	}
	//kullanici adi aliniyor.
	function kuladial($vt)
	{

		$cookid = $_COOKIE["kulbilgi"];
		$cozduk = $this->coz($cookid);

		$sorgusonuc = $this->sorgum($vt, "select * from yonetim where id=$cozduk", 1);
		return $sorgusonuc["kulad"];
	}
	//giris kontrol.
	function giriskontrol($kulad, $sifre, $vt)
	{

		$sifrelihal = md5(sha1(md5($sifre)));
		$sor = $vt->prepare("select * from yonetim where kulad='$kulad' and sifre='$sifrelihal'");
		$sor->execute();


		if ($sor->rowCount() == 0) :

			echo '
				<div class="container-fluid bg-white">
					<div class="alert alert-white border border-dark mt-5 col-md-5 mx-auto p-3 text-danger font-14 font-weight-bold">
					<img src="loading.gif" width="150" /><br>GİRDİĞİNİZ BİLGİLER HATALIDIR !
					</div>
				</div>';
			header("refresh:2,url=index.php");
		else :
			$gelendeger = $sor->fetch();
			$sor = $vt->prepare("update yonetim set aktif=1 where kulad='$kulad' and sifre='$sifrelihal'");
			$sor->execute();



			header("refresh:0,url=control.php");

			//cookie
			$id = $this->sifrele($gelendeger["id"]);
			setcookie("kulbilgi", $id, time() + 60 * 60 * 24);

		endif;
	}
	//cikis fonksiyonu.
	function cikis($vt)
	{

		$cookid = $_COOKIE["kulbilgi"];
		$cozduk = $this->coz($cookid);


		$this->sorgum($vt, "update yonetim set aktif=0 where id=$cozduk", 0);

		setcookie("kulbilgi", $cookid, time() - 3600);

		echo '
				<div class="container-fluid bg-white">
					<div class="alert alert-white border border-dark mt-5 col-md-5 mx-auto p-3 text-dark font-14 font-weight-bold">
					<img src="loading.gif" width="150" /><br>ÇIKIŞ YAPILIYOR.
					</div>
				</div>';
		header("refresh:0,url=index.php");
	}
	//cookie kontrol.
	function kontrolet($sayfa)
	{

		if (isset($_COOKIE["kulbilgi"])) :

			if ($sayfa == "ind") : header("Location:control.php");
			endif;



		else :
			if ($sayfa == "cot") : header("Location:index.php");
			endif;

		endif;
	}



	//--------------------------Kullanıcı ayarları----------------------------------

	function ayarlar($baglanti)
	{

		$id = $this->coz($_COOKIE["kulbilgi"]);

		$sonuc = $this->sorgum($baglanti, "select * from yonetim where id=$id", 1);

		if ($_POST) :



			@$kulad = htmlspecialchars($_POST["kulad"]);
			@$eskisif = htmlspecialchars($_POST["sifre"]);
			@$yenisif = htmlspecialchars($_POST["yensifre"]);
			@$yenisif2 = htmlspecialchars($_POST["yensifre2"]);

			$sifrelihal = md5(sha1(md5($eskisif)));

			if ($kulad == "" || $eskisif == "" || $yenisif == "" || $yenisif2 == "") :

				echo '<div class="alert alert-danger mt-5">Değerler boş bırakılamaz.</div>';
				header("refresh:1.5,url=control.php?sayfa=ayarlar");

			else :
				if ($sonuc["sifre"] != $sifrelihal) :
					echo '<div class="alert alert-danger mt-5">Eski şifre hatalı girildi.</div>';
					header("refresh:1.5,url=control.php?sayfa=ayarlar");
				else :
					if ($yenisif != $yenisif2) :
						echo '<div class="alert alert-danger mt-5">Yeni şifreler birbirini tutmadı.</div>';
						header("refresh:1.5,url=control.php?sayfa=ayarlar");
					else :
						$yenisif2 = md5(sha1(md5($yenisif)));
						//veritabanındaki sütunlarımız set edilmek için guncelleme degişkeninde tutuluyor.
						$guncelleme = $baglanti->prepare("update yonetim set kulad=?,sifre=? where id=$id");

						//değişkenlerimizdeki değerleri sütunlarımızın yanındaki '?' simgelerine sıralarıyla atıyoruz.
						$guncelleme->bindParam(1, $kulad, PDO::PARAM_STR);
						$guncelleme->bindParam(2, $yenisif2, PDO::PARAM_STR);
						$guncelleme->execute();

						echo '<div class="alert alert-success mt-5" role="alert">
							Bilgiler güncellendi
							</div>';
						header("refresh:1.5,url=control.php?sayfa=ayarlar");

					endif;
				endif;
			endif;

		else :
		?>
			<form action="control.php?sayfa=ayarlar" method="post">

				<div class="row text-center">


					<div class="col-lg-5 mx-auto">
						<div class="col-lg-12 mx-auto mt-3">
							<h3 class="text-dark">Profil Ayarları</h3>
						</div>
						<!---**************************---->
						<div class="col-lg-12 mx-auto mt-3 border">
							<div class="row">

								<div class="col-lg-5 border-right pt-3 text-left">
									<span style="font-size: 18px;">Kullanıcı Adı</span>

								</div>
								<div class="col-lg-7 p-1">
									<input type="text" name="kulad" class="form-control" value="<?php echo @$sonuc["kulad"] ?>" />
								</div>

							</div>
						</div>

						<!---**************************---->
						<div class="col-lg-12 mx-auto border">
							<div class="row">

								<div class="col-lg-5 border-right pt-3 text-left">
									<span style="font-size: 18px;">Şifre</span>
								</div>

								<div class="col-lg-7 p-1">
									<input type="password" name="sifre" class="form-control" value="" />
								</div>

							</div>
						</div>

						<!---**************************---->
						<div class="col-lg-12 mx-auto border">
							<div class="row">

								<div class="col-lg-5 border-right pt-3 text-left">
									<span style="font-size: 18px;">Yeni Şifre</span>
								</div>

								<div class="col-lg-7 p-1">
									<input type="password" name="yensifre" class="form-control" value="" />
								</div>

							</div>
						</div>

						<!---**************************---->
						<div class="col-lg-12 mx-auto border">
							<div class="row">

								<div class="col-lg-5 border-right pt-3 text-left">
									<span style="font-size: 18px;">Yeni Şifre Tekrar</span>
								</div>

								<div class="col-lg-7 p-1">
									<input type="password" name="yensifre2" class="form-control" value="" />
								</div>

							</div>
						</div>


					</div>

					<div class="col-lg-12 mx-auto mt-3">
						<input type="submit" name="buton" class="btn btn-dark m-1" value="Değiştir">
					</div>
				</div>

			</form>


		<?php

		endif;
	}

	//--------------------------Yönetici ayarları----------------------------------

	function kullanicilistele($vt)
	{

		$al = $this->sorgum($vt, "select * from yonetim", 2);

		echo '
					<div class="row">
						<div class="col-lg-6 mt-5 mx-auto">
							<div class="card">
								<div class="card-body">
									
								
								
									<h4 class="header-title text-dark">
									
		
										Kullanıcılar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		
										<a href="control.php?sayfa=kulekle" class="ti-plus bg-dark p-1 text-white text-left mr-2 mt-3"></a>
										
										
									</h4>
		
								
									<div class="single-table">
										<div class="table-responsive">
											<table class="table text-center border table-striped">
												<thead class="text-uppercase">
													<tr>
														<th scope="col" class="border-right">Kullanıcı Adı</th>
														<th scope="col">İşlem</th>
													</tr>
												</thead>
												<tbody>';

		while ($yonson = $al->fetch(PDO::FETCH_ASSOC)) :

			echo '<tr>
															<th scope="row" class="border-right">' . $yonson["kulad"] . '</th>
		
															<th scope="row"><a href="control.php?sayfa=kulsil&id=' . $yonson["id"] . '">
																<i class="ti-trash text-danger" style="font-size:20px"></i></a></th>
														</tr>';

		endwhile;

		echo '
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					';
	}


	function kulsil($vt, $id)
	{

		echo '<div class="row m-2">
						<div class="col-lg-12 bg-light mt-2 font-weight-bold" style="border-radius:5px; border:1px solid #eeeeee;">
							
						<div class="alert alert-primary">Mesaj silindi.</div>
						</div>
					</div>';

		//mesajın durumu okunmuş olarak güncelleniyor
		$this->sorgum($vt, "delete from yonetim where id=$id", 0);

		header("refresh:0,url=control.php?sayfa=kulayar");
	}

	function kulekle($baglanti)
	{

		if ($_POST) :

			@$kulad = htmlspecialchars($_POST["kulad"]);
			@$sifre = htmlspecialchars($_POST["sifre"]);
			@$sifre2 = htmlspecialchars($_POST["sifre2"]);



			if ($kulad == "" || $sifre == "" || $sifre2 == "") :

				echo '<div class="alert alert-danger mt-5">Değerler boş bırakılamaz.</div>';
				header("refresh:1.5,url=control.php?sayfa=kulekle");

			else :

				if ($sifre != $sifre2) :
					echo '<div class="alert alert-danger mt-5">Şifreler farklı !</div>';
					header("refresh:1.5,url=control.php?sayfa=kulekle");
				else :


					$gizlisif = md5(sha1(md5($sifre)));
					//veritabanındaki sütunlarımız set edilmek için guncelleme degişkeninde tutuluyor.
					$ekle = $baglanti->prepare("insert into yonetim (kulad,sifre) VALUES (?,?)");

					//değişkenlerimizdeki değerleri sütunlarımızın yanındaki '?' simgelerine sıralarıyla atıyoruz.
					$ekle->bindParam(1, $kulad, PDO::PARAM_STR);
					$ekle->bindParam(2, $gizlisif, PDO::PARAM_STR);
					$ekle->execute();

					echo '<div class="alert alert-success mt-5" role="alert">Yönetici eklendi.</div>';
					header("refresh:1.5,url=control.php?sayfa=kulayar");

				endif;
			endif;


		else :
		?>
			<form action="control.php?sayfa=kulekle" method="post">

				<div class="row text-center">


					<div class="col-lg-5 mx-auto">
						<div class="col-lg-12 mx-auto mt-3">
							<h3 class="text-dark">Kullanıcı Ekleme Formu</h3>
						</div>
						<!---**************************---->
						<div class="col-lg-12 mx-auto mt-3 border">
							<div class="row">

								<div class="col-lg-5 border-right pt-3 text-left">
									<span style="font-size: 18px;">Kullanıcı Adı</span>

								</div>
								<div class="col-lg-7 p-1">
									<input type="text" name="kulad" class="form-control" value="" />
								</div>

							</div>
						</div>

						<!---**************************---->
						<div class="col-lg-12 mx-auto border">
							<div class="row">

								<div class="col-lg-5 border-right pt-3 text-left">
									<span style="font-size: 18px;">Şifre</span>
								</div>

								<div class="col-lg-7 p-1">
									<input type="password" name="sifre" class="form-control" value="" />
								</div>

							</div>
						</div>

						<!---**************************---->
						<div class="col-lg-12 mx-auto border">
							<div class="row">

								<div class="col-lg-5 border-right pt-3 text-left">
									<span style="font-size: 18px;">Şifre Tekrar</span>
								</div>

								<div class="col-lg-7 p-1">
									<input type="password" name="sifre2" class="form-control" value="" />
								</div>

							</div>
						</div>

						<!---**************************---->



					</div>

					<div class="col-lg-12 mx-auto mt-3">
						<input type="submit" name="buton" class="btn btn-dark m-1" value="Yönetici Ekle">
					</div>
				</div>

			</form>


		<?php

		endif;
	}







	//-----------------------HAKKIMIZDA--------------------------------

	function hakkimizda($vt)
	{

		echo '<div class="row text-center">
					<div class="col-lg-12">
						<h4 class="mt-3 text-dark">HAKKIMIZDA AYARLARI</h4></div>';

		if (!$_POST) :

			$sonbilgi = $this->sorgum($vt, "select * from hakkimizda", 1);

			echo '<div class="col-lg-6 mx-auto m-3">
						<div class="row card-bordered p-1 m-1">



							<div class="col-lg-3 border-bottom border-right bg-light" id="hakkimizdayazilar">
								Resim
							</div>

							

							<div class="col-lg-3 bg-light border-bottom border-right pt-5" id="hakkimizdayazilarn">
								Misyon
							</div>

							<div class="col-lg-9 text-center border-bottom">
							<textarea name="misyon" class="form-control" rows="8">' . $sonbilgi["misyon"] . '</textarea>
							</div>

							<div class="col-lg-3 bg-light border-bottom border-right" id="hakkimizdayazilar">
								Vizyon
							</div>

							<div class="col-lg-9 border-bottom">
							<textarea name="vizyon" class="form-control" rows="8">' . $sonbilgi["vizyon"] . '</textarea> 
								
							</div>

							
							

							<div class="col-lg-12 border-top">
							<input type="submit" name="guncel" class="btn btn-dark m-2" value="GÜNCELLE">
							</form>
							</div>
						</div>
					</div>
				';

		else :

			$misyon = htmlspecialchars($_POST["misyon"]);
			$vizyon = htmlspecialchars($_POST["vizyon"]);

			if (@$_FILES["dosya"]["name"] != "") : //dosyalar boş değilse
				if ($_FILES["dosya"]["size"] < (1024 * 1024 * 5)) : //boyut 5mb dan küçükse

					$izinverilen = array(
						"image/png", "image/jpeg", "video/mp4", "video/mpg",
						"video/mpeg", "video/mov", "video/avi", "video/flv"
					);

					if (in_array($_FILES["dosya"]["type"], $izinverilen)) : //uzantısı sağlanıyorsa

						//copy komutu kullanılabilir.
						//move_uplodaed_file() komutu kullanılabilir.

						$dosyaminyolu = '../img/hakkimizda/' . $_FILES["dosya"]["name"];

						move_uploaded_file($_FILES["dosya"]["tmp_name"], $dosyaminyolu);


						$veritabaniadi = str_replace('../', "", $dosyaminyolu);

					endif;
				endif;
			endif;

			if (@$_FILES["dosya"]["name"] != "") :

				$this->sorgum($vt, "update hakkimizda set misyon='$misyon',vizyon='$vizyon',foto='$veritabaniadi'", 0);
				header("refresh:0,url=control.php?sayfa=hakkimizda");

			else :

				$this->sorgum($vt, "update hakkimizda set misyon='$misyon',vizyon='$vizyon'", 0);
				header("refresh:0,url=control.php?sayfa=hakkimizda");

			endif;
		endif;

		echo '</div>';
	}

	//-----------------------OYUN--------------------------------

	function oyunAyar($baglanti)
	{

		$sonuc = $this->sorgum($baglanti, "select * from mobil_oyun", 1);

		if ($_POST) :

			//form input elemanlarının 'name' değerleri ile değişkenlerimiz eşitleniyor.

			$icerik = htmlspecialchars($_POST["icerik"]);
			$fpsIcerik = htmlspecialchars($_POST["fpsIcerik"]);
			$tpsIcerik = htmlspecialchars($_POST["tpsIcerik"]);
			$rpgIcerik = htmlspecialchars($_POST["rpgIcerik"]);
			$title = htmlspecialchars($_POST["title"]);
			$meta_title = htmlspecialchars($_POST["meta_title"]);
			$meta_key = htmlspecialchars($_POST["meta_key"]);
			$meta_desc = htmlspecialchars($_POST["meta_desc"]);
			$baslik = htmlspecialchars($_POST["baslik"]);
			$alt_baslik = htmlspecialchars($_POST["alt_baslik"]);



			//bu kısımda değişkenlerin doluluk,boşluk kontrolleri yapılabilir.
			//if(title=="") gibi.


			//veritabanındaki sütunlarımız set edilmek için guncelleme degişkeninde tutuluyor.
			$guncelleme = $baglanti->prepare("update mobil_oyun set icerik=?,fpsIcerik=?,tpsIcerik=?,rpgIcerik=?,title=?,meta_title=?,meta_key=?,meta_desc=?,baslik=?,alt_baslik=?");

			//değişkenlerimizdeki değerleri sütunlarımızın yanındaki '?' simgelerine sıralarıyla atıyoruz.
			$guncelleme->bindParam(1, $icerik, PDO::PARAM_STR);
			$guncelleme->bindParam(2, $fpsIcerik, PDO::PARAM_STR);
			$guncelleme->bindParam(3, $tpsIcerik, PDO::PARAM_STR);
			$guncelleme->bindParam(4, $rpgIcerik, PDO::PARAM_STR);
			$guncelleme->bindParam(5, $title, PDO::PARAM_STR);
			$guncelleme->bindParam(6, $meta_title, PDO::PARAM_STR);
			$guncelleme->bindParam(7, $meta_key, PDO::PARAM_STR);
			$guncelleme->bindParam(8, $meta_desc, PDO::PARAM_STR);
			$guncelleme->bindParam(9, $baslik, PDO::PARAM_STR);
			$guncelleme->bindParam(10, $alt_baslik, PDO::PARAM_STR);
			$guncelleme->execute();

			echo '<div class="alert alert-success" role="alert">
				
				<strong>Oyun ayarları </strong>başarıyla güncellendi.
				
				</div>';
			header("refresh:1.5,url=control.php?sayfa=oyunAyar");

		else :
		?>
			<form action="control.php?sayfa=oyunAyar" method="post">

				<div class="row text-center">


					<div class="col-lg-5 mx-auto">
						<div class="col-lg-12 mx-auto mt-3">
							<h3 class="text-dark">Oyun Ayarları</h3>
						</div>

						<!---**************************---->
						<div class="col-lg-12 mx-auto">
							<div class="row border">

								<div class="col-lg-4 text-center mt-3">
									<span style="font-size: 18px;">Title</span>

								</div>
								<div class="col-lg-8 p-1">
									<input type="text" name="title" class="form-control" value="<?php echo @$sonuc["title"] ?>">
								</div>

							</div>
						</div>
						<!---**************************---->
						<div class="col-lg-12 mx-auto">
							<div class="row border">

								<div class="col-lg-4 text-center mt-3">
									<span style="font-size: 18px;">Meta Title</span>

								</div>
								<div class="col-lg-8 p-1">
									<input type="text" name="meta_title" class="form-control" value="<?php echo @$sonuc["meta_title"] ?>">
								</div>

							</div>
						</div>
						<!---**************************---->
						<div class="col-lg-12 mx-auto border">
							<div class="row">

								<div class="col-lg-4 pt-4 text-center">
									<span style="font-size: 18px;">Meta Key</span>

								</div>
								<div class="col-lg-8 p-1">
									<textarea name="meta_key" class="form-control"><?php echo @$sonuc["meta_key"] ?></textarea>
								</div>

							</div>
						</div>
						<!---**************************---->
						<div class="col-lg-12 mx-auto border">
							<div class="row">

								<div class="col-lg-4 pt-4 text-center">
									<span style="font-size: 18px;">Meta Desc</span>

								</div>
								<div class="col-lg-8 p-1">
									<textarea name="meta_desc" class="form-control"><?php echo @$sonuc["meta_desc"] ?></textarea>
								</div>

							</div>
						</div>

						<!---**************************---->
						<div class="col-lg-12 mx-auto">
							<div class="row border">

								<div class="col-lg-4 text-center mt-3">
									<span style="font-size: 18px;">Başlık</span>

								</div>
								<div class="col-lg-8 p-1">
									<input type="text" name="baslik" class="form-control" value="<?php echo @$sonuc["baslik"] ?>">
								</div>

							</div>
						</div>
						<!---**************************---->
						<div class="col-lg-12 mx-auto">
							<div class="row border">

								<div class="col-lg-4 text-center mt-3">
									<span style="font-size: 18px;">Alt Başlık</span>

								</div>
								<div class="col-lg-8 p-1">
									<input type="text" name="alt_baslik" class="form-control" value="<?php echo @$sonuc["alt_baslik"] ?>">
								</div>

							</div>
						</div>
						<!---**************************---->

						<!---**************************---->
						<div class="col-lg-12 mx-auto mt-3 border">
							<div class="row">

								<div class="col-lg-4 border-right pt-5 text-center">
									<span style="font-size: 18px;">Ana Başlık</span>

								</div>
								<div class="col-lg-8 p-1">
									<textarea name="icerik" class="form-control" rows="8"><?php echo @$sonuc["icerik"] ?></textarea>
								</div>

							</div>
						</div>
						<!---**************************---->
						<div class="col-lg-12 mx-auto border">
							<div class="row">

								<div class="col-lg-4 border-right pt-5 text-center">
									<span style="font-size: 18px;">Fps İçeriği</span>

								</div>
								<div class="col-lg-8 p-1">
									<textarea name="fpsIcerik" class="form-control" rows="8"><?php echo @$sonuc["fpsIcerik"] ?></textarea>
								</div>

							</div>
						</div>

						<!---**************************---->
						<div class="col-lg-12 mx-auto mt-3 border">
							<div class="row">

								<div class="col-lg-4 border-right pt-5 text-center">
									<span style="font-size: 18px;">Tps İçeriği</span>

								</div>
								<div class="col-lg-8 p-1">
									<textarea name="tpsIcerik" class="form-control" rows="8"><?php echo @$sonuc["tpsIcerik"] ?></textarea>
								</div>

							</div>
						</div>
						<!---**************************---->
						<div class="col-lg-12 mx-auto border">
							<div class="row">

								<div class="col-lg-4 border-right pt-5 text-center">
									<span style="font-size: 18px;">Rpg İçeriği</span>

								</div>
								<div class="col-lg-8 p-1">
									<textarea name="rpgIcerik" class="form-control" rows="8"><?php echo @$sonuc["rpgIcerik"] ?></textarea>
								</div>

							</div>
						</div>





					</div>

					<div class="col-lg-12 mx-auto mt-3">
						<input type="submit" name="buton" class="btn btn-dark m-1" value="Güncelle">
					</div>
				</div>

			</form>


		<?php

		endif;
	}

	//-----------------------MOBİL--------------------------------

	function mobilAyar($baglanti)
	{

		$sonuc = $this->sorgum($baglanti, "select * from mobil_oyun", 1);

		if ($_POST) :

			//form input elemanlarının 'name' değerleri ile değişkenlerimiz eşitleniyor.

			$icerik = htmlspecialchars($_POST["icerik"]);
			$mobilUygulama = htmlspecialchars($_POST["mobilUygulama"]);
			$mobilOyun = htmlspecialchars($_POST["mobilOyun"]);
			$mobilEtic = htmlspecialchars($_POST["mobilEtic"]);
			$title = htmlspecialchars($_POST["title"]);
			$meta_title = htmlspecialchars($_POST["meta_title"]);
			$meta_key = htmlspecialchars($_POST["meta_key"]);
			$meta_desc = htmlspecialchars($_POST["meta_desc"]);
			$baslik = htmlspecialchars($_POST["baslik"]);
			$alt_baslik = htmlspecialchars($_POST["alt_baslik"]);



			//bu kısımda değişkenlerin doluluk,boşluk kontrolleri yapılabilir.
			//if(title=="") gibi.


			//veritabanındaki sütunlarımız set edilmek için guncelleme degişkeninde tutuluyor.
			$guncelleme = $baglanti->prepare("update mobil_oyun set icerik=?,nasil1=?,nasil2=?,nasil3=?,title=?,meta_title=?,meta_key=?,meta_desc=?,baslik=?,alt_baslik=?");

			//değişkenlerimizdeki değerleri sütunlarımızın yanındaki '?' simgelerine sıralarıyla atıyoruz.
			$guncelleme->bindParam(1, $icerik, PDO::PARAM_STR);
			$guncelleme->bindParam(2, $mobilUygulama, PDO::PARAM_STR);
			$guncelleme->bindParam(3, $mobilOyun, PDO::PARAM_STR);
			$guncelleme->bindParam(4, $mobilEtic, PDO::PARAM_STR);
			$guncelleme->bindParam(5, $title, PDO::PARAM_STR);
			$guncelleme->bindParam(6, $meta_title, PDO::PARAM_STR);
			$guncelleme->bindParam(7, $meta_key, PDO::PARAM_STR);
			$guncelleme->bindParam(8, $meta_desc, PDO::PARAM_STR);
			$guncelleme->bindParam(9, $baslik, PDO::PARAM_STR);
			$guncelleme->bindParam(10, $alt_baslik, PDO::PARAM_STR);

			$guncelleme->execute();

			echo '<div class="alert alert-success" role="alert">
				
				<strong>Mobil Uygulama ayarları </strong>başarıyla güncellendi.
				
				</div>';
			header("refresh:1.5,url=control.php?sayfa=mobilAyar");

		else :
		?>
			<form action="control.php?sayfa=mobilAyar" method="post">

				<div class="row text-center">


					<div class="col-lg-5 mx-auto">
						<div class="col-lg-12 mx-auto mt-3">
							<h3 class="text-dark">Mobil Uygulama Ayarları</h3>
						</div>

						<!---**************************---->
						<div class="col-lg-12 mx-auto">
							<div class="row border">

								<div class="col-lg-4 text-center mt-3">
									<span style="font-size: 18px;">Title</span>

								</div>
								<div class="col-lg-8 p-1">
									<input type="text" name="title" class="form-control" value="<?php echo @$sonuc["title"] ?>">
								</div>

							</div>
						</div>
						<!---**************************---->
						<div class="col-lg-12 mx-auto">
							<div class="row border">

								<div class="col-lg-4 text-center mt-3">
									<span style="font-size: 18px;">Meta Title</span>

								</div>
								<div class="col-lg-8 p-1">
									<input type="text" name="meta_title" class="form-control" value="<?php echo @$sonuc["meta_title"] ?>">
								</div>

							</div>
						</div>
						<!---**************************---->
						<div class="col-lg-12 mx-auto border">
							<div class="row">

								<div class="col-lg-4 pt-4 text-center">
									<span style="font-size: 18px;">Meta Key</span>

								</div>
								<div class="col-lg-8 p-1">
									<textarea name="meta_key" class="form-control"><?php echo @$sonuc["meta_key"] ?></textarea>
								</div>

							</div>
						</div>
						<!---**************************---->
						<div class="col-lg-12 mx-auto border">
							<div class="row">

								<div class="col-lg-4 pt-4 text-center">
									<span style="font-size: 18px;">Meta Desc</span>

								</div>
								<div class="col-lg-8 p-1">
									<textarea name="meta_desc" class="form-control"><?php echo @$sonuc["meta_desc"] ?></textarea>
								</div>

							</div>
						</div>

						<!---**************************---->
						<div class="col-lg-12 mx-auto">
							<div class="row border">

								<div class="col-lg-4 text-center mt-3">
									<span style="font-size: 18px;">Başlık</span>

								</div>
								<div class="col-lg-8 p-1">
									<input type="text" name="baslik" class="form-control" value="<?php echo @$sonuc["baslik"] ?>">
								</div>

							</div>
						</div>
						<!---**************************---->
						<div class="col-lg-12 mx-auto">
							<div class="row border">

								<div class="col-lg-4 text-center mt-3">
									<span style="font-size: 18px;">Alt Başlık</span>

								</div>
								<div class="col-lg-8 p-1">
									<input type="text" name="alt_baslik" class="form-control" value="<?php echo @$sonuc["alt_baslik"] ?>">
								</div>

							</div>
						</div>
						<!---**************************---->

						<!---**************************---->
						<div class="col-lg-12 mx-auto mt-3 border">
							<div class="row">

								<div class="col-lg-4 border-right pt-5 text-center">
									<span style="font-size: 18px;">Ana Başlık</span>

								</div>
								<div class="col-lg-8 p-1">
									<textarea name="icerik" class="form-control" rows="8"><?php echo @$sonuc["icerik"] ?></textarea>
								</div>

							</div>
						</div>
						<!---**************************---->
						<div class="col-lg-12 mx-auto border">
							<div class="row">

								<div class="col-lg-4 border-right pt-5 text-center">
									<span style="font-size: 18px;">Alt İçerik 1</span>

								</div>
								<div class="col-lg-8 p-1">
									<textarea name="mobilUygulama" class="form-control" rows="8"><?php echo @$sonuc["nasil1"] ?></textarea>
								</div>

							</div>
						</div>

						<!---**************************---->
						<div class="col-lg-12 mx-auto mt-3 border">
							<div class="row">

								<div class="col-lg-4 border-right pt-5 text-center">
									<span style="font-size: 18px;">Alt İçerik 2</span>

								</div>
								<div class="col-lg-8 p-1">
									<textarea name="mobilOyun" class="form-control" rows="8"><?php echo @$sonuc["nasil2"] ?></textarea>
								</div>

							</div>
						</div>
						<!---**************************---->
						<div class="col-lg-12 mx-auto border">
							<div class="row">

								<div class="col-lg-4 border-right pt-5 text-center">
									<span style="font-size: 18px;">Alt İçerik 3</span>

								</div>
								<div class="col-lg-8 p-1">
									<textarea name="mobilEtic" class="form-control" rows="8"><?php echo @$sonuc["nasil3"] ?></textarea>
								</div>

							</div>
						</div>





					</div>

					<div class="col-lg-12 mx-auto mt-3">
						<input type="submit" name="buton" class="btn btn-dark m-1" value="Güncelle">
					</div>
				</div>

			</form>


		<?php

		endif;
	}

	//-----------------------MASAUSTU--------------------------------

	function masaustuAyar($baglanti)
	{

		$sonuc = $this->sorgum($baglanti, "select * from masaustu", 1);

		if ($_POST) :

			//form input elemanlarının 'name' değerleri ile değişkenlerimiz eşitleniyor.

			$icerik1 = htmlspecialchars($_POST["icerik1"]);
			$icerik2 = htmlspecialchars($_POST["icerik2"]);
			$cms = htmlspecialchars($_POST["cms"]);
			$arayuz = htmlspecialchars($_POST["arayuz"]);
			$analiz = htmlspecialchars($_POST["analiz"]);



			//bu kısımda değişkenlerin doluluk,boşluk kontrolleri yapılabilir.
			//if(title=="") gibi.


			//veritabanındaki sütunlarımız set edilmek için guncelleme degişkeninde tutuluyor.
			$guncelleme = $baglanti->prepare("update masaustu set icerik1=?,icerik2=?,cms=?,arayuz=?,analiz=?");

			//değişkenlerimizdeki değerleri sütunlarımızın yanındaki '?' simgelerine sıralarıyla atıyoruz.
			$guncelleme->bindParam(1, $icerik1, PDO::PARAM_STR);
			$guncelleme->bindParam(2, $icerik2, PDO::PARAM_STR);
			$guncelleme->bindParam(3, $cms, PDO::PARAM_STR);
			$guncelleme->bindParam(4, $arayuz, PDO::PARAM_STR);
			$guncelleme->bindParam(5, $analiz, PDO::PARAM_STR);

			$guncelleme->execute();

			echo '<div class="alert alert-success" role="alert">
				
				<strong>Masaüstü Uygulama ayarları </strong>başarıyla güncellendi.
				
				</div>';
			header("refresh:1.5,url=control.php?sayfa=masaustuAyar");

		else :
		?>
			<form action="control.php?sayfa=masaustuAyar" method="post">

				<div class="row text-center">


					<div class="col-lg-5 mx-auto">
						<div class="col-lg-12 mx-auto mt-3">
							<h3 class="text-dark">Masaüstü Uygulama Ayarları</h3>
						</div>
						<!---**************************---->
						<div class="col-lg-12 mx-auto mt-3 border">
							<div class="row">

								<div class="col-lg-4 border-right pt-5 text-center">
									<span style="font-size: 18px;">Ana Başlık</span>

								</div>
								<div class="col-lg-8 p-1">
									<textarea name="icerik1" class="form-control" rows="8"><?php echo @$sonuc["icerik1"] ?></textarea>
								</div>

							</div>
						</div>
						<!---**************************---->
						<div class="col-lg-12 mx-auto border">
							<div class="row">

								<div class="col-lg-4 border-right pt-5 text-center">
									<span style="font-size: 18px;">Ne Yapıyoruz ?</span>

								</div>
								<div class="col-lg-8 p-1">
									<textarea name="icerik2" class="form-control" rows="8"><?php echo @$sonuc["icerik2"] ?></textarea>
								</div>

							</div>
						</div>

						<!---**************************---->
						<div class="col-lg-12 mx-auto border">
							<div class="row">

								<div class="col-lg-4 border-right pt-5 text-center">
									<span style="font-size: 18px;">Alt İçerik 1</span>

								</div>
								<div class="col-lg-8 p-1">
									<textarea name="cms" class="form-control" rows="8"><?php echo @$sonuc["cms"] ?></textarea>
								</div>

							</div>
						</div>
						<!---**************************---->
						<div class="col-lg-12 mx-auto border">
							<div class="row">

								<div class="col-lg-4 border-right pt-5 text-center">
									<span style="font-size: 18px;">Alt İçerik 2</span>

								</div>
								<div class="col-lg-8 p-1">
									<textarea name="arayuz" class="form-control" rows="8"><?php echo @$sonuc["arayuz"] ?></textarea>
								</div>

							</div>
						</div>
						<!---**************************---->
						<div class="col-lg-12 mx-auto border">
							<div class="row">

								<div class="col-lg-4 border-right pt-5 text-center">
									<span style="font-size: 18px;">Alt İçerik 3</span>

								</div>
								<div class="col-lg-8 p-1">
									<textarea name="analiz" class="form-control" rows="8"><?php echo @$sonuc["analiz"] ?></textarea>
								</div>

							</div>
						</div>





					</div>

					<div class="col-lg-12 mx-auto mt-3">
						<input type="submit" name="buton" class="btn btn-dark m-1" value="Güncelle">
					</div>
				</div>

			</form>


		<?php

		endif;
	}

	//-----------------------WEB--------------------------------

	function webAyar($baglanti)
	{

		$sonuc = $this->sorgum($baglanti, "select * from web", 1);

		if ($_POST) :

			//form input elemanlarının 'name' değerleri ile değişkenlerimiz eşitleniyor.
			$title = htmlspecialchars($_POST["title"]);
			$meta_title = htmlspecialchars($_POST["meta_title"]);
			$meta_key = htmlspecialchars($_POST["meta_key"]);
			$meta_desc = htmlspecialchars($_POST["meta_desc"]);

			$baslik = htmlspecialchars($_POST["baslik"]);
			$alt_baslik = htmlspecialchars($_POST["alt_baslik"]);

			$icerik = htmlspecialchars($_POST["icerik"]);
			$nasil1 = htmlspecialchars($_POST["nasil1"]);
			$nasil2 = htmlspecialchars($_POST["nasil2"]);
			$nasil3 = htmlspecialchars($_POST["nasil3"]);
			//bu kısımda değişkenlerin doluluk,boşluk kontrolleri yapılabilir.
			//if(title=="") gibi.


			//veritabanındaki sütunlarımız set edilmek için guncelleme degişkeninde tutuluyor.
			$guncelleme = $baglanti->prepare("update web set icerik=?,nasil1=?,nasil2=?,nasil3=?,title=?,meta_title=?,meta_key=?,baslik=?,alt_baslik=?,meta_desc=?");

			//değişkenlerimizdeki değerleri sütunlarımızın yanındaki '?' simgelerine sıralarıyla atıyoruz.
			$guncelleme->bindParam(1, $icerik, PDO::PARAM_STR);
			$guncelleme->bindParam(2, $nasil1, PDO::PARAM_STR);
			$guncelleme->bindParam(3, $nasil2, PDO::PARAM_STR);
			$guncelleme->bindParam(4, $nasil3, PDO::PARAM_STR);
			$guncelleme->bindParam(5, $title, PDO::PARAM_STR);
			$guncelleme->bindParam(6, $meta_title, PDO::PARAM_STR);
			$guncelleme->bindParam(7, $meta_key, PDO::PARAM_STR);
			$guncelleme->bindParam(8, $baslik, PDO::PARAM_STR);
			$guncelleme->bindParam(9, $alt_baslik, PDO::PARAM_STR);
			$guncelleme->bindParam(10, $meta_desc, PDO::PARAM_STR);


			$guncelleme->execute();

			echo '<div class="alert alert-success" role="alert">
				
				<strong>Web Tasarım ayarları </strong>başarıyla güncellendi.
				
				</div>';
			header("refresh:1.5,url=control.php?sayfa=webAyar");

		else :
		?>
			<form action="control.php?sayfa=webAyar" method="post">

				<div class="row text-center">


					<div class="col-lg-5 mx-auto">
						<div class="col-lg-12 mx-auto mt-3">
							<h3 class="text-dark">Web Tasarım Ayarları</h3>
						</div>
						<!---**************************---->
						<div class="col-lg-12 mx-auto">
							<div class="row border">

								<div class="col-lg-4 text-center mt-3">
									<span style="font-size: 18px;">Title</span>

								</div>
								<div class="col-lg-8 p-1">
									<input type="text" name="title" class="form-control" value="<?php echo @$sonuc["title"] ?>">
								</div>

							</div>
						</div>
						<!---**************************---->
						<div class="col-lg-12 mx-auto">
							<div class="row border">

								<div class="col-lg-4 text-center mt-3">
									<span style="font-size: 18px;">Meta Title</span>

								</div>
								<div class="col-lg-8 p-1">
									<input type="text" name="meta_title" class="form-control" value="<?php echo @$sonuc["meta_title"] ?>">
								</div>

							</div>
						</div>
						<!---**************************---->
						<div class="col-lg-12 mx-auto border">
							<div class="row">

								<div class="col-lg-4 pt-4 text-center">
									<span style="font-size: 18px;">Meta Key</span>

								</div>
								<div class="col-lg-8 p-1">
									<textarea name="meta_key" class="form-control"><?php echo @$sonuc["meta_key"] ?></textarea>
								</div>

							</div>
						</div>
						<!---**************************---->
						<div class="col-lg-12 mx-auto border">
							<div class="row">

								<div class="col-lg-4 pt-4 text-center">
									<span style="font-size: 18px;">Meta Desc</span>

								</div>
								<div class="col-lg-8 p-1">
									<textarea name="meta_desc" class="form-control"><?php echo @$sonuc["meta_desc"] ?></textarea>
								</div>

							</div>
						</div>
						<!---**************************---->
						<div class="col-lg-12 mx-auto">
							<div class="row border">

								<div class="col-lg-4 text-center mt-3">
									<span style="font-size: 18px;">Başlık</span>

								</div>
								<div class="col-lg-8 p-1">
									<input type="text" name="baslik" class="form-control" value="<?php echo @$sonuc["baslik"] ?>">
								</div>

							</div>
						</div>
						<!---**************************---->
						<div class="col-lg-12 mx-auto">
							<div class="row border">

								<div class="col-lg-4 text-center mt-3">
									<span style="font-size: 18px;">Alt Başlık</span>

								</div>
								<div class="col-lg-8 p-1">
									<input type="text" name="alt_baslik" class="form-control" value="<?php echo @$sonuc["alt_baslik"] ?>">
								</div>

							</div>
						</div>
						<!---**************************---->
						<div class="col-lg-12 mx-auto mt-3 border">
							<div class="row">

								<div class="col-lg-4 pt-5 text-center">
									<span style="font-size: 18px;">Ana Başlık</span>

								</div>
								<div class="col-lg-8 p-1">
									<textarea name="icerik" class="form-control" rows="8"><?php echo @$sonuc["icerik"] ?></textarea>
								</div>

							</div>
						</div>
						<!---**************************---->
						<div class="col-lg-12 mx-auto border">
							<div class="row">

								<div class="col-lg-4 pt-5 text-center">
									<span style="font-size: 18px;">Alt İçerik 1</span>

								</div>
								<div class="col-lg-8 p-1">
									<textarea name="nasil1" class="form-control" rows="8"><?php echo @$sonuc["nasil1"] ?></textarea>
								</div>

							</div>
						</div>

						<!---**************************---->
						<div class="col-lg-12 mx-auto border">
							<div class="row">

								<div class="col-lg-4 pt-5 text-center">
									<span style="font-size: 18px;">Alt İçerik 2</span>

								</div>
								<div class="col-lg-8 p-1">
									<textarea name="nasil2" class="form-control" rows="8"><?php echo @$sonuc["nasil2"] ?></textarea>
								</div>

							</div>
						</div>
						<!---**************************---->
						<div class="col-lg-12 mx-auto border">
							<div class="row">

								<div class="col-lg-4 pt-5 text-center">
									<span style="font-size: 18px;">Alt İçerik 3</span>

								</div>
								<div class="col-lg-8 p-1">
									<textarea name="nasil3" class="form-control" rows="8"><?php echo @$sonuc["nasil3"] ?></textarea>
								</div>

							</div>
						</div>






					</div>

					<div class="col-lg-12 mx-auto mt-3">
						<input type="submit" name="buton" class="btn btn-dark m-1" value="Güncelle">
					</div>
				</div>

			</form>


		<?php

		endif;
	}

	//-----------------------SANAL GERÇEKLİK--------------------------------
	function sanal($vt)
	{

		echo '<div class="row text-center">
					<div class="col-lg-12 border-bottom">
						<h4 class="float-left mx-auto text-dark">

						<a href="control.php?sayfa=sanalEkle" class="fa fa-plus-square p-1 text-dark mr-2 m-2" style="font-size:40px;"></a>
						&nbsp;&nbsp;&nbsp;&nbsp;
						Sanal Gerçeklik Ayarları

						</h4>
					</div>';


		$introbilgiler = $this->sorgum($vt, "select * from sanal", 2);

		while ($sonbilgi = $introbilgiler->fetch(PDO::FETCH_ASSOC)) :

			echo '<div class="col-lg-6">
						<div class="row card-bordered p-1 mt-3 m-1 bg-light text-left">
							<div class="col-lg-9 pt-3">
								<b>Resim : ' . $sonbilgi["medya"] . '</b>
								<hr/>
							</div>
							<div class="col-lg-3 text-right mt-2">

								<a href="control.php?sayfa=sanalGuncelle&id=' . $sonbilgi["id"] . '" 
								class="ti-reload pr-2 text-success" style="font-size:25px"></a>

								<a href="control.php?sayfa=sanalSil&id=' . $sonbilgi["id"] . '"
								class="ti-trash text-danger" style="font-size:25px"></a>
							</div>

								<div class="col-lg-12 text-secondary text-left">
								' . $sonbilgi["icerik"] . '
								</div>
							

							
				
						</div>
					</div>';
		endwhile;

		echo '</div>';
	}

	function sanalEkle($vt)
	{

		echo '<div class="row text-center">
					<div class="col-lg-12 border-bottom">
						<h3 class="mx-auto m-4 text-dark">Sanal Gerçeklik Kartı Ekle</h3>
						
					</div>';

		if (!$_POST) :

			echo '<div class="col-lg-6 mx-auto">
					<div class="row border bordered p-1 m-1 bg-light">

						<div class="col-lg-3 pt-3">
							<b>Resim Yolu</b>
						</div>
						<div class="col-lg-9 p-1">
							<form action="" method="post">
							<input type=""text name="resim" class="form-control" placeholder="img/ornek.jpg">
						</div>


						<div class="col-lg-12 border-top p-2">
							İçerik
						</div>
						<div class="col-lg-12 border-top">
							<textarea name="icerik" rows="5" class="form-control"></textarea>
						</div>
							

						<div class="col-lg-12 border-top pt-2">
							<input type="submit" name="buton" value="Hizmet Ekle" class="btn btn-dark">
							</form>
						</div>

							
				
					</div>
				</div>';

		else :

			$resim = htmlspecialchars($_POST["resim"]);
			$icerik = htmlspecialchars($_POST["icerik"]);

			if ($resim == "" || $icerik == "") :

				echo '<div class="col-lg-6 mx-auto">
						 <div class="alert alert-danger mt-3">Başlık ya da içerik boş bırakılamaz.</div></div>';
				header("refresh:1.5,url=control.php?sayfa=sanalEkle");


			else :
				$this->sorgum($vt, "insert into sanal (medya,icerik) VALUES('$resim','$icerik')", 0);

				echo '<div class="col-lg-6 mx-auto">
						 <div class="alert alert-success mt-3">Eklendi.</div></div>';
				header("refresh:0,url=control.php?sayfa=sanal");

			endif;




		endif;

		echo '</div>';
	}

	function sanalGuncelle($vt)
	{

		echo '<div class="row text-center">
					<div class="col-lg-12 border-bottom">
						<h3 class="mx-auto m-4 text-dark">Sanal Gerçeklik Kartı Güncelleme</h3>
						
					</div>';


		//gelen id alınacak
		//id ile veritabanına çıkıp veri alınacak
		//inputlara veriler yazdırılacak
		//hidden ile id post için taşınacak

		$kayitid = $_GET["id"];
		$kayital = $this->sorgum($vt, "select * from sanal where id=$kayitid", 1);



		if (!$_POST) :

			echo '<div class="col-lg-6 mx-auto">
					<div class="row border bordered p-1 m-1 bg-light">

						<div class="col-lg-3 pt-3">
							<b>Resim Yol</b>
						</div>
						<div class="col-lg-9 p-1">
							<form action="" method="post">
							<input type=""text name="medya" class="form-control" value="' . $kayital["medya"] . '">
						</div>


						<div class="col-lg-12 border-top p-2">
							İçerik
						</div>
						<div class="col-lg-12 border-top">
							<textarea name="icerik" rows="5" class="form-control">' . $kayital["icerik"] . '</textarea>
						</div>
							

						<div class="col-lg-12 border-top pt-2">

							<input type="hidden" name="kayitid" value="' . $kayitid . '">
							<input type="submit" name="buton" value="Kart Güncelle" class="btn btn-dark">
							</form>
						</div>

							
				
					</div>
				</div>';

		else :

			$medya = htmlspecialchars($_POST["medya"]);
			$icerik = htmlspecialchars($_POST["icerik"]);
			$kayitid = htmlspecialchars($_POST["kayitid"]);

			if ($medya == "" || $icerik == "") :

				echo '<div class="col-lg-6 mx-auto">
						 <div class="alert alert-danger mt-3">Başlık ya da içerik boş bırakılamaz.</div></div>';
				header("refresh:1.5,url=control.php?sayfa=sanalGuncelle");


			else :
				$this->sorgum($vt, "update sanal set medya='$medya',icerik='$icerik' where id=$kayitid", 0);

				echo '<div class="col-lg-6 mx-auto">
						 <div class="alert alert-success mt-3">Kart güncellendi.</div></div>';
				header("refresh:0,url=control.php?sayfa=sanal");

			endif;




		endif;

		echo '</div>';
	}

	function sanalSil($vt)
	{

		$kayitid = $_GET["id"];

		echo '<div class="row text-center">
					<div class="col-lg-12">
			';

		//veritabanından sil
		$this->sorgum($vt, "delete from sanal where id=$kayitid", 0);

		echo '<div class="alert alert-success mt-3">Kart silindi.</div>';
		echo '</div></div>';

		header("refresh:0,url=control.php?sayfa=sanal");
	}



	//-----------------------MODELLEME--------------------------------
	function modelleme($baglanti)
	{

		$sonuc = $this->sorgum($baglanti, "select * from modelleme", 1);

		if ($_POST) :

			//form input elemanlarının 'name' değerleri ile değişkenlerimiz eşitleniyor.

			@$icerik = htmlspecialchars($_POST["icerik"]);
			@$planlama = htmlspecialchars($_POST["planlama"]);
			@$gelistirme = htmlspecialchars($_POST["gelistirme"]);
			@$yayinlama = htmlspecialchars($_POST["yayinlama"]);
			@$bakim = htmlspecialchars($_POST["bakim"]);



			//bu kısımda değişkenlerin doluluk,boşluk kontrolleri yapılabilir.
			//if(title=="") gibi.


			//veritabanındaki sütunlarımız set edilmek için guncelleme degişkeninde tutuluyor.
			$guncelleme = $baglanti->prepare("update modelleme set icerik=?,planlama=?,gelistirme=?,yayinlama=?,bakim=?");

			//değişkenlerimizdeki değerleri sütunlarımızın yanındaki '?' simgelerine sıralarıyla atıyoruz.
			$guncelleme->bindParam(1, $icerik, PDO::PARAM_STR);
			$guncelleme->bindParam(2, $planlama, PDO::PARAM_STR);
			$guncelleme->bindParam(3, $gelistirme, PDO::PARAM_STR);
			$guncelleme->bindParam(4, $yayinlama, PDO::PARAM_STR);
			$guncelleme->bindParam(5, $bakim, PDO::PARAM_STR);
			$guncelleme->execute();

			echo '<div class="alert alert-success" role="alert">
				
				<strong> 3D Modelleme ayarları </strong>başarıyla güncellendi.
				
				</div>';
			header("refresh:1.5,url=control.php?sayfa=modelleme");

		else :
		?>
			<form action="control.php?sayfa=modelleme" method="post">

				<div class="row text-center">


					<div class="col-lg-5 mx-auto">
						<div class="col-lg-12 mx-auto mt-3">
							<h3 class="text-dark">3D Modelleme Ayarları</h3>
						</div>
						<!---**************************---->
						<div class="col-lg-12 mx-auto mt-3 border">
							<div class="row">

								<div class="col-lg-4 border-right pt-5 text-center">
									<span style="font-size: 18px;">Ana Başlık</span>

								</div>
								<div class="col-lg-8 p-1">
									<textarea name="icerik" class="form-control" rows="8"><?php echo @$sonuc["icerik"] ?></textarea>
								</div>

							</div>
						</div>
						<!---**************************---->
						<div class="col-lg-12 mx-auto border">
							<div class="row">

								<div class="col-lg-4 border-right pt-5 text-center">
									<span style="font-size: 18px;">Planlama</span>

								</div>
								<div class="col-lg-8 p-1">
									<textarea name="planlama" class="form-control" rows="8"><?php echo @$sonuc["planlama"] ?></textarea>
								</div>

							</div>
						</div>

						<!---**************************---->
						<div class="col-lg-12 mx-auto mt-3 border">
							<div class="row">

								<div class="col-lg-4 border-right pt-5 text-center">
									<span style="font-size: 18px;">Geliştirme</span>

								</div>
								<div class="col-lg-8 p-1">
									<textarea name="gelistirme" class="form-control" rows="8"><?php echo @$sonuc["gelistirme"] ?></textarea>
								</div>

							</div>
						</div>
						<!---**************************---->
						<div class="col-lg-12 mx-auto border">
							<div class="row">

								<div class="col-lg-4 border-right pt-5 text-center">
									<span style="font-size: 18px;">Yayınlama</span>

								</div>
								<div class="col-lg-8 p-1">
									<textarea name="yayinlama" class="form-control" rows="8"><?php echo @$sonuc["yayinlama"] ?></textarea>
								</div>

							</div>
						</div>

						<!---**************************---->
						<div class="col-lg-12 mx-auto border">
							<div class="row">

								<div class="col-lg-4 border-right pt-5 text-center">
									<span style="font-size: 18px;">Bakım</span>

								</div>
								<div class="col-lg-8 p-1">
									<textarea name="bakim" class="form-control" rows="8"><?php echo @$sonuc["bakim"] ?></textarea>
								</div>

							</div>
						</div>





					</div>

					<div class="col-lg-12 mx-auto mt-3">
						<input type="submit" name="buton" class="btn btn-dark m-1" value="Güncelle">
					</div>
				</div>

			</form>


		<?php

		endif;
	}

	//--------------------------REFERANSLAR-----------------------------------

	//referanslar geliyor.
	function referans($vt)
	{

		echo '<div class="row text-center">
					<div class="col-lg-12 border-bottom">
					<h4 class="float-left mx-auto text-dark">

					<a href="control.php?sayfa=refekle" class="fa fa-plus-square pb-2 text-dark mr-2 " style="font-size:40px;"></a>
					&nbsp;&nbsp;&nbsp;&nbsp;
					Referanslarımız

					</h4>
						
					</div>';


		$refbilgiler = $this->sorgum($vt, "select * from referans", 2);

		while ($sonbilgi = $refbilgiler->fetch(PDO::FETCH_ASSOC)) :

			echo '<div class="col-lg-4">
						<div class="row border bordered p-1 m-1">
							<div class="col-lg-12">
								<img src="../' . $sonbilgi["foto"] . '"><br><br>
								
								<a href="control.php?sayfa=refsil&id=' . $sonbilgi["id"] . '" 
									class="ti-trash m-2 text-danger" style="font-size:25px"></a>
							</div>

							
							
						</div>
					</div>';
		endwhile;

		echo '</div>';
	}
	//ref ekleme
	function refekle($vt)
	{

		echo '<div class="row text-center">
					<div class="col-lg-12">
			';

		if ($_POST) :

			//dosya boş mu ?
			//dosya boyutu ? 
			//dosya uzantısı ?
			//tamamdır

			if ($_FILES["dosya"]["name"] == "") : //dosya boş ise

				echo '<div class="alert alert-danger mt-3">Resim Yüklenmedi.Boş olamaz.</div>';
				header("refresh:1.5,url=control.php?sayfa=refekle");



			else : //dosya boş değilse

				if ($_FILES["dosya"]["size"] > (1024 * 1024 * 5)) : //boyut 5mb dan büyükse 

					echo '<div class="alert alert-danger mt-3">RESİM BOYUTU ÇOK FAZLA. FARKLI BİR DOSYA SEÇİN.</div>';
					header("refresh:1.5,url=control.php?sayfa=refekle");

				else : //boyut problemi yoksa

					$izinverilen = array(
						"image/png", "image/jpeg", "video/mp4", "video/mpg",
						"video/mpeg", "video/mov", "video/avi", "video/flv"
					);

					if (!in_array($_FILES["dosya"]["type"], $izinverilen)) : //uzantısı sağlanmıyorsa

						echo '<div class="alert alert-danger mt-3">RESİM UZANTISI İSTENİLENİN DIŞINDA.LÜTFEN JPG YA DA PNG SEÇİNİZ.</div>';
						header("refresh:1.5,url=control.php?sayfa=refekle");

					else : //artık her şey tamam.


						@$icerik = htmlspecialchars($_POST["icerik"]);
						@$link = htmlspecialchars($_POST["link"]);

						$dosyaminyolu = '../img/kenburns/' . $_FILES["dosya"]["name"];

						move_uploaded_file($_FILES["dosya"]["tmp_name"], $dosyaminyolu);

						echo '<div class="alert alert-success mt-3">RESİM BAŞARIYLA YÜKLENDİ.</div>';
						header("refresh:1.5,url=control.php?sayfa=referans");

						//dosya yüklendikten sonra veritabanına eklenmesi gerek

						$dosyaminyolu2 = str_replace('../', "", $dosyaminyolu);

						$this->sorgum($vt, "insert into referans(foto,icerik,link) VALUES('$dosyaminyolu2','$icerik','$link')", 0);


					endif;
				endif;
			endif;


		else :
		?>
			<div class="col-lg-6 mx-auto mt-2">
				<div class="card card-bordered">
					<div class="card-body">
						<h5 class="title border-bottom">Referanslar resim yükleme formu</h5>

						<form action="" method="post" enctype="multipart/form-data">
							<p class="card-text"><input type="file" name="dosya"></p>
							<input type="text" name="icerik" placeholder="Firma adı" class="mx-auto col-lg-8 form-control"><br>
							<input type="text" name="link" placeholder="Firma sitesi" class="mx-auto col-lg-8 form-control"><br>
							<input type="submit" name="buton" value="Yükle" class="btn btn-dark mb-1">
						</form>

						<p class="card-text text-left text-danger border-top">
							* İzin verilen formatlar : jpg,png<br>
							* İzin verilen max boyut : 5 MB
						</p>
					</div>
				</div>
			</div>



		<?php
		endif;

		echo '</div></div></div>';
	}

	//ref silme
	function refsil($vt)
	{

		$introid = $_GET["id"];
		$verial = $this->sorgum($vt, "select * from referans where id=$introid", 1);

		echo '<div class="row text-center">
					<div class="col-lg-12">
			';

		//dosyadan silme işlemi
		unlink("../" . $verial["foto"]);

		//veritabanından sil
		$this->sorgum($vt, "delete from referans where id=$introid", 0);

		echo '<div class="alert alert-success mt-3">REFERANS BAŞARIYLA SİLİNDİ.</div>';
		echo '</div></div>';

		header("refresh:0,url=control.php?sayfa=referans");
	}


	//--------------------------Gelen Kutusu-----------------------------------

	private function mailgetir($vt, $veriler)
	{
		$sor = $vt->prepare("select * from $veriler[0] where durum=$veriler[1]");
		$sor->execute();
		return $sor;
	}

	function gelenkutu($vt)
	{
		echo '<div class="row">
					<div class="col-lg-12 mt-2">
						<div class="card">
							<div class="card-body">
								<ul class="nav nav-tabs" id="myTab" role="tablist">


									<li class="nav-item">
									<a class="nav-link active" id="gelen-tab" data-toggle="tab" 
									href="#gelen" role="tab" aria-control="gelen" aria-selected="true"><kbd>' . $this->mailgetir($vt, array("gelenmail", 0))->rowCount() . '</kbd> Gelen Kutusu</a>
									</li>

									<li class="nav-item">
									<a class="nav-link" id="okunmus-tab" data-toggle="tab" 
									href="#okunmus" role="tab" aria-control="okunmus" aria-selected="false"><kbd>' . $this->mailgetir($vt, array("gelenmail", 1))->rowCount() . '</kbd> Okunmuş Mesajlar</a>
									</li>

									<li class="nav-item">
									<a class="nav-link" id="arsiv-tab" data-toggle="tab" 
									href="#arsiv" role="tab" aria-control="arsiv" aria-selected="false"><kbd>' . $this->mailgetir($vt, array("gelenmail", 2))->rowCount() . '</kbd> Arşivlenmiş Mesajlar</a>
									</li>

								
								</ul>

								<div class="tab-content mt-3" id="benimTab">


									<div class="tab-pane fade show active" id="gelen" role="tabpanel" aria-labelledby="gelen-tab">';

		$sonuc = $this->mailgetir($vt, array("gelenmail", 0));

		if ($sonuc->rowCount() != 0) :

			while ($sonucson = $sonuc->fetch(PDO::FETCH_ASSOC)) :

				echo '<div class="row">
														<div class="col-lg-12 bg-light mt-2 font-weight-bold" style="border-radius:5px; border:1px solid #eeeeee;">
														
															<div class="row border-bottom">
																<div class="col-lg-1 p-1">Ad & Ünvan</div>
																<div class="col-lg-2 p-1 text-primary">' . $sonucson["ad"] . '</div>
																<div class="col-lg-1 p-1">Mail Adresi</div>
																<div class="col-lg-2 p-1 text-primary">' . $sonucson["mailadres"] . '</div>
																<div class="col-lg-1 p-1">Konu</div>
																<div class="col-lg-2 p-1 text-primary">' . $sonucson["konu"] . '</div>
																<div class="col-lg-1 p-1">Tarih</div>
																<div class="col-lg-1 p-1 text-primary">' . $sonucson["tarih"] . '</div>
																<div class="col-lg-1 p-1">

																	<a href="control.php?sayfa=mesajoku&id=' . $sonucson["id"] . '"><i class="fa fa-folder-open border-right pr-2 text-dark"
																		style="font-size:17px;"></i></a>
																	<a href="control.php?sayfa=mesajarsivle&id=' . $sonucson["id"] . '"><i class="fa fa-share border-right pr-2 text-dark"
																		style="font-size:17px;"></i></a>
																	<a href="control.php?sayfa=mesajsil&id=' . $sonucson["id"] . '"><i class="fa fa-close pr-2 text-dark"
																		style="font-size:17px;"></i></a>

																</div>
															</div>
														</div>
													</div>
													';

			endwhile;
		else :

			echo '<div class="alert alert-info">Gelen mesaj yok.</div>';
		endif;



		echo '
									</div>

									<div class="tab-pane fade" id="okunmus" role="tabpanel" aria-labelledby="okunmus-tab">
									';

		$sonuc = $this->mailgetir($vt, array("gelenmail", 1));

		if ($sonuc->rowCount() != 0) :

			while ($sonucson = $sonuc->fetch(PDO::FETCH_ASSOC)) :

				echo '<div class="row">
														<div class="col-lg-12 bg-light mt-2 font-weight-bold" style="border-radius:5px; border:1px solid #eeeeee;">
														
															<div class="row border-bottom">
																<div class="col-lg-1 p-1">Ad & Ünvan</div>
																<div class="col-lg-2 p-1 text-primary">' . $sonucson["ad"] . '</div>
																<div class="col-lg-1 p-1">Mail Adresi</div>
																<div class="col-lg-2 p-1 text-primary">' . $sonucson["mailadres"] . '</div>
																<div class="col-lg-1 p-1">Konu</div>
																<div class="col-lg-2 p-1 text-primary">' . $sonucson["konu"] . '</div>
																<div class="col-lg-1 p-1">Tarih</div>
																<div class="col-lg-1 p-1 text-primary">' . $sonucson["tarih"] . '</div>
																<div class="col-lg-1 p-1">

																	<a href="control.php?sayfa=mesajoku&id=' . $sonucson["id"] . '"><i class="fa fa-folder-open border-right pr-2 text-dark"
																		style="font-size:17px;"></i></a>
																	<a href="control.php?sayfa=mesajarsivle&id=' . $sonucson["id"] . '"><i class="fa fa-share border-right pr-2 text-dark"
																		style="font-size:17px;"></i></a>
																	<a href="control.php?sayfa=mesajsil&id=' . $sonucson["id"] . '"><i class="fa fa-close pr-2 text-dark"
																		style="font-size:17px;"></i></a>

																</div>
															</div>
														</div>
													</div>
													';

			endwhile;
		else :

			echo '<div class="alert alert-info">Okunmuş mesaj yok.</div>';
		endif;



		echo '
									</div>

									<div class="tab-pane fade" id="arsiv" role="tabpanel" aria-labelledby="arsiv-tab">
									';

		$sonuc = $this->mailgetir($vt, array("gelenmail", 2));

		if ($sonuc->rowCount() != 0) :

			while ($sonucson = $sonuc->fetch(PDO::FETCH_ASSOC)) :

				echo '<div class="row">
														<div class="col-lg-12 bg-light mt-2 font-weight-bold" style="border-radius:5px; border:1px solid #eeeeee;">
														
															<div class="row border-bottom">
																<div class="col-lg-1 p-1">Ad & Ünvan</div>
																<div class="col-lg-2 p-1 text-primary">' . $sonucson["ad"] . '</div>
																<div class="col-lg-1 p-1">Mail Adresi</div>
																<div class="col-lg-2 p-1 text-primary">' . $sonucson["mailadres"] . '</div>
																<div class="col-lg-1 p-1">Konu</div>
																<div class="col-lg-2 p-1 text-primary">' . $sonucson["konu"] . '</div>
																<div class="col-lg-1 p-1">Tarih</div>
																<div class="col-lg-1 p-1 text-primary">' . $sonucson["tarih"] . '</div>
																<div class="col-lg-1 p-1">

																	<a href="control.php?sayfa=mesajoku&id=' . $sonucson["id"] . '"><i class="fa fa-folder-open border-right pr-2 text-dark"
																		style="font-size:17px;"></i></a>
																	<a href="control.php?sayfa=mesajarsivle&id=' . $sonucson["id"] . '"><i class="fa fa-share border-right pr-2 text-dark"
																		style="font-size:17px;"></i></a>
																	<a href="control.php?sayfa=mesajsil&id=' . $sonucson["id"] . '"><i class="fa fa-close pr-2 text-dark"
																		style="font-size:17px;"></i></a>

																</div>
															</div>
														</div>
													</div>
													';

			endwhile;
		else :

			echo '<div class="alert alert-info">Arşivlenmiş mesaj yok.</div>';
		endif;



		echo '
									</div>
								
								
								</div>

							</div>

						</div>
					</div>
				</div>
			
			';
	}

	function mesajoku($vt, $id)
	{

		$mesajbilgi = $this->sorgum($vt, "select * from gelenmail where id=$id", 1);


		echo '<div class="row m-2">
				<div class="col-lg-12 bg-light mt-2 font-weight-bold" style="border-radius:5px; border:1px solid #eeeeee;">
														
					<div class="row border-bottom">
						<div class="col-lg-1 p-1">Ad</div>
						<div class="col-lg-2 p-1 text-primary">' . $mesajbilgi["ad"] . '</div>
						<div class="col-lg-1 p-1">Mail Adresi</div>
						<div class="col-lg-2 p-1 text-primary">' . $mesajbilgi["mailadres"] . '</div>
						<div class="col-lg-1 p-1">Konu</div>
						<div class="col-lg-2 p-1 text-primary">' . $mesajbilgi["konu"] . '</div>
						<div class="col-lg-1 p-1">Tarih</div>
						<div class="col-lg-1 p-1 text-primary">' . $mesajbilgi["tarih"] . '</div>
						<div class="col-lg-1 p-1">

						<a href="control.php?sayfa=mesajarsivle&id=' . $mesajbilgi["id"] . '"><i class="fa fa-share border-right pr-2 text-dark"
						style="font-size:17px;"></i></a>
						<a href="control.php?sayfa=mesajsil&id=' . $mesajbilgi["id"] . '"><i class="fa fa-close pr-2 text-dark"
						style="font-size:17px;"></i></a>

						</div>

					</div>
					<div class="row">
						<div class="col-lg-12 text-left p-2">
							<p>' . $mesajbilgi["mesaj"] . '</p>
						</div>
					</div>
						
					
				</div>
			</div>';

		//mesajın durumu okunmuş olarak güncelleniyor
		$this->sorgum($vt, "update gelenmail set durum=1 where id=$id", 0);
	}

	function mesajarsivle($vt, $id)
	{

		echo '<div class="row m-2">
				<div class="col-lg-12 bg-light mt-2 font-weight-bold" style="border-radius:5px; border:1px solid #eeeeee;">
					
				<div class="alert alert-primary">Mesaj arşivlendi.</div>
				</div>
			</div>';

		//mesajın durumu okunmuş olarak güncelleniyor
		$this->sorgum($vt, "update gelenmail set durum=2 where id=$id", 0);

		header("refresh:0,url=control.php?sayfa=gelenkutu");
	}

	function mesajsil($vt, $id)
	{

		echo '<div class="row m-2">
				<div class="col-lg-12 bg-light mt-2 font-weight-bold" style="border-radius:5px; border:1px solid #eeeeee;">
					
				<div class="alert alert-primary">Mesaj silindi.</div>
				</div>
			</div>';

		//mesajın durumu okunmuş olarak güncelleniyor
		$this->sorgum($vt, "delete from gelenmail where id=$id", 0);

		header("refresh:0,url=control.php?sayfa=gelenkutu");
	}

	function webProje($vt)
	{

		echo '<div class="row text-center">
					<div class="col-lg-12">
					<h4 class="float-left mx-auto text-dark">

					<a href="control.php?sayfa=webProjeEkle" class="fa fa-plus-square pb-2 text-dark mr-2 mt-2 " style="font-size:40px;"></a>
					&nbsp;&nbsp;&nbsp;&nbsp;
					Web Projelerimiz

					</h4>
						
					</div>';


		$refbilgiler = $this->sorgum($vt, "select * from web_projeler", 2);

		while ($sonbilgi = $refbilgiler->fetch(PDO::FETCH_ASSOC)) :

			echo '<div class="col-lg-4">
						<div class="row border bordered p-1 m-1">
							<div class="col-lg-12">
								<img src="../' . $sonbilgi["resim"] . '"><br><br>
								
								<a href="control.php?sayfa=webProjeSil&id=' . $sonbilgi["id"] . '" 
									class="ti-trash m-2 text-danger" style="font-size:25px"></a>
							</div>

							
							
						</div>
					</div>';
		endwhile;

		echo '</div>';
	}
	//ref ekleme
	function webProjeEkle($vt)
	{

		echo '<div class="row text-center">
					<div class="col-lg-12">
			';

		if ($_POST) :

			//dosya boş mu ?
			//dosya boyutu ? 
			//dosya uzantısı ?
			//tamamdır

			if ($_FILES["dosya"]["name"] == "") : //dosya boş ise

				echo '<div class="alert alert-danger mt-3">Resim Yüklenmedi.Boş olamaz.</div>';
				header("refresh:1.5,url=control.php?sayfa=webProjeEkle");



			else : //dosya boş değilse

				if ($_FILES["dosya"]["size"] > (1024 * 1024 * 5)) : //boyut 5mb dan büyükse 

					echo '<div class="alert alert-danger mt-3">RESİM BOYUTU ÇOK FAZLA. FARKLI BİR DOSYA SEÇİN.</div>';
					header("refresh:1.5,url=control.php?sayfa=webProjeEkle");

				else : //boyut problemi yoksa

					$izinverilen = array(
						"image/png", "image/jpeg", "video/mp4", "video/mpg",
						"video/mpeg", "video/mov", "video/avi", "video/flv"
					);

					if (!in_array($_FILES["dosya"]["type"], $izinverilen)) : //uzantısı sağlanmıyorsa

						echo '<div class="alert alert-danger mt-3">RESİM UZANTISI İSTENİLENİN DIŞINDA.LÜTFEN JPG YA DA PNG SEÇİNİZ.</div>';
						header("refresh:1.5,url=control.php?sayfa=webProjeEkle");

					else : //artık her şey tamam.


						@$icerik = htmlspecialchars($_POST["icerik"]);
						@$link = htmlspecialchars($_POST["link"]);
						@$kategoriid = htmlspecialchars($_POST["kategori"]);
						$dosyaminyolu = $_FILES["dosya"]["name"];

						move_uploaded_file($_FILES["dosya"]["tmp_name"], $dosyaminyolu);

						echo '<div class="alert alert-success mt-3">RESİM BAŞARIYLA YÜKLENDİ.</div>';
						header("refresh:1.5,url=control.php?sayfa=webProje");

						//dosya yüklendikten sonra veritabanına eklenmesi gerek

						$dosyaminyolu2 = str_replace('../', "", $dosyaminyolu);

						$this->sorgum($vt, "insert into web_projeler(resim,adi,link,kategoriid) VALUES('$dosyaminyolu2','$icerik','$link','$kategoriid')", 0);


					endif;
				endif;
			endif;


		else :
		?>
			<div class="col-lg-6 mx-auto mt-2">
				<div class="card card-bordered">
					<div class="card-body">
						<h5 class="title border-bottom">Web Projeler yükleme formu</h5>

						<form action="" method="post" enctype="multipart/form-data">
							<p class="card-text"><input type="file" name="dosya"></p>
							<input type="text" name="icerik" placeholder="Proje adı" class="mx-auto col-lg-8 form-control"><br>
							<input type="text" name="link" placeholder="Proje linki" class="mx-auto col-lg-8 form-control"><br>
							<select name="kategori" class="mx-auto col-lg-8 form-control">
								<option value="0">Kategori Seç</option>
								<option value="1">Masa Üstü & Mobil Oyun</option>
								<option value="2">Sanal Gerçeklik</option>
								<option value="3">Mobil Uygulama</option>
								<option value="4">Masaüstü & Web Yazılım</option>
							</select><br>
							<input type="submit" name="buton" value="Yükle" class="btn btn-dark mb-1">
						</form>

						<p class="card-text text-left text-danger border-top">
							* İzin verilen formatlar : jpg,png<br>
							* İzin verilen max boyut : 5 MB
						</p>
					</div>
				</div>
			</div>



<?php
		endif;

		echo '</div></div></div>';
	}

	//ref silme
	function webProjeSil($vt)
	{

		$introid = $_GET["id"];
		$verial = $this->sorgum($vt, "select * from web_projeler where id=$introid", 1);

		echo '<div class="row text-center">
					<div class="col-lg-12">
			';

		//dosyadan silme işlemi
		unlink("../" . $verial["resim"]);

		//veritabanından sil
		$this->sorgum($vt, "delete from web_projeler where id=$introid", 0);


		echo '</div></div>';

		header("refresh:0,url=control.php?sayfa=webProje");
	}




function blog($vt)
{
echo '<div class="row">
<div class="page-header">
<div class="d-flex align-items-center">
<h2 class="page-header-title">Bloglar</h2>
<div>
<div class="page-header-tools">
<a href="index.php?paginal=blog_detay" class="btn btn-gradient-01">Yeni Blog Ekle</a>
</div>
</div>
</div>
</div>
</div>';

echo '<div class="row">

<div class="modal fade" id="ModalSil" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog modal-sm">
<form action="" method="POST">
<div class="modal-content">
<div class="modal-header" style="background: #e91e63; color:#fff; padding:10px;">
<h4 class="modal-title beyaz"><i class="icon-trash"></i> Blog Sil</h4>
</div>
<div class="modal-body">   
<div class="form" role="form">
<div class="form-group">
<label for="sart"><span style="font-size: 1.3em;color: #e91e63;">Uyarı:</span> Blog Silinecek !..</label>
<input type="hidden" name="silid" id="silid" />
</div>
</div>
</div>
<div class="modal-footer">
<button type="submit" name="sil" class="btn btn-danger"><i class="la la-check"></i> Sil</button>
<button type="button" class="btn btn-shadow" data-dismiss="modal"><i class="la la-remove"></i> İptal</button>
</div>
</div>
</form>
</div>
</div>';



}







}

?>