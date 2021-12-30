<!DOCTYPE html>
<html>
<head>
	<title>user_details</title>
	<link rel="stylesheet" type="text/css" href="C_admin_view_users.css">
</head>
<body>

<!-- <div class="table-container"> -->
	<table class="table-design">
	
	<tr class="table-heading">
		<th>SR.NO</th>
		<th>FIRST NAME</th>
		<th>LAST NAME</th>
		<th>AGE</th>
		<th>GENDER</th>
		<th>BLOOD GROUP</th>
		<th>PLASMA DONATE</th>
		<th>EMAIL ID</th>
		<th>PHONE NO</th>
		<th>USER NAME</th>
		
	</tr>	

<?php 




	// CREATING CONNNECTIONS
		
	$con = new mysqli("localhost","root", "","covid_info");

	// if($con->connect_errno == 0)
	// {
	// 	echo " Connection Succesfull";
	// }
	// else{
	// 	var_dump($con);
	// 	echo "Connection Unsuccessfull";
	// }

	//FETCHING DATA FROM THE DATABASE

	// $qry = "SELECT * FROM student_registration_info";
	// $data = mysqli_query

	$qry = "SELECT * FROM student_registration_info";
	$data = mysqli_query($con,$qry);
	$total = mysqli_num_rows($data);

	// echo $total;
	// var_dump($total);
	// $result = mysqli_fetch_assoc($data);
	// var_dump($result);

	// PRINTING DATA

	// echo $result['SR_NO'], $result['USER_NAME'],
	// $result['EMAIL_ID'], $result['PASSWORD'];

	if($total!=0)
	{
		while($result=mysqli_fetch_assoc($data))
		{

		 	echo "
		 	<tr class=repeat_rows>
		 	<td>".$result['SR_NO']."</td>
		 	<td>".$result['FIRST_NAME']."</td>
		 	<td>".$result['LAST_NAME']."</td>
		 	<td>".$result['AGE']."</td>
		 	<td>".$result['GENDER']."</td>
		 	<td>".$result['BLOOD_GROUP']."</td>
		 	<td>".$result['PLASMA_DONATE']."</td>
		 	<td>".$result['EMAIL_ID']."</td>
		 	<td>".$result['PHONE_NO']."</td>
		 	<td>".$result['USER_NAME']."</td>
		 	</tr>
		 	";
		}
	}
	else
	{
		echo "Table has no records";
	}


	


 ?>

</table>
<!-- </div> -->
</body>
</html>