<?php
/*
 * Block: Features
 */

$title = get_sub_field('features__title');
$features = get_sub_field('features__list');

if(!$features) return;

?>

<section class="features | section">
	<div class="features__container | container">
		<?php if($title): ?>
			<div class="features__title">
				<?php echo $title ?>
			</div>
		<?php endif; ?>

		<div class="features__list">
			<?php foreach ($features as $item): 
				$icon = $item['icon'];
				$title = $item['title'];
				$text = $item['text'];
      ?>
				<article class="feature">
					<div class="feature__icon">
						<?php if($icon && is_svg_icon($icon['url'])): ?>
              <?php echo file_get_contents($icon['url']) ?>
            <?php elseif($icon): ?>
              <img <?php acf_image_attrs($icon) ?> >
						<?php else: ?>
              <?php echo get_inline_svg('placeholder-icon.svg') ?>
						<?php endif; ?>
					</div>

					<?php if($title): ?>
						<h3 class="feature__title">
							<?php echo esc_html($title); ?>
						</h3>
					<?php endif; ?>

					<?php if($text): ?>
            <div class="feature__text">
              <?php echo esc_html($text); ?>
            </div>
					<?php endif; ?>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>
