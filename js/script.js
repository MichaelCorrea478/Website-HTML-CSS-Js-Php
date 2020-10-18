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

        if (listaMenu.is(':hidden') == true) {
            var icone = $('.botao-menu-mobile').find('i');
            icone.removeClass('fa-bars').addClass('fa-times');
            listaMenu.slideToggle();
        } else {
            var icone = $('.botao-menu-mobile').find('i');
            icone.removeClass('fa-times').addClass('fa-bars');
            listaMenu.slideToggle();
        }
                
    });

    if ($('target').length > 0){
        var elemento = '#'+$('target').attr('target');
        var divScroll = $(elemento).offset().top;
        $('html, body').animate({scrollTop:divScroll});
    }


});