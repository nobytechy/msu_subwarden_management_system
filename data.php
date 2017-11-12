<?php ob_start();?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<title>Sub-Warden Management System</title>

</head>
 <body>



<?php 
require_once'inc/info.php';
require_once'inc/db.php';
?>

<?php

echo'<div id="open" class="log">';
  echo'<div style="border-radius:0">';
    echo'<a href="#close" title="Close" class="close">X</a>';
    echo'<h3 style="color:#000">Notification Panel</h3>';
?>

<?php 
$num=0;
		$result = $pdo->prepare("SELECT * FROM notifications ORDER BY id DESC");
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
			$num++;
			if ($num==2){
			break;	
			}
	?>

<div class="alert alert-success" role="alert">

<p><span style="color:#f00"
 class="glyphicon glyphicon-time"></span> <?php echo date("F j,Y - g:i a",strtotime($row['time'])); ?></p>
<hr>
<p style="font-weight:bold;color:#06C"><u>New Message:</u> <?php echo strtolower($row['message']); ?> <span style="color:#000"
 class="glyphicon glyphicon-thumbs-up"></span></p> 
 <?php echo '<span class="text-center" style="color:#FFF;text-align:center"><strong>click the x symbol at the right top to close</strong></span>';
  echo'</div>';
echo'</div>';?>
 </div>
 <?php
		}
	?> 
</div>




 <?php





// 1 report to sub warden
$regnumberErr =$subjectErr= $messageErr = $response= "";

 $time=time();
 $current_date = date("F j,Y,g:i a",$time); 
   if(isset($_POST['report']))  
   {
  
    $regnumber= trim(filter_input(INPUT_POST,"regnumber",FILTER_SANITIZE_STRING));
    $subject = trim(filter_input(INPUT_POST,"subject",FILTER_SANITIZE_SPECIAL_CHARS));
    $message = trim(filter_input(INPUT_POST,"message",FILTER_SANITIZE_SPECIAL_CHARS));
  
  
 if (empty($regnumber)) {
   $regnumberErr="<strong>Sorry!!! </strong>"."you must enter your Reg Number";
 }
 else if (empty($subject)) {
    $subjectErr="<strong>Sorry!!! </strong>"."you must enter a subject to post";
 }
 else if (empty($message)) {
    $messageErr="<strong>Sorry!!! </strong>"."you must enter a message to the Sub Warden";
 }
else{
 $pdoQuery = "INSERT INTO `subwarden_reports`(`regnumber`,`subject`,`message`)
  VALUES (:regnumber,:subject,:message)"; 
  $pdoResult = $pdo->prepare($pdoQuery);
   $pdoExec = $pdoResult->execute
   (array
   (
    ":regnumber"=>$regnumber,
    ":subject"=>$subject,
    ":message"=>$message
 
  ))
   ;
    if ($pdoExec)
  { 
  $response='<p class="text-success text-center" style="text-align:center"><strong>Your report was successfully posted to the Sub Warden</strong></p>';  
} else
   { echo '<p>Sorry there is a technical error</p>'; 
   }
    
}
}
//1 code end here



echo'<div id="report" class="log">';
  echo'<div style="border-radius:0">';
    echo'<a href="#close" title="Close" class="close">X</a>';
    echo'<h3 style="color:#000">Send Message to Sub-Warden</h3>';
    echo"$response";
echo'<form class="form-horizontal" action="" method="post">';
?>
<div class="text-danger"> <?php echo "$regnumberErr";?></div>
<?php
echo'<label for="user"><p class="text-info">Reg_Number</p></label><br>';
echo'<input type="text" name="regnumber" id="user" class="form-control" pattern="[A-Za-z]{1}[0-9]{6}[A-Za-z]{1}" title="Please enter correct MSU regnumber">';
echo'<label for="subject"><p class="text-info">Message Subject</p></label><br>';
?>
<div class="text-danger"> <?php echo "$subjectErr";?></div>
<?php
echo'<input type="text" name="subject" id="subject" class="form-control">';	
echo'<label for="reply"><p class="text-info">Enter Your Message Below</p></label><br>';
?>
<div class="text-danger"> <?php echo "$messageErr";?></div>
<?php
echo'<textarea name="message" id="reply" class="form-control"  rows="10" >';
echo'</textarea>';
echo'<button type="submit" name="report"  style="margin-top:3px;margin-bottom:3px" class="btn btn-success">Post Now</button>';
	echo'</form>';
echo '<span class="info"><strong>click the x symbol at the right top to close</strong></span>';
  echo'</div>';
echo'</div>';

