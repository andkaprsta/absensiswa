<?php

namespace App\Models;

use App\Models\User;
use App\Models\Siswa;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
   protected $table ='kelas';

   public function siswa()
   {
       return $this->hasMany(Siswa::class, 'kelas_id');
   }
    public function walikelas()
    {
         return $this->belongsTo(User::class, 'walikelas_id');
    }
}
