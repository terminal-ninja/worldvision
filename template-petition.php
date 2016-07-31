<?php /* Template Name: Petition Template */ get_header(); ?>

  <h2 class="heading">Sign the Petition</h2>
  <?php 
    $args = array( 'post_type' => 'petition', 'posts_per_page' => -1 );
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post(); 
  ?>
  <section>
    <figure class="col-3 quarter">
      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
    </figure>
    <article class="col-3 half">
      <h3 class="prime-color1"><?php the_title(); ?></h3>
      <p class="black"><?php the_excerpt(); ?></p>
      <div class="button">
        <a href="<?php the_permalink(); ?>" class="secondary">READ MORE</a>
      </div>
    </article>
    <aside class="col-3 center quarter">
      <div class="inner">
        <h5 class="white">PETITION</h5>
        <p>SUPPORT THE CHILD HEALTH NOW CAMPAIGN</p>
        <div class="button full-btn">
          <a href="" class="secondary">SIGN NOW</a>
        </div>
        <div class="signatures">
          52 SIGNATURES
        </div>
      </div>
    </aside>
  </section>
  <?php endwhile; ?>

<?php get_footer(); ?>
