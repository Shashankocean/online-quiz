<?php

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

?>