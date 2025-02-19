<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'name',
        'slug',
    ];

    public function BoardingHouses()
    {
        return $this->hasMany(BoardingHouses::class);
    }
}
