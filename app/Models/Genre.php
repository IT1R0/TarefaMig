<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $fillable = ['name', 'genre_type']; // Adicione 'genre_type' aqui
    public function games()
    {
        return $this->hasMany(Game::class);
    }
}
