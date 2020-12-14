<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
// namespace model
use App\Fasilitas;
use Illuminate\Support\Facades\File;

class FasilitasController extends Controller
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
        $fasilitas = Fasilitas::all();
        $user = Auth::user();
        return view('admin.fasilitas', ['fasilitas' => $fasilitas, 'admin' => $user->hasRole('admin')]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add-fasilitas');
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
            'nama_fasilitas' => 'required',
            'deskripsi' => 'required',
            'gambar_fasilitas' => 'required|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        // lokasi gambar
        $gambar_fasilitas = $request->file('gambar_fasilitas');

        // nama file
        $nama_file = time() . "_" . $gambar_fasilitas->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'storage';
        $gambar_fasilitas->move($tujuan_upload, $nama_file);

        Fasilitas::create([
            'nama_fasilitas' => $request->nama_fasilitas,
            'deskripsi' => $request->deskripsi,
            'gambar_fasilitas' => $nama_file,
        ]);

        return redirect('admin/fasilitas')->with('status', 'Fasilitas Berhasil Ditambahkan');
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
        $fasilitas = Fasilitas::find($id);
        return view('admin.update-fasilitas', ['fasilitas' => $fasilitas]);

        // dd($fasilitas);
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
        $request->validate([
            'nama_fasilitas' => 'required',
            'deskripsi' => 'required',
            'gambar_fasilitas' => 'required|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        // lokasi gambar
        $gambar_fasilitas = $request->file('gambar');

        // nama file
        $nama_file = time() . "_" . $gambar_fasilitas->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'storage';
        $gambar_fasilitas->move($tujuan_upload, $nama_file);

        Fasilitas::where('id', $id)
            ->update([
                'nama_fasilitas' => $request->nama_fasilitas,
                'deskripsi' => $request->deskripsi,
                'gambar_fasilitas' => $nama_file,
            ]);

        return redirect('admin/fasilitas')->with('status', 'Fasilitas Berhasil Diubah');
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
        $fasilitas = Fasilitas::where('id', $id)->first();
        File::delete('storage/' . $fasilitas->gambar_fasilitas);

        $fasilitas = Fasilitas::find($id);
        $fasilitas->delete();

        return response()->json(['success' => 'Fasilitas has been deleted.']);
    }
}
