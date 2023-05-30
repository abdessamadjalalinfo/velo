<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;
    protected $fillable = ['chemin'];

    public function velo()
    {
        return $this->belongsTo(Velo::class);
    }
}
