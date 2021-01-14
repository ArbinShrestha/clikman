<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FrameCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name','remarks'];

    protected function frames()
    {
        $this->hasMany(Frame::class);
    }
}
