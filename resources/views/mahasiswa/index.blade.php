@extends('layout/main')
@section('title', 'Mahasiswa')
@section('desc', 'Ini adalah halaman untuk melihat data mahasiswa.')

@section('container')
<div class="jumbotron">
    <div class="container">
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Aksi</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Fakultas</th>
                    <th scope="col">Alamat Surel</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $mahasiswa as $mhs )
                <tr>
                    <th scope="row">{{ $loop -> iteration }}</th>
                    <td>
                        <a class="btn btn-primary btn-sm" href="mahasiswa/{{ $mhs->id }}/edit" role="button">Ubah</a> |
                        <form action="mahasiswa/{{ $mhs->id }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                    <td>{{ $mhs -> nama }}</td>
                    <td>{{ $mhs -> nim }}</td>
                    <td>{{ $mhs -> fakultas }}</td>
                    <td>{{ $mhs -> email }}</td>
                </tr>
                @endforeach
        </table>
    </div>
</div>
@endsection