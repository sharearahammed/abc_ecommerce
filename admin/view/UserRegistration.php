<?php
include '../control/Userprocess.php';
?>

<html>
    <head>
    <title>Registraction Page</title>
    <link rel="stylesheet" href="style.css">
    </head>
    <body>

    <header>
<tr>
  <img src="http://localhost/SecG/assets/logo_website.png" width="50px" height="50px"><br> Welcome to ABC

<div class=user_reg>
<h1>Create an Account</h1>
</div> 
    <form name="myform" action="" method="post" enctype="multipart/form-data" onsubmit="return validation()">
    
    <div class=box>
    <table align=center>
            
          <tr>
            
            <!------------ First Name ------- -->
            <th>First Name:</th>
            <td>
                <input type="text" name="fname" id="fname" placeholder="Enter your First Name"  ><span  id="fnameMessage"></span><?php echo $fnameMessage ?>
            </td>
          </tr>
      
          <tr>
            <th>Last Name: </th>


            <td>
                <input type="text" name="lname" id="lname" placeholder="Enter your Last Name" ><span id="lnameMessage"></span><?php echo $lnameMessage ?><br>
            </td>
          </tr>
          <tr>
          <th>User Name: </th>

            <td>
                <input type="text" name="userName" id="userName" onkeydown="" placeholder="Enter your User Name"><span id="userNameMessage"></span><?php echo $userNameMessage ?><br>
            </td>
          </tr>
          <tr>
            <!------- Date of Birth ------ -->
            <th>Date of Birth: </th>


            <td>
                <input type="date" name="dateOfBirth" id="dateOfBirth"><span id="dateOfBirthMessage"></span><?php echo $dateOfBirthMessage ?><br>
            </td>
          </tr>
          
          <tr>
            <!--------- Phone Number ------- -->
            <th>Phone Number: </th>


            <td>
                <input type="text" name="phoneNumberCountryCode" id="phoneNumberCountryCode" value="+88" size="1">
                <input type="text" name="phoneNumber" id="phoneNumber" placeholder="Enter your Number" ><span id="phoneNumberMessage"></span><?php echo $phoneNumberMessage ?>
            </td>
          </tr>
          
          <tr>
            <!-------Email ------ -->
            <th>Email: </th>


            <td>
                <input type="email" name="email" id="email" placeholder="abc@example.com"><span id="emailMessage"></span>
                <?php echo $emailMessage ?>
            </td>
          </tr>
          
          <tr>
            <!------- Gender --------- -->
            <th>Gender: </th>



            <td>
            <input type="radio" name="gender" value="" hidden checked/>
            <input type="radio" name="gender" id="male" value = "Male">Male
            <input type="radio" name="gender" id="female" value = "Female">Female
            <input type="radio" name="gender" id="notinterest" value = "NotInterested">Not Interested. 
            <span id="genderMessage"></span>
            <?php echo $genderMessage ?>
            </td>
          </tr>
          
          <tr>
            <!------- City ------ -->
            <th>City: </th>


            <td>
          <select  name="city">
          <option value="Select City">Select City</option>
          <option value="Dhaka">Dhaka</option>
          <option value="Gazipur">Gazipur</option>
          <option value="Mymensingh">Mymensingh</option>
          <option value="Rajshahi">Rajshahi</option>
          <option value="Chittagonj">Chittagonj</option>
          <option value="Comilla">Comilla</option>
          <option value="Sylhet">Sylhet</option>
          <option value="Rangpur">Rangpur</option>
          </select> <?php echo $cityMessage ?>
            </td>
          </tr>
          
          <tr>
            <!------- Zip Code --------- -->
            <th>Zip Code: </th>



            <td>
<input type="text" name="zipCode" id="zipCode" placeholder="Enter Zip Code"><span id=zipCodeMessage></span> <?php echo $zipCodeMessage ?>
            </td>
          </tr>
          
          <tr>
            <!---------- Address -------- -->
            <th>Address: </th>


            <td>
                <textarea name="address" id="address" cols="25" rows="5"></textarea><span id=addressMessage></span> <?php echo $addressMessage ?>
            </td>
          </tr>
          
          <tr>
            <!------ Password------->
            <th>Password: </th>


            <td>
                <input type="password" name="password" id="password" placeholder="Enter Password"><span id=passwordMessage></span><?php echo $passwordMessage ?>
            </td>
          </tr>
          
          <tr>
            <!------ Confirm Password ------ -->
            <th>Confirm Password: </th>


            <td>
                <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirm your Password"><span id=confirmPasswordMessage></span><?php echo $confirmPasswordMessage ?>
            </td>
          </tr>
          
          <tr>

           <th>Set Profile Picture: </th>

     <td>
  <input type="file" name="adminProfilePic" id="adminProfilePic"><span id=profileImageMessage></span><?php echo $profileImageMessage ?>
     </td>
      </tr>
      
      <div class=submit>
          <tr>
            <td></td>
            <td><button type="submit" name="submit" >Create Account</button> </td>
          </tr>
</div>
        </table>
        </div>
    </form>
    <div class=log>
    Already have an Account? <a href="../view/login.php">login</a>
</div>

      </main>
<footer>
<?php
include "../../layouts/footer.php";
?>
</footer>

<script src="../js/myscript.js"></script>
    </body>
</html>