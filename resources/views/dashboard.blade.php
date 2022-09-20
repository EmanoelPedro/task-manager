<x-app-layout>
    @foreach($boards as $board)
        @if($board->isFavorite())
            <?php  $favorites[] = $board; ?>
        @endif
    @endforeach
    @if(!empty($favorites))
    <section class="boards-container favorite_boards">
    <header class="section_header">
        <h1 class="bx bxs-star">Quadros Favoritos</h1>
    </header>
    <div class="boards-container-wrapper">
        @foreach($favorites as $board)
            <x-board :board="$board" />
        @endforeach

    </div>
</section>
        @endif

    <section class="boards-container">
        <header class="section_header">
            <h1 class="bx bxs-star">Quadros</h1>
        </header>
        <div class="boards-container-wrapper">
            @foreach($boards as $board)
                <x-board :board="$board" />

            @endforeach
        </div>
    </section>
</x-app-layout>
