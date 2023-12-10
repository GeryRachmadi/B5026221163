@extends('master')
@section('title', 'Edit Data Blueray')
@section('konten')

<head>
	<title>Data Blueray</title>
</head>
<body>

	<h2>Edit Blueray</h2>

    <a class="btn btn-danger mb-md-3" href="/blueray"> Kembali</a>

	<br/>
	<br/>

	@foreach($blueray as $p)
	<form action="/blueray/update" method="post" class="form-horizontal">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->kodeblueray }}">
        <div class="form-group row">
            <label for="merkbedak" class="col-sm-1 col-form-label text-right">Merk Blueray</label>
            <div class="col-xs-9">
            <input type="text" class="form-control" required="required" id="merkblueray" name="merkblueray" placeholder="Masukkan Merk Blueray" value="{{ $p->merkblueray }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="stockblueray" class="col-sm-1 col-form-label text-right">Stock Blueray</label>
            <div class="col-xs-9">
                <input type="number" class="form-control" required="required" id="stockblueray" name="stockblueray" placeholder="Masukkan Stock Blueray yang tersedia" value="{{ $p->stockblueray }}">
            </div>
        </div>
        <br/>
        <center class="my-2"><input type="submit" class="btn btn-primary" value="Simpan Data"></center>
	</form>
    @endforeach
@endsection
