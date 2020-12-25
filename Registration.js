function validateform(){
var name = document.forms["myform"]["name"].value;
var email = document.forms["myform"]["email"].value;
var password=document.forms["myform"]["password"].value
var confirmpassword = document.forms["myform"]["confirmpassword"].value;
if(name==null || name==""){
    alert("name must be filled");
    return false;
}
if(email==null || email==""){
    alert("email field must be filled");
    return false;
}
if(password==""||password==null){
    alert("password field must be filled");
    return false;
}
if(password.length<7){
alert("password must be more than 7 characters");
return false;
}
if(password!=confirmpassword){
    alert("the password not matche");
}

}
function validate(){
    var email = document.forms["form"]["email"].value;
var password=document.forms["form"]["password"].value
if(email==null || email==""){
    alert("email field must be filled");
    return false;
}
if(password==""||password==null){
    alert("password field must be filled");
    return false;
}
if(password.length<7){
alert("password must be more than 7 characters");
return false;
}

}
