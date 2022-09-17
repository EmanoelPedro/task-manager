<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quadros | {{$board->name}}</title>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <script src="{{asset('jquery.js')}}"></script>
    @vite(['resources/css/layouts/board.css', 'resources/js/layouts/board.js'])
</head>
<body>
    <div class="board-content">
        <div class="board-content-header">
            <div class="board-content-header-title">
                <p>{{$board->name}}</p>
            </div>
            <div class="board-content-header-star">
                <i class="bx bxs-star"></i>
            </div>
        </div>
        <div class="bord-container">
            <div class="board-container-wrapper">
                @foreach($board->lists as $list)
                    <x-board-list :list="$list"/>
                @endforeach
                @foreach($board->lists as $list)
                    <x-board-list :list="$list"/>
                @endforeach
            </div>
        </div>
    </div>
</body>
</html>
