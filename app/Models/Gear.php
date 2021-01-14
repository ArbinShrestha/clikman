<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gear extends Model
{
    use HasFactory;

    protected $fillable = ['title','description','price','image','remarks'];

    public function GearCategory()
    {
        $this->hasMany(Gear::class);
    }
}
