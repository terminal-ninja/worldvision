<?php /* Template Name: Petition Template */ get_header(); ?>

  <h2 class="heading">Sign the Petition</h2>
  <?php 
    $args = array( 'post_type' => 'petition-post', 'posts_per_page' => -1, 'order' => 'ASC' );
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post(); 
  ?>
  <section>
    <figure class="col-3 quarter">
      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
    </figure>
    <article class="col-3 half">
      <h3 class="prime-color1"><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h3>
      <p class="black"><?php the_excerpt(); ?></p>
      <div class="button">
        <a href="<?php the_permalink(); ?>" class="secondary">READ MORE</a>
      </div>
    </article>
    <aside class="col-3 center quarter">
    <?php echo do_shortcode( get_sub_field( 'email_petition' ) ); ?>
    
    <?php  
       //the_field('email_petition');
    ?>
      <?php get_sidebar(); 
      echo //do_shortcode( get_field( 'email_petition' ) );
?>
      <?php //echo do_shortcode( '[acf field="email_petition"]' ); ?>
      <?php //echo do_shortcode('[emailpetition id="1"]'); ?>
      <?php //echo do_shortcode('[signaturelist id="1"]'); ?>
      <!-- <div class="inner">
        <h5 class="white">PETITION</h5>
        <p>SUPPORT THE CHILD HEALTH NOW CAMPAIGN</p>
        <div class="button full-btn">
          <a href="" class="secondary">SIGN NOW</a>
        </div>
        <div class="signatures">
          52 SIGNATURES
        </div>
      </div> -->
    </aside>
  </section>
  <?php endwhile; ?>
<?php get_footer(); ?>
