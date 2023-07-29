<?php
include("config.php");
?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Online Result</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div align="center" class="container">
        <span class="head">Result Portal</span>
        <hr class="hr" />
        <br />
        <br />
        <span class="subhead">View Result</span>
        <br />
        <br />
        <br />
        <form method="post" action="viewResult.php">
            <table border="0" cellpadding="5" cellspacing="5" class="design">
                <tr>
                    <td colspan="2" align="center" class="msg"><?php echo $msg; ?></td>
                </tr>
                <tr>
                    <td class="labels">Roll No.:</td>
                    <td><input type="text" required="required" name="roll" class="fields" size="15" placeholder="Enter Roll No." /></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" value="SHOW" class="fields1" /></td>
                </tr>
            </table>
        </form>
        <br />
        <br />
        <a href="register.php" class="link">Student Register</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="faculty.php" class="link">Faculty Login</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="registerFaculty.php" class="link">Faculty Registration</a>
    </div>
</body>

</html>