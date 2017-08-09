<?php
include_once 'connection.php';
if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM y1semester1 WHERE studentNO=".$_GET['edit_id'];
 $result_set=mysql_query($sql_query);
 $fetched_row=mysql_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
// variables for input data
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

 // variables for input data

 // sql query for update data into database
 $sql_query = "UPDATE y1semester1 SET FirstName='$student_fname',LastName='$student_lname',studentNO='$student_no',RegNo='$reg_no', Amount_paid='$comp_lit',Balance='$ind_pro',Email='$comm_skills',Next_of_kin='$arch ',Sponsor='$prog_c ' WHERE studentNO=".$_GET['edit_id'];
 // sql query for update data into database

 // sql query execution function
 if(mysql_query($sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Are Updated Successfully');
  window.location.href='view_semester_one.php';
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
 header("Location: view_semester_one.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Semester one y1 Form|Update</title>
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
					<td><input type="text" name="Registration_Number" value="<?php echo $fetched_row['RegNo']; ?>"  required/></td>
				</tr>
        <tr>
          <td>Comp Lit</td>
          <td><input type="number" name="comp_lit" value="<?php echo $fetched_row['CSC1100']; ?>" required/></td>
        </tr>
        <tr>
          <td>Individual Project</td>
          <td><input type="number" name="ind_pro" value="<?php echo $fetched_row['CSC1107']; ?>" required/></td>
        </tr>
        <tr>
          <td>Communication Skills</td>
          <td><input type="number" name="comm_skills" value="<?php echo $fetched_row['BIS1104']; ?>" required/></td>
        </tr>
        <tr>
          <td>Computer Architecture</td>
          <td><input type="number" name="arch" value="<?php echo $fetched_row['CSC1104']; ?>" required/></td>
        </tr>
        <tr>
          <td>Programmng C</td>
          <td><input type="number" name="prog_c" value="<?php echo $fetched_row['CSC1108']; ?>" required/></td>
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
          <li><a href="finance.php">Financial Form</a></li>
          <li class="active"><a href="financial-data.php">Financial Data</a></li>
          <li><a href="results.php">Result Form</a></li>
          <li><a href="results-data.php">Results Data</a></li>
        </ul>
      </div>
</body>
</html>