// send notifications to students
$regnumberErr =$subjectErr= $messageErr = $response= "";

 $time=time();
 $current_date = date("F j,Y,g:i a",$time); 
   if(isset($_POST['notify']))  
   {
  
    $subject = trim(filter_input(INPUT_POST,"subject",FILTER_SANITIZE_SPECIAL_CHARS));
    $message = trim(filter_input(INPUT_POST,"message",FILTER_SANITIZE_SPECIAL_CHARS));
  
  
 if (empty($subject)) {
    $subjectErr="<strong>Sorry!!! </strong>"."you must enter a subject to post";
 }
 else if (empty($message)) {
    $messageErr="<strong>Sorry!!! </strong>"."you must enter a message to the Sub Warden";
 }
else{
 $pdoQuery = "INSERT INTO `notifications`(`subject`,`message`)
  VALUES (:subject,:message)"; 
  $pdoResult = $pdo->prepare($pdoQuery);
   $pdoExec = $pdoResult->execute
   (array
   (

    ":subject"=>$subject,
    ":message"=>$message
 
  ))
   ;
    if ($pdoExec)
  { 
  $response='<p class="text-success text-center" style="text-align:center"><strong>Notification Posted successfully</strong></p>';  
} else
   { echo '<p>Sorry there is a technical error</p>'; 
   }
    
}
}
//code end here


echo'<div id="student" class="log">';
  echo'<div style="border-radius:0">';
    echo'<a href="#close" title="Close" class="close">X</a>';
    echo'<h3 style="color:#000">Send Notifications To Student</h3>';
    echo"$response";
echo'<form class="form-horizontal" action="" method="post">';
echo'<label for="user"><p class="text-info"></p></label><br>';
echo'<label for="subject"><p class="text-info">Message Subject</p></label><br>';
echo'<input type="text" name="subject" id="subject" class="form-control">';

	
echo'<label for="reply"><p class="text-info">Enter Your Message Below</p></label><br>';
echo'<textarea name="message" id="reply" class="form-control"  rows="10" >';
echo'</textarea>';
echo'<button type="submit" name="notify"  style="margin-top:3px;margin-bottom:3px" class="btn btn-success">Post Now</button>';
	echo'</form>';
echo '<span class="info"><strong>click the x symbol at the right top to close</strong></span>';
  echo'</div>';
echo'</div>';




// 1 report to warden
$regnumberErr =$subjectErr= $messageErr = $response= "";

 $time=time();
 $current_date = date("F j,Y,g:i a",$time); 
   if(isset($_POST['report2']))  
   {
  
    $regnumber= trim(filter_input(INPUT_POST,"regnumber",FILTER_SANITIZE_SPECIAL_CHARS));
    $subject = trim(filter_input(INPUT_POST,"subject",FILTER_SANITIZE_SPECIAL_CHARS));
    $message = trim(filter_input(INPUT_POST,"message",FILTER_SANITIZE_SPECIAL_CHARS));
  
  
 if (empty($regnumber)) {
   $regnumberErr='<script>alert ("Please enter your regnumber");</script>';
 }
 else if (empty($subject)) {
    $subjectErr='<script>alert ("Please enter message subject");</script>';
 }
 else if (empty($message)) {
    $messageErr='<script>alert ("Please enter your message");</script>';
 }
else{
 $pdoQuery = "INSERT INTO `warden_reports`(`regnumber`,`subject`,`message`)
  VALUES (:regnumber,:subject,:message)"; 
  $pdoResult = $pdo->prepare($pdoQuery);
   $pdoExec = $pdoResult->execute
   (array
   (
    ":regnumber"=>$regnumber,
    ":subject"=>$subject,
    ":message"=>$message
 
  ))
   ;
    if ($pdoExec)
  { 
  $response='<script>alert ("Reported successfully to the Warden");</script>';  
} else
   { echo '<p>Sorry there is a technical error</p>'; 
   }
    
}
}
//1 code end here


echo'<div id="warden" class="log">';
  echo'<div style="border-radius:0">';
    echo'<a href="#close" title="Close" class="close">X</a>';
    echo'<h3 style="color:#000">Report to Warden</h3>';
    echo "$response";
echo'<form class="form-horizontal" action="" method="post">';
echo "$regnumberErr";
echo'<label for="user"><p class="text-info">Reg_Number</p></label><br>';
echo'<input type="text" name="regnumber" id="user" class="form-control" pattern="[A-Za-z]{1}[0-9]{6}[A-Za-z]{1}" title="Please enter correct MSU regnumber">';
echo "$subjectErr";
echo'<label for="subject"><p class="text-info">Message Subject</p></label><br>';
echo'<input type="text" name="subject" id="subject" class="form-control">';
echo "$messageErr";
echo'<label for="reply"><p class="text-info">Enter Your Message Below</p></label><br>';
echo'<textarea name="message" id="reply" class="form-control"  rows="10" >';
echo'</textarea>';
echo'<button type="submit" name="report2"  style="margin-top:3px;margin-bottom:3px" class="btn btn-success">Post Now</button>';
	echo'</form>';
echo '<span class="info"><strong>click the x symbol at the right top to close</strong></span>';
  echo'</div>';
echo'</div>';

?>
</body>
</html>
<?php ob_end_flush();?>