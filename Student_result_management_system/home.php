<?php
include("config.php");
session_start();
if(!isset($_SESSION['email']))
{
	header("location:index.php");
}
$email=$_SESSION['email'];
$a=mysqli_query($al,"SELECT * FROM faculty WHERE email='$email'");
$b=mysqli_fetch_array($a);
$name=$b['name'];
?>
<!DOCTYPE html >
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Online Result</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body><br />

<div align="center" style="font-size: 30px;" >Result Portal</span>
<hr class="hr" />
<br />
<br />
<span class="subhead">Welcome <?php echo $name;?></span>
<br />
<br />
<br />
<div class="design" style="width:300px;padding:20px 20px;">
<a href="submitMarks.php" class="cmd">Submit Marks</a>
<br />
<br />
<br />

<a href="viewUsers.php" class="cmd">View Users</a>
<br />
<br />
<br />
<a href="addSubjects.php" class="cmd">Add Subjects</a>
<br />
<br />
<br />

<a href="changePassword.php" class="cmd">Change Password</a>
<br />
<br />
<br />
<a href="logout.php" class="cmd">Logout</a>
</div>
<br />
<br />
</div>
</body>
</html>