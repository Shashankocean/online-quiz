<!DOCTYPE html>
<html>
<head>


</head>
<body>

<?php
include 'connectdatabase.php';


$sql="SELECT * FROM course";
$result = mysqli_query($con,$sql);


if(mysqli_num_rows($result) > 0){
	while($row = mysqli_fetch_assoc($result)) {
		        echo "<li role='presentation'><a role='menuitem' tabindex='-1' href='#' onclick='select_course('MCA')'>".$row['coursename']."</a></li>";
                
	}
}
else {
    echo "0 results";
}

mysqli_close($con);
?>

  
</body>
</html>