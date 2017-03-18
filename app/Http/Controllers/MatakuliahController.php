<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Matakuliah;
class MatakuliahController extends Controller
{
    public function awal(){
    	return "Hello dari MatakuliahController";
    }

    public function tambah(){
    	return $this->simpan();
    }

    public function simpan(){
    	$matakuliah=new Matakuliah();
    	$matakuliah->title='Matkul 1';
    	$matakuliah->keterangan='Ini adalah matakuliah pertama';
    	$matakuliah->save();
    	return "Data matakuliah dengan nama {$matakuliah->title} telah disimpan";
    }
}
