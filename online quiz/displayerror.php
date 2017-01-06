<?php


if(isset($_POST['check']))
{
	include 'connectdatabase.php';
	if($_POST['check']=='email')
	{
		$email=$_POST['value'];
		$sql="SELECT * FROM users where email='$email'";
		$result = mysqli_query($con,$sql);
		if(mysqli_num_rows($result) > 0){
			echo "Email address is already register";
			}
		else{
			echo "You can continue with this email address";
		}
}
?>