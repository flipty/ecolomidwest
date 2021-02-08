//ecolo.js

var ecolo = {

    hamburger: function(){
      var $hamburger = $('.nav-trigger a');
      var $mobileNav = $('ul.header-nav');
      $hamburger.on('click touchend', function(e){
        $(this).toggleClass('active');
        $mobileNav.toggleClass('active');
        e.preventDefault();
      })
    }

}

$(document).ready(function(){
    ecolo.hamburger();
});
