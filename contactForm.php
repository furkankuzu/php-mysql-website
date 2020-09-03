<?php
include_once("lib/fonksiyon.php");
$yonetim=new yonetim();
?>
    			
<section class="ashade-section">
	<div class="ashade-row">
		<div class="ashade-col col-4">
			<div class="ashade-contact-details">
			
				<h4 class="ashade-contact-details__title">
					<span>İLETİŞİM VE SOSYAL MEDYA</span>
					İLETİŞİM BİLGİLERİ
				</h4>
				<ul class="ashade-contact-details__list">
					<li>
						<i class="ashade-contact-icon la la-map-marker"></i>
						<?php echo $yonetim->adres?>
					</li>
					<li>
						<i class="ashade-contact-icon la la-phone"></i>
						<a href="tel:<?php echo $yonetim->telefon?>"><?php echo $yonetim->telefon?></a>
					</li>
					<li>
						<i class="ashade-contact-icon la la-envelope"></i>
						<a href="mailto:<?php echo $yonetim->mail?>"><?php echo $yonetim->mail?></a>
					</li>
					<li class="ashade-contact-socials">
						<i class="ashade-contact-icon la la-share-alt"></i>
						<a href="<?php echo $yonetim->twitter?>" target="_blank">Tw</a>
						<a href="<?php echo $yonetim->face?>" target="_blank">Fb</a>
						<a href="<?php echo $yonetim->linkedin?>" target="_blank">LI</a>
						<a href="<?php echo $yonetim->insta?>" target="_blank">In</a>
						<a href="<?php echo $yonetim->youtube?>" target="_blank">Yt</a>
					</li>
				</ul>
			</div><!-- .ashade-contact-details -->
		</div><!-- .ashade-col -->
		<div class="ashade-col col-8">


		<div id="mesajsonuc"></div>
			<div id="formtutucu">
			<form action="" method="POST" class="ashade-contact-form">
				<div class="ashade-row ashade-small-gap">
					<div class="ashade-col col-6">
						<input type="text" id="name" name="name" placeholder="İsim & Ünvan" required>
					</div>
					<div class="ashade-col col-6">
						<input type="email" id="email" name="email" placeholder="E-mail" required>
					</div>
					
				</div>
				<textarea name="message" id="message" placeholder="Mesajınız" required></textarea>
				<div class="ashade-contact-form__footer">
					<div class="ashade-contact-form__response"></div>
					<div class="ashade-contact-form__submit">
						<input type="submit" value="Gönder" id="gonderbtn">
					</div>
				</div>
			</form>
			</div>
		</div><!-- .ashade-col -->
	</div><!-- .ashade-row -->
</section>


<?php
if(isset($_POST["gonder"])){
	echo "dsdfsf";
}
?>