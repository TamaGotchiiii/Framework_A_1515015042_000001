@extends('master')
@section('container')

<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{url('jadwal')}}"><i style="color: #8a6d3b;" class="fa text-default fa-chevron-left"></i></a>Detail Jadwal Mahasiswa</strong>
	</div>
	<table>
		<tr>
			<td>Nama Dosen</td>
			<td>:</td>
			<td>{{$dosenMatakuliah->dosen->nama}}</td>
		</tr>
		<tr>
			<td>NIP Dosen</td>
			<td>:</td>
			<td>{{$dosenMatakuliah->dosen->nip}}</td>
		</tr>
		<tr>
			<td>Nama Matakuliah</td>
			<td>:</td>
			<td>{{$dosenMatakuliah->matakuliah->title}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Dibuat Tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$dosenMatakuliah->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diperbarui Tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$dosenMatakuliah->updated_at}}</td>
		</tr>
	</table>
</div>

@stop