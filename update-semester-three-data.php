<?php
include_once 'connection.php';
if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM y2semester1 WHERE studentNO=".$_GET['edit_id'];
 $result_set=mysql_query($sql_query);
 $fetched_row=mysql_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
$student_no = $_POST['student_no'];
 $Reg_No = $_POST['Reg_No'];
 $student_fname = $_POST['student_fname'];
 $student_lname = $_POST['student_lname'];
 $Data_Structures_and_Algorithms = $_POST['Data_Structures_and_Algorithms'];
 $Artificial_Intelligence = $_POST['Artificial_Intelligence'];
 $Computer_Networks = $_POST['Computer_Networks'];
 $Discrete_Mathematics = $_POST['Discrete_Mathematics'];
 $Formal_Methods_Software_Engineering = $_POST['Formal_Methods_Software_Engineering'];


 // variables for input data

 // sql query for update data into database
 $sql_query = "UPDATE y1semester2 SET FirstName='$student_fname',LastName='$student_lname',studentNO='$student_no',CSC2100=' $Data_Structures_and_Algorithms ', BSE2105=' $Formal_Methods_Software_Engineering  ',BSE2103=' $Computer_Networks ',CSC2114=' $Artificial_Intelligence',MTH3105='  $Discrete_Mathematics,RegNo='$Reg_No' WHERE studentNO=".$_GET['edit_id'];
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
          <td>Data_Structures_and_Algorithms</td>
          <td><input type="number" name="Data_Structures_and_Algorithms" value="<?php echo $fetched_row['CSC2100']; ?>" required/></td>
        </tr>
        <tr>
          <td>Artificial_Intelligence</td>
          <td><input type="number" name="Artificial_Intelligence" value="<?php echo $fetched_row['CSC2114']; ?>" required/></td>
        </tr>
        <tr>
          <td>Computer_Networks</td>
          <td><input type="number" name="Computer_Networks" value="<?php echo $fetched_row['BSE2103']; ?>" required/></td>
        </tr>
        <tr>
          <td>Discrete_Mathematics</td>
          <td><input type="number" name="Discrete_Mathematics" value="<?php echo $fetched_row['MTH3105']; ?>" required/></td>
        </tr>
        <tr>
          <td>Formal_Methods_Software_Engineering</td>
          <td><input type="number" name="Formal_Methods_Software_Engineering" value="<?php echo $fetched_row['BSE2105']; ?>" required/></td>
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