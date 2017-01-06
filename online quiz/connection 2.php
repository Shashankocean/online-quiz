<!DOCTYPE html>
<html>
<head>
<!--<link href="css/bootstrap.min.css" rel="stylesheet">-->

</head>
<body>

<?php
$cource = $_GET['q'];
$sem = $_GET['se'];
$sub = $_GET['su'];
echo "$cource $sem $sub";

$con = mysqli_connect('localhost','root','','quizi');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}


$sql="SELECT * FROM play WHERE cource = '".$cource."' and sem =".$sem." and sub = '".$sub."'";
$result = mysqli_query($con,$sql);


if(mysqli_num_rows($result) > 0){
	while($row = mysqli_fetch_assoc($result)) {
		echo "<div class='row'>
                        <div class='col-lg-6'>
                          <div class='input-group form-group has-success has-feedback'><span class='input-group-addon'>
                            <input type='radio'>
                              </span>
                              <input type='text' class='form-control' id='inputSuccess2'>
                              <span class='glyphicon glyphicon-ok form-control-feedback'></span>
                            </div>
                         </div>
                        <div class='col-lg-6'>
                          <div class='input-group'> <span class='input-group-addon'>
                            <input type='radio'>
                            </span>
                            <input type='text' class='form-control' readonly>
                          </div>
                         </div>
                        </div>
                      <div class='row'>
                        <div class='col-lg-6'>
                          <div class='input-group'> <span class='input-group-addon'>
                            <input type='radio'>
                            </span>
                            <input type='text' class='form-control' readonly>
                          </div>
                      </div>
                      <div class='col-lg-6'>
                          <div class='input-group'> <span class='input-group-addon'>
                            <input type='radio'>
                            </span>
                            <input type='text' class='form-control' readonly>
                          </div>
                      </div>
                      </div>
                      </div>
                  </div>
                </div>";
				  
	}
}
else {
    echo "0 results";
}

mysqli_close($con);
?>
 <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
  
</body>
</html>