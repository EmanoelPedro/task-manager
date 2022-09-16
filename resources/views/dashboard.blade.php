<x-app-layout>
    <section class="board-container">
      @foreach($boards as $board)
          <x-board :name="$board->name" />

        @endforeach
    </section>
</x-app-layout>
