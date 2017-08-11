<?php
include_once 'connection.php';
if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM y1semester2 WHERE studentNO=".$_GET['edit_id'];
 $result_set=mysql_query($sql_query);
 $fetched_row=mysql_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
/// variables for input data
 $student_fname = $_POST['student_fname'];
 $student_lname = $_POST['student_lname'];
 $student_no = $_POST['student_no'];
 $Reg_No = $_POST['Reg_No'];
 $SAAD = $_POST['SAAD'];
 $Calculus = $_POST['Calculus'];
 $OOP = $_POST['OOP'];
 $N_Analysis= $_POST['Numerical_Analysis'];
 $DIM = $_POST['DIM'];


 // variables for input data

 // sql query for update data into database
 $sql_query = "UPDATE y1semester2 SET First Name='$student_fname',Last Name='$student_lname',studentNO='$student_no',BIS1206='$SAAD ', MTH1203=' $Calculus ',CSC1214=' $OOP',MTH2203=' $N_Analysis',BIS1204=' $DIM,RegNo='$Reg_No' WHERE studentNO=".$_GET['edit_id'];
 // sql query for update data into database
 
 // sql query execution function
 if(mysql_query($sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Are Updated Successfully');
  window.location.href='view_semester_two.php';
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
 header("Location: view_semester_two.php");
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
          <td><input type="text" name="student_fname"  value="<?php echo $fetched_row['FirstName']; ?>"></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="" name="student_lname"  value="<?php echo $fetched_row['LastName']; ?>"></td>
        </tr>
        <tr>
          <td>Student No</td>
          <td><input type="text" name="student_no"  value="<?php echo $fetched_row['studentNO']; ?>"></td>
        </tr><tr>
					<td>Registration No</td>
					<td><input type="text" name="Reg_No" value="<?php echo $fetched_row['RegNo']; ?>"  required/></td>
				</tr>
        <tr>
          <td>SAAD</td>
          <td><input type="number" name="SAAD" value="<?php echo $fetched_row['BIS1206']; ?>" required/></td>
        </tr>
        <tr>
          <td>Calculus one</td>
          <td><input type="number" name="Calculus" value="<?php echo $fetched_row['MTH1203']; ?>" required/></td>
        </tr>
        <tr>
          <td>Object Oriented Programming</td>
          <td><input type="number" name="OOP" value="<?php echo $fetched_row['CSC1214']; ?>" required/></td>
        </tr>
        <tr>
          <td>Numerical_Analysis</td>
          <td><input type="number" name="Numerical_Analysis" value="<?php echo $fetched_row['MTH2203']; ?>" required/></td>
        </tr>
        <tr>
          <td>DIM</td>
          <td><input type="number" name="DIM" value="<?php echo $fetched_row['BIS1204']; ?>" required/></td>
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