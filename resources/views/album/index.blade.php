@extends('template.index') 
@section('content') 

	<div class="container-fluide bg-info">
	<h3 align="center">Daftar Album</h3>
	<div class="container">
	<table class="table"> 
		<tr> 
			<td>Nama</td> 
			<td>ID Artist</td>
			<td>Hapus</td>
			<td>Edit</td>
		</tr>
		@foreach($rows as $row)
		<tr> 
			<td>{{ $row->album_name }}</td> 
			<td>{{ $row->album_id_artist }}</td>
			<td><form action="{{ url('album/' . $row->album_id) }}" method="POST"> 
 				<input name="_method" type="hidden" value="DELETE"> 
 				@csrf 
 					<button class="btn-danger">Hapus</button> 
				</form></td>
			<td><a href="{{ url('album/' . $row->album_id . '/edit') }}"><button class="btn-primary">Edit</button></a></td>
		</tr>
	@endforeach 
</table> 
</div> 
</div>
</div>
<div><a href="{{ url('album/create') }}">Tambah Data</a></div>
</div>
 @endsection