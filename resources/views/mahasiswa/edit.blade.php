@extends('layout/main')
@section('title', 'Ubah Data Mahasiswa')
@section('desc', 'Ini adalah halaman untuk mengubah data mahasiswa.')

@section('container')
<div class="jumbotron">
    <div class="container">
        <FORM NAME="formTes" action="/mahasiswa/{{ $mahasiswa->id }}" method="post">
            @method('patch')
            @csrf
            <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama"
                    placeholder="Masukkan nama lengkap" value="{{ $mahasiswa->nama }}">
            </div>
            <div class="form-group">
                <label for="nim">NIM</label>
                <input type="text" class="form-control @error('nim') is-invalid @enderror" name="nim" id="nim"
                    placeholder="Masukkan NIM" value="{{ $mahasiswa->nim }}">
            </div>
            <div class="form-group">
                <label for="email">Alamat Surel</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email"
                    placeholder="Masukkan alamat surel" value="{{ $mahasiswa->email }}">
            </div>
            <div class="form-group">
                <label for="fakultas">Fakultas</label>
                <select class="form-control @error('fakultas') is-invalid @enderror" name="fakultas" id="fakultas">
                    <option value="Teknik" <?php if ($mahasiswa["fakultas"] == "Teknik") {echo 'selected';}?>>Teknik
                    </option>
                    <option value="Sospol" <?php if ($mahasiswa["fakultas"] == "Sospol") {echo 'selected';}?>>Sospol
                    </option>
                    <option value="Kedokteran" <?php if ($mahasiswa["fakultas"] == "Kedokteran") {echo 'selected';}?>>
                        Kedokteran</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Kirimkan!</button>
        </form>
    </div>
</div>
@endsection