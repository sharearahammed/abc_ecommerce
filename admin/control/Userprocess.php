<?php

include "../model/Usermydb.php";

$fnameMessage = '';
$lnameMessage = '';
$userNameMessage = '';
$emailMessage = '';
$phoneNumberMessage = '';
$dateOfBirthMessage = '';
$genderMessage = '';
$cityMessage = '';
$zipCodeMessage = '';
$addressMessage = '';
$passwordMessage = '';
$confirmPasswordMessage = '';
$profileImageMessage = '';

if ( isset( $_REQUEST['submit'] ) ) {
    $fname = $_REQUEST['fname'];
    $lname = $_REQUEST['lname'];
    $lnamePattern = '/^[A-Za-z]*$/';
    $userName = $_REQUEST['userName'];
    $email = $_REQUEST['email'];
    $phoneNumber = $_REQUEST['phoneNumber'];
    $dateOfBirth = $_REQUEST['dateOfBirth'];
    $gender = $_REQUEST['gender'];
    $city = $_REQUEST['city'];
    $zipCode = $_REQUEST['zipCode'];
    $address = $_REQUEST['address'];
    $password = $_REQUEST['password'];
    $confirmPassword = $_REQUEST['confirmPassword'];
    $hasError = 0; //?For checking isThereAny ValidationError

    //? --------First Name-----------
    if ( empty( $fname ) ) {
        $fnameMessage = " First Name is Missing !";
        $hasError = 1;

    } else {
        if ( preg_match( '/[^a-z_]+/i', $fname ) ) {
            $fnameMessage = "  First Name may only contain letters";
            $hasError = 1;

        } else {

            $fnameMessage = "  Your First Name : $fname";
        }
    }

    //? -----------Last Name-----------
    if ( empty( $lname ) ) {
        $lnameMessage = " Last Name is Missing !";
        $hasError = 1;

    } else {
        if ( preg_match( '/[^a-z_]+/i', $lname ) ) {
            $lnameMessage = "  Last Name may only contain letters";
            $hasError = 1;

        } else {
            $lnameMessage = "  Your Last Name : $lname";
        }

    }
    //? -------------User Name --------------------
    if ( empty( $userName ) ) {
        $userNameMessage = "  User Name Is Missing! ";
        $hasError = 1;
    } else {
        if ( preg_match( '/[^a-z0-9_.@!#$%^&*]+/i', $userName ) ) {
            $userNameMessage = " User Name may only contain letters, numbers, \"_\" , \"-\" and special characters and no spaces allowed";
            $hasError = 1;

        } else {
            if ( strlen( $userName ) < 6 ) {
                $userNameMessage = "User Name must be at least 6 characters long";
                $hasError = 1;
            }
            $userNameMessage = " Your username : $userName ";
        }
        $mydb = new MyDB2();
        $conobj = $mydb ->openCon();

        $result = $mydb->getUserByName($_REQUEST['userName'], $conobj);
        if($result->num_rows>0)
        {
            $userNameMessage = "User must be unique!";
            $hasError = 1;
        }
    }

    //? ----------Phone Number----------

    if ( empty( $phoneNumber ) ) {
        $phoneNumberMessage = "  Please enter your Phone Number!";
        $hasError = 1;
    } else {
        if ( preg_match( '/^[0-9]+$/', $phoneNumber ) ) {
            if ( strlen( $phoneNumber ) == 11 ) {

                $phoneNumberMessage = " Your phone number: $phoneNumber";
            } else {
                $phoneNumberMessage = " Phone number must be 11 characters long.";
                $hasError = 1;

            }

        } else {

            $phoneNumberMessage = "  Invalid Phone Number ! Phone Number only contains numbers";
            $hasError = 1;
        }

    }
    //? ---------Birth Date---------
    if ( empty( $dateOfBirth ) ) {
        $dateOfBirthMessage = "  Please enter your Birth Date!";
        $hasError = 1;
    } else {
        $dateOfBirthMessage = "  Your Birth Date : $dateOfBirth";
    }
    //? --------------Email---------------
    if ( empty( $email ) ) {
        $emailMessage = "  Please enter your Email Address !";
        $hasError = 1;
    } else {
        if ( !filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
            $emailMessage = "  Invalid Email Format";
            $hasError = 1;

        } else {
            $emailMessage = " Your Email Address : $email";
        }
        
                $mydb = new MyDB2();
                $conobj = $mydb ->openCon();
        
                $result =  $mydb->getUserByEmail($_REQUEST['email'], $conobj);
                if($result->num_rows>0)
                {
                    $emailMessage = "  Email already exist !";
                    $hasError = 1;
                }

    }

    //? ----------Gender-----------
    if ( empty( $gender ) ) {
        $genderMessage = "  Please enter your Gender !";
        $hasError = 1;
    } else {
        $genderMessage = "   Your Gender : $gender ";

}
    //? -----------City-----------
    if ( isset( $_REQUEST['city'] ) && $_REQUEST['city'] == 'Select City' ) {
        $cityMessage = ' City is Missing! Please select a city.';
        $hasError = 1;
    } else {

        $cityMessage = "  Your City : $city ";

    }
    //? ----------Zip Code ---------
    if ( empty( $zipCode ) ) {
        $zipCodeMessage = "  Zip Code is Missing! Please enter your zip code.";
        $hasError = 1;
    } else {
        $zipCodeMessage = "  Your zip code is : $zipCode";

    }
    //? ----------Address ----------
    if ( empty( $address ) ) {
        $addressMessage = "  Address is Missing! Please enter your address.";
        $hasError = 1;
    } else {
        $addressMessage = "  Your address is : $address";
    }
    //? ---------Password-----------
    if ( empty( $password ) ) {
        $passwordMessage = "  Please enter your Password!";
        $hasError = 1;
    } else {
        if ( strlen( $password ) <= 8 ) {
            $passwordMessage = "  Your Password Must Contain At Least 8 Characters!";
            $hasError = 1;
        } elseif ( !preg_match( "#[0-9]+#", $password ) ) {
            $passwordMessage = "Your Password Must Contain At Least 1 Number!";
            $hasError = 1;
        } elseif ( !preg_match( "#[A-Z]+#", $password ) ) {
            $passwordMessage = "Your Password Must Contain At Least 1 Capital Letter!";
            $hasError = 1;
        } elseif ( !preg_match( "#[a-z]+#", $password ) ) {
            $passwordMessage = "Your Password Must Contain At Least 1 Lowercase Letter!";
            $hasError = 1;
        } elseif ( !preg_match( '/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $password ) ) {
            $passwordMessage = "Your Password Must Contain At Least 1 Special Character !" . "";
            $hasError = 1;
        } else {
            $passwordMessage = "  Your Password : $password";
        }

    }
    //? ----------Confirm Password-----------
    if ( empty( $confirmPassword ) ) {
        $confirmPasswordMessage = "  Please  Confirm your Password!";
        $hasError = 1;
    } else {
        if ( $password == $confirmPassword ) {
            $confirmPasswordMessage = "  Your Confirm Password : $confirmPassword";
        } else {
            $confirmPasswordMessage = "    Password Didn't mathched !";
            $hasError = 1;
        }
    }
    //--------- Set Profile Image --------

    if ( empty( $_FILES['adminProfilePic']['name'] ) ) {
        $profileImageMessage = "please ! Upload a Image";
        $hasError = 1;

    } else {
        $profileImageMessage = $_FILES['adminProfilePic']['name'];
        move_uploaded_file( $_FILES["adminProfilePic"]["tmp_name"], "../uploads/" . $_REQUEST['email'] . ".jpg" );
    }







    
    //!----- Data Write in File Using JSON------
    if ( $hasError == 0 ) {
        $mydb = new MyDB2();
        $conobj = $mydb ->openCon();

        $result = $mydb->insertData("customer",$_REQUEST['fname'],$_REQUEST['lname'],$_REQUEST['userName'],$_REQUEST['dateOfBirth'],
        $_REQUEST['phoneNumber'],
        $_REQUEST['email'],$_REQUEST['gender'],$_REQUEST['city'],$_REQUEST['zipCode'],$_REQUEST['address'],$_REQUEST['password'],
        $_REQUEST['confirmPassword'],"../uploads/" . $_REQUEST['email'] . ".jpg", $conobj);

        if($result === TRUE){
            echo "File Written Sucessfully";
        }
        else{
            "Error".$conobj->error;
        }


        // //? ----To get Previous Data-------
        // $existingData = file_get_contents( "../data/jsondata.json" );
        // //? Converting existing data to PHP Data
        // $phpData = json_decode( $existingData );
        // //? Getting Form Data as Array
        // $formData = array(
        //     "fname"           => $_REQUEST['fname'],
        //     "lname"           => $_REQUEST['lname'],
        //     "userName"        => $_REQUEST['userName'],
        //     "dateOfBirth"     => $_REQUEST['dateOfBirth'],
        //     "phoneNumber"     => $_REQUEST['phoneNumber'],
        //     "email"           => $_REQUEST['email'],
        //     "gender"          => $_REQUEST['gender'],
        //     "city"            => $_REQUEST['city'],
        //     "zipCode"         => $_REQUEST['zipCode'],
        //     "address"         => $_REQUEST['address'],
        //     "password"        => $_REQUEST['password'],
        //     "confirmPassword" => $_REQUEST['confirmPassword'],
        //     "File"            => "../uploads/" . $_REQUEST['email'] . ".jpg",

        // );
        // //? For adding existing data with new Data
        // //? For Array Concat We do Like This
        // $phpData[] = $formData;

        // //? ---Converting PHP Data to JSON Data------
        // $jsonFormData = json_encode( $phpData, JSON_PRETTY_PRINT ); //?It will Return JSON object

        // //Wrting File
        // if ( file_put_contents( "../data/jsondata.json", $jsonFormData ) ) {
        //     echo "File Written Successfully.";
        //     echo " Please login Now";

        // } else {
        //     echo "File Written Failed !";
        

    }
}
?>
