<?php
//error_reporting(0);
include_once 'connection.php';

// delete condition
if(isset($_GET['delete_id']))
{
 $sql_query="DELETE FROM financial_table WHERE user_id=".$_GET['delete_id'];
 mysql_query($sql_query);
 header("Location: $_SERVER[PHP_SELF]");
}
// delete condition
?>
<!DOCTYPE html>
<html>
<head>
	<title>View</title>
	<link rel="icon" type="image/png" href="images/logo.jpg" sizes="32x32">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div id="header">Student's data
<?php

   //USERNAME
   if(loggedIn())
   {
     $name = getUserField('adminName');
     echo '<p id="username">'.$name.' <a href="logout.php"> Logout</a><p>';

   }else{
     header('location: index.php');
   }

?>
</div>
<div class="container">
        <div class="sub-menu">
            <ul>
              <li>Computer Science</li>
                <ul>
                  <li>Year One</li>
                    <ul>
                      <li><a href="view_semester_one.php">View Results for Semester I</a></li>
                      <li><a href="view_semester_two.php">View Results for Semester II</a></li>
                    </ul>
                </ul>
                <ul>
                  <li>Year Two</li>
                    <ul>
                      <li><a href="view_semester_three.php">View Results for Semester I</a></li>
                      <li><a href="view_semester_four.php">View Results for Semester II</a></li>
                    </ul>
                </ul>
                <ul>
                  <li>Year Three</li>
                    <ul>
                      <li><a href="view_semester_five.php">View Results for Semester I</a></li>
                      <li><a href="view_semester_six.php">View Results for Semester II</a></li>
                    </ul>
                </ul>
            </ul>
          </div>
      </div>
<div class="menu">
<p align="center">Main Menu</p>
<ul>
	<li><a href="register-student.php">Register Student</a></li>
  <li class="active"><a href="view-students-data.php">View Students Data</a></li>
  <li><a href="view-reports.php">View Reports</a></li>
  <li><a href="course-outline.php">Course Outline</a></li>
</ul>
</body>
</html>
