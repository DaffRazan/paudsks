<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// namespace model
use App\Kegiatan;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;


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
        $kegiatan = DB::table('kegiatan')->paginate(5);
        $user = Auth::user();
        return view('admin.kegiatan', ['kegiatan' => $kegiatan, 'admin' => $user->hasRole('operator')]);
    }

    public function search(Request $request)
    {
        $user = Auth::user();

        // menangkap data pencarian
        $search = $request->search;

        // mengambil data dari table pegawai sesuai pencarian data
        $kegiatan = DB::table('kegiatan')->where('nama_kegiatan', 'like', "%" . $search . "%")->paginate();

        // mengirim data pegawai ke view index
        return view('admin.kegiatan', ['kegiatan' => $kegiatan, 'admin' => $user->hasRole('operator')]);
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
                'gambar_kegiatan' => 'required|mimes:jpg,png,jpeg,gif,svg',
                'deskripsi_kegiatan' => 'required',
            ]
        );

        // lokasi gambar
        $gambar_kegiatan = $request->file('gambar_kegiatan');

        // nama file
        $nama_file = time() . "_" . $gambar_kegiatan->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'storage';
        $gambar_kegiatan->move($tujuan_upload, $nama_file);

        // tambahkan data ke db
        Kegiatan::create([
            'nama_kegiatan' => $request->nama_kegiatan,
            'gambar_kegiatan' => $nama_file,
            'deskripsi_kegiatan' => $request->deskripsi_kegiatan,
        ]);

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
        $kegiatan = Kegiatan::find($id);

        $request->validate(
            [
                'nama_kegiatan' => 'required',
                'gambar_kegiatan' => 'mimes:jpg,png,jpeg,gif,svg',
                'deskripsi_kegiatan' => 'required',
            ]
        );

        $update = [
            'nama_kegiatan' => $request->nama_kegiatan,
            'deskripsi_kegiatan' => $request->deskripsi_kegiatan,
        ];

        // lokasi gambar
        $gambar_kegiatan = $request->file('gambar_kegiatan');

        if ($request->hasFile('gambar_kegiatan')) {
            // nama file
            $nama_file = time() . "_" . $gambar_kegiatan->getClientOriginalName();
            // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'storage';
            $gambar_kegiatan->move($tujuan_upload, $nama_file);
            $update['gambar_kegiatan'] = $nama_file;

            //code for remove old file
            if ($kegiatan->gambar_kegiatan != ''  && $kegiatan->gambar_kegiatan != null) {
                $file_old = $tujuan_upload . "/" . $kegiatan->gambar_kegiatan;
                unlink($file_old);
            }
        }

        Kegiatan::where('id', $id)->update($update);

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
        // hapus file
        $kegiatan = Kegiatan::where('id', $id)->first();
        File::delete('storage/' . $kegiatan->gambar_kegiatan);

        $kegiatan = Kegiatan::find($id);
        $kegiatan->delete();

        return response()->json(['success' => 'Kegiatan has been deleted.']);
    }
}
