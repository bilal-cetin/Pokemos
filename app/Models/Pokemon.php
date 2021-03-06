<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    use HasFactory;
    protected $fillable=['name','image','age','height','evolves_from','evolves_to','weakness','ability'];

    public function possessors()
    {
        return $this->belongsToMany(Possessor::class);
    }
}
