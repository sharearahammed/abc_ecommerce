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
    <h1>General Account Settings</h1>
    <form action="" method="post" enctype="multipart/form-data">
<table>
<tr>    
<td>First Name:</td><td><input type="text" value="<?php echo $fname;?>" name="fname" id="" placeholder="Enter your First Name"  ></td>
</tr>

<tr>    
<td>Last Name:</td><td><input type="text" value="<?php echo $lname;?>" name="lname" id="" placeholder=" Enter your Last Name"  ></td>
</tr>

<!-- <tr>    
<td>Date of Birth:</td><td><input type="date" name="dateOfBirth" id="" ></td>
</tr> -->

<tr>    
<td>Email:</td><td><input type="text" value="<?php echo $email;?>" name="email" id="" placeholder="Enter your Email"  ></td>
</tr>
<tr>    
<td>Phone Number:</td><td><input type="text" value="<?php echo $phoneNumber;?>" name="phoneNumber" id="" placeholder="Enter your Number"  ></td>
</tr>

<th>Set Profile Picture: </th>

     <td>
  <input type="file" name="image" id="">
     </td>

<tr>
<td>
    <p><button type="submit" name="update">save changes</button></p>
</td>
</tr>




</table>
</form>

<div align="center">
    <br><br><br><br><br><br>
    <a href="../control/logout_control.php">Log Out</a>
</div>
<br><br><br><br>
<footer>
<?php
include "../../layouts/footer.php";
?>
</footer>
</body>
</html>