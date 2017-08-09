<?php
//error_reporting(0);
include_once 'connection.php';
if(isset($_POST['btn-save']))
{
 // variables for input data
 $student_no = $_POST['student_no'];
 $Reg_No= $_POST['Reg_No'];
 $student_fname = $_POST['student_fname'];
 $student_lname  = $_POST['student_lname'];
 $OSystems = $_POST['OSystems'];
 $LProgramming = $_POST['LProgramming'];
 $SProgramming = $_POST['SProgramming'];
 $Automata = $_POST['ACComputability'];
 $RMethodology = $_POST['RMethodology'];


   /***************************************calculating the GPA of semester one*************/
   $GPA=0;
   $sum=0;
     $gradeMarks=array($OSystems, $SProgramming, $LProgramming ,  $Automata ,  $RMethodology);
   for ($i=0; $i<5; $i++){

   if($i==0||$i==1){
     if($gradeMarks[$i]>79 && $gradeMarks[$i]<=100 ){
     $numbergrade=5;
   $totalcredits=$numbergrade*4;
   }
     elseif($gradeMarks[$i]>74 && $gradeMarks[$i]<=79 ){
     $numbergrade=4.5;
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
   else {
     if($gradeMarks[$i]>79 && $gradeMarks[$i]<=100 ){
     $numbergrade=5;
     $totalcredits=$numbergrade*3;
     }
     elseif($gradeMarks[$i]>74 && $gradeMarks[$i]<=79 ){
     $numbergrade=4.5;
     //echo $numbergrade;
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
   $sum+=$totalcredits;
   }
   $GPA=$sum/19;
   /***************************************end of the calculation of the GPA of semester one*************/
 // sql query for inserting data into database
 $sql_query = "INSERT INTO y2semester2
 VALUES('$student_no','$Reg_No','$student_fname','$student_lname','$OSystems','$LProgramming','$SProgramming','$Automata','$RMethodology','$GPA')";
 // sql query for inserting data into database

 // sql query execution function
 if(mysql_query($sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('<?php echo $student_fname;"'s"?> your data has been successfully saved! That is All. Thank you!');
  window.location.href='semester-four.php';
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
	<title>semester twoYR2</title>
	<link rel="icon" type="image/png" href="images/logo.jpg" sizes="32x32">
	<link rel="stylesheet" type="text/css" href="css/style.css">
<body>
<div id="header">Semester two yr2
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
		<legend align="center">Please fill this form</legend>
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
					<td>Registration no</td>
					<td><input type="text" name="Reg_No" placeholder="Registration no" required/></td>
				</tr>
				<tr>
					<td>Operating System</td>
					<td><input type="number" name="OSystems" placeholder="Operating System" required/></td>
				</tr>
				<tr>
					<td>Logic Programming</td>
					<td><input type="number" name="LProgramming" placeholder="Logic Programming" required/></td>
				</tr>
				<tr>
					<td>Systems Programming</td>
					<td><input type="number" name="SProgramming" placeholder="Systems Programming" required/></td>
				</tr>
				<tr>
					<td>Automa,Complexity&Computability</td>
					<td><input type="number" name="ACComputability" placeholder="A,C & C" required/></td>
				</tr>
				<tr>
					<td>Research Methodology</td>
					<td><input type="number" name="RMethodology" placeholder="Research Methodology" required/></td>
				</tr>

				<tr>
					<td colspan="2"><center><button type="submit" name="btn-save">Submit</button></center></td>
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
