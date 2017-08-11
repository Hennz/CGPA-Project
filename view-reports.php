<?php
include_once 'connection.php';
if(isset($_POST['btn-save']))
{
 // variables for input data
 $student_fname = $_POST['student_fname'];
 $student_lname = $_POST['student_lname'];
 $course_unit = $_POST['course_unit'];
 $coursework_marks = $_POST['coursework_marks'];
 $Test_marks = $_POST['Test_marks'];
 $Exam_marks = $_POST['Exam_marks'];
 $Reg_No = $_POST['Reg_No'];
 $Lecturers_name = $_POST['Lecturers_name'];
 // variables for input data

 // sql query for inserting data into database
 $sql_query = "INSERT INTO results_table(student_fname,student_lname,course_unit,coursework_marks,Test_marks,Exam_marks,Reg_No,Lecturers_name) VALUES('$student_fname','$student_lname','$course_unit','$coursework_marks','$Test_marks','$Exam_marks','$Reg_No','$Lecturers_name')";
 // sql query for inserting data into database
 
 // sql query execution function
 if(mysql_query($sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('<?php echo $student_fname; ?> your data has been successfully saved! That is All. Thank you!');
  window.location.href='results-data.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('We are sorry! There was a problem while saving your data! ');
  </script>
  <?php
 }
 // sql query execution function
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="icon" type="image/png" href="images/logo.jpg" sizes="32x32">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div id="header">Students Report
<?php

	 //USERNAME
	 if(loggedIn())
	 {
	   $name = getUserField('StaffName');
	   echo '<p id="username">'.$name.' <a href="logout.php"> Logout</a><p>';

	 }else{
		 header('location: index.php');
	 }
	 
?>
</div>
<div class="container">
<form method="post">
	<fieldset>
		<legend>Please fill this form</legend>
		<table>
			<tbody>
				<tr>
					<td>Student Name</td>
					<td><input type="text" name="student_fname" placeholder="First Name" required/></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="" name="student_lname" placeholder="Second Name" required/></td>
				</tr>
				<tr>
					<td>Course Unit</td>
					<td><input type="text" name="course_unit" placeholder="Course Unit" required/></td>
				</tr>
				<tr>
					<td>Coursework Marks</td>
					<td><input type="text" name="coursework_marks" placeholder="Coursework Marks" required/></td>
				</tr>
				<tr>
					<td>Test Marks</td>
					<td><input type="text" name="Test_marks" placeholder="Test Marks" required/></td>
				</tr>
				<tr>
					<td>Exam Marks</td>
					<td><input type="text" name="Exam_marks" placeholder="Exam Marks" required/></td>
				</tr>
				<tr>
					<td>Registration No</td>
					<td><input type="text" name="Reg_No" placeholder="Registration Number" required/></td>
				</tr>
				<tr>
					<td>Lecturer's Name</td>
					<td><input type="text" name="Lecturers_name" placeholder="Lecturer's Name" required/></td>
				</tr>
				<tr>
					<td colspan="2"><center><button type="submit" name="btn-save">Submit</button><a href="results-data.php"><lable id="view" name="">View Data</label></a></center></td>
				</tr>
			</tbody>
		</table>
		</fieldset>
	</form>
	
</div>
<div class="menu">
      <p align="center">Main Menu</p>
      	<ul>
      	  <li><a href="register-student.php">Register Student</a></li>
		  <li><a href="view-students-data.php">View Students Data</a></li>  
		  <li class="active"><a href="view-reports.php">View Reports</a></li>
		  <li><a href="course-outline.php">Course Outline</a></li>
      	</ul>
      </div>
</body>
</html>