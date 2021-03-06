<html>
 <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laravel 5.8 - Individual Column Search in Datatables using Ajax</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 </head>
 <body>
  <div class="container">    
     <br />
     <h3 align="center">Laravel 5.8 - Custom Search in Datatables using Ajax</h3>
     <br />
            <br />
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="form-group">
                        <select name="filter_gender" id="filter_gender" class="form-control" required>
                            <option value="">Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="filter_country" id="filter_country" class="form-control" required>
                            <option value="">Select Country</option>
                            @foreach($country_name as $country)

                            <option value="{{ $country->Country }}">{{ $country->Country }}</option>

                            @endforeach
                        </select>
                    </div>
                    
                    <div class="form-group" align="center">
			<button type="submit" class="btn btn-default">
                        <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
            <br />
@if(isset($details))
        <p> The Search results for your query <b> {{ $query }} </b> are :</p>
    <h2>Runner details</h2>
   <div class="table-responsive">
    <table id="run" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>First</th>
                            <th>Last</th>
                            <th>Gender</th>
                            <th>IDNumber</th>
                            <th>Country</th>
                        </tr>
                    </thead>
                </table>
   </div>
            <br />
            <br />
  </div>
 </body>
</html>

<script>
$(document).ready(function(){

    fill_datatable();

    function fill_datatable(filter_gender = '', filter_country = '')
    {
        var dataTable = $('#run').DataTable({
            processing: true,
            serverSide: true,
            ajax:{
                url: "{{ route('custom.index') }}",
                data:{filter_gender:filter_gender, filter_country:filter_country}
            },
            columns: [
                {
                    data:'ID',
                    name:'ID'
                },
                {
                    data:'First',
                    name:'First'
                },
                {
                    data:'Last',
                    name:'Last'
                },
                {
                    data:'Gender',
                    name:'Gender'
                },
                {
                    data:'IDNumber',
                    name:'IDNumber'
                },
                {
                    data:'Country',
                    name:'Country'
                }
            ]
        });
    }

    $('#filter').click(function(){
        var filter_gender = $('#filter_gender').val();
        var filter_country = $('#filter_country').val();

        if(filter_gender != '' &&  filter_gender != '')
        {
            $('#run').DataTable().destroy();
            fill_datatable(filter_gender, filter_country);
        }
        else
        {
            alert('Select Both filter option');
        }
    });

    $('#reset').click(function(){
        $('#filter_gender').val('');
        $('#filter_country').val('');
        $('#run').DataTable().destroy();
        fill_datatable();
    });

});
</script>

