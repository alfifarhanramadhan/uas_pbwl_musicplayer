@extends('template.index') 

@section('content') 

	<div class="container-fluide bg-info">
	<h3 align="center">Daftar Track</h3>
	<div class="container">
	<table class="table"> 
	<table> 
		<tr> 
			<td>Nama</td> 
			<td>ID Album</td>
			<td>Time</td>
			<td>File</td>
			<td>Hapus</td>
			<td>Edit</td>
		</tr>
		@foreach($rows as $row)
		<tr> 
			<td>{{ $row->track_name }}</td> 
			<td>{{ $row->track_id_album }}</td>
			<td>{{ $row->track_time }}</td> 
			<td>
				<?php if (!empty($row['track_file'])) { ?>
					<audio controls>
						<source src="<?php echo "./layout/assets/uploads/" . $row['track_file']; ?>" type="audio/.m4a">
							Your browser does not support the audio element.
						</audio>					
					<?php } ?>
			</td>
						<td><form action="{{ url('track/' . $row->track_id) }}" method="POST"> 
 						<input name="_method" type="hidden" value="DELETE"> 
 						@csrf 
 						<button class="btn-danger">Hapus</button> 
				</form>
			</td>
			<td><a href="{{ url('track/' . $row->track_id . '/edit') }}"><button class="btn-primary">Edit</button></a></td>
		</tr>
	@endforeach 
</table> 
</div> 
<div><a href="{{ url('track/create') }}">Tambah Data</a></div>
 @endsection