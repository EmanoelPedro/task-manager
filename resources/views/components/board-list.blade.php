<div class="board-list">
    <div class="list-wrapper-header">
        <p>{{$list->name}}</p>
    </div>
   <div class="board-list-wrapper">

       <div class="list-wrapper-cards">
        @for($i=0;$i<10;$i++)
            <x-card/>
           @endfor
       </div>
       <div class="list-wrapper-add-card">
           <i class='bx bx-plus'></i>
           <p>adicionar quadro.</p>
       </div>
   </div>
</div>
