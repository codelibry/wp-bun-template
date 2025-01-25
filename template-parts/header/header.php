<?php

$logo = get_field('site-logo', 'option');
$button = get_field('cta-button', 'option');
$email = get_field('email', 'option');
$phone = get_field('phone', 'option');

?>

<header class="header js-header" id="header">

	<!-- Header Top -->
	<div class="header-top">
		<div class="container">
			<div class="header-top__inner">
				<?php if ($email): ?>
					<a class="header-top__link" <?php acf_link_attrs($email) ?>>
						<span class="header-top__label"><?php _e('E-Mail') ?></span>
						<span class="header-top__value"><?php echo $email['title'] ?></span>
					</a>
				<?php endif; ?>
				<?php if ($phone): ?>
					<a class="header-top__link" <?php acf_link_attrs($phone) ?>>
						<span class="header-top__label"><?php _e('Tel.') ?></span>
						<span class="header-top__value"><?php echo $phone['title'] ?></span>
					</a>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<!-- Header Top End -->

	<div class="container">
		<div class="header__inner">
			<?php if ($logo): ?>
				<a class="header__logo | site-logo" href="<?php echo home_url() ?>">
					<img <?php acf_image_attrs($logo) ?> />
				</a>
			<?php endif; ?>

			<?php wp_nav_menu([
				'theme_location' => 'header-menu',
				'container' => 'nav',
				'menu_class' => 'header-menu',
				'container_class' => 'header-menu d-lg-none',
			]) ?>

			<?php if ($button): ?>
				<a class="header__button | button | d-lg-none" <?php acf_link_attrs($button) ?>>
					<?php echo $button['title'] ?>
				</a>

				<button class="js-toggle-mode">
					Mode Toggle
				</button>
			<?php endif; ?>


			<!-- Mobile Start -->
			<!-- Menu Burger Button -->
			<button class="site-header__menu_trigger js-header-menu-trigger" type="button" aria-label="Toggle menu">
				<span></span>
			</button>
			<!-- Menu Burger Button End -->

			<!-- Mobile Menu Start -->
			<div class="mobile-menu | js-mobile-menu" style="display:none">
				<div class="container">
					<div class="mobile-menu__inner">
						<?php wp_nav_menu([
							'theme_location' => 'header-menu',
							'container' => 'nav',
							'menu_class' => 'header-menu',
							'container_class' => 'header-menu',
						]) ?>

						<?php if ($button): ?>
							<a class="header__button mobile-menu__button | button" <?php acf_link_attrs($button) ?>>
								<?php echo $button['title'] ?>
							</a>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<!-- Mobile Menu End -->
			<!-- Mobile End -->

		</div>
	</div>
</header>