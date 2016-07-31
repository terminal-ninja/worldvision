<section class="hero-slider">
  <main class="hero-carousel">
    <ul class="bxslider">
      <?php
        if( have_rows('custom_slider') ):
            while ( have_rows('custom_slider') ) : the_row(); ?>
              <li>
                <img src="<?php the_sub_field('background'); ?>">
                <div class="overlay">
                  <div class="item">
                    <h1 class="hero-heading"><?php the_sub_field('tagline'); ?></h1>
                    <p><?php the_sub_field('paragraph'); ?></p>
                    <div class="button">
                      <a href="<?php the_sub_field('pagepost_link'); ?>" class="secondary"><?php the_sub_field('button'); ?></a>
                    </div>
                  </div>
                  <div class="item">
                    <figure>
                      <img src="<?php the_sub_field('image'); ?>">
                    </figure>
                    <h2><?php the_sub_field('heading'); ?></h2>
                    <p><?php the_sub_field('sub-heading'); ?></p>
                    <div class="button">
                      <a href="<?php the_sub_field('pagepost_link'); ?>" class="secondary"><?php the_sub_field('button'); ?>
                        
                      </a>
                    </div>
                  </div>
                  
                </div>
              </li>
          <?php endwhile;
        else :
        endif;
      ?>
    </ul>
  </main>
</section>