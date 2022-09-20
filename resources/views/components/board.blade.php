<div class="board">
    <a href="{{route('dash.board', $board->slug)}} " title="" class="board-wrapper">
        <p class="board-name">{{ $board->name }}</p>
            <a href="#" class="board-workspace-name">Kings</a>
            <div class="board-star" data-slug="{{$board->slug}}">
                @if($board->isFavorite())
                    <i href="#" class='bx bxs-star '></i>
                @else
                    <i href="#" class='bx bx-star'></i>
                @endif
            </div>
    </a>
</div>
