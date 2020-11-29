<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
// namespace model
use App\Fasilitas;

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
        $path = $request->file('gambar_fasilitas')->store('images', 'public');

        // tambahkan data ke db
        $data['nama_fasilitas'] = $request->input('nama_fasilitas');
        $data['deskripsi'] = $request->input('deskripsi');
        $data['gambar_fasilitas'] = $path;

        Fasilitas::create($data);

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
        $path = $request->file('gambar_fasilitas')->store('images', 'public');

        // tambahkan data ke db
        $data['nama_fasilitas'] = $request->input('nama_fasilitas');
        $data['deskripsi'] = $request->input('deskripsi');
        $data['gambar_fasilitas'] = $path;


        Fasilitas::where('id', $id)
            ->update([
                'nama_fasilitas' => $data['nama_fasilitas'],
                'deskripsi' =>  $data['deskripsi'],
                'gambar_fasilitas' =>  $data['gambar_fasilitas'],
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
        $fasilitas = Fasilitas::find($id);
        $fasilitas->delete();

        return redirect('/admin/fasilitas')->with('status', 'Fasilitas Berhasil Dihapus');
    }
}
