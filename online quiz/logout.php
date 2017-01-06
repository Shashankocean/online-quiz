<?php
session_start();

   unset($_SESSION['user']);
	unset($_SESSION['course']);
	unset($_SESSION['semister']);
	unset($_SESSION['email']);
	unset($_SESSION['usn']);
	unset($_SESSION['errorregister']);
	unset($_SESSION['profile']);

   session_destroy();
   header ('Location:Index2.php');
   
   
?>