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
		$ADMIN_USER_NAME = $_POST['USER_NAME'];
		$ADMIN_PASSWORD = $_POST['PASSWORD'];

		$ADMIN_USER_NAME_SEARCH="SELECT * FROM admin_registration where ADMIN_USER_NAME='$ADMIN_USER_NAME'";
		$query= mysqli_query($con,$ADMIN_USER_NAME_SEARCH);

		$ADMIN_USER_NAME_COUNT= mysqli_num_rows($query);
		if($ADMIN_USER_NAME_COUNT)
		{
			$ADMIN_USER_NAME_PASS = mysqli_fetch_assoc($query);

			$DB_PASS = $ADMIN_USER_NAME_PASS['ADMIN_PASSWORD'];
			if($DB_PASS==$ADMIN_PASSWORD)
			{
				echo "admin you are login successfully";
				header("Location:admin_portal.html");
			}
			else
			{
				echo "password incorrect";
			}
		}
		else{
			echo "invalid username";
		}
	}
?>