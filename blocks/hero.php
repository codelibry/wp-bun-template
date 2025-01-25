<?php
/*
 * Block: Hero
 */

$title = get_array_value($args, 'title', get_sub_field('hero__title'));
$image = get_array_value($args, 'image', get_sub_field('hero__image'));
$button_1 = get_array_value($args, 'button_1', get_sub_field('hero__button-1'));
$button_2 = get_array_value($args, 'button_2', get_sub_field('hero__button-2'));
$description = get_array_value($args, 'description', get_sub_field('hero__description'));

if(!$title) {
  return get_template_part('template-parts/error/invalid-block', '', [
    'title' => 'Title is required'
  ]);
}

?>

<section class="hero | section">
  <div class="container">
    <div class="row align-items-center justify-content-between g-32">
      <div class="col-6">
        <?php if($title): ?>
          <div class="hero__title">
            <?php echo $title ?>
          </div>
        <?php endif; ?>
        
        <div class="hero__description | mt-16">
          <?php echo $description ?>
        </div>

        <div class="hero__buttons | flex-group | gx-8 mt-24">
          <?php if($button_1): ?>
            <a class="button button--primary" <?php acf_link_attrs($button_1) ?>>
              <?php echo $button_1['title'] ?>
            </a>
          <?php endif; ?>

          <?php if($button_2): ?>
            <a class="button" <?php acf_link_attrs($button_2) ?>>
              <?php echo $button_2['title'] ?>
            </a>
          <?php endif; ?>
        </div>
      </div>

      <div class="col-6">
        <?php if($image): ?>
          <img class="hero__image | mx-auto" <?php acf_image_attrs($image) ?>>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
