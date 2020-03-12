( function () {
    'use strict';

    window.addEventListener( 'DOMContentLoaded', () => {
        Object.values( document.getElementsByClassName( 'is-style-spoiler-alert' ) ).forEach( element => {
            element.addEventListener( 'click', ( event ) => {
                event.preventDefault();
                event.currentTarget.classList.add( 'is-revealed' );
            } );
        } );
    } );
} )();