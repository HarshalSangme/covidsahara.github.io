<?php 
	session_start();
 ?>
<?php 
	$con = new mysqli("localhost","root","","covid_info");
	// if($con)
	// {
	// 	echo "connection sucessful";
	// }
	// else{
	// 	echo "not connected";
	// }
	if(isset($_POST['SUBMIT']))
	{
		$USER_NAME = $_POST['USER_NAME'];
		$PASSWORD = $_POST['PASSWORD'];

		$USER_NAME_search = "SELECT * FROM student_registration_info where USER_NAME ='$USER_NAME'";

		$query = mysqli_query($con,$USER_NAME_search);

		$USER_NAME_count = mysqli_num_rows($query);

		if($USER_NAME_count)
		{
			$USER_NAME_pass = mysqli_fetch_assoc($query);
			$db_pass = $USER_NAME_pass['PASSWORD'];

			$_SESSION['FIRST_NAME'] = $USER_NAME_pass['FIRST_NAME'];
			$_SESSION['LAST_NAME'] = $USER_NAME_pass['LAST_NAME'];
			$_SESSION['AGE'] = $USER_NAME_pass['AGE'];
			
			$_SESSION['GENDER'] = $USER_NAME_pass['GENDER'];
			$_SESSION['EMAIL_ID'] = $USER_NAME_pass['EMAIL_ID'];
			$_SESSION['PHONE_NO'] = $USER_NAME_pass['PHONE_NO'];
			$_SESSION['BLOOD_GROUP'] = $USER_NAME_pass['BLOOD_GROUP'];
			$_SESSION['PLASMA_DONATE'] = $USER_NAME_pass['PLASMA_DONATE'];
			// $FIRST_NAME = 

			// $pass_decode = password_verify($PASSWORD, $db_pass);

			if($db_pass == $PASSWORD)
			{
				echo "login successful";
				header('Location:P_student_home_page.php');
			}
			else{
				echo "password incorrect";
			}
		}
		else{
			echo "invalid username";
		}
	}
 ?>