<!doctype html>
<html lang="en">
<head>
    <title>Login And Registration Portal - World Telehealth Initiative</title>
    <link rel="stylesheet" href="Stylesheets/style.css">  
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div class="hero2" />
    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <!-- <div id="btn"></div> -->
                <button id="log" type="button" class="toggle-btn selectedButton" onclick="login()">Log In</button>
                <button id="reg" type="button" class="toggle-btn" onclick="register()">Register</button>
            </div>
                  
            <form id="login" method="post" class="input-group" action="login.php" autocomplete="on">
                <input type="text" class="input-field" placeholder= "User Id"
                required>
                <input type="password" class="input-field" placeholder= "Provide Password"
                required>
                <input type="checkbox" class="check-box"> <span>Remember Password</span>
                <button type="submit" class="submit-btn">Log in</button>
            </form>
            <form style="display: none;text-align: left;" method= "post" id="register" class="input-group" action="registeration.php" autocomplete="on">
                <label for="First Name">First Name:</label>
                <input type="text" name ="f_name" id="f_name" class="input-field" placeholder="First Name:" required>
                
                <label for="Last Name">Last Name:</label>
                <input type="text" name = "l_name" id= "l_name" class="input-field" placeholder="Last Name:" required>
                
                <label for="email"> Email ID: </label>
                <input type="email" name = "p_email" id = "p_email" class="input-field" placeholder="Email Id:" required>
                
                <label for = "Password"><i class="fas fa-lock"></i>Password:
                <progress max="100" value="0" id="strength" aria-
                label="password strength progress bar"></progress>
                </label>
                <input type="text" name = "pwd" id = "pwd" class="input-field" placeholder="Password:" required>
                
                <label for="confirm password"> Confirm Password:</label>
                <input type="text" name = "cpwd" id = "cpwd" class="input-field" placeholder="Confirm Password:" required>
                
                <input type="checkbox" class="check-box"><span>I agree to terms & conditions</span>
                <div style="transform:scale(0.85);-webkit-transform:scale(0.85);transform-origin:0 0;-webkit-transform-origin:0 0;" class="g-recaptcha" data-sitekey="6Leyk-4UAAAAAGfNFCyAviIrg5UtuqEFNLSFnraS"><div style="width: 304px; height: 78px;"><div><iframe src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6Leyk-4UAAAAAGfNFCyAviIrg5UtuqEFNLSFnraS&amp;co=aHR0cHM6Ly9zYWhlZWQuY29tLm5nOjQ0Mw..&amp;hl=en&amp;v=pRiAUlKgZOMcFLsfzZTeGtOA&amp;size=normal&amp;cb=hgaeftgq9zul" width="304" height="78" role="presentation" name="a-4ei658dn87mr" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;"></iframe></div>
                <button type="submit" class="submit-btn">Register</button>
            </form>
            <div class="social-icons">
                <img src="images/fb.png">
                <img src="images/tw.jfif">
                <img src="images/gw.png">
            </div> 
        </div>
        
        
        
    </div>


    </div>

        <script>
            var x = document.getElementById("login");
            var y = document.getElementById("register");
            var z = document.getElementById("btn");

            function register(){
                // x.style. = "-400px";
                // y.style.left = "50px";
                // z.style.left = "110px";
                x.classList.remove("showFormAnimation");
                y.classList.add("showFormAnimation");
                document.getElementById("log").classList.remove("selectedButton");
                document.getElementById("reg").classList.add("selectedButton");
                x.style.display = 'none'
                y.style.display = 'block'
            }
            function login(){
                y.classList.remove("showFormAnimation");
                x.classList.add("showFormAnimation");
                document.getElementById("reg").classList.remove("selectedButton");
                document.getElementById("log").classList.add("selectedButton");
                x.style.display = 'block'
                y.style.display = 'none'
                // x.style.left = "50px";
                // y.style.left = "450px";
                // z.style.left = "0";
            }
        </script>

        
	<footer>
		&copy; <?php echo date('Y'); ?> World Telehealth Initiative
	</footer>
	
</body>
</html>    