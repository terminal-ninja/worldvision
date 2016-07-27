<?php /* Template Name: Gift Template */ get_header(); ?>

  <h2 class="heading">Buy a Gift</h2>
  
  <section>
    <div class="wrapper wrapper-content animated fadeInRight">
      <div class="row">
        <div class="col-lg-12">
          <div class="">
            <div class="ibox-content" style="border:none">
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Gift Category</label> <select class="chosen-select form-control form-control-name" id="gift_category" name="gift_category">
                      <option value="">
                        All
                      </option>
                      <option value="15">
                        Toys
                      </option>
                      <option value="17">
                        Clothes
                      </option>
                      <option value="18">
                        Books
                      </option>
                      <option value="20">
                        Sports And Games
                      </option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Price Range</label> <select class="chosen-select form-control form-control-name" id="price_Range" name="price_Range">
                      <option value="">
                        All
                      </option>
                      <option value="1 - 99">
                        UNDER ZAR 100
                      </option>
                      <option value="100 - 200">
                        ZAR 100 - ZAR 200
                      </option>
                      <option value="200 - 300">
                        ZAR 200 - ZAR 300
                      </option>
                      <option value="300 - 9999999999999999.99">
                        ZAR 300 AND ABOVE
                      </option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <!-- <script>
 jQuery.noConflict(); // Reverts '$' variable back to other JS libraries
jQuery(document).ready( function(){ 
        var $iFrameContents = $('iframe').contents(),
    $entryContent   = $iFrameContents.find('div.ChooseGift');
         
    $iFrameContents.find('html').replaceWith($entryContent);
   });  

    
  
  </script> -->
  <!-- <iframe src="http://154.0.174.147:8088/wvusertest/Gift/ChooseGift" width="100%" height="980" frameborder="0" seamless="seamless"> </iframe> -->
<!--     <select name="" id=""></select>
    <select name="" id=""></select>
    <div class="button">
      <a href="" class="secondary">ALL ITEMS</a>
    </div>
  </section>
  <section class="ourway black">
    <div class="item">
      <figure>
        <img src="<?php echo get_template_directory_uri(); ?>/img/work.jpg" alt="">
      </figure>
      <div class="product"></div>
      <div class="price"></div>
      <div class="sub-item">
        <div class="button">
          <a href="" class="secondary">Give Now</a>
        </div>
        <div class="button">
          <a href="" class="secondary">View</a>
        </div>
      </div>
    </div>
    <div class="item">
      <figure>
        <img src="<?php echo get_template_directory_uri(); ?>/img/work.jpg" alt="">
      </figure>
      <div class="product"></div>
      <div class="price"></div>
      <div class="sub-item">
        <div class="button">
          <a href="" class="secondary">Give Now</a>
        </div>
        <div class="button">
          <a href="" class="secondary">View</a>
        </div>
      </div>
    </div>
    <div class="item">
      <figure>
        <img src="<?php echo get_template_directory_uri(); ?>/img/work.jpg" alt="">
      </figure>
      <div class="product"></div>
      <div class="price"></div>
      <div class="sub-item">
        <div class="button">
          <a href="" class="secondary">Give Now</a>
        </div>
        <div class="button">
          <a href="" class="secondary">View</a>
        </div>
      </div>
    </div> -->
  </section>

<?php get_footer(); ?>
