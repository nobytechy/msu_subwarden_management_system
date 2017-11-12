<?php 
ob_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<title>Sub-Warden Management System</title>

</head>
<body>

<div class="container">
<div id="upp" class="row">
<div class="col-sm-12" style="background-color: #06C">
<center><img src="images/logo.jpg" style="border-bottom:2px solid #FFF" class="img-responsive"></center>
<h3 class="text-center" id="name" style="color: #FF0">Welcome To Our Sub-Warden Management System</h3>
</div>
</div>
</div>

<?php
require_once"inc/db.php";
// 1 student registration code
$nameErr = $regErr = $pass1Err = $passErr=$locationErr=$phoneErr=$match=$success= $regnumber1=$pass1Err1=$pass1Err2="";
if(isset($_POST['registration']))  
   {
    $name= trim(filter_input(INPUT_POST,"name",FILTER_SANITIZE_STRING));
    $regnumber= trim(filter_input(INPUT_POST,"regnumber",FILTER_SANITIZE_STRING));
    $password1= trim(filter_input(INPUT_POST,"password1",FILTER_SANITIZE_STRING));
    $password= trim(filter_input(INPUT_POST,"password",FILTER_SANITIZE_STRING));
    $location= trim(filter_input(INPUT_POST,"location",FILTER_SANITIZE_STRING));
    $phone= trim(filter_input(INPUT_POST,"phone",FILTER_SANITIZE_STRING));
if (empty($name)) {
   $nameErr="<strong>SORRY </strong>"."you must enter your first name ";
 }  
 if (empty($regnumber)) {
   $regErr="<strong>SORRY </strong>"."you must enter a Regnumber";
 }
 else if (empty($password1)) {
    $pass1Err="<strong>SORRY </strong>"."you must enter a password";
 }
 else if ($password1<8) {
   $pass1Err1="<strong>SORRY password must be 8 characters and above"."</strong>";
 }
 else if (empty($password)) {
   $passErr="<strong>SORRY </strong>"."you must enter a password";
 }
  else if ($password<8) {
   $pass1Err2="<strong>SORRY password must be 8 characters and above"."</strong>";
 }
 else if (empty($location)) {
    $locationErr="<strong>SORRY </strong>"."you must select a location";
 }
 else if (empty($phone)) {
    $phoneErr="<strong>SORRY </strong>"."you must enter a phone number";
 }
 else if ($password1!==$password) {
    $match="<strong>SORRY </strong>"."passwords do not match";
 }
   
else{
 $pdoQuery = "INSERT INTO `students`(`name`,`regnumber`,`password`,`location`,`phone`)VALUES (?,?,?,?,?)"; 
$pdoResult = $pdo->prepare($pdoQuery);
$array=array($name,$regnumber,$password,$location,$phone);
$pdoExec = $pdoResult->execute($array);
  if ($pdoExec)
  { 
  $success='<p class="text-success" style="text-align:center"><strong>CONGRATS..You are now a registered user</strong></p>'; 
} else
   { echo '<p>Sorry our network is down</p>'; 
   }
    
}
}
//1 code end here

