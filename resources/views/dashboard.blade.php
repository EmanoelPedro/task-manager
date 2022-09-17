<x-app-layout>
    <section class="board-container">
      @foreach($boards as $board)
          <x-board :name="$board->name" :slug="$board->slug" />

        @endforeach
    </section>
</x-app-layout>
