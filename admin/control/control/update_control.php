<?php

$selected="";



$mydb = new MyDB2();
$conobj = $mydb->openCon();
$result=$mydb->getUserInfo("customer", $email, $conobj);

if($result->num_rows>0)
{
    while($row = $result->fetch_assoc())
{
    $fname=$row["fname"];
    $lname=$row["lname"];
    $email=$row["email"];
    $phoneNumber=$row["phonenumber"];
    $file= $row["File"];

}

}
if(isset($_POST["update"]))
{
   
    if($_FILES["image"]["name"]!="")
    {
        echo $_FILES["image"]["name"];
        $file="../uploads/".$email.".jpg";
        move_uploaded_file($_FILES["image"]["tmp_name"],$file);
    }
$mydb = new MyDB2();
$conobj = $mydb->openCon();
$result=$mydb->updateUser("customer", $conobj, 
$_POST["fname"], 
$_POST["lname"], 
$_POST["email"],
$_POST["phoneNumber"],
 $file);
}

if(isset($_POST["update-pass"]))
{
   
$mydb = new MyDB2();
$conobj = $mydb->openCon();
$result=$mydb->updatepassword("customer", $conobj, 
$_POST["email"],
$_POST["password"], 
$_POST["confirmPassword"], 
);
}






?>