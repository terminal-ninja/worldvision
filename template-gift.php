<?php /* Template Name: Gift Template */ get_header(); ?>

  <h2 class="heading">Buy a Gift</h2>
  
<style>
    .page-heading {
        border-top: 0;
        padding: 0px 0px 0px 0px;
    }

    /*.gallaryImage {
        min-width: 200px;
        min-height: 200px;
        overflow: auto;
    }*/
    /*img {
    min-width: 200px;
    min-height: 200px;
}*/
    /*.post-image {
            border-color: #F26522 !important;
    }
       .post-meta {
            border-color: #F26522 !important;
    }*/
    /*.post-option {
            background-color: #F26522 !important;
    }
    .post-container {
    border-radius: 50px;
     border:1px solid  #F26522;
   }
     .gallaryImage {
    border-radius: 50px;
     
   }
    .post-meta {
        text-align:center;
    }
     .post-option .list-options > li > a {
                display: block;
                text-align: center;
                
                line-height: 26px;
                color: #fff !important;
            }
      .post-option .list-options > li > a:hover {
                display: block;
                text-align: center;
                
                line-height: 26px;
                color: black !important;
            }*/
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!--  <div class="row ">
    <nav class="navbar padding navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
       
            <div class="navbar-header pull-left"><a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i></a></div>
       
        <div class="col-lg-7 pull-left pro-head ">
            <h2>Choose Gift </h2>
              <ol class="breadcrumb">

                <li>
                    <a href="@Url.Action("UserList", "User")">Setup User Profiles </a>

                </li>

                <li class="active">
                    <strong>Create User Profile</strong>
                </li>

            </ol>
        </div>
    </nav>
</div> -->
<section>
<div class="wrapper wrapper-content animated fadeInRight">
       <div class="row">
        <div class="col-lg-12">
            <div class="">

                <div class="ibox-content" style="border:none">


                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Gift Category</label>
                                <select class="chosen-select form-control  form-control-name" id="gift_category" name="gift_category" >
                                  <option value="">All</option>
                                  <option value="15">Toys</option>
                                  <option value="17">Clothes</option>
                                  <option value="18">Books</option>
                                  <option value="20">Sports And Games</option>
                                </select>
                            </div>

                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Price Range</label>
                                <select class="chosen-select form-control  form-control-name" id="price_Range" name="price_Range" ><option value="">All</option>
                                  <option value="1 - 99">UNDER ZAR 100</option>
                                  <option value="100 - 200">ZAR 100 - ZAR 200</option>
                                  <option value="200 - 300">ZAR 200 - ZAR 300</option>
                                  <option value="300 -  9999999999999999.99">ZAR 300 AND ABOVE</option>
                                </select>




                            </div>

                        </div>
                       

                    </div>
                </div>




            </div>
        </div>
    </div>
    <div class="row" id="giftContainer">



      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="post-container">
            <div class="post-option">
                <ul class="list-options">
                    <li><a href="" ><span>Gift Now</span></a></li>                        
                    <li><a href=""><span>View</span></a></li>
                </ul>
            </div>
            <div class="post-image">
                <a href="" class="img-group-gallery cboxElement" title="Gift Image">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/racket.jpg" class="img-responsive gallaryImage" alt="Gift Image" />
                </a>
            </div>
             <div class="post-meta">
                <ul class="list-meta list-inline">
                  <li><b><a  href="">Tennis Racket</a></b>,<b class="orange">R50</b></li>
                </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>

<script>
    function FilterGift() {

        var gift_category_ = $("#gift_category").val()
        var price_Range_ = $("#price_Range").val()

        

        $.ajax({
            type: "GET",
            data: { gift_category: gift_category_, price_Range: price_Range_ },
            url: '@Url.Action("filterGift")',
            contentType: "application/json; charset=utf-8",
            dataType: "Json",
            success: function (data) {
                $("#giftContainer").show()
                $("#giftContainer").empty()


                // alert(data[0]); // this is Json data object
                var resultSet = data;
                var html = "";
                $.each(resultSet, function (key, obj) {




                    $("#giftContainer").append('<div class="col-md-3 col-sm-6 col-xs-12">'+
            '<div class="post-container">'+
                '<div class="post-option">'+
                    '<ul class="list-options">'+
                        '<li><a href="@Url.Action("GiftDetails", "Gift")/' + obj.item_id + '" ><i class="fa fa-cart-plus"></i><span>Gift Now</span></a></li>' +
                        '<li><a href="@Url.Action("GiftDetails", "Gift")/' + obj.item_id + '"><i class="fa fa-eye"></i><span>View</span></a></li>' +

                    '</ul>'+
                '</div>'+
                '<div class="post-image">'+
                    '<a href="@Url.Action("GiftDetails", "Gift")/' + obj.item_id + '" class="img-group-gallery cboxElement" title="Gift Image">' +

                        '<img src="' + obj.srcPath + '" class="img-responsive gallaryImage" alt="Gift Image" />' +

                    '</a>'+
                '</div>'+
                 '<div class="post-meta">'+
                    '<ul class="list-meta list-inline">'+
                        '<li><b><a  href="@Url.Action("GiftDetails", "Gift")/' + obj.item_id + '">' + obj.item_name + '</a></b>,<b class="orange">R ' + obj.item_Price + ' </b></li>' +

                    '</ul>'+
                '</div>'+

            '</div>'+
        '</div>')




                });

            },
            error: function () {
                alert('No Data');
            }
        });


    }
  $(document).ready(function () {

        var config = {
            '.chosen-select': {},
            '.chosen-select-deselect': { allow_single_deselect: true },
            '.chosen-select-no-single': { disable_search_threshold: 10 },
            '.chosen-select-no-results': { no_results_text: 'Oops, nothing found!' },
            '.chosen-select-width': { width: "95%" }
        }
        for (var selector in config) {
            $(selector).chosen(config[selector]);
        }


        FilterGift();

        $("#gift_category").change(function () {
            FilterGift();
        })
        $("#price_Range").change(function () {
            FilterGift();
        })


    })
</script>
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

<?php get_footer(); ?>
