<?php
/**
* Template part for displaying a message that posts cannot be found.
*
* @package RED_Starter_Theme
*/

?>
<section class="popup-section">

<div class="popup-header">
	<p>My book has launched!
		<span>Get a free chapter by joining my community</span>
	</p>
	<img class="top-branch" src="<?php echo get_template_directory_uri(); ?>/assets/images/CCT-DECO-Branch.png" alt="Chloe's Countertop Deco Branch"/>
	<button name="modal" class="popup-button" id="popup-button">claim the free chapter</button>
</div>
<!-- #customize your modal window here -->
<div id="modal" class="modalwindow">
	<!-- Modal window Title -->
	<!-- close button is defined as close class -->
	<div class="content modal-box">
		<a href="#" class="close">&#x1F187;</a>
		<div class="modal-head">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/CCT-Logo-Colour.png" alt="" />
			<h2>Chloe’s New Book just launched!</h2>
		</div>
		<h3 class="inline-accent">
			Get a FREE chapter now and be the first to hear about other exciting news in the Chloe’s Countertop Community.
		</h3>

		<!-- Begin MailChimp Signup Form -->
		<div id="mc_embed_signup">
			<form action="//chloescountertop.us5.list-manage.com/subscribe/post?u=69a2680f7acd058053dfa0020&amp;id=32fc4ab161" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
					<div class="mc-field-group">
						<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Email Address" required>
						<input type="text" value="" name="FNAME" class="" id="mce-FNAME" placeholder="First Name">
					</div>
					<div id="mce-responses" class="clear">
						<div class="response" id="mce-error-response" style="display:none">Please enter a valid email</div>
						<div class="response" id="mce-success-response" style="display:none"></div>
					</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
					<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_69a2680f7acd058053dfa0020_32fc4ab161" tabindex="-1" value=""></div>
					<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
				</div>
			</form>
	</div>

		<!--End mc_embed_signup-->
	</div>
</section>
