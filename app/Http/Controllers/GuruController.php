<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use Illuminate\Support\Facades\File;


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
        $guru = DB::table('guru')->paginate(5);
        $user = Auth::user();

        return view('admin.staff', ['guru' => $guru, 'admin' => $user->hasRole('operator')]);
    }

    public function search(Request $request)
    {
        $user = Auth::user();

        // menangkap data pencarian
        $search = $request->search;

        // mengambil data dari table pegawai sesuai pencarian data
        $guru = DB::table('guru')->where('nama', 'like', "%" . $search . "%")->paginate();

        // mengirim data pegawai ke view index
        return view('admin.staff', ['guru' => $guru, 'admin' => $user->hasRole('operator')]);
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
            'foto_guru' => 'required|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        // lokasi gambar
        $foto_guru = $request->file('foto_guru');

        // nama file
        $nama_file = time() . "_" . $foto_guru->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'storage';
        $foto_guru->move($tujuan_upload, $nama_file);

        Guru::create([
            'nama' => $request->nama,
            'tgl_mulai_tugas' => $request->tgl_mulai_tugas,
            'pendidikan' => $request->pendidikan,
            'alamat' => $request->alamat,
            'jabatan' => $request->jabatan,
            'foto_guru' => $nama_file,
        ]);

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
        $guru = Guru::find($id);

        $request->validate([
            'nama' => ['required', 'string', 'max:255'],
            'tgl_mulai_tugas' =>  ['required'],
            'pendidikan' =>  ['required', 'string', 'max:255'],
            'alamat' =>  ['required', 'string', 'max:255'],
            'jabatan' =>  ['required', 'string', 'max:255'],
            'foto_guru' => 'mimes:jpg,png,jpeg,gif,svg',
        ]);

        $update = [
            'nama' => $request->nama,
            'tgl_mulai_tugas' => $request->tgl_mulai_tugas,
            'pendidikan' => $request->pendidikan,
            'alamat' => $request->alamat,
            'jabatan' => $request->jabatan,
        ];

        if ($request->hasFile('foto_guru')) {
            // lokasi gambar
            $foto_guru = $request->file('foto_guru');

            // nama file
            $nama_file = time() . "_" . $foto_guru->getClientOriginalName();

            // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'storage';
            $foto_guru->move($tujuan_upload, $nama_file);
            $update['foto_guru'] = $nama_file;

            // code for remove old file
            if ($guru->foto_guru != ''  && $guru->foto_guru != null) {
                $file_old = $tujuan_upload . "/" . $guru->foto_guru;
                unlink($file_old);
            }
        }

        Guru::where('id', $id)->update($update);
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
        // hapus file
        $guru = Guru::where('id', $id)->first();
        File::delete('storage/' . $guru->foto_guru);

        $guru = Guru::find($id);
        $guru->delete();

        return response()->json(['success' => 'Staff has been deleted.']);
    }
}
