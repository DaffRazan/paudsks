@extends('layouts.admin')

@section('title', 'Admin PAUD SKS | Manage Staff')

@section('content')
<div class="col">
    <div class="card-header border-0 d-flex justify-content-between">
        <h3 class="mb-0">Tabel Guru & Staff {{ $admin }}</h3>
        <a href="{{ url('/admin/staff/add') }}" class="btn btn-sm btn-neutral">Tambah</a>
    </div>

    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif

    <div class="card-body">
        <div class="table-responsive">
            <table class="table align-items-center table-flush">
                <thead class="thead-light">
                    <tr>
                        <th scope="col" class="sort" data-sort="name">No</th>
                        <th scope="col" class="sort" data-sort="name">Nama</th>
                        <th scope="col" class="sort" data-sort="status">Jabatan</th>
                        <th scope="col" class="sort" data-sort="status">Tanggal Mulai Tugas</th>
                        <th scope="col" class="sort" data-sort="status">Aksi</th>
                    </tr>
                </thead>
                <tbody class="list">
                    @foreach ($guru as $staf)
                    <tr>
                        <td>
                            {{ $loop->iteration }}
                        </td>
                        <td>
                            {{ $staf->nama }}
                        </td>
                        <td>
                            {{ $staf->jabatan }}
                        </td>
                        <td>
                            {{ $staf->tgl_mulai_tugas }}
                        </td>
                        <td>
                            <a href="{{ url('admin/staff/detail/'.$staf->id) }}" class="btn btn-icon-only">
                                <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                    </path>
                                </svg>
                            </a>
                            <a href="{{ url('admin/staff/edit/'.$staf->id) }}" class="btn btn-icon-only">
                                <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z">
                                    </path>
                                </svg>
                            </a>

                            <a class="btn btn-icon-only"
                                onclick="event.preventDefault();document.getElementById('form-delete-staff-{{$staf->id}}').submit();">
                                <svg style="pointer-events: none" width="24" height="24" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                    </path>
                                </svg>
                            </a>

                            <form id="form-delete-staff-{{$staf->id}}" action="{{ url('admin/staff/'.$staf->id) }}"
                                method="POST">
                                @csrf
                                {{ method_field('delete') }}
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


</div>
@endsection
