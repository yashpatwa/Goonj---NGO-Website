<?php 
session_start();

$host="localhost";
$user="root";
$password="";
$db="goonj";

$conn = mysqli_connect($host,$user,$password);
mysqli_select_db($conn,$db);

if(isset($_SESSION['login_name'])){
  echo "<h1> Welcome ".$_SESSION['login_name']."</h1>";
}
?>
<head>
    <meta charset="utf-8">
    <title>Goonj</title>
    <link rel="stylesheet"
      type="text/css"
      href="nav.css"
    />
    <link rel="icon" href="logot.png" type="image/png">
    <link rel="manifest" href="manifest.json">
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
  background: url("g26.jpg");
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
  margin-bottom: 10px;
  animation: text 3s 1;
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

@keyframes text{
  0%{
    color: none;
    margin-bottom: -40px;
  }

  30%{
    letter-spacing: 25px;
    margin-bottom: -40px;
  }

  85%{
    letter-spacing: 8px;
    margin-bottom: -40px;
  }
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
<script>
  $(window).on('scroll',function(){
        if($(window).scrollTop()){
          $('nav').addClass('black');
        }else {
          $('nav').removeClass('black');
        }
      })
</script>
  <body>
    <nav>
      <div class="logo">
        <a href="homedup.php">
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
        <li><a href="login.php">Logout</a></li>
        
      </ul>
    </nav>
    <div class="parallax1">
      <div class="heading">Goonj</div>
      <div class="heading2">Igniting Souls. Inspiring Change.</div> 
    </div>

    <section>
      <h1>About Us</h1>
      <div class="one-col">
        <p>Goonj is a national non-profit organization which was founded in the year 2018. Today, it is catering to the needs of thousands of children, leading independent child rights. Every day, we bring hope to thousands of children's hearts.</p>
      </div>
      <h1>Vision</h1>
      <div class="one-col">
        <p>To work towards creating a better India which provides basic health, education and empowerment to every child of our country who are not blessed with these amenities. A nation in which every child attains the right to survival, protection, development, and participation.</p>
      <h1>Mission</h1>
      <div class="one-col">
        <p>To inspire breakthroughs in the way the world treats children and to achieve immediate and lasting change in their lives. Whatever it takes to save a child.</p>
      </div>
      <!--<div class="two-col">
        <p>Here We Grow, Early Childhood Learning, is a family owned and operated childcare center.Our center is licensed to care for children between 6 weeks and 6 years. At Here We Grow we value a nutritious homemade diet as well as an enriched, educationally based curriculum. We feel as though learning doesn't just occur in the classroom but through hands on experiences as well. A great example of this can be seen in our garden, in the summer, as the children assist their teachers in caring for the garden. Furthermore, we believe that keeping the lines of communication open and smooth flowing are crucial in developing happy and healthy relationships with our families. Our doors are always open and we encourage parents to be as involved as they like!</p>
      </div>-->
    </section>

    <section>
      
    </section>

    <div class="parallax2">
      <div class="heading-sm">
        A Passion To Help. The Ability To Deliver.
      </div>
    </div>

    <section class="dark">
      <h2>What We Aim At</h2>
      <p>We at Goonj, aim at Health, Nutrition, Education and Child Protection for our children.</p>
<p>Education is both the means as well as the end to a better life: the means because it empowers an individual to earn his/her livelihood and the end because it increases one's awareness on a range of issues – from healthcare to appropriate social behaviour to understanding one's rights – and in the process help him/her evolve as a better citizen.</p>
<p>Realizing this, Goonj , beginning in the corridors of education, adopted a lifecycle approach of development, focusing its interventions on children, their families and the larger community.</p>
<p>Today, 8 million children in India are out of school – surrounded by poverty, illness and despair; they are fighting a daily battle for their survival. Together, we can help a child and bring hope in their lives. Together, we can bring change and make it last.</p>
    </section>

    <div class="parallax3">
       <div class="heading-sm">
        Whatever It Takes To Save A Child.
      </div>
    </div>
  <section>
    <div>
      <h3>Donate</h3>
      <div class="one-col">
        <p>"Helping people by charity is the most human thing we can do"- Oprah Winfrey</p>
        <p>You need not have abundant surplus income to donate and remove inequality. All you need, is a sense of responsibility to donate whatever you can, to help bring significant and serious change.</p>
        <p>Your donation can change someone's life.</p>
        <!--<p>Upon making a donation, we will immediately send you a video message from our staff in the field so you can see the impact of your donation.</p>-->  
      </div>
      <div class="one-col">
        <button class="button" align="right" style="float: center;"><a href="donate.php
          "><span>Donate</span></a></button>
      </div>
    </div>
  </section>

    <div class="parallax4">
      <div class="heading-sm">
        Every Day We Bring Hopes To Millions Of <br><br> Children's  Hearts.
      </div>
    </div>

   
    <section class="dark">
      <h2>Events & Updates</h2>
      <p>
      </p>

      <p>Our Upcoming Event<br>
      Health Drive<br>
    10th October,2019</p>
    </section>

   <!-- <div class="parallax5">
    </div>-->

   <!-- <section>
      <div>
        <h3>Contact Us</h3>
        <div class="container">
          <form action="/action_page.php">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Your name..">

            <label for="email">Email</label>
            <input type="text" id="email" name="email" placeholder="Your Email..">

            <label for="phone">Phone</label>
            <input type="text" id="phone" name="phone" placeholder="Your phone number..">

            <label for="subject">Subject</label>
            <input type="text" id="subject" name="subject" placeholder="Subject..">

            <label for="message">Message</label>
            <textarea id="message" name="message" placeholder="Write something.." style="height:200px"></textarea>

            <input type="submit" value="Submit">
          </form>
        </div>
      </div>
    </section> -->

    <div class="parallax6">
      <div class="heading-sm">
        Starve Fear. Feed Hope.
      </div>
    </div>
    <footer class="footer">
  <div class="footer__addr">
    <h1 class="footer__logo">Goonj.</h1>
        
    <h2 align="left">Contact</h2>
    
    <address align="left">
      Borivali West, Mumbai<br>
          
      <a class="footer__btn" href="mailto:example@gmail.com">Email Us</a>
    </address>
  </div>
  
  <ul class="footer__nav">
    <li class="nav__item">
      <h2 class="nav__title"></h2>

      <ul class="nav__ul">
        <li>
          <a href="#">About Us</a>
        </li>
        <br>

        <li>
          <a href="#">Projects</a>
        </li>
            
        <!--<li>
          <a href="#">Alternative Ads</a>
        </li>-->
      </ul>
    </li>
    
    <li class="nav__item ">
      <h2 class="nav__title"></h2>
      
      <ul class="nav__ul">
        <li>
          <a href="#">Gallery</a>
        </li>
        
       <!-- <li>
          <a href="#">Software Design</a>
        </li>
        
        <li>
          <a href="#">Digital Signage</a>
        </li>
        
        <li>
          <a href="#">Automation</a>
        </li>
        
        <li>
          <a href="#">Artificial Intelligence</a>
        </li>
        
        <li>
          <a href="#">IoT</a>
        </li>-->
      </ul>
    </li>
    
    <li class="nav__item">
      <h2 class="nav__title"></h2>
      
      <ul class="nav__ul">
        <li>
          <a href="#">Sign In</a>
        </li>
        <br>
        
        <li>
          <a href="#">Contact Us</a>
        </li>
        
        <!--<li>
          <a href="#">Sitemap</a>
        </li>-->
      </ul>
    </li>
  </ul>
  
  <div class="legal">
    <p>&copy; 2019 Goonj. All rights reserved.</p>
    
    <div class="legal__links">
      <span>Made by Tulika Kotian, Yash Patwa, Nishi Shah</span>
    </div>
  </div>
</footer>
  </body>