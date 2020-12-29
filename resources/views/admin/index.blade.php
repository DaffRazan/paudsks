@extends('layouts.superadmin')
@section('title', 'Admin SKS | Dashboard Admin')

@section('content')
<div class="col">
    <div class="card">
        <!-- Card header -->
        <div class="card-header border-0 d-flex justify-content-between">
            <h3 class="mb-0">List Operator</h3>
            <a href="{{ url('/admin/operator/add') }}" class="btn btn-sm btn-neutral">Tambah</a>
        </div>

        <div class="py-3 px-3">
        <!-- Search form -->
        <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main"
            action="/admin/operator/search" method="GET">
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
            <!-- Light table -->
            <div class="table-responsive">
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col" class="sort" data-sort="name">Nama</th>
                            <th scope="col" class="sort" data-sort="status">Status</th>
                            <th scope="col" class="sort" data-sort="status">Ubah Status</th>
                            <th scope="col" class="sort" data-sort="status">Delete Operator</th>
                        </tr>
                    </thead>
                    <tbody class="list">
                        @foreach ($user as $us)
                        <tr id="id{{$us->id}}">
                            <th scope="row">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <span class="name mb-0 text-sm">{{ $us->name }}</span>
                                    </div>
                                </div>
                            </th>
                            <td>
                                <span class="badge badge-dot mr-4">
                                    @if($us->isActive=='1')
                                    <span class="badge badge-pill badge-success">Aktif</span>
                                    @else
                                    <span class="badge badge-pill badge-danger">Non Aktif</span>
                                    @endif
                                </span>
                            </td>
                            <td>
                                <form method="post" action="{{ url('/admin') }}{{ isset($us) ? '/'.$us->id : '' }}">
                                    @method('patch')
                                    @csrf

                                    <button type="submit" class="btn btn-sm btn-outline-primary"><i
                                            class="fas fa-exchange-alt"></i></button>
                                </form>
                            </td>
                            <td>
                                <button class="btn-sm btn-outline-danger"
                                    onclick="deleteConfirmation({{$us->id}})">Delete</button>
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
                    {{ $user->links() }}
                </ul>
            </nav>
        </div>
        {{-- End Pagination --}}

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
                    url: "{{url('/admin')}}/" + id,
                    data: {
                        _token: CSRF_TOKEN
                    },
                    dataType: 'JSON',
                    success: function (response) {
                        $(`#id` + id).remove();
                        swal("Operator dihapus", response.message, "success");
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
