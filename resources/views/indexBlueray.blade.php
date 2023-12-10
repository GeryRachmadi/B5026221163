@extends('master')
@section('title','Database Blueray')

@section('konten')
<h3>Data Blueray</h3>

<a href="/blueray/tambah" class="btn btn-primary mb-3"> Tambah Stock </a>
    <p>Cari Data Blueray :</p>
	<form action="/blueray/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Merk Blueray.." value="{{ old('cari') }}">
		<input type="submit" value="CARI" class="btn btn-primary">
	</form>

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Blueray</th>
            <th>Merk Blueray</th>
            <th>Stock Blueray</th>
            <th>Tersedia</th>
            <th style="text-align: center;">Lainnya</th>
        </tr>
        @forelse($blueray as $p)
            <tr>
                <td>{{ $p->kodeblueray }}</td>
                <td>{{ $p->merkblueray }}</td>
                <td>{{ $p->stockblueray }}</td>
                <td style="background-color: @if($p->stockblueray > 0) blue @else red @endif; color: white; text-align: center; width: 50px;">
                    {{ $p->stockblueray > 0 ? 'Y' : 'N' }}
                </td>
                <td style="text-align: center;">
                    <a href="/blueray/view/{{ $p->kodeblueray }}" class="btn btn-success">View</a>
                    <a href="/blueray/edit/{{ $p->kodeblueray }}" class="btn btn-warning">Edit</a>
                    <a href="/blueray/hapus/{{ $p->kodeblueray }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">No results found.</td>
            </tr>
        @endforelse
    </table>

@endsection
