@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!<br>
                    {{--
                    ini cuma contoh menampilkan informasi user.
                    bisa dihapus.
                    --}}
                    {{-- start profil --}}
                    @foreach($users as $x)
                        {{ $x->nama_lengkap}}
                        {{ $x->jenis_kelamin}}
                        {{ $x->tempat_lahir}}
                        {{ $x->tanggal_lahir}}
                        {{ $x->alamat}}
                        {{ $x->agama}}
                        {{ $x->status_perkawinan}}
                        {{ $x->pekerjaan}}
                        {{ $x->avatar}}
                    @endforeach
                    {{-- end --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
