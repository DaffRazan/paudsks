<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
// namespace model
use App\Guru;

// operator view
class GuruController extends Controller
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
        $guru = Guru::all();
        $user = Auth::user();
        return view('admin.staff', ['guru' => $guru, 'admin' => $user->hasRole('admin')]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id = null)
    {
        $guru = Guru::find($id);
        return view('admin.add-staff', ['guru' => $guru]);
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
            'nama' => ['required', 'string', 'max:255'],
            'tgl_mulai_tugas' =>  ['required'],
            'pendidikan' =>  ['required', 'string', 'max:255'],
            'alamat' =>  ['required', 'string', 'max:255'],
            'jabatan' =>  ['required', 'string', 'max:255'],
        ]);

        Guru::create($request->except('_token'));
        return redirect('admin/staff')->with('status', 'Data Staff Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $guru = DB::table('guru')->where('id', $id)->first();

        $user = Auth::user();
        return view('admin/detail-staff', ['guru' => $guru, 'admin' => $user->hasRole('admin')]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $guru = Guru::find($id);
        return view('admin.update-staff', ['guru' => $guru]);
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
            'nama' => ['required', 'string', 'max:255'],
            'tgl_mulai_tugas' =>  ['required'],
            'pendidikan' =>  ['required', 'string', 'max:255'],
            'alamat' =>  ['required', 'string', 'max:255'],
            'jabatan' =>  ['required', 'string', 'max:255'],
        ]);

        Guru::where('id', $id)->update($request->except(['_token', '_method']));
        return redirect('admin/staff')->with('status', 'Data Staff Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $guru = Guru::find($id);
        $guru->delete();

        return response()->json(['success' => 'Staff has been deleted.']);
    }
}
