<aside id="ashade-aside">
	<a href="#" class="ashade-aside-close">Kapat</a>
	<div class="ashade-aside-inner">
		<div class="ashade-aside-content">
			<div class="ashade-widget ashade-widget--about">
				<div class="ashade-widget--about__head">
					<img src="img/favicon2.png" alt="">
					<h5 style="color: blanchedalmond;">
						<span>Yazılım Şirketi</span>
						Alkosoft
					</h5>
				</div>
				<p> Projenizde Birlikte Çalışalım<br> Hedeflerinize ulaşmanıza ve işinizi büyütmenize yardımcı oluyoruz.</p>

				<p>
					<div class="ashade-contact-form__submit"><a href="teklif-al">
							<input type="button" value="Teklif al" id="gonderbtn"></a>
					</div>
				</p>
			</div><!-- .ashade-widget -->

			<div class="ashade-widget ashade-widget--contacts">
				<h5 class="ashade-widget-title" style="color: blanchedalmond;">
					<span>İLETİŞİM VE SOSYAL MEDYA</span>
					İLETİŞİM BİLGİLERİ
				</h5>
				<ul class="ashade-contact-details__list">
					<li>
						<i class="ashade-contact-icon la la-map-marker"></i>
						<?php echo $yonetim->adres; ?>
					</li>
					<li>
						<i class="ashade-contact-icon la la-phone"></i>
						<a href="tel:<?php echo $yonetim->telefon; ?>"><?php echo $yonetim->telefon; ?></a>
					</li>
					<li>
						<i class="ashade-contact-icon la la-envelope"></i>
						<a href="mailto:<?php echo $yonetim->mail; ?>"><?php echo $yonetim->mail; ?></a>
					</li>
					<li class="ashade-contact-socials">
						<i class="ashade-contact-icon la la-share-alt"></i>
						<a href="<?php echo $yonetim->twitter; ?>" target="_blank">Tw</a>
						<a href="<?php echo $yonetim->face; ?>" target="_blank">Fb</a>
						<a href="<?php echo $yonetim->linkedin; ?>" target="_blank">LI</a>
						<a href="<?php echo $yonetim->insta; ?>" target="_blank">In</a>
						<a href="<?php echo $yonetim->youtube; ?>" target="_blank">Yt</a>
					</li>
				</ul>
				<p class="align-right">
					<a href="iletisim" class="ashade-learn-more">İletişime Geç</a>
				</p>
			</div><!-- .ashade-widget -->

		</div><!-- .ashade-aside-content -->
	</div><!-- .ashade-aside-inner -->
</aside>

<!-- UI Elements -->
<div class="ashade-home-block-overlay"></div>
<div class="ashade-menu-overlay"></div>
<div class="ashade-aside-overlay"></div>
<div class="ashade-cursor is-inactive">
	<span class="ashade-cursor-circle"></span>
	<span class="ashade-cursor-slider"></span>
	<span class="ashade-cursor-close ashade-cursor-label">Kapat</span>
	<span class="ashade-cursor-zoom ashade-cursor-label">Yaklaş</span>
</div>

<!-- SCRIPTS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/gsap.min.js"></script>
<script src="js/masonry.min.js"></script>
<script src="js/core.js"></script>
<script src="js/jquery.lazy.min.js"></script>
<!--about-->
<script src="js/tiny-slider.js"></script>
<!--about-->
<script src="js/photoswipe.min.js"></script>
<!--about-->
<script src="js/photoswipe-ui-default.min.js"></script>
<!--about-->
<script src="js/ashade-ribbon.js"></script>
<!--gallery-ribbon-large -->

<script>
	$(document).ready(function() {
		$(window).scroll(function() {
			var scrollPos = $(document).scrollTop();
			console.log("scrollPos:" + scrollPos);
			if (scrollPos >= 100) {
				$("#ashade-header").addClass("header-bg");
			} else {
				$("#ashade-header").removeClass("header-bg");
			}
		});
	});
</script>