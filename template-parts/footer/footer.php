<?php

$menus = [
  [
    'title' => __('About', 'theme-menu'),
    'menu' => wp_nav_menu([
      'theme_location' => 'footer-menu-1',
      'echo' => false,
    ])
  ],
  [
    'title' => __('Resources', 'theme-menu'),
    'menu' => wp_nav_menu([
      'theme_location' => 'footer-menu-2',
      'echo' => false,
    ])
  ],
  [
    'title' => __('Legal', 'theme-menu'),
    'menu' => wp_nav_menu([
      'theme_location' => 'footer-menu-3',
      'echo' => false,
    ])
  ],
];

$copyright = get_field('copyright', 'option');

?>

<footer class="footer" id="footer">
  <div class="container">
    <div class="footer__inner">
      <div class="footer__menu">

        <?php foreach($menus as $menu): ?>
          <div class="footer__col">
            <h5 class="footer__title">
              <?php echo $menu['title'] ?>
            </h5>
            <?php echo $menu['menu'] ?>
          </div>
        <?php endforeach; ?>

      </div>
    </div>
  </div>
</footer>

<div class="footer-bottom">
  <div class="container">
    <div class="footer-bottom__inner">
      <?php if($copyright): ?>
        <div class="footer-bottom__copyright">
          <p><?php echo $copyright ?></p>
        </div>
      <?php endif; ?>

      <?php get_template_part('template-parts/social-media-list') ?>
    </div>
  </div>
</div>

<?php the_field('footer_scripts', 'option') ?>
