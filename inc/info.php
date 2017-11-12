<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body class="bg-info">


<?php
require_once"db.php";
//2 student login code
$regnumber=$password="";
if(isset($_POST['login2']))
{
  $regnumber=($_POST['regnumber']);
  $password=($_POST['password']);
{
 $select = $pdo->prepare("SELECT * FROM students WHERE regnumber='$regnumber' and password='$password'");
 $select->setFetchMode(PDO::FETCH_ASSOC);
 $select->execute();
 $data=$select->fetch();
 
 if($data['regnumber']!=$regnumber and $data['password']!=$password)
 {
 $_SESSION['regnumber']=$data['regnumber'];
 $_SESSION['password']=$data['password'];
 	echo "<script> alert ('Incorrect Regnumber or Password'); window.location=('index.php')</script>";
	
 }
 elseif($data['regnumber']==$regnumber and $data['password']==$password)
 {
 $_SESSION['regnumber']=$data['regnumber'];
 $_SESSION['password']=$data['password'];
 
 }
 }
}
//end of code 2

// 3 subwardens registration code
$nameErr1=$surnameErr1=$regErr1= $pass1Err1= $passErr1=$locationErr1=$phoneErr1=$match1=$success1= $regnumber1=$emailErr1="";
if(isset($_POST['sub']))  
   {
    $name= trim(filter_input(INPUT_POST,"name",FILTER_SANITIZE_STRING));
    $surname= trim(filter_input(INPUT_POST,"surname",FILTER_SANITIZE_STRING));
    $regnumber= trim(filter_input(INPUT_POST,"regnumber",FILTER_SANITIZE_STRING));
    $password1= trim(filter_input(INPUT_POST,"password1",FILTER_SANITIZE_STRING));
    $password= trim(filter_input(INPUT_POST,"password",FILTER_SANITIZE_STRING));
    $location= trim(filter_input(INPUT_POST,"location",FILTER_SANITIZE_STRING));
    $phone= trim(filter_input(INPUT_POST,"phone",FILTER_SANITIZE_STRING));
    $email= trim(filter_input(INPUT_POST,"email",FILTER_SANITIZE_STRING));
 
 if (empty($name)) {
   $nameErr1="<strong>SORRY </strong>"."you must enter a name";
 } 
else if (empty($surname)) {
   $surnameErr1="<strong>SORRY </strong>"."you must enter a surname";
 } 
else if (empty($regnumber)) {
   $regErr1="<strong>SORRY </strong>"."you must enter a regnumber";
 }
 else if (empty($password1)) {
    $pass1Err1="<strong>SORRY </strong>"."you must enter a password";
 }
 else if (empty($password)) {
   $passErr1="<strong>SORRY </strong>"."you must enter a password";
 }
 else if (empty($location)) {
    $locationErr1="<strong>SORRY </strong>"."you must select a location";
 }
 else if (empty($phone)) {
    $phoneErr1="<strong>SORRY </strong>"."you must enter a phone number";
 }
 else if (empty($email)) {
   $emailErr1="<strong>SORRY </strong>"."you must enter an email";
 }
 else if ($password1!==$password) {
    $match="<strong>SORRY </strong>"."passwords do not match";
 }
 
else{
 $pdoQuery = "INSERT INTO `subwarden`(`name`,`surname`,`regnumber`,`password`,`location`,`phone`,`email`)
  VALUES (:name,:surname,:regnumber,:password,:location,:phone,:email)"; 
  $pdoResult = $pdo->prepare($pdoQuery);
   $pdoExec = $pdoResult->execute
   (array
   (
   	":name"=>$name,
   	":surname"=>$surname,
   ":regnumber"=>$regnumber,
   ":password"=>$password,
   ":location"=>$location,
    ":phone"=>$phone,
    ":email"=>$email
  ))
   ;
    if ($pdoExec)
  { 
  $success1='<p class="text-success" style="text-align:center"><strong>Sub Warden registered Successfully</strong></p>';  
} else
   { echo '<p>Sorry our network is down</p>'; 
   }
    
}
}
//3 code end here

//4 student login code
$regnumber=$password="";
if(isset($_POST['login']))
{
  $regnumber=($_POST['regnumber']);
  $password=($_POST['password']);
{
 $select = $pdo->prepare("SELECT * FROM subwarden WHERE regnumber='$regnumber' and password='$password'");
 $select->setFetchMode(PDO::FETCH_ASSOC);
 $select->execute();
 $data=$select->fetch();
 
 if($data['regnumber']!=$regnumber and $data['password']!=$password)
 {
 $_SESSION['regnumber']=$data['regnumber'];
 $_SESSION['password']=$data['password'];
 	echo "<script> alert ('Incorrect Regnumber or Password'); window.location=('index.php')</script>";
	
 }
 elseif($data['regnumber']==$regnumber and $data['password']==$password)
 {
 $_SESSION['regnumber']=$data['regnumber'];
 $_SESSION['password']=$data['password'];
 
 
 }
 }
}
//end of code 4

//5 warden/admin login code
$username=$password=$usernameErr=$passwordErr="";
if(isset($_POST['admin']))
{
  $username=($_POST['username']);
  $password=($_POST['password']);
  if (empty($username)) {
   $usernameErr="<script> alert ('Please enter your Username');</script>";
 } 
  else if (empty($password)) {
   $passwordErr="<script> alert ('Please enter your Password');</script>";
 }
 else 
{
 $select = $pdo->prepare("SELECT * FROM admin WHERE username='$username' and password='$password'");
 $select->setFetchMode(PDO::FETCH_ASSOC);
 $select->execute();
 $data=$select->fetch();
 
 if($data['username']!=$username and $data['password']!=$password)
 {
 	echo "<script> alert ('Incorrect Username or Password'); window.location=('index.php')</script>";
	
 }
 elseif($data['username']==$username and $data['password']==$password)
 {
 $_SESSION['username']=$data['username'];
 echo "<script> alert ('Admin Welcome'); window.location=('admin.php')</script>";
 
 }
 }
}
//end of code 5

