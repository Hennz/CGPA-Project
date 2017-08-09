<?php

include_once 'connection.php';
if(isset($_POST['btn-save']))
{
 // variables for input data
 $student_fname = $_POST['student_fname'];
 $student_lname = $_POST['student_lname'];
 $student_no = $_POST['student_no'];
 $reg_no = $_POST['Registration_Number'];
 $comp_lit = $_POST['comp_lit'];
 $ind_pro = $_POST['ind_pro'];
 $comm_skills = $_POST['comm_skills'];
 $arch = $_POST['arch'];
 $prog_c = $_POST['prog_c'];
 /***************************************calculating the GPA of semester one*************/
 $GPA=0;
 $sum=0;
/***Defining the constants for the grade marks*********/
     define('A', '5');
     define('B+', '4.5');
     define('B', '4');
     define('C+', '3.5');
     define('C', '3');
     define('D+', '2.5');
     define('D', '2');
     define('E+', '1.5');
     define('E', '1');
   $gradeMarks=array( $comm_skills,$arch,$ind_pro,$prog_c,$comp_lit );
 for ($i=0; $i<5; $i++){

 if($i==3){
   if($gradeMarks[$i]>79 && $gradeMarks[$i]<=100 ){
   $numbergrade=5;
 $totalcredits=$numbergrade*3;
 }
   elseif($gradeMarks[$i]>74 && $gradeMarks[$i]<=79 ){
   $numbergrade=4.5;
 $totalcredits=$numbergrade*3;}
   elseif($gradeMarks[$i]>69 && $gradeMarks[$i]<=74 ){
   $numbergrade=4;
 $totalcredits=$numbergrade*3;}
   elseif($gradeMarks[$i]>64 && $gradeMarks[$i]<=69 ){
   $numbergrade=3.5;
 $totalcredits=$numbergrade*3;}
   elseif($gradeMarks[$i]>59 && $gradeMarks[$i]<=64 ){
   $numbergrade=3;
 $totalcredits=$numbergrade*3;}
   elseif($gradeMarks[$i]>54 && $gradeMarks[$i]<=59 ){
      $numbergrade=2.5;
     $totalcredits=$numbergrade*3;}
   elseif($gradeMarks[$i]>49 && $gradeMarks[$i]<=54 ){
      $numbergrade=2;
      $totalcredits=$numbergrade*3;}
   else{
   $numbergrade=1;
 $totalcredits=$numbergrade*3;}


 }
 else {
   if($gradeMarks[$i]>79 && $gradeMarks[$i]<=100 ){
   $numbergrade=5;
   $totalcredits=$numbergrade*4;
   }
   elseif($gradeMarks[$i]>74 && $gradeMarks[$i]<=79 ){
   $numbergrade=4.5;
   //echo $numbergrade;
   $totalcredits=$numbergrade*4;}
   elseif($gradeMarks[$i]>69 && $gradeMarks[$i]<=74 ){
   $numbergrade=4;
   $totalcredits=$numbergrade*4;}
   elseif($gradeMarks[$i]>64 && $gradeMarks[$i]<=69 ){
   $numbergrade=3.5;
   $totalcredits=$numbergrade*4;}
   elseif($gradeMarks[$i]>59 && $gradeMarks[$i]<=64 ){
   $numbergrade=3;
   $totalcredits=$numbergrade*4;}
   elseif($gradeMarks[$i]>54 && $gradeMarks[$i]<=59 ){
   $numbergrade=2.5;
   $totalcredits=$numbergrade*4;}
   elseif($gradeMarks[$i]>49 && $gradeMarks[$i]<=54 ){
   $numbergrade=2;
   $totalcredits=$numbergrade*4;}
   else{
   $numbergrade=1;
   $totalcredits=$numbergrade*4;}
 }
 $sum+=$totalcredits;
 }
 $GPA=$sum/19;
 /***************************************end of the calculation of the GPA of semester one*************/

 // sql query for inserting data into database
 $sql_query = "INSERT INTO y1semester1 VALUES('$student_no','$reg_no','$student_fname','$student_lname','$comm_skills','$arch','$ind_pro ','$prog_c','$comp_lit','$GPA')";
 // sql query for inserting data into database

 // sql query execution function
 if(mysql_query($sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('<?php echo $student_fname;"'s"?> your data has been successfully saved! That is All. Thank you!');
  window.location.href='semester-one.php';
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
	<title>Financial Form</title>
	<link rel="icon" type="image/png" href="images/logo.jpg" sizes="32x32">
	<link rel="stylesheet" type="text/css" href="css/style.css">
<body>
<div id="header">Semester one_YR1
<?php

	 //USERNAME
	 if(loggedIn())
	 {
	   $name = getUserField('adminName');
	   echo '<p id="username">('.$name.' )<a href="logout.php"> Logout</a><p>';

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
					<td><input type="text" name="student_lname" placeholder="Second Name" required/></td>
				</tr>
				<tr>
					<td>Student No</td>
					<td><input type="text" name="student_no" placeholder="Student Number" required/></td>
				</tr>
				<tr>
					<td>Registration No</td>
					<td><input type="text" name="Registration_Number" placeholder="Registration Number" required/></td>
				</tr>
				<tr>
					<td>Comp Lit</td>
					<td><input type="number" name="comp_lit" placeholder="Comp Literacy" required/></td>
				</tr>
				<tr>
					<td>Individual Project</td>
					<td><input type="number" name="ind_pro" placeholder="Individual Project" required/></td>
				</tr>
				<tr>
					<td>Communication Skills</td>
					<td><input type="number" name="comm_skills" placeholder="Communication Skills" required/></td>
				</tr>
				<tr>
					<td>Computer Architecture</td>
					<td><input type="number" name="arch" placeholder="Computer Architecture" required/></td>
				</tr>
				<tr>
					<td>Programmng C</td>
					<td><input type="number" name="prog_c" placeholder="Structured Programmng" required/></td>
				</tr>
				<tr>
					<td colspan="2"><center><button type="Save" name="btn-save">Submit</button></center></td>
				</tr>
			</tbody>
		</table>
		</fieldset>
	</form>
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
