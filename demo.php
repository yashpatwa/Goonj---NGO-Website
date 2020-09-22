<?php 
session_start();
//edited by hetal
$host="localhost";
$user="root";
$password="";
$db="goonj";

$conn = mysqli_connect($host,$user,$password);
mysqli_select_db($conn,$db);

if(isset($_POST['login_btn'])){
    $login_email=mysqli_real_escape_string($conn,$_POST['login_name']);
    $login_pass=mysqli_real_escape_string($conn,$_POST['login_pass']);
    
    
  $sql="select * from logininfo where name='".$login_email."' AND password='".$login_pass."'";
  $result = mysqli_query($conn,$sql);
    $rows = mysqli_num_rows($result);
  
  
    if($rows==1){   
        echo '<script type="text/JavaScript">  
     alert("Logged in successfully"); 
     </script>' ;
   
   header("Location:main.php");
   
        exit();
    }
    else{
        echo '<script type="text/JavaScript">  
     alert("No account found"); 
     </script>' ;
        exit();
    }
}      

 ?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

  <form action="main.php" method="post">
  <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="login_name" required><br>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="login_pass" required><br>
    <button type="submit" name="login_btn">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

</body>
</html>
