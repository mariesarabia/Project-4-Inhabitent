(function( $ ) {
 $('.search-toggle').on('click', function(){
     $('.search-field').toggle('slow');
     $( '.search-field' ).focus();
     return false;
 });
 
 $(document).on('click', function(event){
     if (!$('.search-field').is( event.target )){
        $( ".search-field" ).hide('slow');
     }
 });

})( jQuery ); 