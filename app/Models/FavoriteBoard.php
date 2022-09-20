<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FavoriteBoard extends Model
{
    use HasFactory;

    protected $table = 'favorite_boards';

    public function board()
    {
        return $this->hasOne(Board::class);
    }
}
