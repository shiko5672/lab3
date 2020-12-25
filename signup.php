


<!DOCTYPE html>
<html>
    <head>
           <title>lab3</title>
           <link rel="stylesheet" href="style.css">
           <script src="Registration.js"></script>
           
               <script>
      function checkEmail(str){
        const email = document.getElementById("emailid").value;
        const xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function(){
          const serverResponse = document.getElementById("availability");
          serverResponse.innerHTML = this.responseText;
        };
        xhr.open("POST","check.php");
        xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
        xhr.send("email_check="+email);
    }

      
    </script>
           
    </head>
    <body class="body">
        
       
        <div class="navbar">
            <a class="active" href="#home">Home</a>
          </div>
          <form id="form"  name="myform" action="Registration.php" onsubmit="return validateform()" method="POST">
        <div class="position-center" class="back">
            <h1>CREATE ACCOUNT</h1>
            <small id="nameerorr"></small>
            
                <input type="text" id="name" name="name" placeholder="Your name.." >
                <label id="emailerorr"></label>
                <input type="email" id="emailid" name="email" placeholder="Your Email..." onfocusout="checkEmail(this.value)" >
                <span id="availability"></span>
                <label id="passworderorr"></label>
                <input type="password" id="password" name="password" placeholder="password.." >
                <label id="cpassword"></label>
                <input type="password" id="confirmpassword" name="confirmpassword" placeholder="confirm password.."  >
                <button type="submit" class="button button2" >sign up</button>
                <a href="login.html" class="button button2" style="margin-left:50px;" >login</a>
        </div>
    </form>
        
    </body>
</html>
