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
                <form action="/search-201" method="GET" role="search">
                        {{ csrf_field() }}
                        <div class="input-group">
                                <input type="text" class="form-control" name="q"
                                        placeholder="Search Gender"> <span class="input-group-btn">
                                        <button type="submit" class="btn btn-default">
                                                <span class="glyphicon glyphicon-search"></span>
                                        </button>
                                </span>
                        </div>
<div class="input-group">
                                <input type="text" class="form-control" name="q"
                                        placeholder="Search ID"> <span class="input-group-btn">
                                        <button type="submit" class="btn btn-default">
                                                <span class="glyphicon glyphicon-search"></span>
                                        </button>
                                </span>
                        </div>
                </form>
</div>
</body>
</html>
