<?php
//error_reporting(0);
include_once 'connection.php';
if(isset($_POST['btn-save']))
{
 // variables for input data
 $student_fname = $_POST['student_fname'];
 $student_lname = $_POST['student_lname'];
 $student_no = $_POST['student_no'];
 $Data_Comm = $_POST['Data_Communications'];
 $C_Design = $_POST['Compiler_Design'];
 $CS_project2 = $_POST['CS_project2'];
 $CSDWBI = $_POST['CSDWBI'];
 $DSDETC = $_POST['DSDETC'];
 $Reg_No = $_POST['Registration_NO'];


     /***************************************calculating the GPA of semester one*************/
     $GPA=0;
     $sum=0;
       $gradeMarks=array($Data_Comm,$C_Design, $CS_project2,$CSDWBI , $DSDETC);
       for ($i=0; $i<5; $i++){

       if($i==0 || $i==3){
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
       $totalcredits=$numbergrade*3;}


       }
       elseif ($i==2) {
         if($gradeMarks[$i]>79 && $gradeMarks[$i]<=100 ){
         $numbergrade=5;
         $totalcredits=$numbergrade*5;
         }
         elseif($gradeMarks[$i]>74 && $gradeMarks[$i]<=79 ){
         $numbergrade=4.5;
         //echo $numbergrade;
         $totalcredits=$numbergrade*5;}
         elseif($gradeMarks[$i]>69 && $gradeMarks[$i]<=74 ){
         $numbergrade=4;
         $totalcredits=$numbergrade*5;}
         elseif($gradeMarks[$i]>64 && $gradeMarks[$i]<=69 ){
         $numbergrade=3.5;
         $totalcredits=$numbergrade*5;}
         elseif($gradeMarks[$i]>59 && $gradeMarks[$i]<=64 ){
         $numbergrade=3;
         $totalcredits=$numbergrade*5;}
         elseif($gradeMarks[$i]>54 && $gradeMarks[$i]<=59 ){
         $numbergrade=2.5;
         $totalcredits=$numbergrade*5;}
         elseif($gradeMarks[$i]>49 && $gradeMarks[$i]<=54 ){
         $numbergrade=2;
         $totalcredits=$numbergrade*5;}
         else{
         $numbergrade=1;
         $totalcredits=$numbergrade*5;}
       }  else{

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
 $sql_query = "INSERT INTO y3semester2
 VALUES('$student_no','$Reg_No','$student_fname','$student_lname','$Data_Comm','$C_Design','$CS_project2','$CSDWBI','$DSDETC','$GPA')";
 // sql query for inserting data into database

 // sql query execution function
 if(mysql_query($sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('<?php echo $student_fname;"'s"?> your data has been successfully saved! That is All. Thank you!');
  window.location.href='semester-six.php';
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
<div id="header">Financial Form
<?php

	 //USERNAME
	 if(loggedIn())
	 {
	   $name = getUserField('adnimName');
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
					<td><input type="" name="student_lname" placeholder="Second Name" required/></td>
				</tr>
				<tr>
					<td>Student No</td>
					<td><input type="text" name="student_no" placeholder="Student Number" required/></td>
				</tr>
				<tr>
					<td>Registration N0</td>
					<td><input type="text" name="Registration_NO" placeholder="Registration NO" required/></td>
				</tr>
				<tr>
					<td>Data Communications</td>
					<td><input type="number" name="Data_Communications" placeholder="Data Communications" required/></td>
				</tr>
				<tr>
					<td>Compiler Design</td>
					<td><input type="number" name="Compiler_Design" placeholder="Compiler Design" required/></td>
				</tr>
				<tr>
					<td>Computer Science project 2</td>
					<td><input type="number" name="CS_project2" placeholder="Computer Science project 2" required/></td>
				</tr>
				<tr>
					<td>Computer Security/Data warehousing and business Intelligence</td>
					<td><input type="number" name="CSDWBI" placeholder="Computer Security/Data warehousing and business Intelligence" required/></td>
				</tr>
				<tr>
					<td>Distributed Systems Dev't/Emerging Trends in Cs</td>
					<td><input type="number" name="DSDETC" placeholder="Distributed Systems Dev't/Emerging Trends in Cs" required/></td>
				</tr>
				<tr>
					<td colspan="2"><center><button type="Save" name="btn-save">Submit</button></td>
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
