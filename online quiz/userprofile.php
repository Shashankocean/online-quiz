<?php
session_start();
if(!isset($_SESSION['user']))
{
	header('location:Index2.php');
}
include 'connectdatabase.php';

?>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="icon/quiz.ico">

    <title>QUIZZI NHCE</title>
	
	<!--<script src="includeform.js" type="text/javascript" ></script>-->
	<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
	<script src="connection.js" type="text/javascript" ></script>
	<script src="ajax/connectsubject.js" type="text/javascript" ></script>
	<script src="goforsession.js" type="text/javascript" ></script>
	<script src="displayerror.js" type="text/javascript" ></script>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/sidebar.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">
	<link href="css/registration.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
	
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/jquery.min.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

  <style type="text/css" ids="holderjs-style">
  .bg_blur
{
    background-image:url('userimages/cover1.jpg');
    height: 300px;
    background-size: cover;
}
.follow_btn {
    text-decoration: none;
    position: absolute;
    left: 80.2%;
    top: 75%;
    width: 39.2%;
    height: 9%;
    background-color: #c0c0c0;
    
    padding-top: 1px;
    color: #fff;
    text-align: center;
    font-size: 15px;
    
}

.follow_btn:hover {
    text-decoration: none;
    position: absolute;
    left: 80.2%;
    top: 75%;
    width: 39.2%;
    height: 9%;
    background-color: #f0f0ff;
    
    padding-top: 1px;
    color: #9a9a9a;
    text-align: center;
    font-size: 15px;
    
}
.picture{
    height:150px;
    width:150px;
    position:absolute;
    top: 75px;
    left:-75px;
}

.picture_mob{
    position: absolute;
    width: 35%;
    left: 35%;
    bottom: 70%;
}
.header{
    color : #808080;
    margin-left:10%;
    margin-top:70px;
}


  </style>
  </head>

  <body onload="demo.js">

    <?php include 'header2.php'; 
	
	?>
	<!----------------------------------------------------------------------------------------------------------------->
	<div class="container" style="margin-top: 20px; margin-bottom: 20px;">
		<div class="row panel" style="background-color: #eaeaff; width:100%">
			<div class="col-md-4 bg_blur ">
				<div class="btn follow_btn" data-toggle="modal" data-target="#myModal">Change</div>
			</div>
			<div class="col-md-8  col-xs-12" style="">
				<img src="<?php
				if(isset($_SESSION['profile']))
				echo $_SESSION['profile'];
								
				?>" class="img-thumbnail  picture"  />
			  <img src="userimages/default.jpg" class="img-thumbnail visible-xs picture_mob" />
			   <div class="header">
					<h2 class="text-uppercase"><?php echo $_SESSION['user'] ?></h2>
					<h3><?php echo $_SESSION['email'] ?></h3>
					<h4 class="text-uppercase"><?php echo $_SESSION['usn'] ?></h4>
					<h5><?php echo $_SESSION['course'] ?></h5>
					<h6><?php echo $_SESSION['semister'] ?>&nbsp sem</h6>
					
					
			   </div>
			</div>
		</div>
		<hr>
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title">upload profile image</h4>
			  </div>
			  <div class="modal-body">
				 <form action="uploadpro/upload.php" method="post" enctype="multipart/form-data" name="addroom">
				 Image: <input type="file" name="image" class="ed btn btn-default">
				 
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">upload</button>
				</form>
			  </div>
			</div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
		
		<div class="row panel">
		
		<?php echo "<table class='table'>";
		echo "<tr><th>#</th><th>Subject</th><th>Score</th>";
			echo "</tr>";
			$marks= 0;
			$wrong=0;
			$qno=0;
			$sql="SELECT * FROM userrecord where user_id='$_SESSION[email]' ";
			$result = mysqli_query($con,$sql) or die(mysqli_error($con));
			if(mysqli_num_rows($result) > 0){   
			   
				while($row = mysqli_fetch_assoc($result)) {
					$qno+=1;
					echo "<tr><td>".$qno."</td><td>".$row['subject']."</td>";
					
						echo "<td>".$row['score']."</td>";
						
					echo "</tr>";
				}
			}
			
		
		echo "</table>" ;
		?>
		</div>
	</div>
	
	<!------------------------------------------------------------------------------------------------------------->
	<!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
	<script src="ajax/connectsubject.js" ></script>


<div style="position: absolute; left: 0px; top: -9999px; width: 15px; height: 15px; z-index: 999999999;" class="global-zeroclipboard-container" id="global-zeroclipboard-html-bridge">      <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" id="global-zeroclipboard-flash-bridge" height="100%" width="100%">         <param name="movie" value="/assets/flash/ZeroClipboard.swf?noCache=1457959859146">         <param name="allowScriptAccess" value="never">         <param name="scale" value="exactfit">         <param name="loop" value="false">         <param name="menu" value="false">         <param name="quality" value="best">         <param name="bgcolor" value="#ffffff">         <param name="wmode" value="transparent">         <param name="flashvars" value="">         <embed src="/assets/flash/ZeroClipboard.swf?noCache=1457959859146" loop="false" menu="false" quality="best" bgcolor="#ffffff" name="global-zeroclipboard-flash-bridge" allowscriptaccess="never" allowfullscreen="false" type="application/x-shockwave-flash" wmode="transparent" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="" scale="exactfit" height="100%" width="100%">                </object>
</div>
	</body>
	</html>