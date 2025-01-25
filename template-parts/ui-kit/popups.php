<section class="ui-kit-popups | section">
  <h1 class="heading-1">
    Popups <a href="https://blog.webdevsimplified.com/2023-04/html-dialog/">Reference</a>
  </h1>

  <div class="flex-group | mt-16">
    <button class="button button--primary" href="#popup-1">
      Popup #1
    </button>
    <button class="button button--primary" href="#popup-2">
      Popup #2
    </button>
  </div>


  <dialog class="popup | js-popup" id="popup-1" data-lenis-prevent>
    <button type="button" class="popup__close | js-popup-close">
      <?php echo get_inline_svg('close-icon.svg') ?>
    </button>

    <div class="popup__inner">
      <h2 class="heading-2">
        Popup #1
      </h2>

      <div class="mt-32">
        <p>
          Maria Theresia Ahlefeldt (16 January 1755 – 20 December 1810) was a Danish, (originally German), composer. She is known as the first female composer in Denmark. Maria Theresia composed music for several ballets, operas, and plays of the royal theatre. She was given good critic as a composer and described as a “virkelig Tonekunstnerinde” ('a True Artist of Music').
        </p>
      </div>
    </div>
  </dialog>

  <dialog class="popup | js-popup" id="popup-2" data-lenis-prevent>
    <button type="button" class="popup__close | js-popup-close">
      <?php echo get_inline_svg('close-icon.svg') ?>
    </button>

    <div class="popup__inner">
      <h2 class="heading-2">
        Popup #2
      </h2>

      <div class="mt-32">
        <p>
          Maria Theresia Ahlefeldt (16 January 1755 – 20 December 1810) was a Danish, (originally German), composer. She is known as the first female composer in Denmark. Maria Theresia composed music for several ballets, operas, and plays of the royal theatre. She was given good critic as a composer and described as a “virkelig Tonekunstnerinde” ('a True Artist of Music').
        </p>
      </div>
    </div>
  </dialog>


</section>
