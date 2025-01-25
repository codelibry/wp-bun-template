<?php
/*
 * Block: Contact Us
 */

$title = get_array_value($args, 'title', get_sub_field('contact-us__title'));

if(!$title) {
  return get_template_part('template-parts/error/invalid-block', '', [
    'title' => 'Title is required'
  ]);
}

?>

<section class="contact-us | section">
  <div class="container container--wide">
    <div class="row g-32">
      <div class="col-5 col-lg-8 col-sm-4">
        <div class="contact-us__content | flow">
          <?php echo $title ?>
        </div>
      </div>

      <div class="col-7 col-lg-8 col-sm-4">
        <form action="" class="display-flex column g-16">
          <div class="row">
            <div class="col-6 col-lg-4 col-sm-4 display-flex column g-16">
              <label class="text-field">
                <span class="text-field__label">First Name</span>
                <input class="text-field__input" type="text" autocomplete="given-name" name="first-name" placeholder="What is your first name?" />
              </label>

              <label class="text-field text-field">
                <span class="text-field__label">Last Name</span>
                <input class="text-field__input" type="text" autocomplete="family-name" name="last-name" placeholder="What is you last name?" />
              </label>

              <label class="text-field text-field">
                <span class="text-field__label">Email Address</span>
                <input class="text-field__input" type="email" autocomplete="email" name="email" placeholder="What is you email?" />
              </label>
            </div>

            <div class="col-6 col-lg-4 col-sm-4">
              <label class="text-field | height-full">
                <span class="text-field__label">Message</span>
                <textarea class="text-field__textarea | height-full" placeholder="Lorem ipsum dolor sit amet..."></textarea>
              </label>
            </div>

            <div class="mt-8 col-12 col-lg-8 col-sm-4 display-flex justify-content-end">
              <input type="submit" value="Submit" class="button button--accent | display-inline-block"></input>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
