( function ( $ ) {
    "use strict";

    $( document ).ready( function() {
        $( '.is-style-spoiler-alert' ).click( function() {
            $( this ).addClass( 'is-revealed' );
        } );
    } );

} )( jQuery );