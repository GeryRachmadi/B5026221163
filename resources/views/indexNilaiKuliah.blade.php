@extends('master')
@section('title','Nilai Kuliah')

    @section('judul_halaman')
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Nilai Kuliah</h3>

	<a href="/nilaikuliah/tambahNilaiKuliah"> + Tambah Data</a>

	<br/>
	<br/>
    @endsection

    @section('konten')

	<table class="table table-striped table-hover">
		<tr>
			<th>ID</th>
			<th>NRP</th>
			<th>Nilai Angka</th>
			<th>SKS</th>
			<th>Nilai Huruf</th>
            <th>Bobot</th>
		</tr>
		@foreach($nilaikuliah as $nk)
		<tr>
			<td>{{ $nk->ID }}</td>
			<td>{{ $nk->NRP }}</td>
			<td>{{ $nk->NilaiAngka }}</td>
			<td>{{ $nk->SKS }}</td>
            <td>
                @php
                    if ($nk->NilaiAngka <= 40) {
                        echo 'D';
                    } elseif ($nk->NilaiAngka >= 41 && $nk ->NilaiAngka <= 60) {
                        echo 'C';
                    } elseif ($nk->NilaiAngka >= 61 && $nk ->NilaiAngka <= 80) {
                        echo 'B';
                    } elseif ($nk->NilaiAngka >= 81) {
                        echo 'A';
                    }
                @endphp
            </td>
            <td>
                @php
                    echo ($nk->NilaiAngka * $nk->SKS);
                @endphp
            </td>
		</tr>

		@endforeach
	</table>
    <form action="/nilaikuliah/tambahNilaiKuliah" method="GET">
        <input type="submit" value="TAMBAH" class="btn btn-primary">
	</form>
@endsection
