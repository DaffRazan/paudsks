<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Auth;
// namespace model
use App\Galeri;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galeri = DB::table('galeri')->paginate(5);
        $user = Auth::user();
        return view('admin.galeri', ['galeri' => $galeri, 'admin' => $user->hasRole('operator')]);
    }

    public function search(Request $request)
    {
        $user = Auth::user();

        // menangkap data pencarian
        $search = $request->search;

        // mengambil data dari table pegawai sesuai pencarian data
        $galeri = DB::table('galeri')->where('nama_gambar', 'like', "%" . $search . "%")->paginate();

        // mengirim data pegawai ke view index
        return view('admin.galeri', ['galeri' => $galeri, 'admin' => $user->hasRole('operator')]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add-galeri');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_gambar' => 'required',
            'gambar' => 'required|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        // lokasi gambar
        $gambar = $request->file('gambar');

        // nama file
        $nama_file = time() . "_" . $gambar->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'storage';
        $gambar->move($tujuan_upload, $nama_file);

        Galeri::create([
            'nama_gambar' => $request->nama_gambar,
            'gambar' => $nama_file,
        ]);

        return redirect('admin/galeri')->with('status', 'Galeri Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $galeri = Galeri::find($id);
        return view('admin.update-galeri', ['galeri' => $galeri]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $galeri = Galeri::find($id);

        $request->validate(
            [
                'nama_gambar' => 'required',
                'gambar' => 'mimes:jpg,png,jpeg,gif,svg',
            ]
        );

        $update = [
            'nama_gambar' => $request->nama_gambar,
        ];

        // lokasi gambar
        $gambar = $request->file('gambar');

        if ($request->hasFile('gambar')) {
            // nama file
            $nama_file = time() . "_" . $gambar->getClientOriginalName();

            // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'storage';
            $gambar->move($tujuan_upload, $nama_file);
            $update['gambar'] = $nama_file;

            //code for remove old file
            if ($galeri->gambar != ''  && $galeri->gambar != null) {
                $file_old = $tujuan_upload . "/" . $galeri->gambar;
                unlink($file_old);
            }
        }

        Galeri::where('id', $id)->update($update);

        return redirect('admin/galeri')->with('status', 'Galeri Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // hapus file
        $galeri = Galeri::where('id', $id)->first();
        File::delete('storage/' . $galeri->gambar);

        // hapus data di db
        Galeri::findOrFail($id)->delete();

        return response()->json(['success' => 'Galeri has been deleted.']);
    }
}
