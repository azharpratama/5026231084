@extends('template')

@section('content')

    <h3>Data Kue</h3>

    <a href="/kue/tambah" class="btn btn-primary"> + Tambah Kue Baru</a>
    <p>Cari Data Kue :</p>
	<form action="/kue/cari" method="GET">
		<input type="text" class="form-control" name="cari" placeholder="Cari Kue ..">
		<input type="submit" class="btn btn-info" value="CARI">
	</form>
	<br/>

	<table class="table table-striped">
		<tr>
			<th>Merk</th>
			<th>Harga</th>
			<th>Tersedia</th>
			<th>Berat</th>
			<th>Opsi</th>
		</tr>
		@foreach($kue as $k)
		<tr>
			<td>{{ $k->merkkue }}</td>
			<td>{{ $k->hargakue }}</td>
			<td>{{ $k->tersedia }}</td>
			<td>{{ $k->berat }}</td>
			<td>
				<a href="/kue/edit/{{ $k->ID }}" class="btn btn-success">Edit</a>

				<a href="/kue/hapus/{{ $k->ID }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
{{-- pagination --}}
{{ $kue->links() }}
@endsection
