<?php
session_start();

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
	<script>
	function checkPass()
{
    var pass1 = document.getElementById("password").value;
    var pass2 = document.getElementById("confirm-password").value;
    var ok = true;
    if (pass1 != pass2) {
        //alert("Passwords Do not match");
        document.getElementById("password").style.borderColor = "#E34234";
        document.getElementById("confirm-password").style.borderColor = "#E34234";
        ok = false;
    }
    else {
        document.getElementById("password").style.borderColor = "#21DC08";
        document.getElementById("confirm-password").style.borderColor = "#21DC08";
    }
    return ok;
} 
	</script>

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
				include 'connectdatabase.php';
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

				mysqli_close($con);
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
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main"><!-- coll 2 (main)-->
        <center><small style="color:#E34234" ><?php if(isset($_SESSION['errorregister']))
											echo $_SESSION['errorregister'];
										unset($_SESSION['errorregister']);
										
										 ?></small></center>
										 <hr>
            <!-- coll 2 main heading-->
            <div class="panel panel-default" >
            <div class="panel-body" id="display" > <?php 
			if ( ! isset($_SESSION['user']))
				{
					include 'registration.php';
				}
				else{
					echo "<div class='jumbotron'>
						<h1>Welcome to QUIZZI!</h1>
						<p class='lead'>".$_SESSION['user']."</p>
						<p><a class='btn btn-lg btn-success' href='userprofile.php' role='button'>Profile</a></p>
						</div>";
				}
			
			?>
			<script>
			$(function() {

    $('#login-form-link').click(function(e) {
		$("#login-form").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
		$('#register-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#register-form-link').click(function(e) {
		$("#register-form").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
		$('#login-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});

});
			</script>
			</div>
				
              <div class="panel-footer">
                <div class="btn-group">
                  
                  </div>
              </div>
			  </form>
            </div>
			
            <!--end panel 1-->
            <!---recomended 2     -->
          </div>
        <!--end coll 2 (main)-->
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