<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Jadwal;

class JadwalController extends Controller
{
    public function awal(){
    	return "Hello dari JadwalController";
    }

    public function tambah(){
    	return $this->simpan();
    }

    public function simpan(){
    	$jadwal=new Jadwal();
    	$jadwal->mahasiswa_id=1;
    	$jadwal->ruangan_id=1;
    	$jadwal->dosen_matakuliah_id=1;
    	$jadwal->save();
    	return "Data jadwal telah disimpan";
    }
}
