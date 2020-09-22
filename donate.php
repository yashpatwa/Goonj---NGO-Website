<?php 


$host="localhost";
$user="root";
$password="";
$db="goonj";
$output="";
$conn = mysqli_connect($host,$user,$password,$db);
//mysqli_select_db($conn,$db);

if(isset($_POST['submit_button'])){
    
    $i_firstname=$_POST['donate_firstname'];
    $i_lastname=$_POST['donate_lastname'];
    $i_amount=$_POST['donate_amount'];
    $i_email=$_POST['donate_email'];


    $sql= "Insert INTO donate (firstname,lastname,amount,email) 
    VALUES ('".$i_firstname."','".$i_lastname."',".$i_amount.",'".$i_email."');";

    if (mysqli_query($conn,$sql)){
      echo '<script type="text/JavaScript">  
     alert("Donation Successful! Thank You"); 
     </script>';
      echo "<script>location.href='home.php'</script>";
     //header("Location:homee.html");

   exit();

      
    }
    else {
      echo '<script type="text/JavaScript">  
     alert("Error! Try again"); 
     </script>' ;
   exit();
    }


}

//collect donaters
if(isset($_POST['search'])){
	$searchq=$_POST['search'];
	$searchq=preg_replace("#[^0-9a-z]#i","",$searchq);
	$query=mysqli_query($conn,"SELECT * FROM donaters WHERE firstname LIKE'%$searchq%' OR lastname LIKE '%$searchq%'");
	$count=mysqli_num_rows($query);
	if($count==0){
		$output='There was no search results!';

	}
	else
	{
		while ($row=mysqli_fetch_array($query)) {
			# code...
			$fname=$row['firstname'];
			$lname=$row['lastname'];
			$addr=$row['Address'];

			$output='<div align=right>'.$fname.' '.$lname.','.$addr.'</div>';
		}
	}

}

?>

<html>
<head>
	<title>Donate</title>
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,700italic,400italic' rel='stylesheet' type='text/css'>

<link rel="stylesheet"
			type="text/css"
			href="donate.css"
		/>
<link rel="icon" href="logot.png" type="image/png">
</head>
<style>
	h2{
	font-weight: 500;
	font-size: 22px;
	font-family: 'Montserrat', sans-serif;
	color:white;
	text-transform: uppercase;
}
/*h3{
	font-weight: 500;
	font-size: 22px;
	font-family: 'Montserrat', sans-serif;
	color:white;
	text-transform: uppercase;
}*/
p{
	font-weight: 500;
	font-size: 15px;
	font-family: 'Montserrat', sans-serif;
	color:white;
	text-transform: uppercase;
}