?>
<style type="text/css">
@keyframes vww{
15% {color:#060;}
25% {color:#06C;}
35% {color:#060;}
50% {color:#06C;} 
65% {color:#060;}
80% {color:#06C;}
95% {color:#060;}
}
#vww{
  animation-name:vww;
    animation-duration: 5s;
   animation-iteration-count: infinite;
}
#vw{
	text-decoration: underline;
	}
#vw:hover{
	text-decoration: none;
	}
	@keyframes name{
15% {color:#FF0;}
40% {color:#FFF;}
65% {color:#FF0;}
80% {color:#FFF;}  
}
#name{
  animation-name:name;
    animation-duration: 10s;
   animation-iteration-count: infinite;
}
@keyframes top{
55% {background-image: url("images/slide4.jpg");
    width: 100%;
     background-size: cover;
     }
 }

#top{
	animation-name:top;
    animation-duration:15s;
    animation-iteration-count: infinite;
    background-image:url(images/slide1.jpg);
    background-size:cover;
  width: 100%;
    opacity:5;
}
#tops{
    background-image:url(images/slide2.png);
    background-size:cover;
    width: 100%;
    opacity:5;
}
#ward{
    background-image:url(images/slide3.jpg);
    background-size:cover;
    width: 100%;
    opacity:5;
}
.log {
   position: fixed;
  font-family: Arial, Helvetica, sans-serif;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background-image: url(images/slide1.jpg);
  background-size: cover;
  z-index: 99999;
  opacity:0;
  -webkit-transition: opacity 400ms ease-in;
  -moz-transition: opacity 400ms ease-in;
  transition: opacity 400ms ease-in;
  pointer-events: none;
}



.log:target {
  opacity:1;
  pointer-events: auto;
}

.log > div {
  width: 70%;
  position: relative;
  margin: 25px auto;
  padding: 5px 20px 13px 20px;
  border-radius: 10px;
  background: #fff;
  background: -moz-linear-gradient(#fff, #999);
  background: -webkit-linear-gradient(#fff, #999);
  background: -o-linear-gradient(#fff, #999);
}



.close {
  background: red;
  color: #FFFFFF;
  line-height: 25px;
  position: absolute;
  border: 2px solid red;
  right: -12px;
  text-align: center;
  top: -10px;
  width: 24px;
  text-decoration: none;
  font-weight: bold;
  -webkit-border-radius: 12px;
  -moz-border-radius: 12px;
  border-radius: 12px;
  -moz-box-shadow: 1px 1px 3px #f00;
  -webkit-box-shadow: 1px 1px 3px #f00;
  box-shadow: 1px 1px 3px #f00;
}

.close:hover { background: #00d9ff; }


.Dialog {
   position: fixed;
  font-family: Arial, Helvetica, sans-serif;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background:#39F;
  z-index: 99999;
  opacity:0;
  -webkit-transition: opacity 400ms ease-in;
  -moz-transition: opacity 400ms ease-in;
  transition: opacity 400ms ease-in;
  pointer-events: none;
}



.Dialog:target {
  opacity:1;
  pointer-events: auto;
}

.Dialog > div {
  width: 70%;
  position: relative;
  margin: 10% auto;
  padding: 5px 20px 13px 20px;
  border-radius: 10px;
  background: #fff;
  background: -moz-linear-gradient(#fff, #999);
  background: -webkit-linear-gradient(#fff, #999);
  background: -o-linear-gradient(#fff, #999);
}

.views {
   position: fixed;
  font-family: Arial, Helvetica, sans-serif;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background:#333;
  z-index: 99999;
  opacity:0;
  -webkit-transition: opacity 400ms ease-in;
  -moz-transition: opacity 400ms ease-in;
  transition: opacity 400ms ease-in;
  pointer-events: none;
}



.views:target {
  opacity:1;
  pointer-events: auto;
}

.views > div {
  width: 90%;
  position: relative;
  margin: 5% auto;
  padding: 5px 20px 13px 20px;
  border-radius: 10px;
  background: #fff;
  background: -moz-linear-gradient(#fff, #999);
  background: -webkit-linear-gradient(#fff, #999);
  background: -o-linear-gradient(#fff, #999);
}
.animate-reveal {
text-align:center;
  font: bold 1.5em sans-serif;
  text-transform: uppercase;
  letter-spacing: 2px;
  opacity: 0;
  -webkit-animation: reveal 1s cubic-bezier(0, 1, 0.5, 1) 1 normal forwards;
     -moz-animation: reveal 1s ease-in 1 normal forwards;
       -o-animation: reveal 1s cubic-bezier(0, 1, 0.5, 1) 1 normal forwards;
          animation: reveal 1s cubic-bezier(0, 1, 0.5, 1) 1 normal forwards;
}

.animate-second {
float:left;
padding-left:3px;
padding-bottom:10px;
  -webkit-animation-delay: 2s;
     -moz-animation-delay: 1.5s;
       -o-animation-delay: 2s;
          animation-delay: 1s;
}

@-webkit-keyframes reveal {
  0% {
    opacity: 0;
    -webkit-transform: translateY(100%);
       -moz-transform: translateY(100%);
         -o-transform: translateY(100%);
            transform: translateY(100%);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
       -moz-transform: translateY(0);
         -o-transform: translateY(0);
            transform: translateY(0);
  }
}

@-moz-keyframes reveal {
  0% {
    opacity: 0;
    -webkit-transform: translateY(100%);
       -moz-transform: translateY(100%);
         -o-transform: translateY(100%);
            transform: translateY(100%);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
       -moz-transform: translateY(0);
         -o-transform: translateY(0);
            transform: translateY(0);
  }
}

</style>
<link rel="shortcut icon" href="images/logo.png" type="image/x-icon"/>
<link href="css/bootstrap.css" type="text/css"rel="stylesheet" />
<link href="css/bootstrap.min.css" type="text/css"rel="stylesheet" />
 <link href="css/bootstrap-theme.css" type="text/css"rel="stylesheet" />
 <link href="css/bootstrap-theme.min.css" type="text/css"rel="stylesheet" />
 <script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</html>
<?php ob_end_flush();?>