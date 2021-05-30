<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

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
    public static function boot()
    {
        parent::boot();
        self::deleting(function ($gameimg) {
            Storage::delete("public/gamesimgs/".$gameimg->path);
        }); 
    }

}
