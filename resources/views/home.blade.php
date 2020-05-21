@extends('master')
@section('title','Welcome Homepage')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
	<br/>
	<h3 align="center">Runner Data</h3>
	<br/>
	<table class="table table-bordered table-striped">
	<tr>
	<th>ID</th>
	<th>First Name</th>
	<th>Last Name</th>
	</tr>
	@foreach($users as $row)<tr>
	<td>{{$row['runner_ID']}}</td>
	<td>{{$row['FirstName']}}</td>
	<td>{{$row['LastName']}}</td>		
	</tr>
	@endforeach
	</table>
</div>
	</div>
</div>
@stop
