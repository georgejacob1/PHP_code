<section class="flinker-wrapp">
	<div class="margin">

		<div class="flinker-col1">
			<?php if (!empty(get_field('logo', 'options'))) {

				$logo = get_field('logo', 'options')['url'];

				$alt = get_field('logo', 'options')['alt'];

				if (empty($alt)) {

					$alt = "Ashbourneroad Dental Logo";
				}

				$title4 = get_field('logo', 'options')['title'];

				if (empty($title4)) {

					$title4 = "Ashbourneroad Dental Logo";
				}

			?>
				<a href="<?php echo site_url('/'); ?>" class="flinker-row1">
					<img loading="lazy" src="<?php echo $logo; ?>" alt="<?php echo $alt; ?>" title="<?php echo $title4 ?>" />
				</a>
			<?php } ?>

		</div>
		<div class="flinker-mob1">
			<?php if (!empty(get_field('instagram', 'options'))) { ?>
				<a href="<?php echo get_field('instagram', 'options'); ?>" target="_blank" class="circle-effects1">
					<img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/socials-icon/instagram-white-circle-icon.svg" alt="instagram" />
					<span class="circle-row1">
						<img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/socials-icon/instagram-white-transparent-circle-icon.svg" alt="instagram" />
					</span>
				</a>
			<?php } ?>
			<?php if (!empty(get_field('facebook', 'options'))) { ?>
				<a href="<?php echo get_field('facebook', 'options'); ?>" target="_blank" class="circle-effects1">
					<img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/socials-icon/facebook-white-circle-icon.svg" alt="facebook" />
					<span class="circle-row1">
						<img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/socials-icon/facebook-white-transparent-circle-icon.svg" alt="facebook" />
					</span>
				</a>
			<?php } ?>
			<?php if (!empty(get_field('whatsapp', 'options'))) {

				$wh = get_field('whatsapp', 'options');

				$wh = preg_replace('/\s/', '', $wh); ?>
				<a href="https://wa.me/<?php echo $wh; ?>" target="_blank" class="circle-effects1">
					<img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/socials-icon/whatsapp-white-circle-icon.svg" alt="whatsapp" />
					<span class="circle-row1">
						<img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/socials-icon/whatsapp-white-transparent-circle-icon.svg" alt="whatsapp" />
					</span>
				</a>
			<?php } ?>
		</div>

		<?php if (!empty(get_field('address_link_', 'options'))) {

			if (!empty(get_field('address', 'options'))) { ?>

				<a href="<?php echo get_field('address_link_', 'options'); ?>">

					<ul class="flinker-mob2 addresslink">

						<?php echo get_field('address', 'options'); ?>

					</ul>

				</a>

			<?php }
		} else { ?>
			<?php if (!empty(get_field('address', 'options'))) { ?>
				<ul class="flinker-mob2"><?php echo get_field('address', 'options'); ?></ul>
		<?php }
		} ?>

		<div class="flinker-col2">
			<div class="flinker-row2">
				<?php if (!empty(get_field('phone', 'options'))) {
					$ph1 = get_field('phone', 'options'); ?>
					<a href="tel:<?php echo preg_replace('/\s/', '', $ph1); ?>" class="flinker-btn1"><?php echo get_field('phone', 'options'); ?></a>
				<?php } ?>

			</div>
		</div>
		<div class="flinker-col3">
			<div class="flinker-row3">
				<div class="flinker-box1">
					<?php if (!empty(get_field('instagram', 'options'))) { ?>
						<a href="<?php echo get_field('instagram', 'options'); ?>" target="_blank" class="circle-effects1">
							<img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/socials-icon/instagram-white-circle-icon.svg" alt="instagram" />
							<span class="circle-row1">
								<img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/socials-icon/instagram-white-transparent-circle-icon.svg" alt="instagram" />
							</span>
						</a>
					<?php } ?>
					<?php if (!empty(get_field('facebook', 'options'))) { ?>
						<a href="<?php echo get_field('facebook', 'options'); ?>" class="circle-effects1" target="_blank">
							<img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/socials-icon/facebook-white-circle-icon.svg" alt="facebook" />
							<span class="circle-row1">
								<img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/socials-icon/facebook-white-transparent-circle-icon.svg" alt="facebook" />
							</span>
						</a>
					<?php } ?>
					<?php if (!empty(get_field('whatsapp', 'options'))) {

						$wh = get_field('whatsapp', 'options');

						$wh = preg_replace('/\s/', '', $wh); ?>
						<a href="https://wa.me/<?php echo $wh; ?>" target="_blank" class="circle-effects1">
							<img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/socials-icon/whatsapp-white-circle-icon.svg" alt="whatsapp" />
							<span class="circle-row1">
								<img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/socials-icon/whatsapp-white-transparent-circle-icon.svg" alt="whatsapp" />
							</span>
						</a>
					<?php } ?>
				</div>
				<?php if (!empty(get_field('contact_us', 'options'))) { ?>
					<a href="<?php echo site_url("/") . get_field('contact_us', 'options'); ?>" class="flinker-btn2">CONTACT US</a>
				<?php } ?>
				<?php if (!empty(get_field('book_online_link', 'options'))) { ?>


					<?php if(!empty(get_field('book_online_link_type', 'options') =="External")){ ?>


						<a href="<?php echo get_field('book_online_link', 'options'); ?>" target="_blank" class="flinker-btn2 mob-show1">BOOK ONLINE</a>


						  <?php }else{ ?>


					<a href="<?php echo site_url("/") . get_field('book_online_link', 'options'); ?>" class="flinker-btn2 mob-show1">BOOK ONLINE</a>


					    <?php } ?>

				<?php }
				?>

			</div>
		</div>
		<div class="flinker-col4">

			<?php if (!empty(get_field('address_link_', 'options'))) {

				if (!empty(get_field('address', 'options'))) { ?>


					<ul class="flinker-row4 addresslink">

						<?php echo get_field('address', 'options'); ?>

					</ul>



				<?php }
			} else { ?>
				<?php if (!empty(get_field('address', 'options'))) { ?>
					<ul class="flinker-row4">
						<li><?php echo get_field('address', 'options'); ?></li>
					</ul>
			<?php }
			} ?>

		</div>
		<div class="flinker-col5">


			<?php wp_nav_menu(array('menu' => 'Footer Menu 2', 'container' => '', 'menu_class' => 'flinker-row5', 'fallback_cb' => false)); ?>

		</div>

	</div>
</section>