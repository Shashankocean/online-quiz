<!DOCTYPE html>
<?php
session_start();
include 'connectdatabase.php';
?>
<html>
<head>
<!--<link href="css/bootstrap.min.css" rel="stylesheet">-->

</head>
<body>

<?php

$course = $_GET['selcourse'];
$sem = $_GET['semister'];
$sub = $_GET['selsubject'];
$_SESSION['selsubject']=$sub;
$_SESSION['selsemister']=$sem;
$_SESSION['selcourse']=$course;
echo "<div class='alert alert-info' role='alert'><b>Course:&nbsp</b>$course &nbsp | &nbsp <b>Semister:&nbsp</b>$sem &nbsp | &nbsp <b>Subject:&nbsp</b>$sub</div>";

$sql1="DELETE from checksolu";
$result1=mysqli_query($con,$sql1) ;

 echo "<form method='post' action='checkanswer.php'>";
 
$sql="SELECT * FROM play WHERE course = '".$course."' and sem =".$sem." and sub = '".$sub."'";
$result = mysqli_query($con,$sql) or die(mysqli_error($con));
if(mysqli_num_rows($result) > 0){
	while($row = mysqli_fetch_assoc($result)) {
			$sql2="INSERT INTO checksolu values($row[qno],'$row[question]',$row[ans])";
			mysqli_query($con,$sql2);
		echo "<div class='item'>";
          echo "<div class='panel panel-default'>";
          echo "<div class='panel-heading'><h4>" . $row['question'] . "</h4></div>";
                    echo "<div class='panel-body'>";
					
					echo "<div class='row'>";
                    echo "<div class='col-lg-6'>";
                     echo "<div class='input-group form-group'><span class='input-group-addon'>";
                      echo "<input type='radio' name=".$row['qno']." value='1'>";
                      echo "</span>";
                      echo "<input type='text' class='form-control' value='" . $row['opt1'] ." ' readonly>";
                       
                       echo "</div>";
                          
						echo  "</div>";
                        
                        echo "<div class='col-lg-6'>";
                         echo "<div class='input-group'> <span class='input-group-addon'>";
                           echo "<input type='radio' name=".$row['qno']." value='2'>";
                          echo "</span>";
                          echo "<input type='text' class='form-control' value='" . $row['opt2'] ."' readonly>";
                          echo "</div>";
                          
                        echo "</div>";
                        
                      echo "</div>";
                      
                     echo " <div class='row'>";
                    echo "<div class='col-lg-6'>";
                          echo "<div class='input-group'>";
							echo "<span class='input-group-addon'>";
                            echo "<input type='radio' name=".$row['qno']." value='3'>";
                            echo "</span>";
                            echo "<input type='text' class='form-control' value='" . $row['opt3'] ."' readonly>";
                          echo "</div>";
                         
                        echo "</div>";
                        
                        echo "<div class='col-lg-6'>";
                         echo "<div class='input-group'> <span class='input-group-addon'>";
                            echo "<input type='radio' name=".$row['qno']." value='4'>";
                            echo "</span>";
                            echo "<input type='text' class='form-control' value='" . $row['opt4'] ."' readonly>";
                         echo " </div>";
                          
                        echo "</div>";
                        
                      echo "</div>";
                      
                   echo " </div>";
				   
				   
	}
}
else {
    echo "Sorry there is no MCQ for the subject <b>$sub</b>";
}
echo "<input type='submit' value='submit'>";
echo "</form>";
mysqli_close($con);
?>
 <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
  
</body>
</html>