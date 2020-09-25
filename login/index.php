
<html>  
<head>  
    <title>تسجيل الدخول للموقع</title>   
    <link rel = "stylesheet" type = "text/css" href = "../css/style.css">   
</head>  
<body>  
    <div id= "frm">  
        <h1>Login</h1>  
        <form name="f1" action = "authentication.php" onsubmit = "return validation()" method = "POST">  
            <ul id="userandpass">
                  <li id="Input"style="border-bottom:none;">
                   <label>UserName: </label><input type = "text"  name  = "user" id="user" > 
                </li>
                    
               <li id="Input"style="border-bottom:solid 2px red;">
                 
                 <label> Password:</label> <input type = "password"  name  = "pass" id="pass"> 
                  </li>
        
                <input type =  "submit" id = "btn" value = "Login" />  
            
            </ul>
        </form>  
    </div>  
    <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  
</body>     
</html>  