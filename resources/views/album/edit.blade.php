@extends('layouts.app') 
@section('content') 
	<div class="container-fluide bg-info">
	<h3 align="center">Edit Album</h3>
	<div class="container">
	<form action="{{ url('/album/'.$row->album_id) }}" method="post"> 
		<input name="_method" type="hidden" value="PATCH">
		@csrf 
		<table class="table" align="center " border="3px" cellspacing="100px">
			<tr> 
			 	<td>Nama</td> 
			 	<td><input type="text" name="album_name" value="{{$row->album_name }}"></td> 
			</tr> 
			<tr> 
			  	<td>ID Artist</td> 
			  	 <td><input type="text" name="album_id_artist" value="{{$row->album_id_artist }}"></td> 
			</tr> 
			<tr> 
				<td></td> 
				<td><input type="submit" value="UPDATE"></td> 
			</tr>  
		</table>  
	</form>  
</div>  
@endsection