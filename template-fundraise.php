<?php /* Template Name: Fundraise Template */ get_header(); ?>

  <h2 class="heading">Fundraise</h2>
  
  <section class="center black">
    <article class="col-2 half">
      <h2 class="heading-grey">Dedicate a Special Event</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente excepturi recusandae laborum quos ea vitae perferendis dolores molestiae neque, nesciunt eum delectus illo quo pariatur animi, nostrum iste nemo et.</p>
    </article>
    <article class="col-2 half">
      <h2 class="heading-grey">Dedicate a Special Event</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente excepturi recusandae laborum quos ea vitae perferendis dolores molestiae neque, nesciunt eum delectus illo quo pariatur animi, nostrum iste nemo et.</p>
    </article>
  </section>
 
  <section class="inspired">
    <div class="container">
      <article class="white four-fifths">
      <h2>Create your own course</h2>
        <p>World Vision's Child Sponsorship programme changes the lives of thousands of children every year. Our vision of creating a better world for our children works on the simple yet powerful principle that the best way to change the life of a needy child is to change the world in which he/she lives!</p>
      </article>
      <div class="button one-fifth">
        <a href="#" class="primary primary-inv lrg">DONATE</a>
      </div>
    </div>
  </section>

  <div class="center black">
    <h2 class="heading-grey">Join Existing Campaign</h2>
  </div>

  <section class="center black">
    <?php 
      $args = array( 'post_type' => 'fundraise-post', 'posts_per_page' => -1 );
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
