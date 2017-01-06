
<?php

 echo " <nav class='navbar navbar-default navbar-fixed-top' id='navi' >
         <div class='container-fluid'>
             <div class='row navbar-toogle' style='background-color:#FFFFFF'><!--row containing Header,search bar,signin-signup-->
          <!--header-->
               <div class=' col-sm-3 col-md-4  col-lg-4'>
                    <div class=' navbar-header'>
                        <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#myNavbar0'>
                            <span class='sr-only'>Toggle navigation</span>
                            <span class='icon-bar' ></span>
                            <span class='icon-bar' ></span>
                            <span class='icon-bar' ></span> 
                            <span class='icon-bar' ></span>
                        </button>
                        <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#myNavbar1'>
                              <span class='glyphicon glyphicon-search' ></span>
                        </button>
                        <a href='Index2.php' class='navbar-brand'><font size='+3'  class='.header'>QuizZi</font></a>
                    </div>
                </div>
              <!--search box-->
                <div class='col-sm-9 col-md-8 col-lg-8'>
                    <div class='collapse navbar-collapse' id='myNavbar1' > 
                        <form class='navbar-nav navbar-form' role='search' ><!--navbar-form navbar-collapse-->
                            
                        </form>
                    </div>
                </div> 
             </div>

            <div class='row nav navbar-inverse'  ><!--row containing Home,jobs,etc-->
                  <div class='collapse navbar-collapse' id='myNavbar0' >
                    <ul class='nav navbar-nav'>
                        <li>
                          <a href='Index2.php' style='color:#07B450;'><span class='glyphicon glyphicon-home'></span></a>
                        </li>
                     
                        <li>
                          <a href='topers_list.php'>Topers List</a>
                        </li>
                        
                        <li>
                          <a href='about.php'>About Us</a>
                        </li>
                    </ul>
                    <ul class='nav navbar-nav navbar-right' style='margin-right:20px; margin-top:0'>
						
					   <li class='dropdown'>
                            <a href='#' class='dropdown-toggle' data-toggle='dropdown'>";
								?>
								<?php if(isset($_SESSION['user']))
								{
									echo "<img class='btn-group img-circle img-responsive img-center' src=' "?><?php
				if(isset($_SESSION['profile']))
				echo $_SESSION['profile'];
				else
					echo "userimages/shanky.png";
				?><?php echo "' style='width:25px; height:25px'>";
									echo " ".$_SESSION['user'];
									echo "<span class='caret'></span>";
								}
								?>
								<?php
								echo "</a>              
                            <div class='dropdown-menu list-group' >
                              <a href='userprofile.php' class='list-group-item'><span class='glyphicon glyphicon-user'></span> Profile</a>
								<a href='logout.php' class='list-group-item'><span class='glyphicon glyphicon-log-out'></span> logout </a>
							</div>
                        </li>
                        </ul>
                </div>
             </div>
         </div>
      </nav>";
	  
	  ?>