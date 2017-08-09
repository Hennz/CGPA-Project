<?php

include_once 'connection.php';

// delete condition
if(isset($_GET['delete_id']))
{
 $sql_query="DELETE FROM results_table WHERE user_id=".$_GET['delete_id'];
 mysql_query($sql_query);
 header("Location: $_SERVER[PHP_SELF]");
}
// delete condition
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="icon" type="image/png" href="images/logo.jpg" sizes="32x32">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div id="header">Course Outline
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
  <table>
                <h3 align="center">year 1</h3>
                <h4 align="center">semester 1</h4>
              <tr><th>CourseCode</th>
								  <th>CourseUnit</th>
								  <th>Credit Unit</th>
							</tr>
                    <tr><td>CSC1100</td><td>Computer Literacy</td><td>4</td><tr/>
  									<tr><td>BIS1104</td><td>Communication Skills</td><td>4</td><tr/>
                    <tr><td>CSC1104</td><td>Computer Architecture</td><td>4</td><tr/>
                    <tr><td>CSC1104</td><td>Individual Project</td><td>4</td><tr/>
                    <tr><td>CSC1104</td><td>Structured Programming</td><td>3</td><tr/>
                    </table>
                      <!--end of first semester in year one-->
                          <!--Beginning of second semester in year one-->
                          <table>
                            <h4 align="center">semester 2</h4>
                            <tr><th>CourseCode</th>
              								  <th>CourseUnit</th>
              								  <th>Credit Unit</th>
              							</tr>
                <tr><td>CSC2114</td><td>Artificial interigence</td><td>3<td/></tr>
                <tr><td>BIS1206</td><td> Systems Analysis and Design</td><td> 4</td><tr/>
                <tr><td>MTH1203</td><td> Calculus 1 </td><td>4</td><tr/>
                <tr><td>CSC1214</td><td>Object Oriented Programming</td><td>4</td><tr/>
                <tr><td>MTH2203</td><td>Numerical Analysis</td><td>3</td></tr>
                  <tr><td>BIS1204<td><td>Data & Information Management 1</td><td> 4</td></tr>
                </table>
                  <!--end of second semester in year one-->
                  <!--Beginning of Year 1 recess in year one-->
                  <table>
                      <h3 align="center">Year 1 Recess Term</h3>
                    <tr><th>CourseCode</th>
      								  <th>CourseUnit</th>
      								  <th>Credit Unit</th>
      							</tr>
                  <tr><td>CSC1304 </td><td>Practical Skills Development</td><td>5</td></tr>
                <tr><td><td>CSC1303</td><td>Cisco Certified Network Associate 5</td></tr>
                <!--end of Year 1 recess in year one-->
              </table>
                <table>
            <h3 align="center">year 2</h3>
                <h4 align="center">semester 1</h4>
                <tr><th>CourseCode</th>
  								  <th>CourseUnit</th>
  								  <th>Credit Unit</th>
  							</tr>
                <tr><td>CSC2100</td><td>Data Structures and Algorithms</td><td>4</td></tr>
                <td>CSC2114</td><td>Artificial interigence </td><td>3</td></tr>
                <tr><td>BSE2103</td><td>Computer nertworks</td><td>4</td></tr>
                <tr><td>MTH3105</td><td>Discrete Mathmatics</td><td>3</td></tr>
                <tr><td>BSE2106</td><td>(<b>Elective</b>) Formal Methods</td><td>4</td></tr>
                <tr><td>BSE2106</td><td>(<b>Elective</b>)Software Engineering </td><td>4</td></tr>
              </table>
              <table>
            <h4 align="center">semester 2</h4>
            <tr><th>CourseCode</th>
                <th>CourseUnit</th>
                <th>Credit Unit</th>
            </tr>
                <tr><td>CSC2200</td><td>Operating Systems</td><td> 4</td></tr>
                <tr><td>CSC1209</td><td>Logic Programming</td><td> 3</td></tr>
                <tr><td>CSC2209</td><td>Systems Programming</td><td>4<td></tr>
                <tr><td>CSC2210</td><td>Automata, Complexity & Computability</td><td>3</td></tr>
                <tr><td>BIT2207</td><td>Research Methodology </td><td>3</td></tr>
              </table>
                <table>
            <h4 align="center">semester 2</h4>
            <tr><th>CourseCode</th>
                <th>CourseUnit</th>
                <th>Credit Unit</th>
            </tr>
                <tr><td>CSC2303</td><td> Field Attachment</td><td>5</td></tr>
              </table>
                <table>
            <h3 align="center">year 3</h3>
                <h4 align="center">semester 1</h4>
                <tr><th>CourseCode</th>
  								  <th>CourseUnit</th>
  								  <th>Credit Unit</th>
  							</tr>
                <tr><td></td><td>User Interface Design</td><td></td></tr>
                <tr><td></td><td>Entreprenuership Plinciples</td><td></td></tr>
                <tr><td></td><td>Principles of Programming Languages</td><td></td></tr>
                <tr><td></td><td>Computer Science Project 1</td><td></td></tr>
                <tr><td></td><td>(<b>Elective</b>)Modelling and Simulation 3</td><td></td></tr>
                <tr><td></td><td>(<b>Elective</b>)Computer Graphics 3</td><td></td></tr>
                <tr><td></td><td>(<b>Elective</b>)Advanced Programming 3</td><td></td></tr>
                <tr><td></td><td>(<b>Elective</b>)Linear progamming 3<td><td></td></tr>
              </table>
                <table>
             <h4 align="center">semester 2</h4>
             <tr><th>CourseCode</th>
                 <th>CourseUnit</th>
                 <th>Credit Unit</th>
             </tr>
              <tr><td></td><td>Data Communications</td><td></td></tr>
                <tr><td></td><td>Compiler Design</td><td></td></tr>
                <tr><td></td><td>Computer Science Project 11</td><td></td></tr>
                <tr><td></td><td>(<b>Elective</b>)Computer Security</td><td></td></tr>
                <tr><td></td><td>(<b>Elective</b>)Data Warehousing & Business interigence</td><td></td></tr>
                <tr><td></td><td>(<b>Elective</b>)Distributed Systems Development</td><td></td></tr>
                <tr><td></td><td>(<b>Elective</b>)Emerging Trends in Computer Science</td><td></td></tr>

            </table>
</div>
<div class="menu">
      <p align="center">Main Menu</p>
      	<ul>
      	  <li><a href="register-student.php">Register Student</a></li>
          <li><a href="view-students-data.php">View Students Data</a></li>
          <li><a href="view-reports.php">View Reports</a></li>
          <li class="active"><a href="course-outline.php">Course Outline</a></li>
      	</ul>
      </div>

 </script>
</body>
</html>
