<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="icon" type="image/png" href="images/logo.jpg" sizes="32x32">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div id="header">Results Data
</div>
<div class="container">
	<table>
                <tr><th>year 1</th></tr>
                <tr><th>semester 1</th></tr>
              <tr><th>CourseCode</th>
								  <th>CourseUnit</th>
								  <th>Credit Unit</th>
							</tr>
                <tr>
									<td>CSC1100</td>
									<td>Computer Literacy</td>
									<td>4</td>
									<tr/>
                <tr><td>CSC2114Artificial interigence</td>
									<td>3<td/></tr>
                BSE2103Computer nertworks 4<br/>
                MTH3105Discrete Mathmatics 3<br/>
                (<b>Elective</b>)BSE2106 Formal Methods 4<br/>
                (<b>Elective</b>)Software Engineering 4<br/></p>
            <li><a href="#">semester 2</a></li>
                 <p> BIS1206 Systems Analysis and Design 4<br/>
                  MTH1203 Calculus 1 4<br/>
                  CSC1214 Object Oriented Programming 4<br/>
                  MTH2203 Numerical Analysis 1 3<br/>
                  Data & Information Management 1 4<br/>
                <li><a href="#">Year 1 Recess Term</a></li>
                  CSC1304 Practical Skills Development 5<br/></p>
                  csc1303 Cisco Certified Network Associate 5<br/>
            <li><a href="#">year 2</li>
                <li><a href="#">semester 1</a></li>
                <p>CSC2100Data Structures and Algorithms 4<br/>
                CSC2114Artificial interigence 3<br/>
                BSE2103Computer nertworks 4<br/>
                MTH3105Discrete Mathmatics 3<br/>
                (<b>Elective</b>)BSE2106 Formal Methods 4<br/>
                (<b>Elective</b>)Software Engineering 4<br/></p>

            <li><a href="#">semester 2</a></li>
                <p>CSC2200Operating Systems 4<br/>
                CSC1209Logic Programming 3<br/>
                CSC2209Systems Programming 4<br/>
                CSC2210Automata, Complexity & Computability 3<br/>
                BIT2207Research Methodology 3<br/>
            <li><a href="#">semester 2</a></li>
                CSC2303 Field Attachment 5<br/></p>
            <li><a href="#">year 3</a></li>
                <li><a href="#">semester 1</a></li>
                <p>User Interface Design <br/>
                Entreprenuership Plinciples<br/>
                Principles of Programming Languages<br/>
                Computer Science Project 1<br/>
                (<b>Elective</b>)Modelling and Simulation 3<br/>
                (<b>Elective</b>)Computer Graphics 3<br/>
                (<b>Elective</b>)Advanced Programming 3<br/>
                (<b>Elective</b>)Linear progamming 3<br/></p>
             <li><a href="#">semester 2</a></li>
                <p>Data Communications<br/>
                Compiler Design<br/>
                Computer Science Project 11<br/>
                (<b>Elective</b>)Computer Security<br/>
                (<b>Elective</b>)Data Warehousing & Business interigence<br/>
                (<b>Elective</b>)Distributed Systems Development<br/>
                (<b>Elective</b>)Emerging Trends in Computer Science<br/></P>

            </ul>
	</table>
</div>
<div class="menu">
      <p align="center">Main Menu</p>
      	<ul>
      	  <li><a href="register-student.php">Register Student</a></li>
          <li><a href="view-students-data.php">View Students Data</a></li>
          <li><a href="view-reports.php">View Reports</a></li>
          <li class="active"><a href="course-outline-two.php">Course Outline</a></li>
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
      window.location.href='results-data.php?delete_id='+id;
     }
}

 </script>
</body>
</html>
