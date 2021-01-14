<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GearCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name','remarks'];

    public function gear()
    {
        $this->belongsTo(GearCategory::class);
    }
}
