<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
// namespace model
use App\Kegiatan;

class KegiatanController extends Controller
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
        $kegiatan = Kegiatan::all();
        $user = Auth::user();
        return view('admin.kegiatan', ['kegiatan' => $kegiatan, 'admin' => $user->hasRole('admin')]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id = null)
    {
        $kegiatan = Kegiatan::find($id);
        return view('admin.add-kegiatan', ['kegiatan' => $kegiatan]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'nama_kegiatan' => 'required',
            ]
        );

        // tambahkan data ke db
        Kegiatan::create($request->all());

        return redirect('admin/kegiatan')->with('status', 'Kegiatan Berhasil Ditambahkan');
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
        $kegiatan = Kegiatan::find($id);
        return view('admin.update-kegiatan', ['kegiatan' => $kegiatan]);
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
        $request->validate(
            [
                'nama_kegiatan' => 'required',
            ]
        );

        Kegiatan::where('id', $id)
            ->update([
                'nama_kegiatan' => $request->nama_kegiatan,
            ]);

        return redirect('admin/kegiatan')->with('status', 'Kegiatan Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kegiatan = Kegiatan::find($id);
        $kegiatan->delete();

        return response()->json(['success' => 'Kegiatan has been deleted.']);
    }
}
