<?php
include "../model/Usermydb.php";
$passwordMessage = "";
$errorMessage = "";

        
        // //? Getting File Data From JSON File
        // $fileData = file_get_contents( "../data/jsondata.json" );

        // //? COnverting JSON Data to PHP Data
        // $phpObject = json_decode( $fileData );
        // foreach ( $phpObject as $myObj ) {
        //     if ( $myObj->email == $_REQUEST["email"] && $myObj->password == $_REQUEST["password"] ) {
        //         $_SESSION["email"] = $myObj->email;
        //         if($myObj->role == 0)
        //             header( "Location: ../view/UserProfile.php" );
        //         else
        //             header( "Location: ../view/AdminProfile.php" );
                    
        //         $matched = 1;
        //     }
        // }
        // if ( $matched == 0 ) {
        //     $errorMessage = "logging failed! Please give Correct credentials";
        // }

if ( isset( $_REQUEST['login-btn'] ) ) {
    $emailMessage = "";
    $matched = 0;
    if ( empty( $_REQUEST['email'] ) ) {
        $emailMessage = "Please enter your Email address!";

    } elseif ( empty( $_REQUEST['password'] ) ) {
        $passwordMessage = "Please enter your Password!";
    } else {
        $mydb2=new MyDB2();
        $conobj=$mydb2->openCon();
        $result=$mydb2->checkUser("customer",$_REQUEST['email'],$_REQUEST["password"],$conobj);
        if($result-> num_rows > 0){
            $_SESSION["email"]=$_REQUEST["email"];
            header("Location: ../view/customer.php");
        }
        else{
            echo "Please Correct email and password";
        }




        

        
        
    }
}

?>