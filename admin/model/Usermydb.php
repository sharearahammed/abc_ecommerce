<?php
class MyDB2{

    function openCon(){
        $conn = new mysqli("localhost","root","","abc ecommerce");
        return $conn;
    }

    function insertData($tablename,$fname,$lname,$username,$dateofbirth,$phonenumber,$email,$gender,$city,$zipcode,$address,$password,$confirmpassword,$File,$conn){//$role
        $sql2 = "INSERT INTO $tablename (fname,lname,username,dateofbirth,phonenumber,email,gender,city,zipcode,address,password,confirmpassword,File)
         VALUES('$fname','$lname','$username','$dateofbirth','$phonenumber','$email','$gender','$city','$zipcode','$address','$password','$confirmpassword','$File')";
         $result = $conn ->query($sql2);
         return $result;
    }
    function checkUser($tablename,$email,$password,$conn){
        $sql2="SELECT * FROM $tablename WHERE email='$email' AND
        password='$password'";
        $result=$conn->query($sql2);
        return $result;
    }

    function getUserInfo($tablename, $email, $conn){
        $sql2="SELECT * FROM $tablename WHERE email='$email' ";
        $result = $conn->query($sql2);
        return $result;
    }

    function getUserByName($name, $conn){
        $sql2="SELECT * FROM Customer WHERE username='$name'";
        $result=$conn->query($sql2);
        return $result;
    }

    function getUserByEmail($email, $conn){
        $sql2="SELECT * FROM Customer WHERE email='$email'";
        $result=$conn->query($sql2);
        return $result;
    }

    function updateUser($tablename, $conn, $fname, $lname, $email, $phonenumber ,$File){


        $sql2= "UPDATE $tablename SET fname='$fname', lname='$lname', email='$email',
        phoneNumber='$phonenumber',
        file='$File' WHERE email='$email' ";
        $result = $conn->query($sql2);
        //$sql3="update customer set email='$email' where dateofbirth=2001";
        return $result;
        }
    function updatepassword($tablename, $conn, $email, $password, $confirmpassword){


            $sql2= "UPDATE $tablename SET email='$email' , password='$password', confirmPassword='$confirmpassword'
            WHERE email='$email' ";
            
            $result = $conn->query($sql2);
            //$sql3="update customer set email='$email' where dateofbirth=2001";
            return $result;
            }
    // function getUser Info($tablename,$email,$conn){
    // $sql2="SELECT * FROM $tablename WHERE email='$email'";
    // $query = mysqli_query();
    // $emailcount = mysqli_num_rows($query);
    // if($emailcount>0){
    //     echo "Email already esists";
    // }  
    // }

}



?>