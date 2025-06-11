@extends('template')

@section('content')
    <h3>Tambah Pembelian</h3>

    <a href="/keranjangbelanja" class="btn btn-info mb-3">Kembali</a>

    <form action="/keranjangbelanja/store" method="post">
        {{ csrf_field() }}

        <div class="form-group row mb-3">
            <label for="KodeBarang" class="col-sm-2 col-form-label">Kode Barang</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="KodeBarang" name="KodeBarang" required>
            </div>
        </div>

        <div class="form-group row mb-3">
            <label for="Jumlah" class="col-sm-2 col-form-label">Jumlah Pembelian</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="Jumlah" name="Jumlah" required>
            </div>
        </div>

        <div class="form-group row mb-3">
            <label for="Harga" class="col-sm-2 col-form-label">Harga per item</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="Harga" name="Harga" required>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </form>
@endsection
