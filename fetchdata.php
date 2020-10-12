<?php
	$con=mysqli_connect('localhost','test','Asdf@1234','test','3308') or die("Connection was not established");
	$run_query=mysqli_query($con,"select * from formdata");
	$cnt=1;
	while($row=mysqli_fetch_array($run_query))
	{
		$name=$row['name'];
		$city=$row['city'];
		$occupation=$row['occupation'];
		if($cnt==1){
			echo "<tr><th>Name</th><th>City</th><th>Occupation</th></tr>
			<tr><td>$name</td><td>$city</td><td>$occupation</td></tr>";
		}
		else{
			echo "<tr><td>$name</td><td>$city</td><td>$occupation</td></tr>";
		}
		$cnt++;
	}
?>
