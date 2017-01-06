<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>


<body>
<?php
			  
			  
			  
				include 'connectdatabase.php';
				$course = $_GET['course'];
			  $semister = $_GET['semister'];
				$sql="SELECT * FROM subject where `course`='$course' and `sem`='$semister'";
				$result = mysqli_query($con,$sql);


				if(mysqli_num_rows($result) > 0){
					while($row = mysqli_fetch_assoc($result)) {
             echo "<option value='".$row['subject']."'>".$row['subject']."</option>";
			 //echo "<option >".$course."</option>";
			   
                
              	}
				}
				else {
					echo "0 results";
				}

				mysqli_close($con);
			  
?>
</body>
</html>