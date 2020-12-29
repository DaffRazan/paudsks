@extends('layout/main')
@section('title', 'Staff - Smart Kids School')

@section('container')

<style>
    .my-section {
        margin: 6rem 0;
    }

</style>

{{-- Section staff --}}
<section id="staff">
    <div class="container pt-5">
        <div class="container bg-gradient-dark">
            <h1 class="text-center title-staff" style="color:#197163">Staff Aktif
                <script>
                    document.write(new Date().getFullYear())

                </script>/ <script>
                    document.write(new Date().getFullYear() + 1)

                </script>
            </h1>
            <hr width="40%">
        </div>

        <div class="row text-center pt-4 animate__animated animate__fadeInUp">
            @foreach ($guru as $i)
            <div class="col-lg-4">
                <img class="mb-3 rounded-circle h-50 w-50 staff-pic" src="{{ asset(Storage::url($i->foto_guru)) }}"
                    alt="Staff PAUD Smart Kids School">
                <h3 class="text-center teacher-name" style="color: #197163">{{$i->nama}}</h3>
                <hr class="my-1">
                <h5 class="text-center font-weight-light teacher-degree">{{$i->jabatan}}</h5>
            </div>
            @endforeach
        </div>
    </div>
</section>


@endsection
