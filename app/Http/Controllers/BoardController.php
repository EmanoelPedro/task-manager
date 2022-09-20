<?php

namespace App\Http\Controllers;

use App\Models\Board;
use App\Http\Requests\StoreBoardRequest;
use App\Http\Requests\UpdateBoardRequest;
use App\Models\FavoriteBoard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class BoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBoardRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBoardRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Board  $board
     * @return \Illuminate\Http\Response
     */
    public function show(string $slug)
    {

        $board = Board::where('slug', strip_tags($slug))->first();
        if (empty($board)) {
           return redirect()->route('dash.home');
        }
        return view('board', ['board' => $board]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Board  $board
     * @return \Illuminate\Http\Response
     */
    public function edit(Board $board)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBoardRequest  $request
     * @param  \App\Models\Board  $board
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBoardRequest $request, Board $board)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Board  $board
     * @return \Illuminate\Http\Response
     */
    public function destroy(Board $board)
    {
        //
    }


    public function setFavorite(Request $request)
    {
        $request->validate([
            'board' => ['required','string','max:255']
        ]);
        $board = Board::where('slug',strip_tags($request->board))->first();
        if ($board){
            $isFavorite = FavoriteBoard::where('board_id',$board->id)->first();
            if (!empty($isFavorite)){
                $isFavorite->delete();
                return Response::json(['message' => "Quadro removido com sucesso!"]);
            }
            $setFavorite = new FavoriteBoard();
            $setFavorite->board_id = $board->id;
            $setFavorite->save();
            return Response::json(['message' => "Quadro adicionado com sucesso!"]);
        }
    }
}
