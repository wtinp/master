<?php

$con = mysqli_connect('localhost', 'root', '','userregisteration');

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $p_email = mysqli_real_escape_string($con,$_POST['p_email']);
      $pwd = mysqli_real_escape_string($con,$_POST['pwd']); 
      
      $sql = "SELECT id FROM usertable WHERE p_email = '$p_email' and pwd = '$pwd'";
      $result = mysqli_query($con, $sql);
      $row = mysqli_fetch_array($result) or die( mysqli_error($con));
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $p_email and $pwd, table row must be 1 row
		
      if($count == 1) {
         session_register("p_email");
         $_SESSION['login_user'] = $p_email;
         
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<html>
   
   <head>
      <title>Login Page</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label>UserName  :</label><input type = "text" name = "p_email" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "pwd" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>