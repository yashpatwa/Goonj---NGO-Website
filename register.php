<?php 

$host="localhost";
$user="root";
$password="";
$db="goonj";
$conn = mysqli_connect($host,$user,$password);
mysqli_select_db($conn,$db);
//code for cookie
$cookie_name = "GOONJ";
$cookie_value = "Cookies is set";

setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
if(!isset($_COOKIE[$cookie_name])) {
     //echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
     //echo "Cookie '" . $cookie_name . "' is set!<br>";
     //echo "Value is: " . $_COOKIE[$cookie_name];
}

//end of cookie 

$conn = mysqli_connect($host,$user,$password);
mysqli_select_db($conn,$db);
  
  //code for registration
  if(isset($_POST['signup_submit'])){
    
    $i_name=mysqli_real_escape_string($conn,$_POST['signup_name']);
    $i_lastname=mysqli_real_escape_string($conn,$_POST['signup_lastname']);
    $i_email=mysqli_real_escape_string($conn,$_POST['signup_email']);
    $i_phone=mysqli_real_escape_string($conn,$_POST['signup_phone']);
    $i_age=mysqli_real_escape_string($conn,$_POST['signup_age']);
    $i_gender=mysqli_real_escape_string($conn,$_POST['signup_gender']);
    $i_password=mysqli_real_escape_string($conn,$_POST['signup_password']);

    $i_password=md5($i_password1);

    $sql= "Insert INTO logininfo (name,password,lastname,phone,gender,age,email) VALUES ('$i_name','$i_password1','$i_lastname','$i_phone','$i_gender','$i_age','$i_email')";

    if (mysqli_query($conn,$sql)){
      echo '<script type="text/JavaScript">  
     alert("You are registered successfully"); 
     </script>' ;
      echo "<script>location.href='home.php'</script>";

   exit();

      
    }
    else {
      echo '<script type="text/JavaScript">  
     alert("Data Not inserted"); 
     </script>' ;
   exit();
    }

}
        

 ?>

<head>
    <meta charset="utf-8">
    <title>Goonj</title>
    <link rel="stylesheet"
      type="text/css"
      href="nav.css"
    />
    <link rel="stylesheet" type="text/css" href="styles2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
