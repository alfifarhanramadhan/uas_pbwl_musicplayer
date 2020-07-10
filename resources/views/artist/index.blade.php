@extends('template.index') 

@section('content') 

	<div class="container-fluide bg-info">
	<h3 align="center">Daftar Artist</h3>
	<div class="container">
	<table class="table"> 
		<tr> 
			<td>Nama</td> 
			<td>Hapus</td>
			<td>Edit</td>
		</tr>
		@foreach($rows as $row)
		<tr>
			<td>{{ $row->artist_name }}</td>
			<td><form action="{{ url('artist/' . $row->artist_id) }}" method="POST"> 
 		<input name="_method" type="hidden" value="DELETE"> 
 	@csrf 
 	<button class="btn-danger">Hapus</button> 
</form></td>
<td><a href="{{ url('artist/' . $row->artist_id . '/edit') }}"><button class="btn-primary">Edit</button></a></td> 
		</tr>
	@endforeach 
</table> 
</div>
</div> 
</div>
<div align="center"><a href="{{ url('artist/create') }}">Tambah Data</a></div>
 @endsection