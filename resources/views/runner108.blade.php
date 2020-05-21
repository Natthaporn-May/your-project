<!DOCTYPE html>
<html>
<head>
<title>PYT Runner Information</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="//code.jquery.com/jquery-1.12.3.js"></script>
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script
	src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet"
	href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet"
	href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
<script
	src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<style>
</style>
<body>
	<div class="container ">
		{{ csrf_field() }}
		<div class="table-responsive text-center">
			<table class="table table-borderless" id="table">
				<thead>
					<tr>
                <tr>
                <th colspan='6'><center>Name</center></th>
                <th colspan='7'><center>PYT2019</center></th>
                <th colspan='6'><center>PYT2018</center></th>
		<th><center>Edit</center></th>
            </tr>
					<tr>
						<th class="text-center">ID</th>
						<th class="text-center">First Name</th>
						<th class="text-center">Last Name</th>
						<th class="text-center">Gender</th>
						<th class="text-center">ID Number</th>
						<th class="text-center">Passport</th>
						<th>PYT166</th>
                <th>PYT120</th>
                <th>PYT100</th>
                <th>PYT70</th>
                <th>NPT50</th>
                <th>PNK30</th>
                <th>WFL15</th>
                <th>Ranking</th>
                <th>PYT166</th>
                <th>PYT100</th>
                <th>PYT66</th>
                <th>DPS45</th>
                <th>RTC23</th>		
				<th class="text-center">Actions</th>
 					</tr>
				</thead>
				@foreach($data as $item)
				<tr class="item{{$item->id}}">
					<td>{{$item->id}}</td>
					<td>{{$item->First}}</td>
					<td>{{$item->Last}}</td>
					<td>{{$item->Gender}}</td>
					<td>{{$item->IDNumber}}</td>
					<td>{{$item->Passport}}</td>
			<td> {{$item->pyt2019_PYT166}} </td>
                <td> {{$item->pyt2019_PYT120}} </td>
                <td> {{$item->pyt2019_PYT100}} </td>
                <td> {{$item->pyt2019_PYT70}} </td>
                <td> {{$item->pyt2019_NPT50}} </td>
                <td> {{$item->pyt2019_PNK30}} </td>
                <td> {{$item->pyt2019_WFL15}} </td>
                <td> {{$item->pyt2018_rank}} </td>
                <td> {{$item->pyt2018_PYT166}} </td>
                <td> {{$item->pyt2018_PYT100}} </td>
                <td> {{$item->pyt2018_PYT66}} </td>
                <td> {{$item->pyt2018_DPS45}} </td>
                <td> {{$item->pyt2018_RTC23}} </td>
						<td><button class="edit-modal btn btn-info"
							data-info="{{$item->id}},{{$item->First}},{{$item->Last}},{{$item->Gender}},{{$item->IDNumber}},{{$item->Passport}}">
							<span class="glyphicon glyphicon-edit"></span> Edit
						</button>
						<button class="delete-modal btn btn-danger"
							data-info="{{$item->id}},{{$item->First}},{{$item->Last}},{{$item->Gender}},{{$item->IDNumber}},{{$item->Passport}}">
							<span class="glyphicon glyphicon-trash"></span> Delete
						</button></td>
				</tr>
				@endforeach
			</table>
		</div>
	</div>
	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title"></h4>

				</div>
				<div class="modal-body">
					<form class="form-horizontal" role="form">
						<div class="form-group">
							<label class="control-label col-sm-2" for="fid">ID</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="fid" >
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="fname">First Name</label>
							<div class="col-sm-10">
								<input type="name" class="form-control" id="fname">
							</div>
						</div>
						<p class="fname_error error text-center alert alert-danger hidden"></p>
						<div class="form-group">
							<label class="control-label col-sm-2" for="lname">Last Name:</label>
							<div class="col-sm-10">
								<input type="name" class="form-control" id="lname">
							</div>
						</div>
						<p class="lname_error error text-center alert alert-danger hidden"></p>
                                                <div class="form-group">
                                                        <label class="control-label col-sm-2" for="gender">Gender</label>
                                                        <div class="col-sm-10">
                                                                <select class="form-control" id="gender" name="gender">
                                                                        <option value="" disabled selected>Choose your option</option>
                                                                        <option value="Male">Male</option>
                                                                        <option value="Female">Female</option>
                                                                </select>
                                                        </div>
                                                </div>
							<div class="form-group">
							<label class="control-label col-sm-2" for="IDNumber">ID Number:</label>
							<div class="col-sm-10">
								<input type="name" class="form-control" id="IDNumber">
							</div>
						</div>
						<p
							class="IDNumber_error error text-center alert alert-danger hidden"></p>
						<div class="form-group">
							<label class="control-label col-sm-2" for="Passport">Passport </label>
							<div class="col-sm-10">
								<input type="name" class="form-control" id="Passport">
							</div>
						</div>
						<p
							class="salary_error error text-center alert alert-danger hidden"></p>
					</form>
					<div class="deleteContent">
						Are you Sure you want to delete <span class="dname"></span> ? <span
							class="hidden did"></span>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn actionBtn" data-dismiss="modal">
							<span id="footer_action_button" class='glyphicon'> </span>
						</button>
						<button type="button" class="btn btn-warning" data-dismiss="modal">
							<span class='glyphicon glyphicon-remove'></span> Close
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
  $(document).ready(function() {
    $('#table').DataTable();
} );
  </script>

	<script>
	
    $(document).on('click', '.edit-modal', function() {
        $('#footer_action_button').text(" Update");
        $('#footer_action_button').addClass('glyphicon-check');
        $('#footer_action_button').removeClass('glyphicon-trash');
        $('.actionBtn').addClass('btn-success');
        $('.actionBtn').removeClass('btn-danger');
        $('.actionBtn').removeClass('delete');
        $('.actionBtn').addClass('edit');
        $('.modal-title').text('Edit');
        $('.deleteContent').hide();
        $('.form-horizontal').show();
        var stuff = $(this).data('info').split(',');
        fillmodalData(stuff)
        $('#myModal').modal('show');
    });
    $(document).on('click', '.delete-modal', function() {
        $('#footer_action_button').text(" Delete");
        $('#footer_action_button').removeClass('glyphicon-check');
        $('#footer_action_button').addClass('glyphicon-trash');
        $('.actionBtn').removeClass('btn-success');
        $('.actionBtn').addClass('btn-danger');
        $('.actionBtn').removeClass('edit');
        $('.actionBtn').addClass('delete');
        $('.modal-title').text('Delete');
        $('.deleteContent').show();
        $('.form-horizontal').hide();
        var stuff = $(this).data('info').split(',');
        $('.did').text(stuff[0]);
        $('.dname').html(stuff[1] +" "+stuff[2]);
        $('#myModal').modal('show');
    });
