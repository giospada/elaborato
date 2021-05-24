<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Games extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'titolo',
        'descrizione',
        'prezzo',
        'logo'
    ];

    protected $table = 'games';
    protected $primaryKey = 'id';

    public function user()
    {
        return $this->belongsTo(User::class, "user_id", "id");
    }

    public function gameImage()
    {
        return $this->hasMany(GameImages::class, "game_id", "id");
    }

    public static function boot()
    {
        parent::boot();
        self::deleting(function ($game) {
            $game->gameImage()->each(
                function ($img) {
                    $img->delete();
                }
            );
        }); 
    }
}
