<?php
include '../control/Userprofile_process.php';
?>
<html>
<head>
<title>Profile Page</title>
<link rel="stylesheet" href="homestyle.css">
</head>
<body>
<table align="right">
<tr>
<script src="store.js"></script>
<td><?php
include '../../layouts/header.php';
?></td>

<img src="http://localhost/SecG/assets/logo_website.png" width="50px" height="50px"> Welcome to ABC


<td >
<a href="../../home.php">HOME</a>
<a href="../view/userinfo_edit.php">EDIT INFO</a>
<a href="./View/Employee_login.php">EMPLOYEE</a>
<a href="./View/Login.php">CUSTOMER</a>     <a href="./View/Vlogin.php">SUPLIER</a>
</td>
<form method="post">
<td><input type="text" name="search"size="30"><button type="button" name="btn">search</button></td>
<td><img src="<?php echo $adminProfilePic; ?>" width="50px" height="50px"> Hello
<?php

echo $_SESSION["email"]; ?></td>
</form>
</tr>
</table>

    <hr>
    <br>
    

<!-- Personal Information  -->
<table>
    <tr>
        <td>
        
 First Name: <?php echo $fname; ?>
<br>Last Name: <?php echo $lname; ?>
<br>User Name: <?php echo $userName; ?>
<br>Phone Number: <?php echo $phoneNumber; ?>
<br>Email: <?php echo $email; ?>
<br>Gender: <?php echo $gender; ?>
<br>City: <?php echo $city; ?>
<br>Address: <?php echo $address; ?> 
<br>Password: <?php echo $password; ?>
<br>Picture: <br><img src="<?php echo $adminProfilePic; ?>" width="100px" height="100px">


        
            
          
         
            
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
        </td>
    </tr>
</table>

<div align="center">
    <a href="../control/logout_control.php">Log Out</a>
    
</div>
<?php
include "../../layouts/footer.php";
?>
</body>
</html>