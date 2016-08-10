$(document).ready(function(){
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

  $( "#partnerTabs" ).tabs();

  $('.bxslider').bxSlider({
    pager: false, 
    adaptiveHeight: true,
    responsive: true,
    pause: 5000,
    auto: true,
    onSliderLoad: function(){
      $('.bxslider').css('visibility', 'visible');
    }
  });

 

  $('.slimmenu').slimmenu(
  {
      resizeWidth: '1024',
      collapserTitle: '',
      animSpeed:'medium',
      indentChildren: true,
      childrenIndenter: '&raquo;',
      expandIcon: '<i class="fa fa-angle-down"></i>',
      collapseIcon: '<i class="fa fa-angle-up"></i>'
  });


  $("#btnOrganization").click(function(){
        $(".Organization").show();
        $(".Individual").hide();
        $(this).addClass("prime-color1-bak");
        $("#btnIndividual").removeClass("prime-color1-bak");
    });
  $("#btnIndividual").click(function(){
      $(".Organization").hide();
      $(".Individual").show();
      $(this).addClass("prime-color1-bak");
      $("#btnOrganization").removeClass("prime-color1-bak");      
    });


  $("#btnFormBack").click(function(){
      $("#AddDet").hide();
      $("#DonInfo").show();
      $(this).hide();
      $("#btnFormNext").show();
      $('#step2').removeClass("fa-circle")
      $('#step2').addClass("fa-circle-thin")
      $('#step1').removeClass("fa-circle-thin")
      $('#step1').addClass("fa-circle")
    });
  $("#btnFormNext").click(function(){
      $("#DonInfo").hide();
      $("#AddDet").show();
      $(this).hide();
      $("#btnFormBack").show();
      $('#step1').removeClass("fa-circle")
      $('#step1').addClass("fa-circle-thin")
      $('#step2').removeClass("fa-circle-thin")
      $('#step2').addClass("fa-circle")
    });

  
});



