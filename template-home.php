<?php /* Template Name: Home Page Template */ get_header(); ?>
  
  <section>
    <article>
      <h2 class="heading">Where we work</h2>
      <div class="item">
        
      </div>
      <div class="item">
        
      </div>
    </article>
    <article>
      <h2 class="heading">How we work</h2>
      <main class="hero-carousel">
        <ul class="bxslider">
          <?php
            if( have_rows('custom_slider') ):
                while ( have_rows('custom_slider') ) : the_row(); ?>
                  <li>
                    <img src="<?php the_sub_field('image'); ?>">
                    <div class="overlay">
                      <div class="item">
                        <h1 class="hero-heading"><?php the_sub_field('headline'); ?>I Love School</h1>
                        <p>Every child needs to be educated for life… <br>
                          You can help us to help them!</p>
                        <div class="button">
                          <a href="<?php the_field('pagepost_link'); ?>" class="secondary"><?php the_sub_field('button'); ?>EDUCATE THEM</a>
                        </div>
                      </div>
                      <div class="item">
                        <figure>
                          <img src="<?php echo get_template_directory_uri(); ?>/img/kid.jpg" alt="">
                        </figure>
                        <h2>Education Funding</h2>
                        <p>Every child needs to be educated for life… </p>
                        <div class="button">
                          <a href="<?php the_field('pagepost_link'); ?>" class="secondary"><?php the_sub_field('button'); ?>LEARN MORE</a>
                        </div>
                      </div>
                    </div>
                  </li>
              <?php endwhile;
            else :
            endif;
          ?>
        </ul>
      </main>
    </article>
  </section>
  <section>
    <div class="container">
      <article>
      <h2 class="heading">Inspired To See No Child Without</h2>
        <p>World Vision's Child Sponsorship programme changes the lives of thousands of children every year. Our vision of creating a better world for our children works on the simple yet powerful principle that the best way to change the life of a needy child is to change the world in which he/she lives!</p>
      </article>
      <div class="button">
        <a href="#" class="primary">SPONSOR</a>
      </div>
    </div>
  </section>

  <h2 class="heading">Our Way</h2>

  <section>
    <article>
      <img src="<?php echo get_template_directory_uri(); ?>/img/" alt="">
      <h2>Health</h2>
      <p>Improving the health of women and the children by focusing on seven important health elements for mothers and 11 important health elements for children, thus contributing to the reduction of under-five and maternal mortality.</p>
    </article>
    <article>
      <img src="<?php echo get_template_directory_uri(); ?>/img/" alt="">
      <h2>Health</h2>
      <p>Improving the health of women and the children by focusing on seven important health elements for mothers and 11 important health elements for children, thus contributing to the reduction of under-five and maternal mortality.</p>
    </article>
    <article>
      <img src="<?php echo get_template_directory_uri(); ?>/img/" alt="">
      <h2>Health</h2>
      <p>Improving the health of women and the children by focusing on seven important health elements for mothers and 11 important health elements for children, thus contributing to the reduction of under-five and maternal mortality.</p>
    </article>
    <article>
      <img src="<?php echo get_template_directory_uri(); ?>/img/" alt="">
      <h2>Health</h2>
      <p>Improving the health of women and the children by focusing on seven important health elements for mothers and 11 important health elements for children, thus contributing to the reduction of under-five and maternal mortality.</p>
    </article>
    <article>
      <img src="<?php echo get_template_directory_uri(); ?>/img/" alt="">
      <h2>Health</h2>
      <p>Improving the health of women and the children by focusing on seven important health elements for mothers and 11 important health elements for children, thus contributing to the reduction of under-five and maternal mortality.</p>
    </article>
  </section>
  <section>
    <article>
      <h2>About World Vision</h2>
      <p>World Vision is a Christian humanitarian organization dedicated to working with children, families, and their communities worldwide to reach their full potential by tackling the root causes of poverty and injustice. Working in nearly 100 countries around the world, we serve all people, regardless of religion, race, ethnicity, or gender.
      </p>
      <div class="item">
        <div class="button">
          <a href="#" class="primary">LEARN</a>
        </div>
        <div class="button">
          <a href="#" class="primary">DONATE</a>
        </div>
        <div class="button">
          <a href="#" class="primary">SPONSOR</a>
        </div>
      </div>
    </article>
  </section>

  <!-- <section class="content services">
    <article>
      <figure>
        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/services-icon.png" alt="">
        <h2 class="text">services</h2>
      </figure>
      <p>Assist our clients with a Dynamic Product offering, tailored to their specfic needs</p>
      <div class="button">
        <a href="#" class="primary">READ MORE</a>
      </div>
    </article>
    <article>
      <figure>
        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/benefits-icon.png" alt="">
        <h2 class="text">benefits</h2>
      </figure>
      <p>We have an extensive network of contracted hospitals and other providers throughout Sub-Saharan Africa</p>
      <div class="button">
        <a href="#" class="primary">READ MORE</a>
      </div>
    </article>
    <article>
      <figure>
        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/specialists-icon.png" alt="">
        <h2 class="text">specialists</h2>
      </figure>
      <p>24 hour access to  wide range of medical specialists can consult at any time of the day</p>
      <div class="button">
        <a href="#" class="primary">READ MORE</a>
      </div>
    </article>
  </section>

  <section class="content news">
    <article>
      <h2>latest news</h2>
      <div class="item">
        <figure>
          <img src="<?php echo get_template_directory_uri(); ?>/img/news/news1.jpg" alt="">
        </figure>
        <h2>Heading 1</h2>
        <p>Assist our cliebts with a Dynamic Product offering, tailored to their specfic needs</p>
        <div class="button">
          <a href="#" class="primary">READ MORE</a>
        </div>
      </div>
    </article>
     <article>
      <div class="item">
        <figure>
          <img src="<?php echo get_template_directory_uri(); ?>/img/news/news2.jpg" alt="">
        </figure>
        <h2>Heading 1</h2>
        <p>Assist our cliebts with a Dynamic Product offering, tailored to their specfic needs</p>
        <div class="button">
          <a href="#" class="primary">READ MORE</a>
        </div>
      </div>
    </article>
    <article>
      <h2>areas of operation</h2>
      <figure>
        <img src="<?php echo get_template_directory_uri(); ?>/img/areas-operation.png" alt="">
      </figure>
    </article>
  </section> -->
<?php get_footer(); ?>
