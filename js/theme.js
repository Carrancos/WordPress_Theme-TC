jQuery(document).ready(function($) {

  $('.bannerslider').royalSlider({
      imageScaleMode: 'none',
      slidesSpacing: 0,
      arrowsNavAutoHide: false,
      fadeinLoadedSlide: false,
      transitionType: 'fade',
      loop: 'true',
      autoPlay: {
          // autoplay options go gere
          enabled: true,
          // autoScaleSlider: true,
          pauseOnHover: false,
          delay: 4500,
      }
  });

   $('.textslider').royalSlider({
      imageScaleMode: 'none',
      slidesSpacing: 0,
      arrowsNavAutoHide: false,
      fadeinLoadedSlide: false,
      transitionType: 'fade',
      loop: 'true',
      autoPlay: {
          // autoplay options go gere
          enabled: true,
          // autoScaleSlider: true,
          pauseOnHover: false,
          delay: 4000,
      }
  });

     /*Tabbed Pagination */
  $(document).ready(function(){
      
      $('ul.tabs li').click(function(){
          var tab_id = $(this).attr('data-tab');

          $('ul.tabs li').removeClass('current');
          $('.tab-content').removeClass('current');

          $(this).addClass('current');
          $("#"+tab_id).addClass('current');
      })

  })

  $(document).ready(function(){
    $('a[href*=#]:not([href=#])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html,body').animate({
            scrollTop: target.offset().top -55
          }, 1000);
          return false;
        }
      }
    });
  });

});