@keyframes animateShadow {
  0% {
    text-shadow: 0px 0px #252526, -1px 1px #252526, -2px 2px #252526, -3px 3px #252526, -4px 4px #252526, -5px 5px #252526, -6px 6px #252526, -7px 7px #252526, -8px 8px #252526, -9px 9px #252526, -10px 10px #252526, -11px 11px #252526, -12px 12px #252526, -13px 13px #252526, -14px 14px #252526, -15px 15px #252526, -16px 16px #252526, -17px 17px #252526, -18px 18px #252526, -19px 19px #252526, -20px 20px #252526, -21px 21px #313134, -22px 22px #313134, -23px 23px #313134, -24px 24px #313134, -25px 25px #313134, -26px 26px #313134, -27px 27px #313134, -28px 28px #313134, -29px 29px #313134, -30px 30px #313134, -31px 31px #313134, -32px 32px #313134, -33px 33px #313134, -34px 34px #313134, -35px 35px #313134, -36px 36px #313134, -37px 37px #313134, -38px 38px #313134, -39px 39px #313134, -40px 40px #313134, -41px 41px #3e3e40, -42px 42px #3e3e40, -43px 43px #3e3e40, -44px 44px #3e3e40, -45px 45px #3e3e40, -46px 46px #3e3e40, -47px 47px #3e3e40, -48px 48px #3e3e40, -49px 49px #3e3e40, -50px 50px #3e3e40, -51px 51px #3e3e40, -52px 52px #3e3e40, -53px 53px #3e3e40, -54px 54px #3e3e40, -55px 55px #3e3e40, -56px 56px #3e3e40, -57px 57px #3e3e40, -58px 58px #3e3e40, -59px 59px #3e3e40, -60px 60px #3e3e40, -61px 61px #4a4a4d, -62px 62px #4a4a4d, -63px 63px #4a4a4d, -64px 64px #4a4a4d, -65px 65px #4a4a4d, -66px 66px #4a4a4d, -67px 67px #4a4a4d, -68px 68px #4a4a4d, -69px 69px #4a4a4d, -70px 70px #4a4a4d, -71px 71px #4a4a4d, -72px 72px #4a4a4d, -73px 73px #4a4a4d, -74px 74px #4a4a4d, -75px 75px #4a4a4d, -76px 76px #4a4a4d, -77px 77px #4a4a4d, -78px 78px #4a4a4d, -79px 79px #4a4a4d, -80px 80px #4a4a4d, -81px 81px #575759, -82px 82px #575759, -83px 83px #575759, -84px 84px #575759, -85px 85px #575759, -86px 86px #575759, -87px 87px #575759, -88px 88px #575759, -89px 89px #575759, -90px 90px #575759, -91px 91px #575759, -92px 92px #575759, -93px 93px #575759, -94px 94px #575759, -95px 95px #575759, -96px 96px #575759, -97px 97px #575759, -98px 98px #575759, -99px 99px #575759, -100px 100px #575759;
  }
  20% {
    text-shadow: 0px 0px #313134, -1px 1px #313134, -2px 2px #313134, -3px 3px #313134, -4px 4px #313134, -5px 5px #313134, -6px 6px #313134, -7px 7px #313134, -8px 8px #313134, -9px 9px #313134, -10px 10px #313134, -11px 11px #313134, -12px 12px #313134, -13px 13px #313134, -14px 14px #313134, -15px 15px #313134, -16px 16px #313134, -17px 17px #313134, -18px 18px #313134, -19px 19px #313134, -20px 20px #313134, -21px 21px #3e3e40, -22px 22px #3e3e40, -23px 23px #3e3e40, -24px 24px #3e3e40, -25px 25px #3e3e40, -26px 26px #3e3e40, -27px 27px #3e3e40, -28px 28px #3e3e40, -29px 29px #3e3e40, -30px 30px #3e3e40, -31px 31px #3e3e40, -32px 32px #3e3e40, -33px 33px #3e3e40, -34px 34px #3e3e40, -35px 35px #3e3e40, -36px 36px #3e3e40, -37px 37px #3e3e40, -38px 38px #3e3e40, -39px 39px #3e3e40, -40px 40px #3e3e40, -41px 41px #4a4a4d, -42px 42px #4a4a4d, -43px 43px #4a4a4d, -44px 44px #4a4a4d, -45px 45px #4a4a4d, -46px 46px #4a4a4d, -47px 47px #4a4a4d, -48px 48px #4a4a4d, -49px 49px #4a4a4d, -50px 50px #4a4a4d, -51px 51px #4a4a4d, -52px 52px #4a4a4d, -53px 53px #4a4a4d, -54px 54px #4a4a4d, -55px 55px #4a4a4d, -56px 56px #4a4a4d, -57px 57px #4a4a4d, -58px 58px #4a4a4d, -59px 59px #4a4a4d, -60px 60px #4a4a4d, -61px 61px #575759, -62px 62px #575759, -63px 63px #575759, -64px 64px #575759, -65px 65px #575759, -66px 66px #575759, -67px 67px #575759, -68px 68px #575759, -69px 69px #575759, -70px 70px #575759, -71px 71px #575759, -72px 72px #575759, -73px 73px #575759, -74px 74px #575759, -75px 75px #575759, -76px 76px #575759, -77px 77px #575759, -78px 78px #575759, -79px 79px #575759, -80px 80px #575759, -81px 81px #252526, -82px 82px #252526, -83px 83px #252526, -84px 84px #252526, -85px 85px #252526, -86px 86px #252526, -87px 87px #252526, -88px 88px #252526, -89px 89px #252526, -90px 90px #252526, -91px 91px #252526, -92px 92px #252526, -93px 93px #252526, -94px 94px #252526, -95px 95px #252526, -96px 96px #252526, -97px 97px #252526, -98px 98px #252526, -99px 99px #252526, -100px 100px #252526;
  }
  40% {
    text-shadow: 0px 0px #3e3e40, -1px 1px #3e3e40, -2px 2px #3e3e40, -3px 3px #3e3e40, -4px 4px #3e3e40, -5px 5px #3e3e40, -6px 6px #3e3e40, -7px 7px #3e3e40, -8px 8px #3e3e40, -9px 9px #3e3e40, -10px 10px #3e3e40, -11px 11px #3e3e40, -12px 12px #3e3e40, -13px 13px #3e3e40, -14px 14px #3e3e40, -15px 15px #3e3e40, -16px 16px #3e3e40, -17px 17px #3e3e40, -18px 18px #3e3e40, -19px 19px #3e3e40, -20px 20px #3e3e40, -21px 21px #4a4a4d, -22px 22px #4a4a4d, -23px 23px #4a4a4d, -24px 24px #4a4a4d, -25px 25px #4a4a4d, -26px 26px #4a4a4d, -27px 27px #4a4a4d, -28px 28px #4a4a4d, -29px 29px #4a4a4d, -30px 30px #4a4a4d, -31px 31px #4a4a4d, -32px 32px #4a4a4d, -33px 33px #4a4a4d, -34px 34px #4a4a4d, -35px 35px #4a4a4d, -36px 36px #4a4a4d, -37px 37px #4a4a4d, -38px 38px #4a4a4d, -39px 39px #4a4a4d, -40px 40px #4a4a4d, -41px 41px #575759, -42px 42px #575759, -43px 43px #575759, -44px 44px #575759, -45px 45px #575759, -46px 46px #575759, -47px 47px #575759, -48px 48px #575759, -49px 49px #575759, -50px 50px #575759, -51px 51px #575759, -52px 52px #575759, -53px 53px #575759, -54px 54px #575759, -55px 55px #575759, -56px 56px #575759, -57px 57px #575759, -58px 58px #575759, -59px 59px #575759, -60px 60px #575759, -61px 61px #252526, -62px 62px #252526, -63px 63px #252526, -64px 64px #252526, -65px 65px #252526, -66px 66px #252526, -67px 67px #252526, -68px 68px #252526, -69px 69px #252526, -70px 70px #252526, -71px 71px #252526, -72px 72px #252526, -73px 73px #252526, -74px 74px #252526, -75px 75px #252526, -76px 76px #252526, -77px 77px #252526, -78px 78px #252526, -79px 79px #252526, -80px 80px #252526, -81px 81px #313134, -82px 82px #313134, -83px 83px #313134, -84px 84px #313134, -85px 85px #313134, -86px 86px #313134, -87px 87px #313134, -88px 88px #313134, -89px 89px #313134, -90px 90px #313134, -91px 91px #313134, -92px 92px #313134, -93px 93px #313134, -94px 94px #313134, -95px 95px #313134, -96px 96px #313134, -97px 97px #313134, -98px 98px #313134, -99px 99px #313134, -100px 100px #313134;
  }
  60% {
    text-shadow: 0px 0px #4a4a4d, -1px 1px #4a4a4d, -2px 2px #4a4a4d, -3px 3px #4a4a4d, -4px 4px #4a4a4d, -5px 5px #4a4a4d, -6px 6px #4a4a4d, -7px 7px #4a4a4d, -8px 8px #4a4a4d, -9px 9px #4a4a4d, -10px 10px #4a4a4d, -11px 11px #4a4a4d, -12px 12px #4a4a4d, -13px 13px #4a4a4d, -14px 14px #4a4a4d, -15px 15px #4a4a4d, -16px 16px #4a4a4d, -17px 17px #4a4a4d, -18px 18px #4a4a4d, -19px 19px #4a4a4d, -20px 20px #4a4a4d, -21px 21px #575759, -22px 22px #575759, -23px 23px #575759, -24px 24px #575759, -25px 25px #575759, -26px 26px #575759, -27px 27px #575759, -28px 28px #575759, -29px 29px #575759, -30px 30px #575759, -31px 31px #575759, -32px 32px #575759, -33px 33px #575759, -34px 34px #575759, -35px 35px #575759, -36px 36px #575759, -37px 37px #575759, -38px 38px #575759, -39px 39px #575759, -40px 40px #575759, -41px 41px #252526, -42px 42px #252526, -43px 43px #252526, -44px 44px #252526, -45px 45px #252526, -46px 46px #252526, -47px 47px #252526, -48px 48px #252526, -49px 49px #252526, -50px 50px #252526, -51px 51px #252526, -52px 52px #252526, -53px 53px #252526, -54px 54px #252526, -55px 55px #252526, -56px 56px #252526, -57px 57px #252526, -58px 58px #252526, -59px 59px #252526, -60px 60px #252526, -61px 61px #313134, -62px 62px #313134, -63px 63px #313134, -64px 64px #313134, -65px 65px #313134, -66px 66px #313134, -67px 67px #313134, -68px 68px #313134, -69px 69px #313134, -70px 70px #313134, -71px 71px #313134, -72px 72px #313134, -73px 73px #313134, -74px 74px #313134, -75px 75px #313134, -76px 76px #313134, -77px 77px #313134, -78px 78px #313134, -79px 79px #313134, -80px 80px #313134, -81px 81px #3e3e40, -82px 82px #3e3e40, -83px 83px #3e3e40, -84px 84px #3e3e40, -85px 85px #3e3e40, -86px 86px #3e3e40, -87px 87px #3e3e40, -88px 88px #3e3e40, -89px 89px #3e3e40, -90px 90px #3e3e40, -91px 91px #3e3e40, -92px 92px #3e3e40, -93px 93px #3e3e40, -94px 94px #3e3e40, -95px 95px #3e3e40, -96px 96px #3e3e40, -97px 97px #3e3e40, -98px 98px #3e3e40, -99px 99px #3e3e40, -100px 100px #3e3e40;
  }
  80% {
    text-shadow: 0px 0px #575759, -1px 1px #575759, -2px 2px #575759, -3px 3px #575759, -4px 4px #575759, -5px 5px #575759, -6px 6px #575759, -7px 7px #575759, -8px 8px #575759, -9px 9px #575759, -10px 10px #575759, -11px 11px #575759, -12px 12px #575759, -13px 13px #575759, -14px 14px #575759, -15px 15px #575759, -16px 16px #575759, -17px 17px #575759, -18px 18px #575759, -19px 19px #575759, -20px 20px #575759, -21px 21px #252526, -22px 22px #252526, -23px 23px #252526, -24px 24px #252526, -25px 25px #252526, -26px 26px #252526, -27px 27px #252526, -28px 28px #252526, -29px 29px #252526, -30px 30px #252526, -31px 31px #252526, -32px 32px #252526, -33px 33px #252526, -34px 34px #252526, -35px 35px #252526, -36px 36px #252526, -37px 37px #252526, -38px 38px #252526, -39px 39px #252526, -40px 40px #252526, -41px 41px #313134, -42px 42px #313134, -43px 43px #313134, -44px 44px #313134, -45px 45px #313134, -46px 46px #313134, -47px 47px #313134, -48px 48px #313134, -49px 49px #313134, -50px 50px #313134, -51px 51px #313134, -52px 52px #313134, -53px 53px #313134, -54px 54px #313134, -55px 55px #313134, -56px 56px #313134, -57px 57px #313134, -58px 58px #313134, -59px 59px #313134, -60px 60px #313134, -61px 61px #3e3e40, -62px 62px #3e3e40, -63px 63px #3e3e40, -64px 64px #3e3e40, -65px 65px #3e3e40, -66px 66px #3e3e40, -67px 67px #3e3e40, -68px 68px #3e3e40, -69px 69px #3e3e40, -70px 70px #3e3e40, -71px 71px #3e3e40, -72px 72px #3e3e40, -73px 73px #3e3e40, -74px 74px #3e3e40, -75px 75px #3e3e40, -76px 76px #3e3e40, -77px 77px #3e3e40, -78px 78px #3e3e40, -79px 79px #3e3e40, -80px 80px #3e3e40, -81px 81px #4a4a4d, -82px 82px #4a4a4d, -83px 83px #4a4a4d, -84px 84px #4a4a4d, -85px 85px #4a4a4d, -86px 86px #4a4a4d, -87px 87px #4a4a4d, -88px 88px #4a4a4d, -89px 89px #4a4a4d, -90px 90px #4a4a4d, -91px 91px #4a4a4d, -92px 92px #4a4a4d, -93px 93px #4a4a4d, -94px 94px #4a4a4d, -95px 95px #4a4a4d, -96px 96px #4a4a4d, -97px 97px #4a4a4d, -98px 98px #4a4a4d, -99px 99px #4a4a4d, -100px 100px #4a4a4d;
  }
  100% {
    text-shadow: 0px 0px #252526, -1px 1px #252526, -2px 2px #252526, -3px 3px #252526, -4px 4px #252526, -5px 5px #252526, -6px 6px #252526, -7px 7px #252526, -8px 8px #252526, -9px 9px #252526, -10px 10px #252526, -11px 11px #252526, -12px 12px #252526, -13px 13px #252526, -14px 14px #252526, -15px 15px #252526, -16px 16px #252526, -17px 17px #252526, -18px 18px #252526, -19px 19px #252526, -20px 20px #252526, -21px 21px #313134, -22px 22px #313134, -23px 23px #313134, -24px 24px #313134, -25px 25px #313134, -26px 26px #313134, -27px 27px #313134, -28px 28px #313134, -29px 29px #313134, -30px 30px #313134, -31px 31px #313134, -32px 32px #313134, -33px 33px #313134, -34px 34px #313134, -35px 35px #313134, -36px 36px #313134, -37px 37px #313134, -38px 38px #313134, -39px 39px #313134, -40px 40px #313134, -41px 41px #3e3e40, -42px 42px #3e3e40, -43px 43px #3e3e40, -44px 44px #3e3e40, -45px 45px #3e3e40, -46px 46px #3e3e40, -47px 47px #3e3e40, -48px 48px #3e3e40, -49px 49px #3e3e40, -50px 50px #3e3e40, -51px 51px #3e3e40, -52px 52px #3e3e40, -53px 53px #3e3e40, -54px 54px #3e3e40, -55px 55px #3e3e40, -56px 56px #3e3e40, -57px 57px #3e3e40, -58px 58px #3e3e40, -59px 59px #3e3e40, -60px 60px #3e3e40, -61px 61px #4a4a4d, -62px 62px #4a4a4d, -63px 63px #4a4a4d, -64px 64px #4a4a4d, -65px 65px #4a4a4d, -66px 66px #4a4a4d, -67px 67px #4a4a4d, -68px 68px #4a4a4d, -69px 69px #4a4a4d, -70px 70px #4a4a4d, -71px 71px #4a4a4d, -72px 72px #4a4a4d, -73px 73px #4a4a4d, -74px 74px #4a4a4d, -75px 75px #4a4a4d, -76px 76px #4a4a4d, -77px 77px #4a4a4d, -78px 78px #4a4a4d, -79px 79px #4a4a4d, -80px 80px #4a4a4d, -81px 81px #575759, -82px 82px #575759, -83px 83px #575759, -84px 84px #575759, -85px 85px #575759, -86px 86px #575759, -87px 87px #575759, -88px 88px #575759, -89px 89px #575759, -90px 90px #575759, -91px 91px #575759, -92px 92px #575759, -93px 93px #575759, -94px 94px #575759, -95px 95px #575759, -96px 96px #575759, -97px 97px #575759, -98px 98px #575759, -99px 99px #575759, -100px 100px #575759;
  }
}
.quote {
  padding: 5px;
  overflow: hidden;
 	
  width: 50vw;
  font-weight: 400;
  line-height: 0.6;
  font-size: 30px;
  text-align: left;
  font-size: 3rem;
  color: #EDEEE9;
  font-family: 'Georgia';
  text-shadow: 0px 0px #252526, -1px 1px #252526, -2px 2px #252526, -3px 3px #252526, -4px 4px #252526, -5px 5px #252526, -6px 6px #252526, -7px 7px #252526, -8px 8px #252526, -9px 9px #252526, -10px 10px #252526, -11px 11px #252526, -12px 12px #252526, -13px 13px #252526, -14px 14px #252526, -15px 15px #252526, -16px 16px #252526, -17px 17px #252526, -18px 18px #252526, -19px 19px #252526, -20px 20px #252526, -21px 21px #313134, -22px 22px #313134, -23px 23px #313134, -24px 24px #313134, -25px 25px #313134, -26px 26px #313134, -27px 27px #313134, -28px 28px #313134, -29px 29px #313134, -30px 30px #313134, -31px 31px #313134, -32px 32px #313134, -33px 33px #313134, -34px 34px #313134, -35px 35px #313134, -36px 36px #313134, -37px 37px #313134, -38px 38px #313134, -39px 39px #313134, -40px 40px #313134, -41px 41px #3e3e40, -42px 42px #3e3e40, -43px 43px #3e3e40, -44px 44px #3e3e40, -45px 45px #3e3e40, -46px 46px #3e3e40, -47px 47px #3e3e40, -48px 48px #3e3e40, -49px 49px #3e3e40, -50px 50px #3e3e40, -51px 51px #3e3e40, -52px 52px #3e3e40, -53px 53px #3e3e40, -54px 54px #3e3e40, -55px 55px #3e3e40, -56px 56px #3e3e40, -57px 57px #3e3e40, -58px 58px #3e3e40, -59px 59px #3e3e40, -60px 60px #3e3e40, -61px 61px #4a4a4d, -62px 62px #4a4a4d, -63px 63px #4a4a4d, -64px 64px #4a4a4d, -65px 65px #4a4a4d, -66px 66px #4a4a4d, -67px 67px #4a4a4d, -68px 68px #4a4a4d, -69px 69px #4a4a4d, -70px 70px #4a4a4d, -71px 71px #4a4a4d, -72px 72px #4a4a4d, -73px 73px #4a4a4d, -74px 74px #4a4a4d, -75px 75px #4a4a4d, -76px 76px #4a4a4d, -77px 77px #4a4a4d, -78px 78px #4a4a4d, -79px 79px #4a4a4d, -80px 80px #4a4a4d, -81px 81px #575759, -82px 82px #575759, -83px 83px #575759, -84px 84px #575759, -85px 85px #575759, -86px 86px #575759, -87px 87px #575759, -88px 88px #575759, -89px 89px #575759, -90px 90px #575759, -91px 91px #575759, -92px 92px #575759, -93px 93px #575759, -94px 94px #575759, -95px 95px #575759, -96px 96px #575759, -97px 97px #575759, -98px 98px #575759, -99px 99px #575759, -100px 100px #575759;
  animation-name: animateShadow;
  animation-duration: 1s;
  animation-iteration-count: infinite;
}

