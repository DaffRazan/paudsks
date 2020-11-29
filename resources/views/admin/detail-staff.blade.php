@extends('layouts.admin')
@section('title', 'Admin PAUD SKS | Detail Staff')

@section('content')
<div class="col">
    <div class="card">
        <div class="card-header border-0 d-flex justify-content-between">
            <h3 class="mb-0">Detail Staff</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col" class="sort" data-sort="name">Nama</th>
                            <th scope="col" class="sort" data-sort="status">Jabatan</th>
                            <th scope="col" class="sort" data-sort="status">Pendidikan</th>
                            <th scope="col" class="sort" data-sort="status">Alamat</th>
                            <th scope="col" class="sort" data-sort="status">Tanggal Mulai Tugas</th>
                            <th scope="col" class="sort" data-sort="status">Created at</th>
                            <th scope="col" class="sort" data-sort="status">Updated at</th>
                        </tr>
                    </thead>
                    <tbody class="list">
                        <tr>
                            <td>
                                {{  $guru->nama }}
                            </td>
                            <td>
                                {{ $guru->jabatan }}
                            </td>
                            <td>
                                {{ $guru->pendidikan }}
                            </td>
                            <td>
                                {{ $guru->alamat }}
                            </td>
                            <td>
                                {{ $guru->tgl_mulai_tugas }}
                            </td>
                            <td>
                                {{ $guru->created_at }}
                            </td>
                            <td>
                                {{ $guru->updated_at }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
