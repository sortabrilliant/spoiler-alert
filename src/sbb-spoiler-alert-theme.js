( function ( $ ) {
    "use strict";

    $( document ).ready( function() {
        $( '.is-style-spoiler-alert' ).each( function( index, element ) {
            if ( 'P' === element.nodeName ) {
                $( element ).wrapInner( '<span></span>' );
            }
        } );

        $( '.is-style-spoiler-alert' ).css( 'opacity', 1 );
    } );

} )( jQuery );