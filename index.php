<!DOCTYPE HTML>
<html>
<head>
<title>Index</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<center><h2 class="mt-2">Data Form</h2></center>
		<form id="myform" action="datainsert.php" method="post" onsubmit="return fun()">
			<div class="form-group mt-2">
				<label for="name"><b>Name:</b></label>
				<input type="text" class="form-control" id="name" placeholder="Name" name="name" required>
			</div>
			<div class="form-group">
				<label for="email"><b>City:</b></label>
				<input type="text" class="form-control" id="city" placeholder="City" name="city" required>
			</div>
			<div class="form-group">
				<label for="phone"><b>Occupation:</b></label>
				<input type="text" class="form-control" id="occupation" placeholder="Occupation" name="occupation" required>
			</div>
			<button type="submit" id="submitdata" class="btn btn-success mt-1 btn-md" name="submitdata">Submit</button>
		</form>
	</div>
	<div class="container-fluid mt-3">
		<center><h3 style="background-color:blue; color:white;">Result Data</h3></center>
		<table class="table table-striped" id="success"></table>
	</div>
	<script type="text/javascript" src="jquery-3.1.1.min.js"></script>
	<script type="text/javascript">
		$('#success').load('fetchdata.php');
		function fun(){
			$.ajax({
				type:'POST',
				url:'insertdata.php',
				data:$('#myform').serialize(),
				success:function(response){
					$('#success').html(response);
				}
			});
			var form=document.getElementById('myform').reset();
			$('#success').load('fetchdata.php');
			return false;
		}
	</script>
</body>
</html>
