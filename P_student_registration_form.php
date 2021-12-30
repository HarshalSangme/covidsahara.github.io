<?php 
	$con = new mysqli("localhost","root","","covid_info");
	// if($con)
	// {
	// 	echo "connection sucessful";
	// }
	// else{
	// 	echo "not connected";
	// }
	function validate($data){
		$data = trim($data);
		$data =stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
		$FIRST_NAME = validate($_POST ['FIRST_NAME']);
		$LAST_NAME = validate($_POST ['LAST_NAME']);
		$AGE = validate($_POST ['AGE']);

		$GENDER = validate($_POST ['GENDER']);
		$BLOOD_GROUP = validate($_POST ['BLOOD_GROUP']);
		$PLASMA_DONATE = validate($_POST ['PLASMA_DONATE']);

		$EMAIL_ID = validate($_POST ['EMAIL_ID']);
		$PHONE_NO = validate($_POST ['PHONE_NO']);



		$USER_NAME = validate($_POST ['USER_NAME']);
		$PASSWORD = validate($_POST ['PASSWORD']);


	$query = "INSERT INTO `student_registration_info` (`FIRST_NAME`, `LAST_NAME`, `AGE`, `GENDER`, `BLOOD_GROUP`, `PLASMA_DONATE`, `EMAIL_ID`, `PHONE_NO`, `USER_NAME`, `PASSWORD`) VALUES ('$FIRST_NAME', '$LAST_NAME', '$AGE', '$GENDER', '$BLOOD_GROUP', '$PLASMA_DONATE', '$EMAIL_ID', '$PHONE_NO', '$USER_NAME', '$PASSWORD')";

	

		$result = mysqli_query($con,$query);

		if ($result) {
			// echo "your successfully login ....";
			header('Location: student_login_form.html');
		}
		else
		{
			echo "Contact With Our Developer";
		}

 ?>