<?php
session_start(); 
include('../model/Admin/db.php');
    $connection = new db();
$conobj=$connection->OpenCon();
$userQuery=$connection->SearchInstactorById($conobj,"instactor",$_SESSION["userId"]);

        if ($userQuery->num_rows > 0) {
            while($row = $userQuery->fetch_assoc()) {
            	$instactorId=$row["instactorId"];
            	$instactorName=$row["instactorName"];
            	$instactorEmail=$row["instactorEmail"];
            	$teachingExprience=$row["teachingExprience"];
            	$certification=$row["certification"];
            	$assignCourse=$row["assignCourse"];
            }
        }    	

if(empty($_SESSION["userId"])) 
{
header("Location: ../view/Login.php"); 
}
else if($instactorEmail=="" || $teachingExprience==0 || $certification=="")
{
	header("Location: ../view/CourseInstructorReg.php");
}

?>


<!DOCTYPE html>
<html>
<head>
<title>Course Instructor</title>
</head>
<center>
<body>
	<img src="../sources/logo.png"width="200" height="70" ><br>
	<h3>Profile</h3>
	<button><a href="UpdateInstactorProfile.php">Update Profile</a></button>

	<h3>Courses</h3> 
	<button><a href="UploadMatrials.php">Upload Materials</a></button>
	<button><a href="UploadNotice.php">Notices</a></button>
	<button><a href="InstactorsLerners.php">All Students</a></button>	
	<br><br>
	<p>Do You want to logoout? <a href="../control/Logout.php">Log Out</a></p>
</body>
</center>
</html>		
