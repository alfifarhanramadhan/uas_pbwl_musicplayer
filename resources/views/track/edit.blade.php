@extends('template.index') 
@section('content') 
	<div class="container-fluide bg-info">
	<h3 align="center">Edit Track</h3>
	<div class="container">
	<form action="{{ url('/track/'.$row->track_id) }}" method="post"> 
		<input name="_method" type="hidden" value="PATCH">
		@csrf 
		<table class="table" align="center " border="3px" cellspacing="100px"> 
			<tr> 
			 	<td>Nama</td> 
			 	<td><input type="text" name="track_name" value="{{$row->track_name }}"></td> 
			</tr> 
			<tr> 
			 	<td>ID Album</td> 
			 	<td><input type="text" name="track_id_album" value="{{$row->track_id_album}}"></td> 
			</tr>
			<tr> 
			 	<td>Time</td> 
			 	<td><input type="text" name="track_time" value="{{$row->track_time }}"></td> 
			</tr>
			<tr> 
			 	<td>File</td> 
			 	<td><input type="file" name="track_file" value="{{$row->track_file }}"></td> 
			</tr>
			<tr> 
				<td></td> 
				<td><input type="submit" value="UPDATE"></td> 
			</tr>  
		</table>  
	</form>  
</div>  
@endsection