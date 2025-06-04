@extends('template')

@section('content')
	<h3>Edit Kue</h3>

	<a href="/kue" class="btn btn-info"> Kembali</a>

	<br/>
	<br/>

	@foreach($kue as $k)
	<form action="/kue/update" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="ID" value="{{ $k->ID }}"> <br/>
		<div class="row mb-3">
            <div class="col-3">
                Merk
            </div>
            <div class="col-4">
                <input type="text" name="merkkue" required="required" value="{{ $k->merkkue }}" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-3">
                Harga
            </div>
            <div class="col-4">
                <input type="number" name="hargakue" required="required" value="{{ $k->hargakue }}" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-3">
                Tersedia
            </div>
            <div class="col-4">
                <input type="hidden" name="tersedia" value="0">
                <input type="checkbox" name="tersedia" value="1" {{ $k->tersedia ? 'checked' : '' }}>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-3">
                Berat
            </div>
            <div class="col-4">
                <input type="number" name="berat" step="0.1" required="required" value="{{ $k->berat }}" class="form-control">
            </div>
        </div>
		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>
	@endforeach

@endsection
