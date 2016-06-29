<?php /* Template Name: Home Page Template */ get_header(); ?>

  <section class="content services">
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
  </section>
<?php get_footer(); ?>
