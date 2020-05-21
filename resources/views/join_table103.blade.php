<html>
 <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laravel 5.8 - Join Multiple Table</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 </head>
 <body>
 <div class="container">
                <form action="/search-103" method="GET" role="search">
                        {{ csrf_field() }}
                        <div class="input-group">
                                <input type="text" class="form-control" name="q"
                                        placeholder="Search users"> <span class="input-group-btn">
                                        <button type="submit" class="btn btn-default">
                                                <span class="glyphicon glyphicon-search"></span>
                                        </button>
                                </span>
                        </div>
                </form>
        <div class="container">
    @if(isset($data))
        <p> The Search results for your query <b> {{ $query }} </b> are :</p>
    <h2>Runner details</h2>
$data=DB::table('runner')
                ->leftjoin('PYT2019','PYT2019.PYT2019_ID','=','runner.runner_ID')
                ->leftjoin('PYT2018','PYT2018.PYT2018_ID','=','runner.runner_ID')
                ->select('runner.FirstName','runner.LastName','PYT2019.PYT2019_PYT166','PYT2019.PYT2019_PYT120','PYT$                ->get();
 echo "<pre>";
print_r($data);  
 @endif
</div>
</div>
</body>
</html>
