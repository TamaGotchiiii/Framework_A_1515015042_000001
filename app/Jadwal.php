<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table='jadwal_matakuliah';
    protected $fillable=['mahasiswa_id','ruangan_id','dosen_matakuliah_id'];

    public function Dosen_Matakuliah(){
    	return $this->belongsTo(Dosen_Matakuliah::class);
    }

    public function Mahasiswa(){
    	return $this->belongsTo(Mahasiswa::class);
    }

    public function Ruangan(){
    	return $this->belongsTo(Ruangan::class);
    }
}
