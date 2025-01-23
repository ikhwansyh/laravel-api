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

    public function alamats()
    {
        return $this->morphToMany(Alamat::class, 'alamatable',);
    }
}


/*
Table = Yang D jembatani : ALAMAT
MorpByMany / MorphOne

Table PIVOT = JEMBATAN : ALAMATABLE
// MorpTo

Table = Pegguna Jembatan : USER , PONDOK , KAWASAN , KANTOR,
// MorphToMany / MorphOne

*/

