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
     <br />
     <h3 align="center">Runner Details Table</h3>
     <br />
   <div class="table-responsive">
    <table class="table table-bordered table-striped">
           <thead>
            <tr>
                <tr>
                <th colspan='2'><center>Name</center></th>
                <th colspan='3'><center>PYT2019</center></th>
                <th colspan='3'><center>PYT2018</center></th>
            </tr>
                <tr>
                <th>FirstName</th>
                <th>LastName</th>
                <th>PYT166</th>
                <th>PYT120</th>
                <th>PNK30</th>
                <th>PYT166</th>
                <th>PYT100</th>
                <th>PYT66</th>
            </tr>
           </thead>
           <tbody>
           @foreach($data as $row)
            <tr>

                <td> {{$row->FirstName}} </td>
                <td> {{$row->LastName}} </td>
                <td> {{$row->PYT2019_PYT166}} </td>
                <td> {{$row->PYT2019_PYT120}} </td>
                <td> {{$row->PYT2019_PNK30}} </td>
                <td> {{$row->PYT2018_PYT166}} </td>
                <td> {{$row->PYT2018_PYT100}} </td>
                <td> {{$row->PYT2018_PYT66}} </td>
                </tr>
           @endforeach
           </tbody>
       </table>
   </div>
  </div>
 </body>
</html>
