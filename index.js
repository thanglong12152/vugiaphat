$(document).ready(function(){
    $(".sb-toggle-left").click(function(){
        $('#menu-fixed-bar').slideToggle("fast");
    });
});

$(document).ready(function() {
 
    $("#owl-demo").owlCarousel({
      nav:true,
      navText:["<div class='owl-prev' style=''>‹</div>","<div class='owl-next' style=''>›</div>"],
      dots: true,
      dotElement: 'button role="button" aria-labelledby="my-element-{n}"',
      items:1,
      autoplay:true,
      loop:true
    });
   
  });