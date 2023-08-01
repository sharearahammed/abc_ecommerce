<?php
include "../model/Usermydb.php";
session_start();
$fname = $lname = $email = $userName = $phoneNumber = $gender = $city = $address = $password = $adminProfilePic = "";




$mydb=new MyDB2();
$conobj=$mydb->openCon();
$result=$mydb->getUserInfo("customer", $_SESSION["email"], $conobj);
if($result->num_rows > 0)
{
    while($row=$result->fetch_assoc())
    {
        $fname=$row["fname"];
        $lname=$row["lname"];
        $email=$row["email"];
        $userName=$row["username"];
        $phoneNumber=$row["phonenumber"];
        $gender=$row["gender"];
        $city=$row["city"];
        $address=$row["address"];
        $password=$row["password"];
        $adminProfilePic=$row["File"];
    }
}




// $jsondata = file_get_contents( "../data/jsondata.json" );
// $phpdata = json_decode( $jsondata );
// foreach ( $phpdata as $myobj ) {
//     if ( $_SESSION["email"] == $myobj->email ) {
//         $fname = $myobj->fname . "<br>";
//         $lname = $myobj->lname . "<br>";
//         $userName = $myobj->userName . "<br>";
//         $phoneNumber = $myobj->phoneNumber . "<br>";
//         $email = $myobj->email . "<br>";
//         $gender = $myobj->gender . "<br>";
//         $city = $myobj->city . "<br>";
//         $address = $myobj->address . "<br>";
//         $adminProfilePic = $myobj->File . "<br>";

//     }
// }

?>