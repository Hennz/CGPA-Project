<?php

include_once 'connection.php';

// delete condition
if(isset($_GET['delete_id']))
{
 $sql_query="DELETE FROM y3semester1 WHERE studentNO=".$_GET['delete_id'];
 mysql_query($sql_query);
 header("Location: $_SERVER[PHP_SELF]");
}
// delete condition
?>
<!DOCTYPE html>
<html>
<head>
	<title>YR1 semester one data</title>
	<link rel="icon" type="image/png" href="images/logo.jpg" sizes="32x32">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div id="header">Student's Data
<?php

     //USERNAME
     if(loggedIn())
     {
       $name = getUserField('adminName');
       echo '<p id="username">('.$name.') <a href="logout.php"> Logout</a><p>';

     }else{
         header('location: index.php');
     }

?>
</div>
<div class="container">
<table id="Data">
        <thead>
            <tr>
                <th>Student Num</th>
                <th>Reg Num</th>
                <th>First Name</th>
                <th>Second Name</th>
                <th>User Interface Design</th>
                <th>Entrepreneurship Principles</th>
                <th>Principles o Program</th>
                <th>Csc project 1</th>
                <th>Modelling/Graphics/Advanced progra</th>
                <th>GPA</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
             <?php
             $sql_query="SELECT * FROM y3semester1";
             $result_set=mysql_query($sql_query);
             while($row=mysql_fetch_row($result_set))
             {
              ?>
                    <tr>
                    <td ><?php echo $row[0]; ?></td>
                    <td><?php echo $row[1]; ?></td>
                    <td><?php echo $row[2]; ?></td>
                    <td><?php echo $row[3]; ?></td>
                    <td><?php echo $row[4]; ?></td>
                    <td><?php echo $row[5]; ?></td>
                    <td ><?php echo $row[6]; ?></td>
                    <td><?php echo $row[7]; ?></td>
                    <td><?php echo $row[8]; ?></td>
                    <td><?php echo $row[9]; ?></td>
                    <td align="center"><a title ="Edit" href="javascript:edit_id('<?php echo $row[0]; ?>')"><img src="images/b_edit.png" align="EDIT" /></a></td>
        <td align="center"><a title ="Delete" href="javascript:delete_id('<?php echo $row[0]; ?>')"><img src="images/b_drop.png" align="DELETE" /></a></td>
                    </tr>
                    <?php
             }
             ?>
        </tbody>
        </table>

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

<script type="text/javascript">
 	function edt_id(id)
    {
     if(confirm('Are you sure you want to edit this record?'))
     {
      window.location.href='update-results-data.php?edit_id='+id;
     }
    }
    function delete_id(id)
    {
     if(confirm('Sure to Delete ?'))
     {
      window.location.href='view_semester_five.php?delete_id='+id;
     }
}

 </script>
</body>
</html>
