

<!DOCTYPE html>
<html>
<head>
<title>Search functionality - justLaravel.com</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
	href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<form action="/searchrunner" method="GET" role="search">
			{{ csrf_field() }}
			<div class="input-group">
				<input type="text" class="form-control" name="r"
					placeholder="Search users"> <span class="input-group-btn">
					<button type="submit" class="btn btn-default">
						<span class="glyphicon glyphicon-search"></span>
					</button>
				</span>
			</div>
		</form>
	<div class="container">
    @if(isset($details))
        <p> The Search results for your query <b> {{ $query }} </b> are :</p>
    <h2>Runner details</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
		<th>Name</th>
                <th>Last</th>
		<th>Gender</th>            
	</tr>
        </thead>
        <tbody>
            @foreach($details as $user)
            <tr>
                <td>{{$user->id}}</td>
		<td>{{$user->First}}</td>
                <td>{{$user->Last}}</td>
        	<td>{{$user->Gender}}</td>    
	</tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>
</div>		
</body>
</html>
