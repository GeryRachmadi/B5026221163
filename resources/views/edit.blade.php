<!DOCTYPE html>
<html>
<head>
    @extends('master')

    @section('title','Data Pegawai')

    @section('konten')

        <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
        <h3>Edit Pegawai</h3>

        <a href="/pegawai"> Kembali</a>

        <br/>
        <br/>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $p->pegawai_id }}">

        <div class="form-group row">
            <label for="nama" class="col-md-2 col-form-label">Nama</label>
            <div class="col-md-10">
            <input type="text" class="form-control" required="required" name="nama" value="{{ $p->pegawai_nama }}">
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="jabatan" class="col-md-2 col-form-label">Jabatan</label>
            <div class="col-md-10">
            <input type="text" class="form-control" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}">
            </div>
        <br>
        </div>
        <div class="form-group row">
            <label for="umur" class="col-md-2 col-form-label">Umur</label>
            <div class="col-md-10">
            <input type="number" class="form-control" required="required" name="umur" value="{{ $p->pegawai_umur }}">
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="alamat" class="col-md-2 col-form-label">Alamat</label>
            <div class="col-md-10">
            <input type="text" class="form-control" required="required" name="alamat" value="{{ $p->pegawai_alamat }}">
            </div>
        </div>
        <br>
        <input type="submit" value="Simpan Data">
	</form>
@endsection

	@endforeach

</body>
</html>
