<?php  
$host="localhost";
$user="root";
$password="";
$db="goonj";

$conn = mysqli_connect($host,$user,$password);
    mysqli_select_db($conn,$db);
if(isset($_POST['login_submit'])){  
if(!empty($_POST['name']) && !empty($_POST['password'])) {  
    $user=$_POST['name'];  
    $pass=$_POST['password'];  
    
 
    $query=mysqli_query($conn, "SELECT * FROM logininfo WHERE name='".$user."'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows!==0)  
    {  
    $sql="UPDATE logininfo SET password='".$pass."' WHERE name='".$user."'";  
 
    $result=mysqli_query($conn, $sql);  
        if($result){  
    echo "<script type = 'text/javascript'>";
    echo 'alert("Password successfully changed")';
    echo '</script>';  
    } else {  
    echo "Failure!";  
    }  
 
    } else {  
    echo "<script type = 'text/javascript'>";
    echo 'alert("Account does not Exists")';
    echo '</script>';
    }  
 
}  
}
 ?>   



<head>
    <meta charset="utf-8">
    <title>Change Password</title>
    <link rel="stylesheet"
      type="text/css"
      href="loginstyles.css"
    />
    <link rel="icon" href="logot.png" type="image/png">
  </head>

  <style>
    @import url('https://fonts.googleapis.com/css?family=Ubuntu');
body, html {
  height: 100%;
  margin: 0;
  font-family: 'Ubuntu', sans-serif;
  line-height: 180%;
  color: #666;
  text-align: center;
}
nav{
  position: fixed;
  top:0;
  left: 0;
  width: 100%;
  height: 100px;
  padding: 10px 60px;
  box-sizing: border-box;
  transition: .5s;
  z-index: 5;
  opacity: 1;
  box-shadow: 0 10px 10px -2px rgba(0,0,0,.2);
  
}
nav.black{
  background: rgba(0,0,0,.8);
  height: 80px;
  padding: 10px 50px;
}
nav ul li a{
  text-decoration: none;
  color: white;
}
nav ul li a:hover{
  color:white;
}
nav .logo{
  float: left;
}
nav .logo img{
  height: 80px;
  transition: .5s;
}
nav.black .logo img{
  height: 60px;
}
nav ul{
  float: right;
  margin: 0;
  padding: 0;
  display: flex;
}
nav ul li{
  list-style: none;
  margin-top: 25px;
  line-height: none;
  font-size: 18px;
  color: white;
  padding: 5px 15px;
  text-decoration: none;
  text-transform: uppercase;
  transition: 1s;
  text-shadow: 0 0 10px #000;
}
nav ul li a {
  position: relative;
}
nav ul li a:after{
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  margin: auto;
  width: 0%;
  content: '.';
  color: transparent;
  background: #fff;
  height: 1px;
}
nav ul li a,
nav ul li a:after,
nav ul li a:before {
  transition: all .5s;
}
nav ul li a:hover:after {
  width: 100%;
}
nav ul li a {
  transition: all 2s;
}

nav ul li a:after {
  text-align: left;
  content: '.';
  margin: 0;
  opacity: 0;
}
nav ul li a:hover {
  color: #fff;
  z-index: 1;
}
nav ul li a:hover:after {
  z-index: -10;
  animation: fill 1s forwards;
  -webkit-animation: fill 1s forwards;
  -moz-animation: fill 1s forwards;
  opacity: 1;
}

@-webkit-keyframes fill {
  0% {
    width: 0%;
    height: 1px;
  }
  50% {
    width: 100%;
    height: 1px;
  }
  100% {
    width: 100%;
    height: 100%;
    background: #ff3300;
  }
}
.parallax1 {
  background: url("g21.jpg");
  
  min-height: 90%;
}
.parallax2 {
  background: url("g16.jpg");
  
  min-height: 50%;
}
.parallax6 {
  background: url("g14.jpg");
  
  min-height: 100%;
}
.parallax1, .parallax2, .parallax3, .parallax4, .parallax5, .parallax6 {
  position: relative;
  opacity: .75;
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;
}
/* nav ul li a{
  line-height: none;
  font-size: 18px;
  color: white;
  padding: 5px 15px;
  text-decoration: none;
  text-transform: uppercase;
  transition: 1s;
  text-shadow: 0 0 10px #000;
} */

/* nav.black ul li a{
  color: #fff;
  line-height: 20px;
} */
nav.black ul li{
  color: #fff;
  line-height: 20px;
}
/* nav ul li a.active,
nav ul li a:hover{
  color: orange;
} */
nav ul li.active,
nav ul li:hover{
  color: orange;
}
.heading {
  position: absolute;
  color: #fff;
  font-size: 550%;
  top: 38%;
  width: 100%;
  text-transform: uppercase;
  letter-spacing: 8px;
  text-shadow: 0 0 10px #000;
}
.heading2 {
  position: absolute;
  color: #fff;
  font-size: 150%;
  top: 50%;
  width: 100%;
  text-transform: uppercase;
  letter-spacing: 8px;
  text-shadow: 0 0 10px #000;
}
.heading-sm {
  position: absolute;
  top: 45%;
  width: 100%;
  color: #fff;
  font-size: 250%;
  text-transform: uppercase;
  letter-spacing: 5px;
  text-shadow: 0 0 10px #000;
}
.two-col{
  float: left;
  width: 42%;
  padding: 0 4%;
  text-align: center;
}
section {
  overflow: auto;
  padding: 50px 80px;
}
.dark{
  overflow: auto;
  padding: 50px 80px;
  background-color: #323232;
  color: #f2f2f2;
}
@media (max-width: 900px){
  nav ul li{
    font-size: 12px;
    text-decoration: none;
  }
  .heading{
    font-size: 250%;
  }
}
@media (max-width: 600px){
  .heading{
    font-size: 250%;
  }
  .heading-sm{
    font-size: 180%
  }
  .two-col {
    width: 100%;
    padding: 0;
    text-align: center;
  }
  nav ul li{
    font-size: 8px;
    text-decoration: none;
  }
}
.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
  color:white;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}
