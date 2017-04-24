<?php
use App\Http\Requests;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function () {
    return view('welcome');
});
Route::auth();
Route::get('/home', 'HomeController@index');
Route::get('ruangan','ruangancontroller@awal');
Route::get('ruangan/tambah','ruangancontroller@tambah');
Route::post('ruangan/simpan','ruangancontroller@simpan');
Route::get('ruangan/edit/{ruangan}','ruangancontroller@edit');
Route::post('ruangan/edit/{ruangan}','ruangancontroller@update');
Route::get('ruangan/lihat/{ruangan}','ruangancontroller@lihat');
Route::get('ruangan/hapus/{ruangan}','ruangancontroller@hapus');
Route::get('matakuliah','MatakuliahController@awal');
Route::get('matakuliah/tambah','MatakuliahController@tambah');
Route::post('matakuliah/simpan','MatakuliahController@simpan');
Route::get('matakuliah/edit/{matakuliah}','MatakuliahController@edit');
Route::post('matakuliah/edit/{matakuliah}','MatakuliahController@update');
Route::get('matakuliah/lihat/{matakuliah}','matakuliahController@lihat');
Route::get('matakuliah/hapus/{matakuliah}','MatakuliahController@hapus');
Route::get('dosen','dosencontroller@awal');
Route::get('dosen/tambah','dosencontroller@tambah');
Route::get('mahasiswa','mahasiswacontroller@awal');
Route::get('mahasiswa/tambah','mahasiswacontroller@tambah');
Route::get('dosen_matakuliah','dosen_matakuliahcontroller@awal');
Route::get('dosen_matakuliah/tambah','dosen_matakuliahcontroller@tambah');
Route::get('jadwal_matakuliah','jadwal_matakuliahcontroller@awal');
Route::get('jadwal_matakuliah/tambah','jadwal_matakuliahcontroller@tambah');

Route::get('mahasiswa/{mahasiswa}', 'MahasiswaController@lihat');
Route::post('mahasiswa/simpan', 'MahasiswaController@simpan');
Route::get('mahasiswa/edit/{mahasiswa}', 'MahasiswaController@edit');
Route::post('mahasiswa/edit/{mahasiswa}', 'MahasiswaController@update');
Route::get('mahasiswa/hapus/{mahasiswa}', 'MahasiswaController@hapus');

Route::get('jadwal', 'JadwalController@awal');
Route::get('jadwal/tambah', 'JadwalController@tambah');
Route::get('jadwal/{jadwal}', 'JadwalController@lihat');
Route::post('jadwal/simpan', 'JadwalController@simpan');
Route::get('jadwal/edit/{jadwal}','JadwalController@edit');
Route::post('jadwal/edit/{jadwal}', 'JadwalController@update');
Route::get('jadwal/hapus/{jadwal}', 'JadwalController@hapus');

Route::get('dosen', 'DosenController@awal');
Route::get('dosen/tambah', 'DosenController@tambah');
Route::get('dosen/{dosen}', 'DosenController@lihat');
Route::post('dosen/simpan', 'DosenController@simpan');
Route::get('dosen/edit/{dosen}','DosenController@edit');
Route::post('dosen/edit/{dosen}', 'DosenController@update');
Route::get('dosen/hapus/{dosen}', 'DosenController@hapus');

Route::get('dosen_matakuliah', 'Dosen_MatakuliahController@awal');
Route::get('dosen_matakuliah/tambah', 'Dosen_MatakuliahController@tambah');
Route::get('dosen_matakuliah/{dosen_matakuliah}', 'Dosen_MatakuliahController@lihat');
Route::post('dosen_matakuliah/simpan', 'Dosen_MatakuliahController@simpan');
Route::get('dosen_matakuliah/edit/{dosen_matakuliah}','Dosen_MatakuliahController@edit');
Route::post('dosen_matakuliah/edit/{dosen_matakuliah}', 'Dosen_MatakuliahController@update');
Route::get('dosen_matakuliah/hapus/{dosen_matakuliah}', 'Dosen_MatakuliahController@hapus');

Route::get('ujiHas','RelationshipRebornController@ujiHas');
Route::get('ujiDoesntHave', 'RelationshipRebornController@ujiDoesntHave');
Route::get('/', function(){
	return \App\Dosen_Matakuliah::whereHas('dosen',function($query){
		$query->where('nama','like','%s%');
	})
	->orWhereHas('matakuliah', function($kueri){
		$kueri->where('title','like','%a%');
	})
	->with('dosen', 'matakuliah')
	->groupBy('dosen_id')
	->get();
});

Route::get('/', function(Illuminate\Http\Request $request){
	echo "Ini adalah request dari method get ".$request->nama;
});

use Illuminate\Http\Request;

Route::get('/', function(){
	echo Form::open(['url'=>'/']).
		Form::label('nama').
		Form::text('nama',null).
		Form::submit('kirim').
		Form::close();
});

Route::post('/', function(Request $request){
	echo "Hasil dari form input tadi nama : ".$request->nama;
});

Route::get('/login','sesicontroller@form');
Route::post('/login','sesicontroller@validasi');
Route::get('/logout','sesicontroller@logout');
Route::get('/','sesicontroller@index');

Route::group(['middleware'=>'AuthentifikasiUser'],function(){
	Route::get('pengguna','PenggunaController@awal');
	Route::get('pengguna/tambah','PenggunaController@tambah');
	Route::post('pengguna/simpan','PenggunaController@simpan');
	Route::get('pengguna/edit/{pengguna}','PenggunaController@edit');
	Route::post('pengguna/edit/{pengguna}','PenggunaController@update');
	Route::get('pengguna/lihat/{pengguna}','PenggunaController@lihat');
	Route::get('pengguna/hapus/{pengguna}','PenggunaController@hapus');
});