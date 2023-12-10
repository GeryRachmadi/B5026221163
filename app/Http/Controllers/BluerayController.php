<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BluerayController extends Controller
{
	public function index()
	{
        $blueray = DB::table('blueray')->get();
		return view('indexBlueray',['blueray' => $blueray]);
	}

	public function tambah()
	{
		return view('tambahBlueray');
	}

	public function store(Request $request)
{
    $tersedia = ($request->stockblueray > 0) ? 'Y' : 'N';

    DB::table('blueray')->insert([
        'kodeblueray' => $request->kodeblueray,
        'merkblueray' => $request->merkblueray,
        'stockblueray' => $request->stockblueray,
        'tersedia' => $tersedia
    ]);
    return redirect('/blueray');
}

	public function edit($id)
	{
		$blueray = DB::table('blueray')->where('kodeblueray',$id)->get();
		return view('editBlueray',['blueray' => $blueray]);

	}

	public function update(Request $request)
	{
        $tersedia = ($request->stockblueray > 0) ? 'Y' : 'N';
		// update data blueray
		DB::table('blueray')->where('kodeblueray',$request->id)->update([
			'merkblueray' => $request->merkblueray,
			'stockblueray' => $request->stockblueray,
            'tersedia' => $tersedia,
		]);
		// alihkan halaman ke halaman blueray
		return redirect('/blueray');
	}

	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('blueray')->where('kodeblueray',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/blueray');
	}

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table blueray sesuai pencarian data
        $blueray = DB::table('blueray')
            ->where('merkblueray', 'like', "%" . $cari . "%")
            ->get();

        // mengirim data blueray ke view indexBlueray
        return view('indexBlueray', ['blueray' => $blueray, 'cari' => $cari]);
    }

    public function view($id)
    {

		$blueray = DB::table('blueray')->where('kodeblueray',$id)->get();
		return view('viewBlueray', ['blueray' => $blueray]);

    }
}
