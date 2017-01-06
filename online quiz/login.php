<?php
session_start();
include 'connectdatabase.php';
$user=$_POST['login_username'];
$pass=$_POST['login_password'];
$sql="SELECT * FROM users where email='$user' and password='$pass'";
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result) > 0){   
   
	while($row = mysqli_fetch_assoc($result)) {
		$_SESSION['user'] = $row['name'];
		$_SESSION['course'] = $row['course'];
		$_SESSION['semister'] = $row['semister'];
		$_SESSION['email'] = $row['email'];
		$_SESSION['usn'] = $row['usn'];
		$_SESSION['profile']=$row['location'];
		unset($_SESSION['errorregister']);
		header ('Location:Index2.php');
                
	}
}
else {
	$_SESSION['errorregister']="<span style='color:#E34234'>Incorrect Email/Password<span style='color:#E34234'>";
    header ('Location:Index2.php');
}

mysqli_close($con);

	
?>