<?php
session_start();

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

  <style type="text/css" ids="holderjs-style"></style></head>

  <body onload="demo.js">

    <?php include 'header2.php'; ?>
    

    <div class="container-fluid"><!--container 1-->
      <div class="row"><!--row 1-->
        <div class="col-sm-3 col-md-2 sidebar"><!--coll 1-->
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Select Information</a></li>
            
            <li><div class="form-group">
			
			 
				<label for="selcourse">Select course:</label>	
				<select class="form-control" id="selcourse" name="selcourse" onchange="load_subject()" >
				<option>-select-</option>
				 <?php
				
				$sql="SELECT * FROM course";
				$result = mysqli_query($con,$sql);


				if(mysqli_num_rows($result) > 0){
					while($row = mysqli_fetch_assoc($result)) { ?>
                <option value='<?php echo $row['coursename']; ?>'><?php echo $row['coursename']; ?></option>
                
              	<?php }
				}
				else {
					echo "0 results";
				}

				
				?>
              </select>
			  <label for="semister"> Select Semister:</label>
			  <select class="form-control" name="semister" id="semister" onchange="load_subject()">
			  <option value="-select-">-select- </option>
			  <option value="1"> 1 </option>
			  <option value="2"> 2 </option>
			  <option value="3"> 3 </option>
			  <option value="4"> 4 </option>
			  <option value="5"> 5 </option>
			  <option value="6"> 6 </option>
			  </select>
			  <label for="selsubject">Select Subject:</label>
              <select class="form-control" id="selsubject" name="selsubject">
			  <option>-select-</option>
			  
			  </select>
            
			</div>
			
            </li>
			<li><center>
			<?php
			if(isset($_SESSION['user']))
			{ ?>
			
			<input type="submit" class="btn btn-info" value="Play" onclick="showInfo(document.getElementById('selcourse').value,document.getElementById('semister').value,document.getElementById('selsubject').value)"></center></li>
			<?php
			}
			else
			{
				echo "<input type='button' class='btn btn-info' value='Sign First'>";
			}
			?>
          </ul>
         
        </div><!--end coll 1(sidebar)-->
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" id="display">
		 <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Topers in subject</h2>
            </div>
			<?php
			$maxscore=0;
			$sql="select subject from userrecord group by subject"; 
					$result=mysqli_query($con,$sql) or die(mysqli_error($con));
					if(mysqli_num_rows($result)>0)
					{
						while($row=mysqli_fetch_assoc($result))
						{
							$sql2="SELECT MAX(score) FROM userrecord WHERE subject='$row[subject]'";
							$result2=mysqli_query($con,$sql2) or die(mysqli_error($con));
							if(mysqli_num_rows($result2)>0)
							{
								while($row2=mysqli_fetch_assoc($result2))
								{
									$maxscore=$row2['MAX(score)'];
									$sql3="SELECT * FROM `users` WHERE email in (SELECT user_id from userrecord where subject='$row[subject]' and score=$maxscore)";
									$result3=mysqli_query($con,$sql3) or die(mysqli_error($con));
									if(mysqli_num_rows($result3)>0)
									{
										while($row3=mysqli_fetch_assoc($result3))
										{ ?>
									
											<div class="col-lg-2 col-sm-6 text-center">
												<center><img class="img-circle img-responsive img-center" src="<?php echo $row3['location']?>" alt="no image" style="width:100px; height:100px"></center>
												<h3><span class="text-uppercase"><?php echo $row3['name'] ?></span></br>
													<small><?php echo $row3['course'] ; echo " : sem ".$row3['semister'] ?></br>
													in <?php echo $row['subject'] ?></br>
													<span class="badge" ><?php echo "Scored : ".$maxscore ?></span></br><hr>
													</small>
												</h3>
												<p></p>
											</div>
											<?php
										}
									}
								}
							}
						}
					}
			?>
			
		</div>	

		
		
		
		</div><!--row end-->
    
	</div><!--end of container 1-->
     
    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
	<script src="ajax/connectsubject.js" ></script>


<div style="position: absolute; left: 0px; top: -9999px; width: 15px; height: 15px; z-index: 999999999;" class="global-zeroclipboard-container" id="global-zeroclipboard-html-bridge">      <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" id="global-zeroclipboard-flash-bridge" height="100%" width="100%">         <param name="movie" value="/assets/flash/ZeroClipboard.swf?noCache=1457959859146">         <param name="allowScriptAccess" value="never">         <param name="scale" value="exactfit">         <param name="loop" value="false">         <param name="menu" value="false">         <param name="quality" value="best">         <param name="bgcolor" value="#ffffff">         <param name="wmode" value="transparent">         <param name="flashvars" value="">         <embed src="/assets/flash/ZeroClipboard.swf?noCache=1457959859146" loop="false" menu="false" quality="best" bgcolor="#ffffff" name="global-zeroclipboard-flash-bridge" allowscriptaccess="never" allowfullscreen="false" type="application/x-shockwave-flash" wmode="transparent" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="" scale="exactfit" height="100%" width="100%">                </object>
</div>
</body>
</html>