.logo:hover{
  -webkit-animation: rotation 2s infinite linear;
}
@-webkit-keyframes rotation {
    from {
        -webkit-transform: rotate(0deg);
    }
    to {
        -webkit-transform: rotate(359deg);
    }
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>

<body>
  <nav>
      <div class="logo">
        <a href="index.php">
        <img src="logot.png" alt="logo">
        </a>
      </div>
      <div class="menu-icon">
        <i class="fa fa-bars fa-2x"></i>
      </div>
      <ul>
        <li><a href="aboutuss.html">About Us</a></li>
        <li><a href="workk.html">Projects</a></li>
        <li><a href="galleryy.html">Gallery</a></li>
        <li><a href="contactt.html">Contact Us</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="register.php">Register</a></li>
      </ul>
    </nav>
    <img id="backimg" src="g13.jpg" width=100% alt="login">
    <form method="post" action="forgotpwd.php"> 


      <div class="login-box">
        <h1>Password</h1>

      <div class="textbox">
        
        <input type="text" placeholder="Username" name="name" value="">
      </div>

      <div class="textbox">

        <input type="password" placeholder="New Password" name="password" value="">

      </div>

      <input class="btn" type="submit" name="login_submit" value="Sign In" href="home.php">
      <!--<input class="btn" type="submit" name="" value="New Here? Register" href='register.php'>-->

      </form>
      
    <!--<div class="login-box">
    <img src="avatar.png" class="avatar">
        <h1>Login Here</h1>
            <form>
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="submit" value="Login">
            <a href="#">Forget Password</a>    
            </form>
        
        
        </div>-->

    
  </body>
</html>
    <div class="">
      <div class="heading"></div>
    </div>

    <section class=""></section>