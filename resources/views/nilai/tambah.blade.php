@extends('template')

@section('content')
    <h3>Tambah Data Nilai</h3>

    <a href="/eas" class="btn btn-info mb-3">Kembali</a>

    <form action="/eas/store" method="post" class="form-horizontal">
        {{ csrf_field() }}

        <div class="form-group row mb-3">
            <label for="nomorinduksiswa" class="col-sm-2 col-form-label">Nomor Induk Siswa</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="nomorinduksiswa" name="nomorinduksiswa" placeholder="Nomor Induk Siswa (5 karakter)" maxlength="5" required>
            </div>
        </div>

        <div class="form-group row mb-3">
            <label for="nilaiangka" class="col-sm-2 col-form-label">Nilai Angka</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="nilaiangka" name="nilaiangka" placeholder="Nilai Angka (0 - 100)" maxlength="3" required>
            </div>
        </div>

        <div class="form-group row mb-3">
            <label for="sks" class="col-sm-2 col-form-label">SKS</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="sks" name="sks" placeholder="SKS" maxlength="1" required>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-primary">SIMPAN</button>
            </div>
        </div>
    </form>
@endsection
