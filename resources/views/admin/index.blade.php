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
                        <tr>
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

                                    <button type="submit" class="btn btn-sm btn-outline-primary">On/Off</button>
                                </form>
                            </td>
                            <td>
                                <a class="btn btn-icon-only"
                                    onclick="event.preventDefault();document.getElementById('form-delete-us-{{$us->id}}').submit();">
                                    <svg style="pointer-events: none" width="24" height="24" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                        </path>
                                    </svg>
                                </a>

                                <form class="delete" id="form-delete-us-{{$us->id}}" action="{{ url('admin/'.$us->id) }}"
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
</div>

<script>
    $(".delete").on("submit", function(){
        return confirm("Are you sure?");
    });
</script>

@endsection
