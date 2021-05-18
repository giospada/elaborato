<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameImages extends Model
{
    use HasFactory;

    protected $fillable = [
        'game_id',
        'path'
    ];

    public function game()
    {
        return $this->belongsTo(Games::class,"id","game_id");
    }
}
