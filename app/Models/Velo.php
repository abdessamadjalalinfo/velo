<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Velo extends Model
{
    use HasFactory;
    protected $fillable = ['marque', 'adresse', 'zip', 'description', 'pays'];

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }
}
