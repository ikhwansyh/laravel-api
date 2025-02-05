<?php

namespace App\Models;

use App\Models\Pondok;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Alamat extends Model
{
    /** @use HasFactory<\Database\Factories\AlamatFactory> */
    use HasFactory;

    protected $fillable = [
        'detail',
        'desa_id'
    ];


    public function desa() {
        return $this->belongsTo(Desa::class);
    }
    public function kawasans()
    {
        return $this->morphedByMany(Kawasan::class, 'alamatable');
    }
    public function pondoks()
    {
        return $this->morphedByMany(Pondok::class, 'alamatable');
    }
    public function users()
    {
        return $this->morphedByMany(User::class, 'alamatable');
    }



}



// public function sukses($myself,
// $skill,
// $kesempatan,
// $paksa,
// $bisa,
// $terbiasa,
// $luarbisa): bool {
//     $myself = strtoupper($myself);
//     $peluang = (count($skill) * 0.1) +
//     (array_sum($kesempatan) * 0.1) +
//     ($paksa * 0.05) + ($terbiasa * 0.05) +
//     ($luarbisa * 0.02);
//     $bisa = $bisa || $paksa > 3;

//     return $peluang >= 0.95;
// }
// $myself = "Bambang";
// $skill = ["logika", "pemrograman", "analisis"];
// $kesempatan = [0.3, 0.4, 0.2];
// $paksa = 5;
// $bisa = false;
// $terbiasa = 10;
// $luarbisa = 15;

// $result = sukses($myself,
// $skill,
// $kesempatan,
// $paksa,
// $bisa,
// $terbiasa,
// $luarbisa);

// echo $result ?
// "Selamat $myself, Anda telah mencapai sukses!\n" :
// "$myself, tetap semangat! Maksimalkan lagi!.\n";




