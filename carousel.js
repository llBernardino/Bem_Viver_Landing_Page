  
$(document).ready(function(){
  $(".owl-carousel").owlCarousel({
    margin: 30,
    nav: true,
    autoplay: false,
    dots: true,
    responsive: {
      0: {
        items: 1
      },
      768: {
        items: 2
      },
      1000: {
        items: 5
      }
    }
  });
});
