<?php /* Template Name: Leadership Template */ get_header(); ?>

  <h2 class="heading">Our Leadership</h2>

  <section class="center no-margin">
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <p class="black"><?php the_content(); ?></p>

  <?php endwhile; ?>

  <?php endif ?>
  </section>
  <div class="container center">
    <h2 class="heading-grey">Executive Team</h2>
  </div>
  
  <section class="executives no-margin">
    <?php 
      $args = array( 'post_type' => 'leadership', 'category_name' => 'executive-team', 'posts_per_page' => -1, 'order' => 'DESC', 'orderby' => 'modified' );
      $loop = new WP_Query( $args );
      while ( $loop->have_posts() ) : $loop->the_post(); 
    ?>
    <div class="item one-third">
      <figure>
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
      </figure>
      <div class="inner">
        <h4><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
        <h6><?php the_field('title'); ?></h6>
      </div>
      <div class="button full-btn">
        <a href="<?php the_permalink(); ?>" class="secondary">View</a>
      </div>
    </div>
    <?php endwhile; ?>
  </section>
  <section class="container center">
    <h2 class="heading-grey">Our Board</h2>
  </section>
  <section class="board">
    <?php 
      $args = array( 'post_type' => 'leadership', 'category_name' => 'our-board', 'posts_per_page' => -1, 'order' => 'ASC', 'orderby' => 'modified' );
      $loop = new WP_Query( $args );
      while ( $loop->have_posts() ) : $loop->the_post(); 
    ?>
    <div class="item quarter">
      <figure>
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
      </figure>
      <div class="inner">
        <h4><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
        <h6><?php the_field('title'); ?></h6>
      </div>
      <div class="button full-btn">
        <a href="<?php the_permalink(); ?>" class="secondary">View</a>
      </div>
    </div>
    <?php endwhile; ?>
  </section>
  

<?php get_footer(); ?>
