jQuery.noConflict();

jQuery(function ($) {
    $(document).ready(function () {
        $('.sidenav').sidenav();
        $('.parallax').parallax();
        $('.collapsible').collapsible();
        $('a[href*=#]:not([href=#])').click(function() {
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
              || location.hostname == this.hostname) {
      
              var target = $(this.hash);
              target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                 if (target.length) {
                   $('html,body').animate({
                       scrollTop: target.offset().top-50 
                  }, 500);
                  return false;
              }
            }
        });
        $('#drop1').dropdown({
          coverTrigger: false,
          hover: true,
        });
        
        $('.produtos').slideToggle("fast");

    }); 
});


jQuery(function ($) {
    $(".toggle").click(function () {
        var id = $(this).data('id');
        $('#' + id).slideToggle("fast");
        $(this).find("i").toggleClass("down");
    });
});

  
