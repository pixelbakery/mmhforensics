<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MMH_Forensics
 */

?>
<?php
	$reverse_logo = get_field('reverse_logo', 'option');
	$subscribe_text = get_field('email_subscribe_text', 'option');
?>
	<footer id="colophon" class="site-footer">
		<div class="site-info container h-100">
			<div class="row h-100 py-5">
				<?php if(!empty( $reverse_logo )):
					$reverse_logo_url = $reverse_logo['url']; ?>
				<div class="col-2 h-100 position-relative">
					<a href="/">
						<img class="img-fluid position-absolute w-100 logo" src="<?php echo esc_url($reverse_logo_url); ?>" alt="<?php echo esc_attr($reverse_logo['alt']); ?>"/>
					</a>
				</div>
				<?php endif; ?>
				<div class="col-3 ps-5">
					<h2>Dr. Gina Wong</h2>
					<span class="line my-3 pe-2"></span>
					<h3>Ph.D, R. Psych</h3>
					<p>
						Professionally reinvent market positioning expertise and state of the art growth strategies. Rapidiously incubate global systems.
					</p>
				</div>
				<div class="col-3 offset-1 footer-widget ps-4">
					<h3>Site Links</h3>
					<ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">about</a></li>
              <li><a href="#">services</a></li>
              <li><a href="#">portfolio</a></li>
              <li><a href="#">Contact</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="#">Our Services</a></li>
              <li><a href="#">Expert Team</a></li>
              <li><a href="#">Contact us</a></li>
              <li><a href="#">Latest News</a></li>
            </ul>

				</div>
				<div class="col-3">
					<!-- Begin Mailchimp Signup Form -->
					<h3>Subscribe</h3>
					<?php if($subscribe_text):?>
						<p>
							<?php echo $subscribe_text;?>
						</p>
					<?php endif; ?>
					<div class="subscribe-form">
            <form action="https://mmhforensics.us2.list-manage.com/subscribe/post?u=b16066874c0f21ab6870bd449&amp;id=07edc92c65" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
              <input type="email" placeholder="Email Address" name="EMAIL" id="mce-EMAIL">
              <button type="submit" name="subscribe" id="mc-embedded-subscribe"><i class="fab fa-telegram-plane"></i></button>

							<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
								<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_b16066874c0f21ab6870bd449_07edc92c65" tabindex="-1" value=""></div>

            </form>
						<div id="mce-responses" class="clear">
							<div class="response" id="mce-error-response" style="display:none"></div>
							<div class="response" id="mce-success-response" style="display:none"></div>
						</div>
						<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
						<script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='MMERGE5';ftypes[5]='text';}(jQuery));var $mcj = jQuery.noConflict(true);
						</script>
					</div>
				</div>
				<div class="col-6 offset-2 my-2 pt-3 ps-5">
					<h3>Contact Us</h3>
					<div class="contactinfo d-flex flex-column">

						<div class="d-flex justify-content-start mb-2">
							<div>
								<i class="fas fa-phone-alt"></i>
							</div>
								<!-- TODO: Add ACF Footer Setting for Phone -->
							<ul class="list-unstyled list-inline d-flex w-100">
								<li class="list-inline-item flex-fill">
									<p class="text-right pb-0 mb-0">Edmonton</p>
									<a class="color-white">780.434.5856</a>
								</li>
								<li class="list-inline-item flex-fill">
									<p class="text-right pb-0 mb-0">Fax</p>
									<a class="color-white">780.434.5856</a>
								</li>
								<li class="list-inline-item flex-fill">
									<p class="text-right pb-0 mb-0">Toll-Free Canada</p>
									<a class="color-white">780.434.5856</a>
								</li>
							</ul>
						</div>
						<div class="d-flex justify-content-start mt-2">
							<div>
									<i class="far fa-envelope"></i>
							</div>

							<ul class="list-unstyled">
								<li >
									<!-- TODO: Add ACF Footer Setting for Email -->
									<p class="text-right pb-0 mb-0 color-white">ginapsychologist@gmail.com</p>

								</li>
								<li >
									<p class="text-right pb-0 mb-0 color-white">
ginaw@athabascau.ca</p>

								</li>

							</ul>
						</div>
					</div>
				</div>
		</div><!-- .site-info -->
		<span class="line"></span>
		<div class="row py-2 pt-4">
			<div class="col-12  text-center d-flex flex-column justify-content-center">
				<p class="mx-auto mb-1 pb-0 text-center">Copyright ©<?php echo date("Y");?>, All Rights Reserved <a href="/">MMH FORENSICS</a>.</p>
				<p class="mx-auto footer-credits pt-0 mt-0 text-center">
					Website Made W/ Love & Flour By <a href="https://pixelbakery.com" target="_blank">Pixel Bakery Design Studio</a>.
				</p>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
