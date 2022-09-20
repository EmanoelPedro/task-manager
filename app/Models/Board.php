<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    use HasFactory;

    public function lists() {
        return $this->hasMany(BoardList::class);
    }
    public function favorites() {
        return $this->belongsTo(FavoriteBoard::class,'id','board_id');
    }
    public function isFavorite()
    {
        if (!empty($this->favorites()->first()->board_id)){
            return true;
        }
        return false;
    }
}
