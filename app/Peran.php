<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peran extends Model
{
    protected $tablel = 'peran';

    public function pengguna(){
    	return $this->belongsTo(Pengguna::class);
    }
}
