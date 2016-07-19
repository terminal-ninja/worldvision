<?php /* Template Name: Newsletters Template */ get_header(); ?>

  <h2 class="heading">Newsletters</h2>
  
  <section>
    <figure class="col-2">
      <img class="heading" src="<?php echo get_template_directory_uri(); ?>/img/work.jpg" alt="">
    </figure>
    <article class="col-2">
      <h2>World Vision South Africa</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo inventore dolorum earum atque id accusamus odit harum esse sit minus. Nisi magnam, aperiam sed quia quaerat molestiae expedita aliquid. Nihil.</p>
    
      <div class="byline">
        <address class="author">By <a rel="author" href="/author/john-doe">John Doe</a></address> 
        | <time pubdate datetime="2011-08-28" title="August 28th, 2011">8/28/11</time>
      </div>
      <div class="button">
        <a href="#" class="secondary">READ MORE</a>
      </div>
    </article>
  </section>
  <section>
    <div class="button full-btn">
      <a href="#" class="secondary">LOAD MORE</a>
    </div>
  </section>

<?php get_footer(); ?>
