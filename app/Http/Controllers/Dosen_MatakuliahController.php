<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Dosen_Matakuliah;
use App\Dosen;
use App\Matakuliah;
use App\Http\Requests\DosenMatakuliahRequest;

class Dosen_MatakuliahController extends Controller
{
    protected $informasi = 'Gagal Melakukan Aksi';
    protected $guarded = ['id'];
    public function awal(){
        $semuaDosenMatakuliah = Dosen_Matakuliah::all();
        return view('dosenMatakuliah.awal', compact('semuaDosenMatakuliah'));
    }

    public function tambah(){
        $matakuliah = new Matakuliah();
        $dosen = new Dosen();
        return view('dosenMatakuliah.tambah', compact('matakuliah', 'dosen'));
    }

    public function simpan(DosenMatakuliahRequest $input){
        $dosenMatakuliah = new Dosen_Matakuliah();
        $dosenMatakuliah->matakuliah_id=$input->matakuliah_id;
        $dosenMatakuliah->dosen_id=$input->dosen_id;

        if($dosenMatakuliah->save()) $this->informasi = "Dosen Matakuliah berhasil diperbarui";
        return redirect('dosen_matakuliah')->with(['informasi'=>$this->informasi]);
    }

    public function edit($id){
        $dosenMatakuliah = Dosen_Matakuliah::find($id);
        $matakuliah = new Matakuliah();
        $dosen = new Dosen();
        return view('dosenMatakuliah.edit', compact('matakuliah','dosen','dosenMatakuliah'));
    }

    public function lihat($id){
        $dosenMatakuliah = Dosen_Matakuliah::find($id);
        return view('dosenMatakuliah.lihat', compact('dosenMatakuliah'));
    }

    public function update($id, dosenMatakuliahRequest $input){
        $dosenMatakuliah = Dosen_Matakuliah::find($id);
        $dosenMatakuliah->fill($input->only('matakuliah_id', 'dosen_id'));
        if($dosenMatakuliah->save()) $this->informasi = "Dosen Matakuliah berhasil diperbarui";
        return redirect('dosen_matakuliah')->with(['informasi'=>$this->informasi]);
    }

    public function hapus($id){
        $dosenMatakuliah = Dosen_Matakuliah::find($id);
        if($dosenMatakuliah->delete())$this->informasi = "Dosen Matakuliah berhasil dihapus";
        return redirect('dosen_matakuliah')->with(['informasi'=>$this->informasi]);
    }
}
