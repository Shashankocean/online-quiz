<?php
session_start();
?>
<html>
<head>
<?php

if ( ! isset($_SESSION['user']))
{
	echo "<div class='container'>
      <form class='form-signin' role='form' style='max-width: 330px; padding: 15px;  margin: 0 auto;'>
        <h2 class='form-signin-heading'>Please sign in</h2>
        <input type='email' class='form-control' placeholder='Email address' required='' autofocus=''>
        <input type='password' class='form-control' placeholder='Password' required=''>
        <div class='checkbox'>
          <label>
            <input type='checkbox' value='remember-me'> Remember me
          </label>
        </div>
        <button class='btn btn-lg btn-primary btn-block' type='submit'>Sign in</button>
		<span id='incorrect'></span>
      </form>

    </div>";
}
else{
	echo "<div class='jumbotron'>
        <h1>Welcome to QUIZZI!</h1>
        <p class='lead'>".$_SESSION['user']."</p>
        <p><a class='btn btn-lg btn-success' href='#' role='button'>Start Quizzi</a></p>
		</div>";
}

?>
</head>
<body>

</body>
</html>