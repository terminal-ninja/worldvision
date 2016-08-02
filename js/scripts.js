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

  $( "#whatwebelieve" ).tabs();

  $('.bxslider').bxSlider({
    pager: false, 
    adaptiveHeight: true,
    responsive: true,
    pause: 5000,
    auto: false,
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
      $(".address").hide();
      $(".donation").show();
    });
  $("#btnFormNext").click(function(){
      $(".donation").hide();
      $(".address").show();
    });

  
});



