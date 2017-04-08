<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen_Matakuliah extends Model
{
    protected $table='dosen_matakuliah';
    protected $fillable=['dosen_id','matakuliah_id'];

    public function Matakuliah(){
    	return $this->belongsTo(Matakuliah::class, 'matakuliah_id');
    }

    public function Dosen(){
    	return $this->belongsTo(Dosen::class);
    }
    public function Jadwal(){
        return $this->hasMany(Jadwal::class, 'dosen_matakuliah_id');
    }

    public function listDosenDanMatakuliah(){
        $out = [];
        foreach($this->all() as $dsnMTK){
            $out[$dsnMTK->id] = "{$dsnMTK->dosen->nama} (Matakuliah{$dsnMTK->matakuliah->title})";
        }
        return $out;
    }
}
