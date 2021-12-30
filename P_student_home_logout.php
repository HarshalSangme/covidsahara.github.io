<?php 
session_start(); 
?>
<?php 
	
	session_destroy();
	header('Location: student_login_form.html');
 ?>