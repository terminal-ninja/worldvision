<section class="hero-slider">
  <main class="hero-carousel">
    <ul class="bxslider">
      <?php
        if( have_rows('custom_slider') ):
            while ( have_rows('custom_slider') ) : the_row(); ?>
              <li>
                <img src="<?php the_sub_field('image'); ?>">
                <div class="overlay">
                  <div class="item">
                    <h1 class="hero-heading"><?php the_sub_field('headline'); ?>I Love School</h1>
                    <p>Every child needs to be educated for life… <br>
                      You can help us to help them!</p>
                    <div class="button">
                      <a href="<?php the_field('pagepost_link'); ?>" class="secondary"><?php the_sub_field('button'); ?>EDUCATE THEM</a>
                    </div>
                  </div>
                  <div class="item">
                    <figure>
                      <img src="<?php echo get_template_directory_uri(); ?>/img/kid.jpg" alt="">
                    </figure>
                    <h2>Education Funding</h2>
                    <p>Every child needs to be educated for life… </p>
                    <div class="button">
                      <a href="<?php the_field('pagepost_link'); ?>" class="secondary"><?php the_sub_field('button'); ?>LEARN MORE</a>
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
