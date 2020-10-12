<?php
	$con=mysqli_connect('localhost','test','Asdf@1234','test','3308') or die("Connection was not established");
	$name=$_POST['name'];
	$city=$_POST['city'];
	$occupation=$_POST['occupation'];
	$run_query=mysqli_query($con,"insert into formdata(name,city,occupation) values('$name','$city','$occupation')");
?>
