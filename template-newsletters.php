<?php /* Template Name: Newsletters Template */ get_header(); ?>

  <h2 class="heading">News</h2>

  <section class="ourway black">
    <article class="center">
      <h2 class="heading prime-color1">News</h2>
      <div class="inner">
        <ul class="tick"> 
          <?php 
            $args = array( 'post_type' => 'news-post', 'posts_per_page' => 5, 'category_name' => 'latest-news' );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); 
          ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
          <?php endwhile; ?>
        </ul>  
      </div>
    </article>
    <article class="center">
      <h2 class="heading prime-color1">Newsletters</h2>
      <div class="inner">
        <ul class="tick"> 
          <?php 
            $args = array( 'post_type' => 'news-post', 'posts_per_page' => 5, 'category_name' => 'newsletters' );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); 
          ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
          <?php endwhile; ?>
        </ul>  
      </div>
    </article>
    <article class="center">
      <h2 class="heading prime-color1">Media Pack</h2>
      <div class="inner">
        <ul class="tick"> 
          <?php 
            $args = array( 'post_type' => 'news-post', 'posts_per_page' => 5, 'category_name' => 'media-pack' );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); 
          ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
          <?php endwhile; ?>
        </ul>  
      </div>
    </article>
  </section>

<?php get_footer(); ?>
