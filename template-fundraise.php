<?php /* Template Name: Fundraise Template */ get_header(); ?>

            

  <section class="">
  <?php
    if( have_rows('fundraise-item') ):
        while ( have_rows('fundraise-item') ) : the_row(); ?>
          <article class="col-2 half">
            <h2 class="heading prime-color1"><?php the_sub_field('heading'); ?></h2>
            <figure class="block">
              <img src="<?php the_sub_field('image'); ?>">
            </figure>
            <?php the_sub_field('paragraph'); ?>
          </article>
         <?php
            endwhile;
        else :
        endif;
      ?>
  </section>
 
  <section class="inspired">
    <div class="container">
      <article class="white four-fifths">
      <h2>Create your own cause</h2>
        <p>World Vision's Child Sponsorship programme changes the lives of thousands of children every year. Our vision of creating a better world for our children works on the simple yet powerful principle that the best way to change the life of a needy child is to change the world in which he/she lives!</p>
      </article>
      <div class="button one-fifth">
        <a href="<?php echo get_home_url(); ?>/donate" class="primary primary-inv lrg">DONATE</a>
      </div>
    </div>
  </section>

  <div class="center black">
    <h2 class="heading-grey">Join Existing Campaign</h2>
  </div>

  <section class="center black">
    <?php 
      $args = array( 'post_type' => 'fundraise-post', 'posts_per_page' => 4 );
      $loop = new WP_Query( $args );
      while ( $loop->have_posts() ) : $loop->the_post(); 
    ?>
    <article class="col-2 half">
      <h2 class="grey"><?php the_title(); ?></h2>
      <p><?php the_content(); ?></p>
    </article>
    <?php endwhile; ?>
  </section>

<?php get_footer(); ?>
