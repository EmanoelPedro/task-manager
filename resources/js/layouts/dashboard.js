import {isEmpty} from "lodash";

$(document).ready(function(){
    let boardsStar = document.querySelectorAll('.board-star');

    for (var i = 0; i < boardsStar.length; i++) {
        boardsStar[i].addEventListener('click', function (e){
            e.preventDefault();
            let star = $(this);
            console.log(this)
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "https://localhost/sites/task-manager/public/app/quadros/setfavorite",
                method: "POST",
                crossDomain: true,
                data: { board: star.attr('data-slug'),},
                beforeSend: function () {
                    console.log(star.children().first().hasClass("bx-star"))
                  if (star.children().first().hasClass("bx-star")){
                      star.children().first().removeClass('bx-star');
                      star.children().first().addClass('bxs-star');
                  } else {
                      star.children().first().removeClass('bxs-star');
                      star.children().first().addClass('bx-star');
                  }
                   },
                success: function () {
                    if (document.querySelector(".favorite_boards .boards-container-wrapper")) {
                        let favoriteBoards = document.querySelector(".favorite_boards .boards-container-wrapper");
                        let boards = favoriteBoards.querySelectorAll('.board');

                        boards.forEach(function (board,index){
                            if (board.querySelector('[data-slug="'+ star.attr("data-slug") + '"]')) {
                                let boardItem = document.querySelector('[data-slug="'+ star.attr("data-slug") + '"]');
                                $(board).fadeOut(300, function(){ $(board).remove();});
                            }
                        })
                    }

                    window.location.reload();
                },

                error: function () {
                    console.log('Error!')

                }
            });
        });
    }
})
