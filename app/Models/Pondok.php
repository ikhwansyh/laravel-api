<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pondok extends Model
{
    /** @use HasFactory<\Database\Factories\PondokFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
    ];


    public function kawasans(){
        return $this->hasMany(Kawasan::class);
    }

    public function users(){
        return $this->hasMany(User::class);
    }

    public function detail()
    {
        return $this->morphOne(AlamatTable::class, 'alamatable',);
    }
}