nav ul li a:hover {
  text-transform: scale(1.1);
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

.parallax1 {
  background: url("hom.png");
  min-height: 100%;
}
.parallax2 {
  background: url("g2.png");
  min-height: 60%;
}
.parallax3 {
  background: url("g11.png");
  min-height: 40%;
}
.parallax4 {
  background: url("g15.jpg");
  min-height: 60%;
}
.parallax5 {
  background: url("http://www.babysitting.academy/wp-content/uploads/2015/01/kids-hands-holding-plants-yolo-farm-to-fork-1030x686.jpg");
  min-height: 50%;
}
.parallax6 {
  background: url("g22.jpg");
  min-height: 50%;
}
.parallax1, .parallax2, .parallax3, .parallax4, .parallax5, .parallax6 {
  position: relative;
  opacity: .75;
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;
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

    .input-text:valid~.select-label,
    .select-text:valid~.select-label {
        color: #2F80ED;
        top: -12px;
        transition: 0.2s ease all;
        font-size: 14px;
    }

    .notempty~.select-label {
        color: red;
        top: -12px;
        transition: 0.2s ease all;
        font-size: 14px;
    }

    .bgimg {
        position: relative;
        /*opacity: 0.65;*/
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-image: linear-gradient(170deg, #B621fe, #1fd1f9);
    }

    .bgimg-1 {
        /*background-image: linear-gradient(rgba(255, 0, 0, 0.3), rgba(0, 255, 0, 0.3), rgba(0, 0, 255, 0.3)), url("img/request-appointment1.jpg");*/
        background-image: linear-gradient(170deg, #B621fe, #1fd1f9);
        line-height: 300px;
        height: 100px;
    }

    .bgimg-2 {
        /*background-image: linear-gradient(rgba(255, 0, 0, 0.3), rgba(0, 255, 0, 0.3), rgba(0, 0, 255, 0.3)), url("img/request-appointment2.jpg");*/
        background-image: linear-gradient(170deg, #B621fe, #1fd1f9);
        
    }
    .animation-area{
      background: linear-gradient(170deg, #B621fe, #1fd1f9); 
      width: 100%
      height: 100%;
    }
    .box-area{
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      overflow: hidden;
    }
    .box-area li{
      position: absolute;
      display: block;
      list-style: none;
      width: 25px;
      height:25px;
      background: (255,255,255,0.2) ;
      animation: animate 20s linear infinite;
      bottom: -150px;
    }

    .box-area li:nth-child(1){
      left:86%;
      width: 80px;
      height: 80px;
      animation-delay: 0s;
    }

    .box-area li:nth-child(2){
      left:12%;
      width: 30px;
      height: 30px;
      animation-delay: 1.5s;
      animation-duration: 10s
    }

    .box-area li:nth-child(3){
      left:70%;
      width: 150px;
      height: 150px;
      animation-delay: 5.5s;
      
    }

    .box-area li:nth-child(4){
      left:42%;
      width: 150px;
      height: 150px;
      animation-delay: 0s;
      animation-duration: 15s;
    }

    .box-area li:nth-child(5){
      left:65%;
      width: 40px;
      height: 40px;
      animation-delay: 0s;
    }
    .box-area li:nth-child(6){
      left:15%;
      width: 110px;
      height: 110px;
      animation-delay: 3.5s;
    }
    @keyframes animate{
      0%{
        transform: translateY(0) rotate(0deg);
        opacity: 1;
      }
      100%{
        transform: translateY(-800px) rotate(360deg);
        opacity: 0;
      }
    }
    /* Fixed/sticky icon bar (vertically aligned 50% from the top of the screen) */
.icon-bar {
  position: fixed;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

/* Style the icon bar links */
.icon-bar a {
  display: block;
  text-align: center;
  padding: 16px;
  transition: all 0.3s ease;
  color: white;
  font-size: 20px;
}

/* Style the social media icons with color, if you want */
.icon-bar a:hover {
  background-color: #000;
}

.facebook {
  background: #3B5998;
  color: white;
}

.twitter {
  background: #55ACEE;
  color: white;
}

.google {
  background: #dd4b39;
  color: white;
}

.linkedin {
  background: #007bb5;
  color: white;
}

.youtube {
  background: #bb0000;
  color: white;
}
</style>
<body>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <nav>
      <div class="logo">
        <a href="index.php">
        <img src="logot.png" alt="logo">
        </a>
      </div>
    <!--  <div class="menu-icon">
        <i class="fa fa-bars fa-2x"></i>
      </div>-->
      <ul>
        <li><a href="aboutuss.html">About Us</a></li>
        <li><a href="workk.html">Projects</a></li>
        <li><a href="galleryy.html">Gallery</a></li>
        <li><a href="contactt.html">Contact Us</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="register.php">Register</a></li>
      </ul>
    </nav>

       <div class="main ">
        <div style="display: table-cell;height: 40%;;color: white; ">
            <div class="animation-area">
      <ul class="box-area">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
      </ul>
    </div>
            <div class="bgimg">
                <h1 style="padding-top:100px; padding-bottom: 100px;color: white;vertical-align: center;text-align: center"><span class="" style="">Registration Page</span></h1>
                <!-- background-image:linear-gradient(172deg, #00dbde 0%, #fc00ff 100%); -->
            </div>
            <!--<div style="padding: 10px;background: lightgrey">
                <h3 style="text-align: center;color: black">Yay! We are excited you are coming!</h3>
            </div>-->
            <div style="padding: 30px" class="bgimg">
                <form class="box" style="vertical-align: middle;text-align: center;" method="post">
                    <!-- <h1 class="form-header-text">APPOINTMENT</h1> -->
                    <!-- <div>
                        <a href=''><img src="img/circle-image.png" id="signup-avatar" style="width: 125px;height: 125px;border-radius: 50%;margin-bottom: 25px;"><input accept='image/*' type='file' style='display:none;' name='avatar' id='profile-image-change-button' onchange="readImageURL(this);"></a>
                    </div> -->
                    <div class="row">
                        <div class="group" style="display: inline-block;">
                            <input  name="signup_name" class="input-text" type="text" pattern="[A-Za-z]{1,}" title="Enter a valid Name!" value="" autofocus required autocomplete>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label class="select-label" >First Name</label>
                        </div>
                        <div class="group" style="display: inline-block;">
                            <input name="signup_lastname" class="input-text" type="text" pattern="[A-Za-z]{1,}" title="Enter a valid Surame!" value="" autocomplete required>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label class="select-label" >Last Name</label>
                        </div>
                    </div>
                    <div class="group">
                        <input name="signup_email" class="input-text" type="email" value="" title="Enter a valid E-mail ID!" required autocomplete>
                        <!-- pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" -->
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label class="select-label" >E-mail</label>
                    </div>
                    <div class="group">
                        <input class="input-text" type="text" maxlength="10" onKeyDown="phoneNoPreValidation()" pattern="[0-9]{10}" title="Enter a valid Phone Number!" value="" name="signup_phone" required autocomplete>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label class="select-label" >Phone Number</label>
                    </div>
                    <!-- <div class="group">
                        <div class="select">
                            <select class="select-text" value="" required>
                                <option value="" disabled selected></option>
                                <option value="E-mail">New Patient Visit</option>
                                <option value="Phone Call">Full mouth Dentistry</option>
                                <option value="Text Message">Dental Implants</option>
                                <option value="Text Message">General Dentistry</option>
                                <option value="Text Message">Mercury Filling Removal</option>
                                <option value="Text Message">Not Sure!</option>
                            </select>
                            <span class="select-highlight"></span>
                            <span class="select-bar"></span>
                            <label class="select-label">Appointment regarding</label>
                        </div>
                    </div> -->
                    <!-- <div class="group">
                        <div class="select">
                            <select class="select-text" value="" required>
                                <option value="" disabled selected></option>
                                <option value="E-mail">E-mail</option>
                                <option value="Phone Call">Phone Call</option>
                                <option value="Text Message">Text Message</option>
                            </select>
                            <span class="select-highlight"></span>
                            <span class="select-bar"></span>
                            <label class="select-label">Preferred method of contact</label>
                        </div>
                    </div> -->
                    <div class="row">
                        <div class="group" style="width:18%;display: inline-block;">
                            <input name="signup_age" class="input-text" type="number" value="" min="13" max="100" title="Enter your valid Age!" required>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label class="select-label" >Age</label>
                        </div>


                         <div class="row">
                        <div class="group" style="width:18%;display: inline-block;">
                            <input name="signup_password" class="input-text" type="password" value="" min="13" max="100" title="Enter your valid Age!" required>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label class="select-label" >Password</label>
                        </div>
                        <!-- <div class="group" style="width:80%;display: inline-block;">
                            <div class="select">
                                <select class="select-text" value="" required>
                                    <option value="" disabled selected></option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                                <span class="select-highlight"></span>
                                <span class="select-bar"></span>
                                <label class="select-label">Gender</label>
                            </div>
                        </div> -->
                        <div class="group" style="width:80%;display: inline-block;">
                            <label class="select-label">Gender</label>
                            <br>
                            <div class="md-radio md-radio-inline">
                                <input  value="male" id="male" type="radio" name="signup_gender" checked>
                                <label for="male">Male</label>
                            </div>
                            <div class="md-radio md-radio-inline">
                                <input value="female" id="female" type="radio" name="signup_gender">
                                <label for="female">Female</label>
                            </div>
                        </div>
                          <div class="group" style="width:80%;display: inline-block;">
                   <!--      <input list="Gender" id="Citylist" name="Genderlist" class="input-text" required="true" /> -->
                        <!-- <datalist id="Gender">
                            <option value="Male">
                            <option value="Female">
                        </datalist> -->
                      <!--   <span class="highlight"></span>
                        <span class="bar"></span>
                        <label class="select-label">Gender</label>
                    </div>
                    </div> -->
                    <!-- <div class="group">
                        <input class="input-text" type="text" title="Enter your Message" value="" autocomplete required>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label class="select-label">Message</label>
                    </div> -->
                    <div class="popup" onclick="myFunction()">

                    <input class="ripplelink block primary" type="submit" name="signup_submit"></button>
                    <span class="popuptext" id="myPopup">You have registered successfully!</span>
                    </div>
                </form>
            </div>
        </div>
    </div>
<!-- The social media icon bar -->
<div class="icon-bar">
  <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
  <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
  <a href="#" class="google"><i class="fa fa-google"></i></a>
  <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
  <a href="#" class="youtube"><i class="fa fa-youtube"></i></a>
</div>
    <script>
// When the user clicks on <div>, open the popup
function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}
</script>
       <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/script.js"></script>
    <script type="text/javascript">
    function phoneNoPreValidation() {
        var e = event || window.event; // get event object
        var key = e.keyCode || e.which; // get key cross-browser

        if (key == 8 || key == 9 || key == 46) //back, delete tab, ctrl, win, alt, f5, paste, copy, cut, home, end
            return true;

        // if(key == 109 && allownegative)
        //     return true;

        // if(key == 190 && allowcomma)
        //     return true;

        if (key >= 37 && key <= 40) //arrows
            return true;

        if (key >= 48 && key <= 57) // top key
            return true;

        if (key >= 96 && key <= 105) //num key
            return true;
        console.log('Not allowed key pressed ' + key);

        if (e.preventDefault) e.preventDefault(); //normal browsers
        e.returnValue = false;
    }
    </script>