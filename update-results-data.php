<?php
error_reporting(0);
include_once 'connection.php';
if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM results_table WHERE user_id=".$_GET['edit_id'];
 $result_set=mysql_query($sql_query);
 $fetched_row=mysql_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
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

 // sql query for update data into database
 $sql_query = "UPDATE results_table SET student_fname='$student_fname',student_lname='$student_lname',course_unit='$course_unit',coursework_marks='$coursework_marks', Test_marks='$Test_marks',Exam_marks='$Exam_marks',Reg_No='$Reg_No',Lecturers_name='$Lecturers_name' WHERE user_id=".$_GET['edit_id'];
 // sql query for update data into database
 
 // sql query execution function
 if(mysql_query($sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Are Updated Successfully');
  window.location.href='results-data.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('error occured while updating data');
  </script>
  <?php
 }
 // sql query execution function
}
if(isset($_POST['btn-cancel']))
{
 header("Location: results-data.php");
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
<div id="header">Results Form
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
					<td><input type="text" name="student_fname" placeholder="First Name" value="<?php echo $fetched_row['student_fname']; ?>" required/></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="" name="student_lname" placeholder="Second Name" value="<?php echo $fetched_row['student_lname']; ?>" ></td>
				</tr>
				<tr>
					<td>Course Unit</td>
					<td><input type="text" name="course_unit" placeholder="Course Unit" value="<?php echo $fetched_row['course_unit']; ?>" required/></td>
				</tr>
				<tr>
					<td>Coursework Marks</td>
					<td><input type="text" name="coursework_marks" placeholder="Coursework Marks" value="<?php echo $fetched_row['coursework_marks']; ?>"  required/></td>
				</tr>
				<tr>
					<td>Test Marks</td>
					<td><input type="text" name="Test_marks" placeholder="Test Marks" value="<?php echo $fetched_row['Test_marks']; ?>" required/></td>
				</tr>
				<tr>
					<td>Exam Marks</td>
					<td><input type="text" name="Exam_marks" placeholder="Exam Marks" value="<?php echo $fetched_row['Exam_marks']; ?>" required/></td>
				</tr>
				<tr>
					<td>Registration No</td>
					<td><input type="text" name="Reg_No" placeholder="Registration Number" value="<?php echo $fetched_row['Reg_No']; ?>" required/></td>
				</tr>
				<tr>
					<td>Lecturer's Name</td>
					<td><input type="text" name="Lecturers_name" placeholder="Lecturer's Name" value="<?php echo $fetched_row['Lecturers_name']; ?>" required/></td>
				</tr>
				<tr>
					<td colspan="2"><center><button type="submit" name="btn-update">Update</button><a href="results-data.php"><lable id="view" name="btn-cancel">Cancel</label></a></center></td>
				</tr>
			</tbody>
		</table>
		</fieldset>
	</form>
	
</div>
<div class="menu">
      <p align="center">Main Menu</p>
      	<ul>
      		<li><a href="finance.php">Financial Form</a></li>
	      	<li><a href="financial-data.php">Financial Data</a></li>	
      		<li><a href="results.php">Result Form</a></li>
		    <li class="active"><a href="results-data.php">Results Data</a></li>
      	</ul>
      </div>
</body>
</html>