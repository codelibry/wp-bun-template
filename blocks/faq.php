<?php
/*
 * Block: FAQ
 */

$title = get_array_value($args, 'title', get_sub_field('faq__title'));

$faqs = get_array_value($args, 'faqs', get_sub_field('faq__list'));

if (!$faqs) {
	return get_template_part('template-parts/error/invalid-block', '', [
		'title' => 'FAQ list is empty'
	]);
}

?>

<section class="faq | section">
	<div class="container">
		<div class="container container--narrow | mx-auto text-center">
			<?php if ($title): ?>
				<div class="faq__title | flow">
					<?php echo $title ?>
				</div>
			<?php endif; ?>
		</div>

		<div class="accordion| mt-36">
			<?php foreach ($faqs as $faq): ?>
				<div class="accordion__item">
					<div class="accordion__item_head js-acc-trigger">
						<h6 class="accordion__item_title">
							<?php echo $faq['title'] ?>
						</h6>
						<div class="accordion__item_icon_w">
							<?php echo get_inline_svg('accordion-icon.svg') ?>
						</div>
					</div>
					<div class="accordion__item_body">
						<div class="accordion__item_body_in">
							<?php echo $faq['content'] ?>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>