<?php
include_once 'connection.php';
if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM financial_table WHERE user_id=".$_GET['edit_id'];
 $result_set=mysql_query($sql_query);
 $fetched_row=mysql_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
// variables for input data
 $student_fname = $_POST['student_fname'];
 $student_lname = $_POST['student_lname'];
 $student_no = $_POST['student_no'];
 $D_O_B = $_POST['D_O_B'];
 $Amount_paid = $_POST['Amount_paid'];
 $Balance = $_POST['Balance'];
 $Email = $_POST['Email'];
 $Next_of_kin = $_POST['Next_of_kin'];
 $Sponsor = $_POST['Sponsor'];
 $Telephone = $_POST['Telephone'];
 $Sponsors_contact = $_POST['Sponsors_contact'];
 $Reg_No = $_POST['Reg_No'];

 // variables for input data

 // sql query for update data into database
 $sql_query = "UPDATE financial_table SET student_fname='$student_fname',student_lname='$student_lname',student_no='$student_no',D_O_B='$D_O_B', Amount_paid='$Amount_paid',Balance='$Balance',Email='$Email',Next_of_kin='$Next_of_kin',Sponsor='$Sponsor', Telephone='$Telephone',Sponsors_contact='$Sponsors_contact',Reg_No='$Reg_No' WHERE user_id=".$_GET['edit_id'];
 // sql query for update data into database
 
 // sql query execution function
 if(mysql_query($sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Are Updated Successfully');
  window.location.href='financial-data.php';
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
 header("Location: financial-data.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Financial Form|Update</title>
  <link rel="icon" type="image/png" href="images/logo.jpg" sizes="32x32">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div id="header">Results Form
<?php

   //USERNAME & SESSION BEING CALLED AS A FUNCTION FROM CONNECTION FILE
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
    <legend ALIGN="center">Please fill this form</legend>
    <table>
      <tbody>
        <tr>
          <td>Student Name</td>
          <td><input type="text" name="student_fname" placeholder="First Name" value="<?php echo $fetched_row['student_fname']; ?>"></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="" name="student_lname" placeholder="Second Name" value="<?php echo $fetched_row['student_lname']; ?>"></td>
        </tr>
        <tr>
          <td>Student No</td>
          <td><input type="text" name="student_no" placeholder="Student Number" value="<?php echo $fetched_row['student_no']; ?>"></td>
        </tr>
        <tr>
          <td>Date of birth</td>
          <td><input type="date" name="D_O_B" placeholder="Date of Birth" value="<?php echo $fetched_row['D_O_B']; ?>"></td>
        </tr>
        <tr>
          <td>Amount paid</td>
          <td><input type="text" name="Amount_paid" placeholder="Amount Paid" value="<?php echo $fetched_row['Amount_paid']; ?>"></td>
        </tr>
        <tr>
          <td>Balance</td>
          <td><input type="text" name="Balance" placeholder="Balance" value="<?php echo $fetched_row['Balance']; ?>"></td>
        </tr>
        <tr>
          <td>Email</td>
          <td><input type="text" name="Email" placeholder="Email Address" value="<?php echo $fetched_row['Email']; ?>"></td>
        </tr>
        <tr>
          <td>Next of Kin</td>
          <td><input type="text" name="Next_of_kin" placeholder="Next of Kin" value="<?php echo $fetched_row['Next_of_kin']; ?>"></td>
        </tr>
        <tr>
          <td>Sponsor</td>
          <td><input type="text" name="Sponsor" placeholder="Sponsor's Name" value="<?php echo $fetched_row['Sponsors_contact']; ?>"></td>
        </tr>
        <tr>
          <td>Telephone</td>
          <td><input type="text" name="Telephone" placeholder="Cell Number" value="<?php echo $fetched_row['Telephone']; ?>"></td>
        </tr>
        <tr>
          <td>Sponsor's contact</td>
          <td><input type="text" name="Sponsors_contact" placeholder="Sponsor's contact" value="<?php echo $fetched_row['Sponsors_contact']; ?>"></td>
        </tr>
        <tr>
          <td>Registration No</td>
          <td><input type="text" name="Reg_No" placeholder="Registration Number" value="<?php echo $fetched_row['Reg_No']; ?>"></td>
        </tr>
        <tr>
          <td colspan="2"><center><button type="submit" name="btn-update">Update</button><a href="financial-data.php"><lable id="view" name="btn-cancel">Cancel</label></a></center></td>
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