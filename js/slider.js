$(function(){

    var currentSlide = 0;
    var maxSlide = $('.banner-single').length - 1;
    var delay = 6;

    initSlider();
    changeSlide();

    function initSlider(){
        $('.banner-single').hide();
        $('.banner-single').eq(0).show();

    }

    function changeSlide() {
        setInterval(function(){
            $('.banner-single').eq(currentSlide).fadeOut(2000);
            currentSlide++;
            if (currentSlide > maxSlide) {
                currentSlide = 0;
            }
            $('.banner-single').eq(currentSlide).fadeIn(2000);
        }, delay*1000);
    }

});