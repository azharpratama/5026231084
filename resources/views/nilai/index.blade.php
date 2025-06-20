@extends('template')

@section('content')
    <h3>Data Nilai</h3>

    <a href="/eas/tambah" class="btn btn-primary">Tambah Data</a>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>NRP</th>
                <th>Nilai Angka</th>
                <th>SKS</th>
                <th>Nilai Huruf</th>
                <th>Bobot</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($nilai as $n)
                <tr>
                    <td>{{ $n->id }}</td>
                    <td>{{ $n->nomorinduksiswa }}</td>
                    <td>{{ $n->nilaiangka }}</td>
                    <td>{{ $n->sks }}</td>
                    @if($n->nilaiangka >= 81)
                        <td>A</td>
                    @elseif($n->nilaiangka >= 61)
                        <td>B</td>
                    @elseif($n->nilaiangka >= 41)
                        <td>C</td>
                    @else
                        <td>D</td>
                    @endif
                    <td>{{ $n->nilaiangka*$n->sks }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
