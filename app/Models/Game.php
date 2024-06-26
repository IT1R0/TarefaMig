<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Game extends Model
{
    protected $fillable = ['title', 'release_year', 'genre_id', 'studio'];
    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
}
 