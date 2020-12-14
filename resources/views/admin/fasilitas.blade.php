@extends('layouts.admin')

@section('title', 'Admin PAUD SKS | Manage Fasilitas')

@section('content')
<div class="col">
    <div class="card-header border-0 d-flex justify-content-between">
        <h3 class="mb-0">Tabel Fasilitas</h3>
        <a href="{{ url('/admin/fasilitas/add') }}" class="btn btn-sm btn-neutral">Tambah</a>
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
                        <th scope="col" class="sort" data-sort="status">Nama Fasilitas</th>
                        <th scope="col" class="sort" data-sort="status">Deskripsi</th>
                        <th scope="col" class="sort" data-sort="status">Gambar fasilitas</th>
                        <th scope="col" class="sort" data-sort="status">Aksi</th>
                        <th scope="col" class="sort" data-sort="status">Created at</th>
                        <th scope="col" class="sort" data-sort="status">Updated at</th>
                    </tr>
                </thead>
                <tbody class="list">
                    @foreach ($fasilitas as $item)
                    <tr id="fid{{$item->id}}">
                        <td>
                            {{ $loop->iteration }}
                        </td>
                        <td>
                            {{ $item->nama_fasilitas }}
                        </td>
                        <td>
                            {{ Str::limit($item->deskripsi, 14) }}
                        </td>
                        <td>
                            <img width="150px" src="{{ asset(Storage::url($item->gambar_fasilitas)) }}" alt="">
                        </td>
                        <td>
                            <a href="{{ url('admin/fasilitas/edit/'.$item->id) }}" class="btn btn-icon-only">
                                <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z">
                                    </path>
                                </svg>
                            </a>

                            <button class="btn btn-icon-only" onclick="deleteConfirmation({{$item->id}})">
                                <svg style="pointer-events: none" width="24" height="24" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                    </path>
                                </svg>
                            </button>
                        </td>
                        <td>
                            {{ $item->created_at }}
                        </td>
                        <td>
                            {{ $item->updated_at }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


</div>

<script>
    function deleteConfirmation(id) {
        swal({
            title: "Delete?",
            text: "Please ensure and then confirm!",
            type: "warning",
            showCancelButton: !0,
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel!",
            reverseButtons: !0
        }).then(function (e) {
            if (e.value === true) {
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    type: 'DELETE',
                    url: '/admin/fasilitas/'+id,
                    data: {
                        _token: CSRF_TOKEN
                    },
                    dataType: 'JSON',
                    success: function (response) {
                        swal("Fasilitas berhasil dihapus", response.message, "success")
                        $("#success").html(response.message)
                        $('#fid'+id).remove()
                    }
                });
            } else {
                e.dismiss;
            }
        }, function (dismiss) {
            return false;
        })
    }

</script>
@endsection
