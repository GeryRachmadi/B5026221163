@extends('master')

@section('title','Tambah Data')

@section('konten')

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Tambah Data</h3>

	<a href="/nilaikuliah"> Kembali</a>

	<br/>
	<br/>

<form action="/nilaikuliah/storeNilaiKuliah" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="NRP" class="col-sm-1 col-form-label text-right">NRP</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="NRP" name="NRP">
            </div>
        </div>
        <div class="form-group row">
            <label for="NilaiAngka" class="col-sm-1 col-form-label text-right">Nilai Angka</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="NilaiAngka" name="NilaiAngka">
            </div>
        </div>
        <div class="form-group row">
            <label for="SKS" class="col-sm-1 col-form-label text-right">SKS</label>
            <div class="col-sm-10">
            <textarea type="text" class="form-control" id="SKS" name="SKS"></textarea>
            </div>
        </div>
        <br/>
        <input type="submit" value="Simpan Data">
    </form>
@endsection
