jQuery(document).ready(function(){
  function svgasimg() {
    return document.implementation.hasFeature(
      "http://www.w3.org/TR/SVG11/feature#Image", "1.1");
  }

  if (!svgasimg()){
    var e = document.getElementsByTagName("img");
    if (!e.length){
      e = document.getElementsByTagName("IMG");
    }
    for (var i=0, n=e.length; i<n; i++){
      var img = e[i],
          src = img.getAttribute("src");
      if (src.match(/svgz?$/)) {
        /* URL ends in svg or svgz */
        img.setAttribute("src",
               img.getAttribute("data-fallback"));
      }
    }
  }

  jQuery( "#partnerTabs" ).tabs();
  jQuery( "#tabs" ).tabs();

  jQuery('.bxslider').bxSlider({
    pager: false, 
    adaptiveHeight: true,
    responsive: true,
    pause: 5000,
    auto: true,
    onSliderLoad: function(){
      jQuery('.bxslider').css('visibility', 'visible');
    }
  });

 

  jQuery('.slimmenu').slimmenu(
  {
      resizeWidth: '1024',
      collapserTitle: '',
      animSpeed:'medium',
      indentChildren: true,
      childrenIndenter: '&raquo;',
      expandIcon: '<i class="fa fa-angle-down"></i>',
      collapseIcon: '<i class="fa fa-angle-up"></i>'
  });


  jQuery("#btnOrganization").click(function(){
        jQuery(".Organization").show();
        jQuery(".Individual").hide();
        jQuery(this).addClass("prime-color1-bak");
        jQuery("#btnIndividual").removeClass("prime-color1-bak");
    });
  jQuery("#btnIndividual").click(function(){
      jQuery(".Organization").hide();
      jQuery(".Individual").show();
      jQuery(this).addClass("prime-color1-bak");
      jQuery("#btnOrganization").removeClass("prime-color1-bak");      
    });


  jQuery("#btnFormBack").click(function(){
      jQuery("#AddDet").hide();
      jQuery("#DonInfo").show();
      jQuery(this).hide();
      jQuery("#btnFormNext").show();
      jQuery('#step2').removeClass("fa-circle")
      jQuery('#step2').addClass("fa-circle-thin")
      jQuery('#step1').removeClass("fa-circle-thin")
      jQuery('#step1').addClass("fa-circle")
    });
  jQuery("#btnFormNext").click(function(){
      jQuery("#DonInfo").hide();
      jQuery("#AddDet").show();
      jQuery(this).hide();
      jQuery("#btnFormBack").show();
      jQuery('#step1').removeClass("fa-circle")
      jQuery('#step1').addClass("fa-circle-thin")
      jQuery('#step2').removeClass("fa-circle-thin")
      jQuery('#step2').addClass("fa-circle")
    });

  
});



