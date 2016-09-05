<?php /* Template Name: What We Believe Template */ get_header(); ?>

  <h2 class="heading"><?php the_title(); ?></h2>
    <section class="ourway black">
  <?php
    if( have_rows('item_ourway') ):
        while ( have_rows('item_ourway') ) : the_row(); ?>
          <article class="center">
            <figure class="icon-heading">
              <a href="<?php echo get_home_url(); ?>/how-we-work" ><img class="heading" src="<?php the_sub_field('icon'); ?>" alt=""></a>
            </figure>
            <a href="<?php echo get_home_url(); ?>/how-we-work" ><h2><?php the_sub_field('heading'); ?></h2></a>
            <div class="inner">   
            <?php the_sub_field('paragraph'); ?>         
              
            </div>
            <div class="button block">
              <a href="<?php echo get_home_url(); ?>/donate" class="secondary">DONATE</a>
            </div>
          </article>
          <?php
    endwhile;
    else :

    endif;

    ?>
  </section>

<?php get_footer(); ?>
