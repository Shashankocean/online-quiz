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
                <h1 class="page-header">Quizzi
                    <small>It's Nice to Meet You!</small>
                </h1>
                <p>QuizZi is designed for Educational Institute like schools, Collages and Private Institutes to conduct logic tests of their students on a regular
				 basis. The system handles all the operations and generates reports as soon as the test is completed which saves the time of faculties spent on reviewing answer sheet. 
				</p>
            </div>
        </div>

        <!-- Team Members Row -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Our Team</h2>
            </div>
			<div class="col-lg-3 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="" alt="">
                <h3>
                    <small></small>
                </h3>
                <p></p>
            </div>
            <div class="col-lg-3 col-sm-6 text-center">
                <center> <img class="img-circle img-responsive img-center" src="adminpic/shanky.jpg" alt=""></center> 
                <h3>Shashank Nath</br>
                    <small>Front End designer</small>
                </h3>
                <p><a href="#">Facebook</a> |<a href="#"> Linkedin</a></p>
            </div>
            <div class="col-lg-3 col-sm-6 text-center">
                <center> <img class="img-circle img-responsive img-center" src="adminpic/swathi pr.jpg" alt=""></center> 
                <h3>Swathi P.R</br>
                    <small>Back End Developer</small>
                </h3>
                <p><a href="#">Facebook</a> |<a href="#"> twitter</a></p>
            </div>
			<div class="col-lg-3 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="" alt="">
                <h3>
                    <small></small>
                </h3>
                <p></p>
            </div>
            
            
            
            
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
