<?php /* Template Name: Our Way Template */ get_header(); ?>
  
  <h2 class="heading">Our Way</h2>

  <section>
    <?php 
      $args = array( 'post_type' => 'our-way', 'posts_per_page' => -1 );
      $loop = new WP_Query( $args );
      while ( $loop->have_posts() ) : $loop->the_post(); 
    ?>
    <div class="item col-2">
      <figure>
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
      </figure>
      <h3><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
      <p><?php the_excerpt(); ?></p>
      <div class="button full-btn">
        <a href="<?php the_permalink(); ?>" class="secondary">CLICK HERE TO VIEW HEALTH REPORT</a>
      </div>
    </div>
    <?php endwhile; ?>
  </section> 

<?php get_footer(); ?>
