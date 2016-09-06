<?php /* Template Name: What We Believe Template */ get_header(); ?>

  <h2 class="heading"><?php the_title(); ?></h2>
    <section class="ourway black">
  <?php
    if( have_rows('item_believe') ):
        while ( have_rows('item_believe') ) : the_row(); ?>
          <article class="center">
            <h2><?php the_sub_field('heading'); ?></h2>
            <div class="inner">   
            <?php the_sub_field('paragraph'); ?>         
              
            </div>
          </article>
          <?php
    endwhile;
    else :

    endif;

    ?>
  </section>

<?php get_footer(); ?>
