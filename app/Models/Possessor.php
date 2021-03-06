<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Possessor extends Model
{
    use HasFactory;

    protected $fillable=['name','image','age','score'];

    public function pokemons()
    {
        return $this->belongsToMany(Pokemon::class);
    }
}
