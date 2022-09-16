<?php

namespace App\Http\Controllers;

use App\Models\Board;
use Illuminate\Http\Request;

class AppController extends Controller
{
   public function home () {

       $boards = Board::all();


       return view('dashboard',['boards' => $boards]);
   }
}
