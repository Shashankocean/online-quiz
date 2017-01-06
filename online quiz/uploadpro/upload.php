<?php
session_start();
$_SESSION['profile']='shanky.png';
include('../connectdatabase.php');
if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"../userimages/" . $_FILES["image"]["name"]);
			
			$location="userimages/" . $_FILES["image"]["name"];
			
			$email=$_SESSION['email'];
			
			
			$save="UPDATE users set location='$location' where email = '$email' ";

				$result=mysqli_query($con,$save) or die(mysqli_error($con)) ;
				if($result){
					$_SESSION['profile']="userimages/".$_FILES["image"]["name"];
				header('location:../userprofile.php');
				}
				else{
					
					$_SESSION['profile']='userimages/shanky.png';
					header('location:../userprofile.php');
				}
			exit();					
	}
?>
