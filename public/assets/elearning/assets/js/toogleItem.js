$('.konstImg').on({
    'mouseenter':function(){
        $('#'+$(this).data('id')).fadeIn();
    },'mouseleave':function(){
        $('#'+$(this).data('id')).fadeOut();
    }
});