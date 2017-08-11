<?php
include_once 'connection.php';
if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM y2semester2 WHERE studentNO=".$_GET['edit_id'];
 $result_set=mysql_query($sql_query);
 $fetched_row=mysql_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
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

 // variables for input data

 // sql query for update data into database
 $sql_query = "UPDATE y2semester2 SET FirstName='$student_fname',LastName='$student_lname',studentNO='$student_no',CSC2200='  $OSystems ', CSC1209='  $LProgramming  ',CSC2209='  $SProgramming',CSC2207=' $Automata ',MTH3105='  $RMethodology ,RegNo='$Reg_No' WHERE studentNO=".$_GET['edit_id'];
 // sql query for update data into database
 
 // sql query execution function
 if(mysql_query($sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Are Updated Successfully');
  window.location.href='view_semester_three.php';
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
 header("Location: view_semester_three.php");
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
          <td>Operating Systems</td>
          <td><input type="number" name="OSystems" value="<?php echo $fetched_row['CSC2200']; ?>" required/></td>
        </tr>
        <tr>
          <td>Linear Programming</td>
          <td><input type="number" name="LProgramming" value="<?php echo $fetched_row['CSC1209']; ?>" required/></td>
        </tr>
        <tr>
          <td>ACComputability</td>
          <td><input type="number" name="ACComputability" value="<?php echo $fetched_row['CSC2210']; ?>" required/></td>
        </tr>
        <tr>
          <td>RMethodology</td>
          <td><input type="number" name="RMethodology" value="<?php echo $fetched_row['CSC2207']; ?>" required/></td>
        </tr>
        <tr>
          <td>Systems Programming</td>
          <td><input type="number" name="SProgramming" value="<?php echo $fetched_row['CSC2209']; ?>" required/></td>
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