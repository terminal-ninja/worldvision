<?php /* Template Name: Newsletters Template */ get_header(); ?>

  <h2 class="heading">Newsletters</h2>

  <?php 
    $args = array( 'post_type' => 'news-post', 'posts_per_page' => -1 );
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post(); 
  ?>
    <section>
      <figure class="col-2 two-fifths">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
      </figure>
      <article class="col-2 three-fifths">
        <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
        <p><?php the_excerpt(); ?></p>
      
        <div class="byline">
          <?php 
          //$arg1 = array('Y-m-d');
          $date = get_the_date('d/m/y');  ?>

          <address class="author">By <a rel="author" href="<?php the_author_link(); ?> "><?php the_author(); ?></a></address> 
          | <time pubdate datetime="<?php echo $date;//the_date('Y-m-d'); ?>" title="<?php echo $date;//the_date('F jS, Y'); ?>"><?php echo $date;//the_date('d/m/y'); ?></time>
        </div>
        <div class="button">
          <a href="<?php the_permalink(); ?>" class="secondary">READ MORE</a>
        </div>
      </article>
    </section>
  <?php endwhile; ?>
  <section>
    <?php get_template_part('pagination'); ?>
    <!-- <div class="button full-btn">
      <a href="#" class="secondary">LOAD MORE</a>
    </div> -->
  </section>

<?php get_footer(); ?>
