@extends('layouts.admin')
@section('title', 'Admin PAUD SKS | Manage Staff')

@section('content')
<div class="col">
    <div class="card-header border-0 d-flex justify-content-between">
        <h3 class="mb-0">Tabel Guru & Staff</h3>
        <a href="{{ url('/admin/staff/add') }}" class="btn btn-sm btn-neutral">Tambah</a>
    </div>

    <div class="py-3">
        <!-- Search form -->
        <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main"
            action="/admin/staff/search" method="GET">
            <div class="form-group mb-0">
                <div class="input-group input-group-alternative input-group-merge">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><button class="btn btn-sm" type="submit"><i
                                    class="fas fa-search"></i></button></span>
                    </div>
                    <input class="form-control" name="search" placeholder="Cari" type="text"
                        value="{{ old('search') }}">
                </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main"
                aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </form>
        <!-- End Search form -->
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
                        <th scope="col" class="sort" data-sort="name">Foto</th>
                        <th scope="col" class="sort" data-sort="status">Jabatan</th>
                        <th scope="col" class="sort" data-sort="status">Tanggal Mulai Tugas</th>
                        <th scope="col" class="sort" data-sort="status">Aksi</th>
                    </tr>
                </thead>
                <tbody class="list">
                    <?php $skipped = $guru->currentPage() * $guru->perPage() - $guru->perPage(); ?>
                    @foreach ($guru as $staf)
                    <tr id="sid{{$staf->id}}">
                        <td>
                            {{ $loop->iteration + $skipped }}
                        </td>
                        <td>
                            {{ $staf->nama }}
                        </td>
                        <td>
                            <img width="150px" src="{{ asset(Storage::url($staf->foto_guru)) }}" alt="STAFF">
                        </td>
                        <td>
                            {{ $staf->jabatan }}
                        </td>
                        <td>
                            {{ $staf->tgl_mulai_tugas }}
                        </td>
                        <td>
                            <a href="{{ url('admin/staff/detail/'.$staf->id) }}" class="btn">
                                <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                    </path>
                                </svg>
                            </a>

                            <a href="{{ url('admin/staff/edit/'.$staf->id) }}" class="btn">
                                <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z">
                                    </path>
                                </svg>
                            </a>

                            <button class="btn" onclick="deleteConfirmation({{$staf->id}})">
                                <svg style="pointer-events: none" width="24" height="24" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                    </path>
                                </svg>
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{-- Pagination --}}
    <div class="card-footer py-4">
        <nav aria-label="...">
            <ul class="pagination justify-content-end mb-0">
                {{ $guru->links() }}
            </ul>
        </nav>
    </div>
    {{-- End Pagination --}}



    {{-- <div class="container">
        Jumlah Data : {{ $guru->total() }} <br />
</div> --}}

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
                    url: '/admin/staff/' + id,
                    data: {
                        _token: CSRF_TOKEN
                    },
                    dataType: 'JSON',
                    success: function (response) {
                        swal("Staff berhasil dihapus", response.message, "success")
                        $("#success").html(response.message)
                        $('#sid' + id).remove()
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
