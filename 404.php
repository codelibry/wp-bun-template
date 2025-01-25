<?php get_header(); 

$title                  = get_field('page404_title', 'option') ? get_field('page404_title', 'option') : __('Oops!', 'theme-name');
$content                = get_field('page404_main_content', 'option') ? get_field('page404_main_content', 'option') : __('The Page you are looking for doesn\'t exist', 'theme-name');
$homepage_button_label  = get_field('page404_homepage_button_label', 'option') ? get_field('page404_homepage_button_label', 'option') : __('Back To Homepage', 'theme-name') ;
$shop_button_label      = get_field('page404_shop_button_label', 'option') ? get_field('page404_shop_button_label', 'option') : __('Back to Shop','theme-name');

?>



<section class="error404__wrapper | section">
  <div class="error404__container container justify-content-center">

    <div class="error404__content text-center">

      <h1><?php echo $title; ?></h1>
      <h2><?php echo $content; ?></h2>

    </div>

    <div class="error404__buttons-wrapper">

      <a class="button button--primary" href="<?php echo get_home_url() ?>"><?php echo $homepage_button_label; ?></a>

      <?php if (is_woocommerce_activated()) : ?>
        <a class="button" href="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>"><?php echo $shop_button_label; ?></a>
      <?php endif; ?>

    </div>

  </div>
</section>

<?php get_footer(); ?>
