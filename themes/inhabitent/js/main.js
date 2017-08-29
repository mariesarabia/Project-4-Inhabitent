//SEARCH TOGGLE 

(function( $ ) {
 $('.search-toggle').on('click', function(){
     $('.search-field').toggle('fast');
     $( '.search-field' ).focus();
     return false;
 });
 
 $(document).on('click', function(event){
     if (!$('.search-field').is( event.target )){
        $( ".search-field" ).hide('fast');
     }
 });

})( jQuery ); 


//navigation bar 

(function( $ ){
$(window).scroll(function() {
    if ($(document).scrollTop() < 359) {
      $('site-header').addClass('scrolled');
    } else {
      $('site-header').removeClass('scrolled');
    }
  });
})( jQuery ); 