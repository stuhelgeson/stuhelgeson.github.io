var main=function(){
        $('.fadeTwo').delay(1500).animate({
             opacity: 1
        }, 700);
        $('.fadeOne').delay(2200).animate({
             opacity: 1
        }, 700);
        $('.fadeThree').delay(2900).animate({
             opacity: 1
        }, 700);
        $('.menu-click').click(function(){
            var menuHeight = $('.wrapper').width();
            if(menuHeight>=768){
                $('.menu').animate({
                    top: '0px'
                },200);
                $('.wrapper').animate({
                top: '40px'
                },200);
            }else{
                $('.menu').animate({
                    top: '0px'
                },200);
                $('.wrapper').animate({
                    top: '275px'
                },200);
            }
        });
        $('.close-click').click(function(){
            var menuHeight = $('.wrapper').width();
            if(menuHeight>=768){
                $('.menu').animate({
                    top: '-275px'
                },200);
                $('.wrapper').animate({
                    top: '0px'
                },200);
            }else{
                $('.menu').animate({
                    top: '-275px'
                },200);
                $('.wrapper').animate({
                    top: '0px'
                },200);
            }
        });
};

$(document).ready(main);