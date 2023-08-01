function validation(){
    if(checkfname() || checklname() || checkuserName() || checkdateOfBirth() || checkphoneNumber() || checkemail() || checkzipCode() 
    || checkaddress() || checkpassword() || checkconfirmPassword() || checkadminProfilePic() == false)
    {
        console.log("fname "+checkfname());
        console.log("lname "+checklname());
        console.log("username "+checkuserName());
        console.log("birthday "+checkdateOfBirth());
        console.log("Phone "+checkphoneNumber());
        console.log("email "+checkemail());
        console.log("zipcode "+checkzipCode());
        console.log("address "+checkaddress());
        console.log("pass "+checkpassword());
        console.log("picture "+checkadminProfilePic());
        return false;
    }
    else
    return true;

}
//************fname*************
function checkfname(){
    var fname=document.getElementById("fname").value;
    if(fname==""){
        document.getElementById("fnameMessage").innerHTML=
        "**First Name must be mantioned";
        return false;
    }
    else if(fname.search(/[A-Za-z]/) < 0 ){
        document.getElementById("fnameMessage").innerHTML=
        "**Name can't be a number";
        return false;
    }
    else{
        return true;
    }
}
//************lname*************
function checklname(){
    var lname=document.getElementById("lname").value;
    if(lname==""){
        document.getElementById("lnameMessage").innerHTML=
        "**Last Name must be mantioned";
        return false;
    }
    else if(lname.search(/[A-Za-z]/) < 0 ){
        document.getElementById("lnameMessage").innerHTML=
        "**Name can't be a number";
        return false;
    }
    
    else{
        return true;
    }
    
}
//************userName*************
function checkuserName(){
    var userName=document.getElementById("userName").value;
    if(userName==""){
        document.getElementById("userNameMessage").innerHTML=
        "**Please give a username ";
        return false;
    }
    else if(userName.search(/[^0-9_.@!#$%^&*]+/) < 0 ){
        document.getElementById("userNameMessage").innerHTML=
        "**User Name may only contain letters";
        return false;
    }
    else{
        return true;
    }
}
//************dateOfBirth*************
function checkdateOfBirth(){
    var dateOfBirth=document.getElementById("dateOfBirth").value;
    if(dateOfBirth==""){
        document.getElementById("dateOfBirthMessage").innerHTML=
        "**Please give your Date of Birth ";
        return false;
    }
    else{
        return true;
    }
}
//************phoneNumber*************
function checkphoneNumber(){
    var phoneNumber=document.getElementById("phoneNumber").value;
    if(phoneNumber==""){
        document.getElementById("phoneNumberMessage").innerHTML=
        "**Please give your Phone Number";
        return false;
    }
    else if(phoneNumber.length < 11){
        document.getElementById("phoneNumberMessage").innerHTML=
        "**Phone number must be 11 characters";
        return false;
    }
    else if(phoneNumber.length > 11){
        document.getElementById("phoneNumberMessage").innerHTML=
        "**Phone number must be 11 characters";
        return false;
    }
    else if(isNaN(phoneNumber)){
        document.getElementById("phoneNumberMessage").innerHTML=
        "**Only numbers are allowed";
        return false;
    }
    else{
        return true;
    }
}
//************email*************
function checkemail(){
    var email=document.getElementById("email").value;
    var mailformat = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    if(email==""){
        document.getElementById("emailMessage").innerHTML=
        "**Email must be provided here";
        return false;
    }
    else if(mailformat.test(email)){
        document.getElementById("emailMessage").innerHTML=
        "**Provide a valid email address";
        return false;
    }
    else{
        return true;
    }
}
//************gender*************
// function checkgender(){
//     var valid = false;
//     var x = document.myform.gender;
//     for (var i=1;i<x.length;i++){
//         if(x[i].checked){
//             valid = true;
//             break;
//         }
//     }
//     if(valid){
//         document.getElementById("genderMessage").innerHTML=
//         "";
//     }
//     else{
//         document.getElementById("genderMessage").innerHTML=
//         "**Please select your gender";
//         return false;
//     }

//}
//************zipCode*************
function checkzipCode(){
    var zipCode=document.getElementById("zipCode").value;
    if(zipCode==""){
        document.getElementById("zipCodeMessage").innerHTML=
        "**Zip Code is missing";
        return false;
    }
    else if(isNaN(zipCode)){
        document.getElementById("zipCodeMessage").innerHTML=
        "**Only numbers are allowed";
        return false;
    }
    else{
        return true;
    }
}
//************address*************
function checkaddress(){
    var address=document.getElementById("address").value;
    if(address==""){
        document.getElementById("addressMessage").innerHTML=
        "**Address is missing";
        return false;
    }
    else{
        return true;
    }
}
//************Password*************
function checkpassword(){
    var password=document.getElementById("password").value;
    if(password==""){
        document.getElementById("passwordMessage").innerHTML=
        "**Password is missing";
        return false;
    }
    else if(password.length < 8){
        document.getElementById("passwordMessage").innerHTML=
        "**Password must be 8 character";
        return false;
    }
    else if(password.search(/[a-z]/i) < 0){
        document.getElementById("passwordMessage").innerHTML=
        "**Your Password Must Contain At Least 1 Lower Letter!";
        return false;
    }
    else if(password.search(/[0-9]/) < 0 ){
        document.getElementById("passwordMessage").innerHTML=
        "**Password Must Contain At Least 1 character!";
        return false;
    }
    else if(password.search(/[A-Z]/) < 0 ){
        document.getElementById("passwordMessage").innerHTML=
        "**Your Password Must Contain At Least 1 Capital Letter!";
        return false;
    }
    else if(password.search(/[\'^£$%&*()}{@#~?><>,|=_+¬-]/) < 0 ){
        document.getElementById("passwordMessage").innerHTML=
        "**Your Password Must Contain At Least 1 Special Character !";
        return false;
    }
    else{
        return true;
    }
}
//************confirmPassword*************
function checkconfirmPassword(){
    var confirmPassword=document.getElementById("confirmPassword").value;
    if(confirmPassword==""){
        document.getElementById("confirmPasswordMessage").innerHTML=
        "**Please confirm your password";
        return false;
    }
    if(confirmPassword !== password){
        document.getElementById("confirmPasswordMessage").innerHTML=
        "**Password doesn't match";
        return false;
    }
    else{
        return true;
    }
}
//************adminProfilePic*************
function checkadminProfilePic(){
    var adminProfilePic=document.getElementById("adminProfilePic").value;
    if(adminProfilePic==""){
        document.getElementById("profileImageMessage").innerHTML=
        "**Profile Picture is missing";
        return false;
    }
    else{
        return true;
    }
}