<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Jadwal;
use App\Mahasiswa;
use App\Dosen_Matakuliah;
use App\Ruangan;
use App\Http\Requests\JadwalRequest;

class JadwalController extends Controller
{
    protected $informasi = 'Gagal Melakukan Aksi';
    protected $guarded = ['id'];
    public function awal(){
    	$semuaJadwalMatakuliah = Jadwal::all();
        return view('Jadwal.awal', compact('semuaJadwalMatakuliah'));
    }

    public function tambah(){
    	$mahasiswa = new Mahasiswa();
        $ruangan = new Ruangan();
        $dosenMatakuliah = new Dosen_Matakuliah();
        return view('Jadwal.tambah', compact('mahasiswa', 'ruangan', 'dosenMatakuliah'));
    }

    public function simpan(JadwalRequest $input){
        $jadwalMatakuliah = new Jadwal();
        $jadwalMatakuliah->mahasiswa_id=$input->mahasiswa_id;
        $jadwalMatakuliah->ruangan_id=$input->ruangan_id;
        $jadwalMatakuliah->dosen_matakuliah_id=$input->dosen_matakuliah_id;

        if($jadwalMatakuliah->save()) $this->informasi = "Jadwal Mahasiswa berhasil diperbarui";
        return redirect('jadwal')->with(['informasi'=>$this->informasi]);
    }

    public function edit($id){
        $jadwalMatakuliah = Jadwal::find($id);
        $mahasiswa = new Mahasiswa();
        $ruangan = new Ruangan();
        $dosenMatakuliah = new Dosen_Matakuliah();
        return view('Jadwal.edit', compact('mahasiswa','ruangan','dosenMatakuliah','jadwalMatakuliah'));
    }

    public function lihat($id){
        $jadwalMatakuliah = Jadwal::find($id);
        return view('Jadwal.lihat', compact('jadwalMatakuliah'));
    }

    public function update($id, JadwalRequest $input){
        $jadwalMatakuliah = Jadwal::find($id);
        $jadwalMatakuliah->fill($input->only('ruangan_id','dosen_matakuliah_id','mahasiswa_id'));
        if($jadwalMatakuliah->save()) $this->informasi = "Jadwal Mahasiswa berhasil diperbarui";
        return redirect('jadwal')->with(['informasi'=>$this->informasi]);
    }

    public function hapus($id){
        $jadwalMatakuliah = Jadwal::find($id);
        if($jadwalMatakuliah->delete())$this->informasi = "Jadwal Mahasiswa berhasil dihapus";
        return redirect('jadwal')->with(['informasi'=>$this->informasi]);
    }

    public function Mahasiswa(){
        return $this->belongsTo(Mahasiswa::class);
    }

    public function Dosen_matakuliah(){
        return $this->belongsTo(Dosen_Matakuliah::class);
    }
}
