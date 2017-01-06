<?php
echo "<div class='container'>
    	<div class='row'>
			<div class='col-md-6 col-md-offset-3'>
				<div class='panel panel-login'>
					<div class='panel-heading'>
						<div class='row'>
							<div class='col-xs-6'>
								<a href='#' class='active' id='login-form-link'>Sign in</a>
							</div>
							<div class='col-xs-6'>
								<a href='#' id='register-form-link'>Register</a>
							</div>
						</div>
						<hr>
					</div>
					<div class='panel-body'>
						<div class='row'>
							<div class='col-lg-12'>
								<form id='login-form' action='login.php' method='post' role='form' style='display: block;'>
									<div class='form-group'>
										<input type='email' name='login_username' id='login_username' tabindex='1' class='form-control' placeholder='Email' required autofocus value=''>
									</div>
									<div class='form-group'>
										<input type='password' name='login_password' id='login_password' tabindex='2' class='form-control' placeholder='Password' required>
									</div>
									<div class='form-group text-center'>
										<input type='checkbox' tabindex='3' class='' name='remember' id='remember'>
										<label for='remember'> Remember Me</label>
									</div>
									<div class='form-group'>
										<div class='row'>
											<div class='col-sm-6 col-sm-offset-3'>
												<input type='submit' name='login-submit' id='login-submit' tabindex='4' class='form-control btn btn-login' value='Log In'>
											</div>
										</div>
									</div>
									<div class='form-group'>
										<div class='row'>
											<div class='col-lg-12'>
												<div class='text-center'>
													<a href='#' tabindex='5' class='forgot-password'>Forgot Password?</a>
												</div>
											</div>
										</div>
									</div>
								</form>
								<form id='register-form' action='registeruser.php' method='post' role='form' style='display: none;'>
									<div class='form-group'>
										<input type='text' name='username' id='username' tabindex='1' class='form-control' placeholder='Username' required autofocus value=''>
									</div>
									<div class='form-group'>
										<input type='text' name='usn' id='usn' tabindex='1' class='form-control' placeholder='USN' required autofocus value=''>
									</div>
									<div class='form-group'>
										<input type='email' name='email' id='email' tabindex='1' class='form-control' placeholder='Email Address' required value='' onKeyPress='displayerror('email')'>
										";
										if(isset($_SESSION['errorregister']))
											echo $_SESSION['errorregister'];
										
										echo "
									</div>
									<div class='form-group'>
										<input type='text' name='course' id='course' tabindex='2' class='form-control' placeholder='Course' required value=''>
									</div>
									<div class='form-group'>
										<select class='form-control' name='semister' id='semister' onchange='load_subject()'>
										  <option value='-select-'>-select semister- </option>
										  <option value='1'> 1 </option>
										  <option value='2'> 2 </option>
										  <option value='3'> 3 </option>
										  <option value='4'> 4 </option>
										  <option value='5'> 5 </option>
										  <option value='6'> 6 </option>
										</select>
									</div>
									<div class='form-group'>
										<input type='password' name='password' id='password' tabindex='3' class='form-control' placeholder='Password' value='' required >
									</div>
									<div class='form-group'>
										<input type='password' name='confirm-password' id='confirm-password' onkeyup='checkPass(); ' tabindex='3' value='' class='form-control' placeholder='Confirm Password' required >
										
									</div>
									
									<div class='form-group'>
										<div class='row'>
											<div class='col-sm-6 col-sm-offset-3'>
												<input type='submit' name='register-submit' id='register-submit' tabindex='4' class='form-control btn btn-register' value='Register Now'>
											</div>
											
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>";
	?>
	