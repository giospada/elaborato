<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Games extends Model
{
    use HasFactory;
    
    
    protected $table = 'games';
    protected $primaryKey = 'id';

    public function user()
    {
        return $this->belongsTo(User::class,"user_id","id");
    }

    public function gameImage()
    {
        return $this->hasMany(GameImages::class,"game_id","id");
    }
}
