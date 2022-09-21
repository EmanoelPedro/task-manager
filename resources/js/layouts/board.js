$(function (){
    $('.board-content-header-star').click(function (e){
        e.preventDefault();
        var classList = $('.board-content-header-star i').attr('class').split(/\s+/);

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
           url: "https://localhost/sites/task-manager/public/app/quadros/setfavorite",
           method: "POST",
            crossDomain: true,
            data: { board: $('meta[name="board-slug"]').attr('content'),},
            beforeSend: function (data) {
                $.each(classList, function(index, item) {
                    if (item === 'bxs-star') {
                        $('.board-content-header-star i').removeClass('bxs-star');
                        $('.board-content-header-star i').addClass('bx-star');
                    } else {
                        $('.board-content-header-star i').removeClass('bx-star');
                        $('.board-content-header-star i').addClass('bxs-star');
                    }
                });
            },
            success: function (data) {
               $(".error-container").html(data)
            },
            error: function () {
               console.log('Zero!')
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
            }
        });
    });
})
