<?php /* Template Name: Our Way Template */ get_header(); ?>
  
  <h2 class="heading">Our Way</h2>

  <section>
    <?php 
      $args = array( 'post_type' => 'our-way', 'posts_per_page' => -1 );
      $loop = new WP_Query( $args );
      while ( $loop->have_posts() ) : $loop->the_post(); 
    ?>
    <div class="item col-2 half">
      <figure>
        <?php the_field('video'); ?>
      </figure>
      <h3><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
      <?php the_content(); ?>
      <div class="button full-btn">
        <?php 
          $file = get_field('file');
          if( $file ): ?>
            <a class="secondary" href="<?php echo $file['url']; ?>"><?php echo 'CLICK HERE TO VIEW ' . $file['title']; ?></a>
        <?php endif; ?>
      </div>
    </div>
    <?php endwhile; ?>
  </section> 

<?php get_footer(); ?>


<!-- <?php
if( have_rows('repeater_field_name') ):
    while ( have_rows('repeater_field_name') ) : the_row();
        the_sub_field('sub_field_name');
    endwhile;
else :
endif;

?> -->