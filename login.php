<?php
include_once 'connection.php';
 if(isset($_POST['username']) || isset($_POST['password']))
		 {
		   $username = ($_POST['username']);
		   $password = ($_POST['password']);

			   if(!empty($username) && !empty($password))
			   {

					$query = "SELECT `adminID` AS ID,`AdminType` FROM `admin` WHERE `adminName` = '$username' AND `Password`= '$password' ";

					if( $query_run = mysql_query($query))
					{
					$row = mysql_fetch_array($query_run);
					$type = $row['AdminType'];


					 $query_num_rows = mysql_num_rows($query_run);
						if($query_num_rows == 0)
						{
							$msg = 'Invalid Username and Password Combinatoin';
						}
						else if($query_num_rows = 1)
						{

						 echo   ' your id is  '.$user_id = mysql_result($query_run, 0,'id');
							$_SESSION ['user_id'] = $user_id;
							echo "$type";

								   if($type == 'Administrator')
								   {
								   		header('location: register-student.php');

								   }

						}
					 }


				 }
				 else
				 {

				 $msg = 'Please Enter Username and Password';

				 }

   		}
		else
		{

	     $msg = 'Please Sign In';

   		}

   ?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>

    <!--Showing favicon-->
	<link rel="icon" type="image/png" href="images/logo.jpg" sizes="32x32">
    <!-- Core CSS -->
   <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>
<div id="header">Student Perfomance Management System</div>
<center><img id="front-logo" src="images/logo.jpg"></center>
    <div class="contain">
    <label><?php if(isset($msg)) { echo '<h4 class="panel-title">'.$msg.'</h4>';} ?></label>

            <form role="form" action = "#" method = "POST">
                <fieldset class="login">

                    <div class="">
                        <input class="form-control" placeholder="Username" name = "username" type="text" autofocus>
                    </div>
                    <div class="">
                        <input class="form-control" placeholder="Password" name = "password" type="password" value="">
                    </div>
                     <button type = "submit" class=" " value = " ">Login</button>

                </fieldset>
            </form>
        </div>

</body>

</html>
