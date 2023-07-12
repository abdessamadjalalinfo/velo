<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Location extends Model
{
    use HasFactory;
    public function velo()
    {
        return $this->belongsTo(Velo::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