</style>
<body>
	
	<div align="right">
	
	<h2>OUR DONATERS</h2>
	<form action="donate.php" method="post">
		<input type="text" name="search" placeholder="Search here..">
		<input type="submit" value=">>"/>

	</form>
</div>

	<?php 
	echo "<p align=right><font color=white style=Montserrat>$output</font></p>";
	?>

	<form method="post" action="donate.php">
<div class="donation-container">
            <div class="donation-box">
	            <div class="title">Donation Information</div>
	             

	            <div class="fields">
		            <input name ="donate_firstname" type="text" id="firstName" placeholder="First Name"> </input>
		            <input name="donate_lastname" type="text" id="lastName" placeholder="Last Name"> </input>
		            <input name="donate_email" type="text" id="email" placeholder="Email"> </input>
	            </div>
	            
	            <div class="amount">
		            <!-- <div class="button">Rs.2000</div>
		            <div class="button">Rs.10000</div>
		            <div class="button">Rs.20000</div> -->
		            <div class="button">Rs.<input name="donate_amount" type="text" class="set-amount" placeholder=""> </input></div>
	            </div>
	            
	            <div class="switch">
					<input type="radio" class="switch-input" name="view" value="One-Time" id="one-time" checked="">
					<label for="one-time" class="switch-label switch-label-off">One-Time</label>
					<input type="radio" class="switch-input" name="view" value="Monthly" id="monthly">
					<label for="monthly" class="switch-label switch-label-on">Monthly</label>
					<span class="switch-selection"></span>
			    </div>
			    
			    <div class="checkboxes">
					<input type="checkbox" id="receipt" class="checkbox"  />
					<label for="receipt">Email Me A Receipt</label>
					<br />
					<br>
					<input type="checkbox" id="anon" class="checkbox" />
					<label for="anon">Give Anonymously</label>
					<br />
					<!--<input type="checkbox" id="list" class="checkbox" />
					<label for="list">Add Me To Email List</label>-->
			    </div>
			    
			    <div class="confirm">
				    
			    </div>
	            
	            <div class="donate-button" name="submit_button" input type="submit"><i class="fa fa-credit-card"></i>
	            	<input type="submit" value="Donate Now" name="submit_button"></div>
	            <div class="back-button"><a href=""></a href= "home.php"><i class="fa fa-credit-card"></i> Back</a></div> 
            </div>
            
        </div>
