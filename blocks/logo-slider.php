<?php
/*
 * Block: Logo Slider
 */

$logos = get_array_value($args, 'logo-slider', get_sub_field('logo-slider'));

if (!$logos || empty($logos)) {
	return get_template_part('template-parts/error/invalid-block', '', [
		'title' => 'Logo Slider is empty'
	]);
}

?>

<section class="logo-slider | section">
	<div class="container">
		<div class="marquee js-marquee">
			<div class="marquee__inner" aria-hidden="true" ref="inner">

				<?php
				$logoList =  array_merge($logos, $logos, $logos, $logos, $logos);
				foreach ($logoList as $logo): ?>
					<div class="marquee__part">
						<img <?php acf_image_attrs($logo) ?> />
					</div>
				<?php endforeach; ?>

			</div>
		</div>
	</div>
</section>