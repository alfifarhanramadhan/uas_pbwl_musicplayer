@extends('template.index') 
@section('content') 
	<div class="container-fluide bg-info">
	<h3 align="center">Edit Data</h3>
	<div class="container">
	<form action="{{ url('/artist/'.$row->artist_id) }}" method="post"> 
		<input name="_method" type="hidden" value="PATCH">
		@csrf
		<table class="table" align="center " border="3px" cellspacing="100px"> 
			<tr> 
			 	<td>Nama</td> 
			 	<td><input type="text" name="artist_name" value="{{$row->artist_name }}"></td> 
			</tr> 
			<tr> 
				<td></td> 
				<td><input type="submit" value="UPDATE"></td> 
			</tr>  
		</table>  
	</form>  
</div>  
@endsection