function fillmodalData(details){
    $('#fid').val(details[0]);
    $('#fname').val(details[1]);
    $('#lname').val(details[2]);
    $('#gender').val(details[3]);
    $('#IDNumber').val(details[4]);
    $('#Passport').val(details[5]);
}
    $('.modal-footer').on('click', '.edit', function() {
        $.ajax({
            type: 'post',
            url: '/editItem',
            data: {
                '_token': $('input[name=_token]').val(),
                'id': $("#fid").val(),
                'fname': $('#fname').val(),
                'lname': $('#lname').val(),
                'gender': $('#gender').val(),
                'IDNumber': $('#IDNumber').val(),
                'Passport': $('#Passport').val(),
            },
            success: function(data) {
            	if (data.errors){
                	$('#myModal').modal('show');
                    if(data.errors.fname) {
                    	$('.fname_error').removeClass('hidden');
                        $('.fname_error').text("First name can't be empty !");
                    }
                    if(data.errors.lname) {
                    	$('.lname_error').removeClass('hidden');
                        $('.lname_error').text("Last name can't be empty !");
                    }
                    if(data.errors.gender) {
                    	$('.gender_error').removeClass('hidden');
                        $('.gender_error').text("Gender must be a valid one !");
                    }
                    if(data.errors.IDNumber) {
                    	$('.IDNumber_error').removeClass('hidden');
                        $('.IDNumber_error').text("ID Number must be a valid one !");
                    }
                    if(data.errors.Passport) {
                    	$('.Passport_error').removeClass('hidden');
                        $('.Passport_error').text("Passport must be a valid format ! (ex: #.##)");
                    }
                }
            	 else {
            		 
                     $('.error').addClass('hidden');
                $('.item' + info.id).replaceWith("<tr class='item" + info.id + "'><td>" +
                        info.id + "</td><td>" + info.First +
                        "</td><td>" + info.Last + "</td><td>" + info.Gender + "</td><td>" +
                         info.IDNumber + "</td><td>" + info.Passport + "</td><td>" + data.salary +
                          "</td><td><button class='edit-modal btn btn-info' data-info='" + info.id+","+info.First+","+info.Last+","+info.Gender+","+info.IDNumber+","+info.Passport+"'><span class='glyphicon glyphicon-edit'></span> Edit</button> <button class='delete-modal btn btn-danger' data-info='" + data.id+","+data.first_name+","+data.last_name+","+data.email+","+data.gender+","+data.country+","+data.salary+"' ><span class='glyphicon glyphicon-trash'></span> Delete</button></td></tr>");
            	 }}
        });
    });
    $('.modal-footer').on('click', '.delete', function() {
        $.ajax({
            type: 'post',
            url: '/deleteItem',
            data: {
                '_token': $('input[name=_token]').val(),
                'id': $('.did').text()
            },
            success: function(data) {
                $('.item' + $('.did').text()).remove();
            }
        });
    });
</script>

</body>
</html>
