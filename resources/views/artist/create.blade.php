@extends('template.index') 
@section('content') 


	<div class="container-fluide bg-info">
	<h3 align="center">Tambah Data</h3>
	<div class="container">
	<form action="{{ url('/artist') }}" method="post"> 
		@csrf
		<table class="table" align="center " border="3px" cellspacing="100px"> 
			<tr> 
			 	<td>Nama</td> 
			 	<td><input type="text" name="artist_name"></td> 
			</tr> 
			<tr> 
				<td></td> 
				<td><input type="submit" value="SIMPAN"></td> 
			</tr>  
		</table>  
	</form>  
</div>  
@endsection