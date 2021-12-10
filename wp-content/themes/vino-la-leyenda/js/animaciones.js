$('.contentProductCard').mouseover(function(){
    $('.btn-addTocart', this).css({
        'position':'absolute',
        'bottom':'0',
        'z-index':20,
        'width':'100%'
    });
    $('.imgProduct > a > img', this).css({
        'filter':'brightness(70%)'
    });
});
$('.contentProductCard').mouseout(function(){
    $('.btn-addTocart', this).css({
        'position':'relative',
    });
    $('.imgProduct > a > img', this).css({
        'filter':'none'
    });
});
$('.openModalVideo').on('click', function(){
    $('.iframe')[0].src += "?&autoplay=1";
});
$('.show-cart-mini').on('click', function(e){
    $('.xoo-wsc-modal').addClass('xoo-wsc-cart-active');
    e.preventDefault();
});