</form>
			
		<!--<main class="site__main">
          <div class="quote" align="left">
            <h3>
              We make a living <br />
              by what we get <br />
              but we <br />
              make a life <br />
              by what we give <br />
            </h3>
          </div>
       </main>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://raw.githubusercontent.com/jerryluk/jquery.autogrow/master/jquery.autogrow-min.js"></script>

<script>
	var firstName = "";
		var lastName = "";
		var email = "";
		var dType = "";
		var receipt = "";
		var anon = "";
		var list = "";
		var amount = "";
		
		$('.set-amount').autoGrow(0);
		
		/*
			if(isiPad || jQuery.browser.mobile){
				$('#team').hide()
				$('.team-mobile').show();	
			}else{
				$('#team').show()
				$('.team-mobile').hide();
			}
		*/
		
		//Set & Highlight Donation Amount
		$(".button").click(function(){
			$(".button").removeClass("selected");
			$(this).addClass("selected");
			
			$(this).find("input").focus();
		});
		
		//Grow the donation box if they type more than 4 numbers
		$(".set-amount").keyup(function(){
			
			if (this.value != this.value.replace(/[^0-9\.]/g, '')) {
		       this.value = this.value.replace(/[^0-9\.]/g, '');
		    }

		});
		
		
		$("input").on("change", function(){
			// $(".donation-box").css("height", "500px");
			
			firstName = $("#firstName").val();
			lastName = $("#lastName").val();
			email = $("#email").val();
			
			if ( $("#one-time").prop( "checked" ) ){
				dType = "One-Time";
			}
			if ( $("#monthly").prop( "checked" ) ){
				dType = "Monthly";
			}

		});
</script>
</body>
</html>