<?php

namespace App\Models;

use App\Models\Kelas;
use App\Models\Absensi;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
     protected $table = 'siswa';

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }

    public function absensi()
    {
        return $this->hasMany(Absensi::class, 'siswa_id');
    }
}


