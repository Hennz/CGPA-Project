<?php
//error_reporting(0);
include_once 'connection.php';
if(isset($_POST['btn-save']))
{
 // variables for input data
 $student_fname = $_POST['student_fname'];
 $student_lname = $_POST['student_lname'];
 $student_no = $_POST['student_no'];
 $D_O_B = $_POST['D_O_B'];
 $Amount_paid = $_POST['Amount_paid'];
 $Balance = $_POST['Balance'];
 $Email = $_POST['Email'];
 $Next_of_kin = $_POST['Next_of_kin'];
 $Sponsor = $_POST['Sponsor'];
 $Telephone = $_POST['Telephone'];
 $Sponsors_contact = $_POST['Sponsors_contact'];
 $Reg_No = $_POST['Reg_No'];

 // sql query for inserting data into database
 $sql_query = "INSERT INTO financial_table(
 student_fname,student_lname,student_no,D_O_B,Amount_paid,Balance,Email,Next_of_kin,Sponsor,Telephone,Sponsors_contact,Reg_No)
 VALUES('$student_fname','$student_lname','$student_no','$D_O_B','$Amount_paid','$Balance','$Email','$Next_of_kin','$Sponsor','$Telephone','$Sponsors_contact','$Reg_No')";
 // sql query for inserting data into database

 // sql query execution function
 if(mysql_query($sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('<?php echo $student_fname;"'s"?> your data has been successfully saved! That is All. Thank you!');
  window.location.href='index.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('We are sorry! There was a problem while saving your data!');
  </script>
  <?php
 }
 // sql query execution function
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Register Student</title>
	<link rel="icon" type="image/png" href="images/logo.jpg" sizes="32x32">
	<link rel="stylesheet" type="text/css" href="css/style.css">
<body>
<div id="header">Register Student
<?php

	 //USERNAME
	 if(loggedIn())
	 {
	   $name = getUserField('adminName');
	   echo '<p id="username">( '.$name.' )<a href="logout.php"> Logout</a><p>';

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
							<li><a href="Semester-one.php">Semester I</a></li>
							<li><a href="Semester-two.php">Semester II</a></li>
						</ul>
				</ul>
				<ul>
					<li>Year Two</li>
						<ul>
							<li><a href="Semester-three.php">Semester I</a></li>
							<li><a href="Semester-four.php">Semester II</a></li>
						</ul>
				</ul>
				<ul>
					<li>Year Three</li>
						<ul>
							<li><a href="Semester-five.php">Semester I</a></li>
							<li><a href="Semester-six.php">Semester II</a></li>
						</ul>
				</ul>
		</ul>
	</div>

</div>
 <div class="menu">
      <p align="center">Main Menu</p>
      	<ul>
      		<li class="active"><a href="register-student.php">Register Student</a></li>
	      	<li><a href="view-students-data.php">View Students Data</a></li>
      		<li><a href="view-reports.php">View Reports</a></li>
		    <li><a href="course-outline.php">Course Outline</a></li>
      	</ul>
      </div>
</body>
</html>
