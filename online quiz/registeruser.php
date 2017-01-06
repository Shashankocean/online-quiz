<?php
session_start();
include 'connectdatabase.php';
$user=$_POST['username'];
$usn=$_POST['usn'];
$pass=$_POST['password'];
$email=$_POST['email'];
$course=$_POST['course'];
$semister=$_POST['semister'];

$sql="INSERT INTO `users`( `name`, `course`, `semister`, `email`, `password`,`usn`) VALUES ('$user','$course','$semister','$email','$pass','$usn')";
$result = mysqli_query($con,$sql);
	if($result){   
   
		$_SESSION['user'] = $row['name'];
		$_SESSION['course'] = $row['course'];
		$_SESSION['semister'] = $row['semister'];
		$_SESSION['errorregister']="<span style='color:#21DC08'>Successfuly Register</span>";
		header ('Location:Index2.php');
                
	}
else {
	$_SESSION['errorregister']="<span style='color:#E34234'>Email already present</span>";
	header ('Location:Index2.php');
}

mysqli_close($con);

	
?>