<?php
include 'connection.php';


     if(loggedIn())
	 {
	  //logout
	   header('location: logout.php');
     }
	 else
	 {
        include 'login.php';
     }
?>