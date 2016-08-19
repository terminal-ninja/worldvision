<?php /* Template Name: Home Page Template */ get_header(); ?>

  <section class="work">
    <article class="two-thirds">

      <h2 class="heading">Where we work</h2>
      <!-- <div id="map"></div>
 --><iframe src="https://www.google.com/maps/d/u/2/embed?mid=1p7gn48AbZv0yOAGmTKrG9iokOJQ" width="640" height="480"></iframe>
    </article>
    <article class="one-third">
      <h2 class="heading">How we work</h2>
      <main class="hero-carousel">
        <ul class="bxslider">
          <?php 
            $date = get_the_date('d M Y');
            $args = array( 'category_name' => 'how-we-work', 'posts_per_page' => -1, 'order' => 'ASC');
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); 
          ?>
            <li>
              <div class="item">
                <figure>
                  <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
                </figure>
                <h3><a class="white" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
              </div>
              <div class="item">
                <p class="black"><?php the_excerpt(); ?></p>
              </div>
              <div class="item">
                <time class="left"><?php echo $date; ?></time>
                <div class="button">
                  <a href="<?php the_permalink(); ?>" class="primary primary-inv sml border">Read More</a>
                </div>
              </div>
            </li>
          <?php endwhile; 
          wp_reset_query(); ?>
        </ul>
      </main>
    </article>
  </section>

  <section class="inspired">
    <div class="container">
      <article class="white four-fifths">
      <h2>Inspired To See No Child Without</h2>
        <p>World Vision's Child Sponsorship programme changes the lives of thousands of children every year. Our vision of creating a better world for our children works on the simple yet powerful principle that the best way to change the life of a needy child is to change the world in which he/she lives!</p>
      </article>
      <div class="button one-fifth">
        <a href="<?php echo get_home_url(); ?>/sponsor-a-child" class="primary primary-inv lrg">SPONSOR</a>
      </div>
    </div>
  </section>

  <h2 class="heading">Our Way</h2>        

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

  <section class="about">
    <div class="container">
      <article>
        <h2 class="white">About World Vision</h2>
        <p class="white">World Vision is a Christian humanitarian organization dedicated to working with children, families, and their communities worldwide to reach their full potential by tackling the root causes of poverty and injustice. Working in nearly 100 countries around the world, we serve all people, regardless of religion, race, ethnicity, or gender.
        </p>
        <div class="item">
          <div class="button">
            <a href="<?php echo get_home_url(); ?>/who-we-are" class="primary primary-inv">LEARN</a>
          </div>
          <div class="button">
            <a href="<?php echo get_home_url(); ?>/donate" class="primary primary-inv">DONATE</a>
          </div>
          <div class="button">
            <a href="<?php echo get_home_url(); ?>/sponsor-a-child" class="primary primary-inv">SPONSOR</a>
          </div>
        </div>
      </article>
    </div>
  </section>

<?php get_footer(); ?>
