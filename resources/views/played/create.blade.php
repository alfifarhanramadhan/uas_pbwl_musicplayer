@extends('template.index') 
@section('content') 


	<div class="container-fluide bg-info">
	<h3 align="center">Tambah Data</h3>
	<div class="container">
	<form action="{{ url('/played') }}" method="post"> 
		@csrf 
		<table class="table" align="center " border="3px" cellspacing="100px"> 
			<tr> 
			 	<td>ID Track</td> 
			  	 <td>
			  	 	<input type="text" name="play_id_track">
			  	</td>
			</tr> 
			<tr> 
			  	<td>Date</td> 
			  	 <td><input type="text" name="play_date"></td> 
			</tr> 
			<tr> 
				<td></td> 
				<td><input type="submit" value="SIMPAN"></td> 
			</tr>  
		</table>  
	</form>  
</div>  
@endsection