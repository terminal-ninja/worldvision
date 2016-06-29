<section class="hero-slider">
  <main class="hero-carousel">
    <ul class="bxslider">
      <?php
        if( have_rows('custom_slider') ):
            while ( have_rows('custom_slider') ) : the_row(); ?>
              <li>
                <img src="<?php the_sub_field('image'); ?>">
                <div class="overlay">
                  <h2 class="hero-heading"><?php the_sub_field('headline'); ?></h2>
                  <!-- <div class="button">
                    <a href="<?php the_field('pagepost_link'); ?>" class="primary"><?php //the_sub_field('button'); ?></a>
                  </div> -->
                </div>
              </li>
          <?php endwhile;
        else :
        endif;
      ?>
    </ul>
  </main>
</section>