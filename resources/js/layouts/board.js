$(function (){
    $('.board-content-header-star').click(function (e){
        e.preventDefault();
        var classList = $('.board-content-header-star i').attr('class').split(/\s+/);
        $.each(classList, function(index, item) {
            if (item === 'bxs-star') {
                $('.board-content-header-star i').removeClass('bxs-star');
                $('.board-content-header-star i').addClass('bx-star');
            } else {
                $('.board-content-header-star i').removeClass('bx-star');
                $('.board-content-header-star i').addClass('bxs-star');
            }
        });
    });
})
