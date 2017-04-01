<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen_Matakuliah extends Model
{
    protected $table='dosen_matakuliah';
    protected $fillable=['dosen_id','matakuliah_id'];

    public function Matakuliah(){
    	return $this->belongsTo(Matakuliah::class);
    }

    public function Dosen(){
    	return $this->belongsTo(Dosen::class);
    }

    public function jadwal_matakuliah(){
    	return $this->hasMany(Jadwal::class);
    }
}
