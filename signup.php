<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Signup</title>
        <link href="css/login.css" rel='stylesheet' type='text/css' />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="App Sign in Form,Login Forms,Sign up Forms,Registration Forms,News latter Forms,Elements"./>
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    </script>
    <!--webfonts-->
    <link href='http://fonts.useso.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!--//webfonts-->
</head>
<body>
    <h1>Monash Survival Guide</h1>
    <div class="login"> 
            <h2>Create an account</h2>
        </div>
    <div class="app-cam">
            <!--<div class="cam"><img src="images/cam.png" class="img-responsive" alt="" /></div>-->
        <form method="post" action="register.php">
            <input type="text" class="text" name="email" value="E-mail address" onfocus="this.value = '';" onblur="if (this.value == '') {
                        this.value = 'E-mail address';
                    }" >
            <input type="password" name="pwd" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {
                        this.value = 'Password';
                    }">
            <input type="password" name="confirmPwd" value="confirmPassword" onfocus="this.value = '';" onblur="if (this.value == '') {
                        this.value = 'Confirm Password';
                    }">
             <input type="text" class="text" name="usrName" value="User Name" onfocus="this.value = '';" onblur="if (this.value == '') {
                        this.value = 'User Name';
                    }" >
                
                <select name="selectFaculty" class="select" onchange="select(this)"> 
                <option value="0">请选择Faculty</option> 
                <option value="value1">Art, Design and Architecture</option> 
                <option value="value2">Arts</option> 
                <option value="value3">Business and Economics</option>
                <option value="value1">Education</option> 
                <option value="value2">Engineering</option> 
                <option value="value3">Information Technology</option>
                <option value="value1">Law</option> 
                <option value="value2">Medicine, Nursing and Health Sciences</option> 
                <option value="value3">Pharmacy and Pharmaceutical Sciences</option>
                <option value="value1">Science</option>
                <option value="value1">Monash Injury Research Institute</option>
            </select> 
            <div class="submit"><input type="submit"  value="Sign in" ></div>
            <div class="clear"></div>
            <div class="buttons">
                <ul>
                    <li><a href="#" class="hvr-sweep-to-right">Sign in with Facebook</a></li>
                    <li><a href="#" class="hvr-sweep-to-left">Sign in with Twitter</a></li>
                    <div class="clear"></div>
                </ul>
            </div>
            <div class="new">
                <p><a href="#">Forgot Password ?</a></p>
                <p class="sign">New here ?<a href="#"> Sign Up</a></p>
                <div class="clear"></div>
            </div>
        </form>
    </div>
    <!--start-copyright-->
    <div class="copy-right">
        <p>Copyright &copy; 2015.Company name All rights reserved.<a href="http://www.moke8.com/" target="_blank">moke8</a></p>
    </div>
    <!--//end-copyright-->
    
</body>
</html>