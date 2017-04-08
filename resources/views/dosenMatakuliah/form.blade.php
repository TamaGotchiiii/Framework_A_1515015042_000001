@extends('master')
@section('container')

<div class="form-group">
	<label class="col-sm-2 control-label" id="mahasiswa_id">Mahasiswa</label>
	<div class="col-sm-10">
		{!! Form::select('matakuliah_id', $matakuliah->lists('title','id'),null,['class'=>'form-control','id'=>'matakuliah_id','placeholder'=>"Matakuliah"]) !!}
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label" id="ruangan_id">Ruangan</label>
	<div class="col-sm-10">
		{!! Form::select('dosen_id', $dosen->lists('nama','id'),null,['class'=>'form-control','id'=>'dosen_id','placeholder'=>"Dosen"]) !!}
	</div>
</div>

