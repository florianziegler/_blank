jQuery( function( $ ){
    $( document ).ready( function(){

        // Add .open to elements targeted by their #id (main-navigation, searchform)
        $( '#open-main-navigation, #open-searchform' ).click( function( e ){
            e.preventDefault();
            var clicker = $( this );
            var target = $( this ).prop( 'hash' );
            if ( $( target ).hasClass( 'open' ) ) {
                $( target ).slideUp( 150, 'swing', function() {
                    $( clicker ).removeClass( 'open' );
                    $( target ).removeClass( 'open' );
                    $( target ).show();
               });   
            }
            else {
                $( clicker ).addClass( 'open' );
                $( target ).addClass( 'open' );
                $( target ).hide();
                $( target ).slideDown( 150, 'swing' );
            }
        });

    });
});