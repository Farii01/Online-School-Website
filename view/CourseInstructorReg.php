 <?php
  include('../control/getInstactorInfo.php'); 
  include('../control/InstactorValidation.php');
  ?>


<!DOCTYPE html>
<html>
<body>
  <img src="../sources/logo.png"><br>
<h3>Course Instructor Registration Form </h3>
<form action="" method="post" enctype="multipart/form-data">

Your Name          : <?php echo $instactorName; ?> <br><br>
Your Email         : <input type="email" name="instactorEmail" placeholder="Enter instactor email" required>
<br><br>
Assigned Course : <?php echo $assignCourse; ?><br><br>
Certification : <input type="file" name="filetoupload" required><br><br>

Teaching Exprience : <input type="number" name="teachingExperience" placeholder="Enter Teaching Exprience" required><br><br>

Password : <input type="password" name="instactorPassword" placeholder="Enter New Password" required> <?php echo $validatepass; ?><br><br>


<input type="submit" value="SUBMIT">
</form>
</center>
</body>
</html>
