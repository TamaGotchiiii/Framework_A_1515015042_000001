<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Mahasiswa;

class MahasiswaController extends Controller
{
    public function awal(){
    	return "Hello dari MahasiswaController";
    }

    public function tambah(){
    	return $this->simpan();
    }

    public function simpan(){
    	$mahasiswa=new Mahasiswa();
    	$mahasiswa->nama='Mahasiswa 1';
    	$mahasiswa->nim='Sekian Nimnya';
    	$mahasiswa->alamat='Disini Alamatnya';
    	$mahasiswa->pengguna_id=1;
    	$mahasiswa->save();
    	return "Data mahasiswa dengan nama {$mahasiswa->nama} telah disimpan";
    }
}
