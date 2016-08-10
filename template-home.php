<?php /* Template Name: Home Page Template */ get_header(); ?>


<!-- <style>
  html, body {
  height: 100%;
  margin: 0;
  padding: 0;
  }
#map {
  width: 100%;
  height: 400px;
  }
</style> -->




        

  <section class="work">
    <article class="two-thirds">

      <h2 class="heading">Where we work</h2>
      <!-- <div id="map"></div>
 --><iframe src="https://www.google.com/maps/d/embed?mid=1p7gn48AbZv0yOAGmTKrG9iokOJQ" width="640" height="480"></iframe>
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
              <?php endwhile; ?>
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
    <article class="center half">
      <figure class="icon-heading">
        <img class="heading" src="<?php echo get_template_directory_uri(); ?>/img/icons/heart.png" alt="">
      </figure>
      <h2>Health</h2>
      <p>Improving the health of women and the children by focusing on seven important health elements for mothers and 11 important health elements for children, thus contributing to the reduction of under-five and maternal mortality.</p>
      <ul class="tick">
        <li>For the Mother.</li>
        <li>For the Child.</li>
      </ul>
      <div class="button block">
        <a href="<?php echo get_home_url(); ?>/donate" class="secondary">DONATE</a>
      </div>
    </article>
    <article class="center half">
      <figure class="icon-heading">
        <img class="heading" src="<?php echo get_template_directory_uri(); ?>/img/icons/book.png" alt="">
      </figure>
      <h2>Education</h2>
      <ul class="tick">
        <li>Working with school governing bodies to increase capacity</li>
        <li>Advocating for quality education and bringing ‘drop-outs’ back to school</li>
        <li>Developing life skills among children</li>
        <li>A special focus on Early Childhood Development (ECD) in partnership with the department of Education</li>
      </ul>
      <div class="button block">
        <a href="<?php echo get_home_url(); ?>/donate" class="secondary">DONATE</a>
      </div>
    </article>
    <article class="center">
      <figure class="icon-heading">
        <img class="heading" src="<?php echo get_template_directory_uri(); ?>/img/icons/paper.png" alt="">
      </figure>
      <h2>Economic Development</h2>
      <p>Building capacities of disadvantaged communities and providing initial resource for them to start small businesses like:</p>
      <div class="button block">
        <a href="<?php echo get_home_url(); ?>/donate" class="secondary">DONATE</a>
      </div>
    </article>
    <article class="center half">
      <figure class="icon-heading">
        <img class="heading" src="<?php echo get_template_directory_uri(); ?>/img/icons/child.png" alt="">
      </figure>
      <h2>Child Protection</h2>
      <ul class="tick">
        <li>Building community awareness and conscientisation</li>
        <li>Establishing and strengthening reporting and referral mechanisms</li>
        <li>Providing quality support to vulnerable families</li>
        <li>Building life skills and resilience to protect children (with a specific focus on the spiritual nurture and active participation of the children themselves as agents of change)</li>
      </ul>
      <div class="button block">
        <a href="<?php echo get_home_url(); ?>/donate" class="secondary">DONATE</a>
      </div>
    </article>
    <article class="center half">
      <figure class="icon-heading">
        <img  src="<?php echo get_template_directory_uri(); ?>/img/icons/tap.png" alt="">
      </figure>
      <h2>Wash</h2>
      <ul class="tick">
        <li>Drilling boreholes</li>
        <li>Education on health sanitation</li>
        <li>Water Tanks</li>
        <li>Flow Campaign – Drought</li>
        <li>Global 6k Walk/Run for Water</li>
      </ul>
      <div class="button block">
        <a href="<?php echo get_home_url(); ?>/donate" class="secondary">DONATE</a>
      </div>
    </article>
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
