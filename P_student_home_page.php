<!DOCTYPE html>
<html>
<head>
	<title>student homepage</title>
	<link rel="stylesheet" type="text/css" href="C_student_home_page.css">
</head>
<body>
<?php 
	session_start();
 ?>
 

	<?php 

	$con = new mysqli("localhost", "root", "", "covid_info");
	// if($con)
	// {
	// 	echo "connection sucessful";
	// }
	// else{
	// 	echo "not connected";
	// }
	$first_name = $_SESSION['FIRST_NAME'];
	$last_name = $_SESSION['LAST_NAME'];;
	$age = $_SESSION['AGE'];
	$gender = $_SESSION['GENDER'];
	$email_id = $_SESSION['EMAIL_ID'];
	$phone_no = $_SESSION['PHONE_NO'];
	$blood_group = $_SESSION['BLOOD_GROUP'];
	$plasma_donate = $_SESSION['PLASMA_DONATE'];
	
		echo "<div class=background-container></div>";
			echo "
			<div id=head-name-container>
			<p id=age>Age: ".$age."</p>
			<p id=gender>gender: ".$gender."</p>
			<p id=></p>
			<p id=db-name>".$first_name." ".$last_name."</p></div>"
				;

			// echo "
			// <div id=general_information>
			// <table>
			// <tr>
			// 	<th><p id=email_id>email id</th>: ".$email_id."</p>
			// 	<th><p id=phone_no>phone no</th>: ".$phone_no."</p>
			// 	<th><p id=blood_group>Blood group</th>:".$blood_group."</p>
			// 	<th><p id=plasma_donate>Blood group</th>:".$plasma_donate."</p>
			// </tr>
			// </table>"
			// 	;
			echo "
			<div id=general-info>
			    <ul id = creds>
   				   <li>Email</li>
   				   <li>Phone</li>
   				   <li>BLOOD_GROUP</li>
   				   <li>PLASMA_DONATE</li>
   				</ul>

			    <ul id= creds-value>
   				   <li>".$email_id."</li>
   				   <li>".$phone_no."</li>
   				   <li>".$blood_group."</li>
   				   <li>".$plasma_donate."</li>
   				</ul>
			</div>
			";
			

	 ?>

	 <!-- <?php 
	 // 	echo " <div class=homepage-logout>
	 // <button type=submit name=logout><a href=P_student_home_page_logout.php> Logout</button></a></div>";
	  ?> -->
<!-- <h1> sahil u will don anything</h1> -->
</div>
</body>
</html>








