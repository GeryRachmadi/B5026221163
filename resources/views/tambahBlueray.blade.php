@extends('master')

@section('title','Tambah Stock')

@section('konten')
	<h3>Tambah Data</h3>

    <a class="btn btn-danger mb-md-3" href="/blueray"> Kembali</a>
    <div class="container">
        <form action="/blueray/store" method="post">
            {{ csrf_field() }}
            <div class="form-group row">
                <label for="merkblueray" class="col-form-label col-sm-1">Merk Blueray</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="merkblueray" name="merkblueray">
                </div>
            </div>
            <div class="form-group row">
                <label for="stockblueray" class="col-form-label col-sm-1">Stock Blueray</label>
                <div class="col-sm-3">
                    <input type="number" class="form-control" id="stockblueray" name="stockblueray">
                </div>
            </div>
    </div>
    <center class="my-2"><input type="submit" class="btn btn-primary" value="Simpan Data"></center>
    </form>

@endsection
