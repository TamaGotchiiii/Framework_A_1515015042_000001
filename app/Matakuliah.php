<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    protected $table='matakuliah';

    public function Dosen_Matakuliah(){
    	return $this->hasMany(Dosen_Matakuliah::class, 'matakuliah_id');
    }
}
