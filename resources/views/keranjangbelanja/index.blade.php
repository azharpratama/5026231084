@extends('template')

@section('content')
    <h3>Keranjang Belanja</h3>

    <a href="/keranjangbelanja/beli" class="btn btn-primary mb-3">Beli</a>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Kode Pembelian</th>
                <th>Kode Barang</th>
                <th>Jumlah Pembelian</th>
                <th>Harga per item</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($keranjangbelanja as $kb)
                <tr>
                    <td>{{ $kb->ID }}</td>
                    <td>{{ $kb->KodeBarang }}</td>
                    <td>{{ $kb->Jumlah }}</td>
                    <td>Rp {{ number_format($kb->Harga, 0, ',', '.') }}</td>
                    <td>Rp {{ number_format($kb->Harga * $kb->Jumlah, 0, ',', '.') }}</td>
                    <td>
                        <a href="/keranjangbelanja/batal/{{ $kb->ID }}" class="btn btn-danger btn-sm"
                            onclick="return confirm('Yakin ingin membatalkan pembelian ini?')">Batal</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
