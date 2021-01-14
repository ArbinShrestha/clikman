<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'video', 'remarks'];

    protected $casts = [
        'video' => 'array'
    ];

    public function FilmCategory()
    {
        $this->belongsTo(FilmCategory::class);
    }
}
