<?php
//include "../model/Usermydb.php";
include '../control/Userprofile_process.php';
include '../control/update_control.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1>Change User Password</h1>
    <form action="" method="post" enctype="multipart/form-data">
<table>

<tr>    
<td>Email:</td><td><input type="text" value="<?php echo $email;?>" name="email" id="" placeholder="Enter your Email"  ></td>
</tr>
<tr>    
<td>Current:</td><td><input type="text" name="oldpassword" value="<?php echo $password;?>" id="" placeholder="Enter Current Password"  ></td>
</tr>

<tr>    
<td>New:</td><td><input type="password" name="password" id="" placeholder="Enter New Password"  ></td>
</tr>


<tr>    
<td>Re-type New:</td><td><input type="password" name="confirmPassword" id="" placeholder="Enter Confirm Password"  ></td>
</tr>



<td>
             <br> <input type="submit" name="update-pass" value="Save changes"/>

</td>




</table>
</form>
<div align="center">
    <a href="../control/logout_control.php">Log Out</a>
</div>

<footer>
<?php
include "../../layouts/footer.php";
?>
</footrt>
</body>
</html>