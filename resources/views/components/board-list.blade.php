<div class="board-list">
    <div class="list-wrapper-header">
        <p>{{$list->name}}</p>
    </div>
   <div class="board-list-wrapper">

       <div class="list-wrapper-cards">
           @foreach($list->cards as $card)
               <x-list-card :card="$card"/>
           @endforeach
       </div>
       <div class="list-wrapper-add-card">
           <i class='bx bx-plus'></i>
           <p>adicionar quadro.</p>
       </div>
   </div>
</div>
