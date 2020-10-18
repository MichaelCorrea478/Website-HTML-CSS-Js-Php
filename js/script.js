$(function(){

    $('nav.mobile').on('click', function(){
        var listaMenu = $('nav.mobile ul');

        /* if (listaMenu.is(':hidden') == true) {
            listaMenu.fadeIn();
            //listaMenu.show();
            //listaMenu.css('display', 'block');
        } else {
            listaMenu.fadeOut();
            //listaMenu.hide();
            //listaMenu.css('display', 'none');
        } */

        listaMenu.slideToggle();
        
    });



});