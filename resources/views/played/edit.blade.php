@extends('template.index') 
@section('content') 
	<div class="container-fluide bg-info">
	<h3 align="center">Edit Played</h3>
	<div class="container">
	<form action="{{ url('/played/'.$row->play_id) }}" method="post"> 
		<input name="_method" type="hidden" value="PATCH">
		@csrf 
		<table class="table" align="center " border="3px" cellspacing="100px"> 
			<tr> 
			 	<td>ID Track</td> 
			 	<td><input type="text" name="play_id_track" value="{{$row->play_id_track }}"></td> 
			</tr> 
			<tr> 
			  	<td>Date</td> 
			  	 <td><input type="text" name="play_date" value="{{$row->play_date }}"></td> 
			</tr> 
			<tr> 
				<td></td> 
				<td><input type="submit" value="UPDATE"></td> 
			</tr>  
		</table>  
	</form>  
</div>  
@endsection