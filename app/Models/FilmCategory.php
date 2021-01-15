<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FilmCategory extends Model
{
    use HasFactory;


    protected $fillable = ['name','remarks'];

    public function film()
    {
        $this->hasMany(Film::class);
    }
}