// 6 student application subwarden  code
$nameErr2=$surnameErr2=$genderErr2= $progErr2= $levelErr2=$locationErr2=$phoneErr2
=$match2=$success2= $noteErr2=$emailErr2="";
if(isset($_POST['apply']))  
   {
    $name= trim(filter_input(INPUT_POST,"name",FILTER_SANITIZE_STRING));
    $surname= trim(filter_input(INPUT_POST,"surname",FILTER_SANITIZE_STRING));
    $gender= trim(filter_input(INPUT_POST,"gender",FILTER_SANITIZE_STRING));
    $program= trim(filter_input(INPUT_POST,"program",FILTER_SANITIZE_STRING));
    $level= trim(filter_input(INPUT_POST,"level",FILTER_SANITIZE_STRING));
    $location= trim(filter_input(INPUT_POST,"location",FILTER_SANITIZE_STRING));
    $phone= trim(filter_input(INPUT_POST,"phone",FILTER_SANITIZE_STRING));
    $email= trim(filter_input(INPUT_POST,"email",FILTER_SANITIZE_STRING));
    $note= trim(filter_input(INPUT_POST,"note",FILTER_SANITIZE_STRING));
 
 if (empty($name)) {
   $nameErr2="<strong>SORRY </strong>"."you must enter your name";
 } 
else if (empty($surname)) {
   $surnameErr2="<strong>SORRY </strong>"."you must enter your surname";
 } 
else if (empty($gender)) {
   $genderErr2="<strong>SORRY </strong>"."you must select your gender";
 }
 else if (empty($program)) {
    $progErr2="<strong>SORRY </strong>"."you must enter your program";
 }
 else if (empty($level)) {
   $levelErr2="<strong>SORRY </strong>"."you must enter your level";
 }
 else if (empty($location)) {
    $locationErr2="<strong>SORRY </strong>"."you must select a location";
 }
 else if (empty($phone)) {
    $phoneErr2="<strong>SORRY </strong>"."you must enter your phone number";
 }
 else if (empty($email)) {
   $emailErr2="<strong>SORRY </strong>"."you must enter an email";
 }
 else if (empty($note)) {
   $noteErr2="<strong>SORRY </strong>"."you must enter your reasons";
 }
 
else{
 $pdoQuery = "INSERT INTO `applications`(`name`,`surname`,`gender`,`program`,`level`,`location`,`phone`,`email`,`note`)
  VALUES (:name,:surname,:gender,:program,:level,:location,:phone,:email,:note)"; 
  $pdoResult = $pdo->prepare($pdoQuery);
   $pdoExec = $pdoResult->execute
   (array
   (
   	":name"=>$name,
   	":surname"=>$surname,
   ":gender"=>$gender,
   ":program"=>$program,
   ":level"=>$level,
   ":location"=>$location,
    ":phone"=>$phone,
    ":email"=>$email,
    ":note"=>$note
  ))
   ;
    if ($pdoExec)
  { 
  $success2='<p class="text-success" style="text-align:center"><strong>Your Registration Was Successfull</strong></p>';  
} else
   { echo '<p>Sorry our network is down</p>'; 
   }
    
}
}
//6 code end here


//this inserts chats to common room
$name=$message=$nameErr = $message = "";



 $time=time();
 $current_date = date("F j,Y,g:i a",$time); 
   if(isset($_POST['room']))  
   {
  
    $name= trim(filter_input(INPUT_POST,"name",FILTER_SANITIZE_STRING));
    $mess= trim(filter_input(INPUT_POST,"mess",FILTER_SANITIZE_SPECIAL_CHARS));

  
 if (empty($name)) {
   $nameErr='<script>alert ("Please make sure you enter your name");</script>';
 }
 else if (empty($mess)) {
    $messageErr='<script>alert ("Please enter your message to post here");</script>';
 }
else{
 $pdoQuery = "INSERT INTO `common`(`name`,`message`)
  VALUES (:name,:mess)"; 
  $pdoResult = $pdo->prepare($pdoQuery);
   $pdoExec = $pdoResult->execute
   (array
   (
    ":name"=>$name,
   ":mess"=>$mess
 
  ))
   ;
    if ($pdoExec)
  { 
  echo'<script>alert ("posted successfully");</script>'; 
} else
   { echo'<script>alert ("sorry poor network");</script>';  
   }
    
}
}
// code end here




    $dbHost = 'localhost';  //database host name
    $dbUser = 'root';       //database username
    $dbPass = '';           //database password
    $dbName = 'msu'; //database name
    $conn = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);
    if(!$conn){
        die("Database connection failed: " . mysqli_connect_error());
    }
if(isset($_POST['bulk_delete_submit'])){
        $idArr = $_POST['checked_id'];
        if ($idArr==null) {
          echo "<script>alert('please select Sub warden to remove');window.location=('../reports.php')</script>";
        } else{
        foreach($idArr as $id){
            mysqli_query($conn,"DELETE FROM subwarden WHERE id=".$id);
        }
        echo'<script>alert ("Sub warden removed successfully");</script>';
         header("Location:../reports.php");
      }
    }
?>
</body>
</html>

