@extends('master')
@section('container')

<div class="form-group">
	<label class="col-sm-2 control-label" id="mahasiswa_id">Mahasiswa</label>
	<div class="col-sm-10">
		{!! Form::select('mahasiswa_id', $mahasiswa->listMahasiswaDanNim(),null,['class'=>'form-control','id'=>'mahasiswa_id','placeholder'=>"Mahasiswa"]) !!}
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label" id="ruangan_id">Ruangan</label>
	<div class="col-sm-10">
		{!! Form::select('ruangan_id', $ruangan->lists('title','id'),null,['class'=>'form-control','id'=>'ruangan_id','placeholder'=>"Ruangan"]) !!}
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" id="mahasiswa_id">Matakuliah</label>
	<div class="col-sm-10">
		{!! Form::select('dosen_matakuliah_id', $dosenMatakuliah->listDosenDanMatakuliah(),null,['class'=>'form-control','id'=>'dosen_matakuliah_id','placeholder'=>"Matakuliah"]) !!}
	</div>
</div>

