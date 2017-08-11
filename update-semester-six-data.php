<?php
include_once 'connection.php';
if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM y3semester2 WHERE studentNO=".$_GET['edit_id'];
 $result_set=mysql_query($sql_query);
 $fetched_row=mysql_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
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

 // variables for input data

 // sql query for update data into database
 $sql_query = "UPDATE y3semester2 SET First Name='$student_fname',Last Name='$student_lname',studentNO='$student_no', BSE2206=' $Data_Comm ',CSC3205=' $C_Design ',CSC3211 ='CS_project2',	CSC3207/BIS3205='$CSDWBI',BSE3202/CSC3217=' $DSDETC  ,RegNo='$Reg_No' WHERE studentNO=".$_GET['edit_id'];
 // sql query for update data into database
 	 	 	 	
 // sql query execution function
 if(mysql_query($sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Are Updated Successfully');
  window.location.href='view_semester_six.php';
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
 header("Location: view_semester_six.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>SemesterForm|Update</title>
  <link rel="icon" type="image/png" href="images/logo.jpg" sizes="32x32">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div id="header">Results Form
<?php

   //USERNAME & SESSION BEING CALLED AS A FUNCTION FROM CONNECTION FILE
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
<form method="post">
  <fieldset>
    <legend ALIGN="center">Please fill this form</legend>
    <table>
      <tbody>
        <tr>
          <td>Student Name</td>
          <td><input type="text" name="student_fname"  value="<?php echo $fetched_row['First Name']; ?>"></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="" name="student_lname"  value="<?php echo $fetched_row['Last Name']; ?>"></td>
        </tr>
        <tr>
		 	 	 		
          <td>Student No</td>
          <td><input type="text" name="student_no"  value="<?php echo $fetched_row['studentNO']; ?>"></td>
        </tr><tr>
					<td>Registration No</td>
					<td><input type="text" name="Registration_NO" value="<?php echo $fetched_row['RegNo']; ?>"  required/></td>
				</tr>
        <tr>
          <td>Data Communications</td>
          <td><input type="number" name="Data_Communications" value="<?php echo $fetched_row['BSE2206']; ?>" required/></td>
        </tr>
        <tr>
          <td>Compiler_Design</td>
          <td><input type="number" name="Compiler_Design" value="<?php echo $fetched_row['CSC3205']; ?>" required/></td>
        </tr>
        <tr>
          <td>Computer Science Project II</td>
          <td><input type="number" name="CS_project2" value="<?php echo $fetched_row['CSC3211']; ?>" required/></td>
        </tr>
        <tr>
          <td>Computer Security/ Emerging Trends in Computer Science </td>
          <td><input type="number" name="CSDWBI" value="<?php echo $fetched_row['CSC3207/BIS3205']; ?>" required/></td>
        </tr>
        <tr>
          <td> Data Warehousing/Distributed Systems Development</td>
          <td><input type="number" name="DSDETC" value="<?php echo $fetched_row['BSE3202/CSC3217']; ?>" required/></td>
        </tr>
        <tr>
          <td colspan="2"><center><button type="submit" name="btn-update">Submit</button></center></td>
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
      		<li><a href="view-reports.php">View Reports</a></li>
		    <li><a href="course-outline.php">Course Outline</a></li>
		    <li class="active"><a href="results-data.php">Results Data</a></li>
        </ul>
      </div>
</body>
</html>